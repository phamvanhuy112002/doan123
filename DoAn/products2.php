<?php
session_start();
include 'connect.php';
if (isset($_GET['search'])) {
	if (isset($_GET['checkbox11']) && strcmp($_GET['checkbox11'], 'all')==0) {
     header('Location: products.php');
	}
	if (isset($_GET['checkbox22']) && strcmp( $_GET['checkbox22'], 'Card màn hình')==0)  {
		$tukhoa=$_GET['checkbox22'];
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM sp  WHERE loaisp like '%$tukhoa%'"); 
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    $result = $stmt->fetchAll();
	}
	
	if ( isset($_GET['checkbox33']) && strcmp($_GET['checkbox33'], 'Cpu')==0 ) {
		$tukhoa=$_GET['checkbox33'];
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM sp  WHERE loaisp like '%$tukhoa%'"); 
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    $result = $stmt->fetchAll();
	}

if (isset($_GET['checkbox44']) && strcmp($_GET['checkbox44'], 'Ram')==0 ) {
		$tukhoa=$_GET['checkbox44'];
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM sp  WHERE loaisp like '%$tukhoa%'"); 
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    $result = $stmt->fetchAll();
	}



}elseif ($_GET['btn-search']) {
	 $tukhoa = addslashes($_GET['tukhoa']);
	 if (empty($tukhoa)) {
               $message = "Nhập  Bạn Muốn Tìm";
echo "<script type='text/javascript'>alert('$message');</script>";
                header('Location: index.php');
                
            } 
            else{
            
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM sp  WHERE ten like '%$tukhoa%'"); 
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    $result = $stmt->fetchAll();
    
}
}
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Products 2</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
	<!-- bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
	<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
	<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="themes/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="themes/css/font-awesome.min2.css"> -->
	<link rel="stylesheet" type="text/css" href="themes/css/font-awesome.min3.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<!-- global styles -->
	<link href="themes/css/flexslider.css" rel="stylesheet"/>
	<link href="themes/css/main.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="themes/css/jquery-ui.min.css">
	<!-- scripts -->
	<script src="themes/js/jquery-1.7.2.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>				
	<script src="themes/js/superfish.js"></script>	
	<script src="themes/js/jquery.scrolltotop.js"></script>
	<script type="text/javascript" src="themes/js/jquery-ui.min.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>		
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
							if (strcmp($_SESSION['name'], 'User')==0) {

								echo '<li  ><a style="color: #FE2E64"  href="register.php">
								'.$_SESSION['name'].' </a></li>';
							}else{
                           echo '<li ><a style="color: #FE2E64"  href="customer.php">
								'.$_SESSION['name'].' </a></li>';
							}


							 ?>
							<?php
							if (strcmp($_SESSION['name'], 'User')==0) {

								echo '<li  ><a  href="register.php">
								Giỏ hàng </a></li>';
							}else{
                           echo '<li ><a href="cart.php">
								Giỏ hàng </a></li>';
							}


							 ?>
							<li><a href="checkout.php">Thanh toán</a></li>					
							<li><a href="register.php">Đăng nhập</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.php" class="logo pull-left"><h4 class="title">PVH Store</h4></a>
					<nav id="menu" class="pull-right">
						<ul>
												
																			
							
							<li><a href="./products.php">Danh Sách Linh Kiện</a></li>
								
							
							</ul>
						</nav>
					</div>
				</section>
				<section  class="homepage-slider" id="home-slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<img src="themes/images/carousel/slider9.png" alt="anh bia 1" />
								<div class="intro">
							<!--<h1>Laptop mua online</h1>
							<p><span>Giảm thêm đến 1.000.000đ</span></p>
							<p><span>Áp dụng kèm theo khuyến mãi trả thẳng khác</span></p> -->
						</div>
					</li>
					<li>
						<img src="themes/images/carousel/slider4.png" alt="anh bia 2" />
						
					</li>
					<li>
						<img src="themes/images/carousel/slider5.png" alt="anh bia 3" />
						
					</li>
					<li>
						<img src="themes/images/carousel/slider1.png" alt="anh bia 4" />
						
					</li>
					<li>
						<img src="themes/images/carousel/slider7.png" alt="anh bia 5" />
						
					</li>
				</ul>
			</div>			
		</section>
		<section class="header_text">
			Website chúng tôi chuyên cung cấp các sản phẩm chất lượng có uy tín và mới nhất trên thị trường hiện nay
			<br/>Hãy ghé thăm trang web của chúng tôi và đừng bỏ lỡ các sản phẩm mới nhé!
		</section>
		<hr>
		<h4><span>New products</span></h4>
	</section>
	<section class="main-content">
		
		<div class="row">						
			<div class="span9">								
				<ul class="thumbnails listing-products">
					<?php 
                     
                     	foreach ($result as $item){
                       	echo '<li class="span3">
						<div class="product-box">
							<span class="sale_tag"></span>												
							<a href="product_detail.php"><img alt="" src="themes/images/cloth/'.$item['img'].'" width="255px" height="255px"></a><br/>
							<a href="product_detail.php" class="title"> '.$item['ten'].'</a><br/>
							
							<p class="price">'. $item['gia'].'.000.000đ </p>
							<form action="product_detail.php" method="post">
							<input type="hidden" name="id" value="'.$item['id'].'">
							<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															</form>
						</div>
					</li>';	
                       } 

                   
                   	
					 ?>


				</ul>

		<div  id="menu-filter">
			
			
			
	
	
</section>
<section style="background-color: #857474;" id="footer-bar">
	<div class="row">
		<div class="span3">
			<h4>Điều Hướng</h4>
			<ul class="nav">
				<li><a href="./index.php">Trang chủ</a></li>  
				<li><a href="./about.php">Thông tin</a></li>
				<li><a href="./contact.php">Liên hệ</a></li>
				<li><a href="./cart.php">Giỏ hàng</a></li>
				<li><a href="./register.php">Đăng nhập</a></li>							
			</ul>					
		</div>
		<div class="span4">
			<h4>My Account</h4>
			<ul class="nav">
				<li><a href="#">Tài khoản của tôi</a></li>
				<li><a href="#">Lịch sử đặt hàng</a></li>
				<li><a href="#">Danh sách yêu thích</a></li>
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
		<span>Khách hàng luôn là ưu tiên hàng đầu của PVH Store và được phục vụ 24/7.</span>
	</section>
</div>
<script src="themes/js/common.js"></script>	
<script src="themes/js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
	$(function() {
		$(document).ready(function() {
			$('.flexslider').flexslider({
				animation: "fade",
				slideshowSpeed: 4000,
				animationSpeed: 600,
				controlNav: false,
				directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
		});
	});
</script>
</body>
</html>