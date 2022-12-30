<?php
include 'connect.php';
session_start();

	
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     

    $stmt = $conn->prepare("SELECT * FROM sp "); 
     
   
    $stmt->execute();
 
  
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     

    $result = $stmt->fetchAll();
    
	
	

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Products 1</title>
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
							<li><a href="./products.">Danh Sách Linh Kiện</a>
								<
							</li>			
							<!-- <li><a href="./products.php">Man</a></li>						
								<li><a href="./products.php">Hangbag</a></li> -->
								
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
		<h4><span>Sản Phẩm Mới </span></h4>
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
							<a ><img alt="" src="themes/images/cloth/'.$item['img'].'" width="250px" height="250px"></a><br>
							<a  class="title"> '.$item['ten'].'</a><br/>
							
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
				<hr>
				
	</div>
	<div class="span3 col">
		<div  id="menu-filter">
	
			
			<h3>Loại Sản Phẩm</h3>
			<div><form action="products2.php" method="GET">
				<div class="checkbox checkbox-primary">
					<input id="checkbox11" type="checkbox" class="input-lg" value="all" name="checkbox11">
					<label for="checkbox11">
						Tất cả
					</label>
				</div>
				<div class="checkbox checkbox-primary">
					<input id="checkbox22" type="checkbox" class="input-lg" value="Card màn hình" name="checkbox22">
					<label for="checkbox22">
						Card 
					</label>
				</div>
				<div class="checkbox checkbox-primary">
					<input id="checkbox33" type="checkbox" class="input-lg" value="Cpu" name="checkbox33"> 
					<label for="checkbox33">
						Cpu
					</label>
				</div>
				<div class="checkbox checkbox-primary">
					<input id="checkbox44" type="checkbox" class="input-lg" value="Ram" name="checkbox44">
					<label for="checkbox44">
						Ram
					</label>
				</div>
				 <input class="SD20" type="submit" name="search" value="Tìm Kiếm">
				</form>

			</div>
			
			
		<div class="block">								
							<h4 class="title"><strong>Hỗ</strong> trợ</h4>								
							<ul  class="small-product">
								<li >
									<h5 style="color: #DC143C;">Trợ giúp:</h5>
									<h6 style="color:#696969";>&bull;Hướng dẫn mua hàng nhanh chóng</h6>
								    <h6 style="color:#696969";>&bull;Chính sách bảo hành tại MYLINHKIEN</h6>
								    <h6 style="color:#696969">&bull;Chính sách đổi hàng</h6>
								</li>
								<li>
									<h5 style="color: #DC143C;">Điện thoại tư vấn - đặt hàng:</h5>
									<h6 style="color:#696969";>&bull;Văn Huy-0898134013</h6>
								    <h6 style="color:#696969";>&bull;Anh Khoa-0562014117</h6>
								    <h6 style="color:#696969">&bull;Thừa Huy 0934754566</h6>
								</li>
								<li>
									<h5 style="color: #DC143C;">Địa chỉ mua hàng::</h5>
									<h6 style="color:#696969";>&bull;152 Hàm Nghi, Thanh Khê, TP. Đà Nẵng</h6>
								    <h6 style="color:#696969";>&bull;52 Nguyễn Văn Linh, Hải Châu, TP. Đà Nẵng</h6>
								    <h6 style="color:#696969">&bull;48 Hùng Vương, Phú Hội, TP. Huế</h6>
								</li>   
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