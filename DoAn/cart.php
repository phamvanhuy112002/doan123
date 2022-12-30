<?php
session_start();
require 'connect.php';
include 'lib.php';
if (!isset($_SESSION['cart'])) {
	$_SESSION['cart']=[];	
}
if (isset($_GET['delcart']) && $_GET['delcart']==1) {
	unset($_SESSION['cart']);
}
if (isset($_GET['muatiep']) && $_GET['muatiep']==1) {
	header('Location: index.php');
}
if (isset($_GET['delid']) && $_GET['delid']>=0) {
	array_splice($_SESSION['cart'], $_GET['delid'],1);
}
if (isset($_POST['addcart']) && ($_POST['addcart'])) {
	$id=$_POST['id'];
	$sl=$_POST['sl'];
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     

    $stmt = $conn->prepare("SELECT ten, loaisp, img, gia FROM sp WHERE id='$id' "); 
     
   
    $stmt->execute();
 
  
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     

    $result = $stmt->fetchAll();

    foreach ($result as $item){}
    $ten=$item['ten'];
    $loai=$item['loaisp'];
    $img=$item['img'];
    $gia=$item['gia'];
    $fl=0;
    for ($i=0; $i <sizeof($_SESSION['cart']) ; $i++) { 
    	if ($_SESSION['cart'][$i][1]==$ten) {
    		$fl=1;
    		$slnew=$_SESSION['cart'][$i][3]+$sl;
    		$_SESSION['cart'][$i][3]=$slnew;
    		break;
    	}
    }
     if($fl==0){  
    $sp=[$img,$ten,$loai,$sl,$gia];
    $_SESSION['cart'][]=$sp;
   
 }
}


?>
<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="utf-8">
	<title>Giỏ Hàng</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
	<!-- bootstrap -->
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"> -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
	<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
	<link href="themes/css/bootstrappage.css" rel="stylesheet"/>

	<!-- global styles -->
	<link href="themes/css/flexslider.css" rel="stylesheet"/>
	<link href="themes/css/main.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="themes/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="themes/css/font-awesome.min2.css"> -->
	<link rel="stylesheet" type="text/css" href="themes/css/font-awesome.min3.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<!-- scripts -->
	<script src="themes/js/jquery-1.7.2.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>				
	<script src="themes/js/superfish.js"></script>	
	<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="themes/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body >		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="GET" class="search_form" action="products2.php">
						<div class="input-group">
							<input type="text" name="tukhoa" class="search-query form-control input-group" Placeholder="My Linhkien.">
							<span class="input-group-btn">
								<input span type="submit" name="btn-search" id="btn-search" class="btn btn-primary rounded-circle btnpro" value="Search" >
								
								
								</span></span>
							</span>
							
						</div>
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
						<?php
							if (strcmp($_SESSION['name'], 'User')) {

								echo '<li ><a style="color: #FE2E64"  href="customer.php">
								'.$_SESSION['name'].' </a></li>';
							}else{
                           echo '<li ><a style="color: #FE2E64"  href="customer.php">
								'.$_SESSION['name'].' </a></li>';
							}


							 ?>
							<li><a href="cart.php"> Giỏ hàng </a></li>
							<li><a href="checkout.php"> Thanh toán </a></li>					
							<li><a href="register.php"> Đăng nhập </a></li>			
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.php" class="logo pull-left"><h4 class="title">PVH Store</h4> </a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./products.php">Danh Sách Linh Kiện</a>	
										
								
							</li>
																							
						
						</ul>
					</nav>
				</div>
			</section>		

			<section class="header_text sub">
				<img class="pageBanner" src="themes/images/carousel/anh1.png"alt="New products" >
				<br/>
				<h4><span>Shopping Cart</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Giỏ Hàng</strong> Của Bạn </span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Thứ tự</th>
									<th>Ảnh</th>
									<th> Tên Sản Phẩm </th>
									<th> Loại </th>
									<th> Giá </th>
									<th> Số Lượng </th>
									<th> Đơn giá </th>
									<th> Xóa </th>
								</tr>
							</thead>
								  
							<?php echo showcart(); ?>
						</table>
				
						<hr/>
						<p class="buttons center">				
							<a href="cart.php?muatiep=1"><button class="btn" type="button"> Mua tiếp </button></a>
							<a href="cart.php?delcart=1"><button class="btn" type="button"> Xóa giỏ hàng </button></a>
							
							<a href="checkout.php"><button class="btn btn-inverse" type="submit" id="checkout">Thanh toán</button></a>
						</p>					
					</div>
					<div class="span3 col">
						<div class="block">	
							
							<br/>
							<ul class="nav nav-list below">
								<li class="nav-header">Loại sản phẩm</li>
								<li><a href="products2.php?checkbox22=Card+màn+hình&search=Tìm+Kiếm">Card màn hình</a></li>
								<li><a href="products2.php?checkbox33=Cpu&search=Tìm+Kiếm">Cpu</a></li>
								<li><a href="products2.php?checkbox44=Ram&search=Tìm+Kiếm">Ram</a></li>
								
							</ul>
						</div>
											
					</div>
				</div>
			</section>			
			<section style="background-color: #857474;" id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Điều Hướng</h4>
						<ul class="nav">
							<li><a href="./index.php">Trang chủ</a></li>  						
							<li><a href="./cart.php">Giỏ hàng</a></li>
							<li><a href="./register.php">Đăng nhập</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="customer.php">Tài khoản của tôi</a></li>
							<li><a href="#">Danh sách sản phẩm</a></li>
							
							<!-- <li><a href="#">Làm mới</a></li> -->
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><!-- <img src="themes/images/logo.png" class="site_logo" alt=""> --><h4>PVH Store</h4></p>
						<p style="color: white;">Website chúng tôi chuyên cung cấp các sản phẩm chất lượng có uy tín và mới nhất trên thị trường hiện nay
							<br/>Hãy ghé thăm trang web của chúng tôi và đừng bỏ lỡ các sản phẩm mới nhé!</p>
							<div style="margin-left: 60px;">
								<a href="#" class="button">
									<i class="fab fa-facebook-f fa-lg"></i>
								</a>
								<a href="#" class="button">
									<i class="fab fa-twitter fa-lg"></i>
								</a>
								<a href="#" class="button">
									<i class="fab fa-instagram fa-lg"></i>
								</a>
							</div>
							
						</div>					
					</div>	
				</section>
				<section id="copyright">
					<span>Copyright 2021 Cửa Hàng Linh Kiện PVH Store</span>
				</section>
			
			</div>
			<script src="themes/js/common.js"></script>
				
		</body>
		</html>