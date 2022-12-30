<?php
session_start();
include 'connect.php';

 ?>
<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<title>Thanh toán</title>
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

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
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
							<li><a href="checkout.php"> Thanh toán </a></li>					
								
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
							<li><a href="products.php">Danh Sách Linh Kiện</a>					
								
							</li>															
	                       	
							
						</ul>
					</nav>
				</div>
			</section>				
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/carousel/anh2.jpg" alt="New products" >
				<h4><span>Thanh Toán</span></h4>
			</section>	
			<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="accordion" id="accordion2">
							
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Tài khoản &amp; Chi tiết hóa đơn</a>
								</div>
								<div id="collapseTwo" class="accordion-body collapse">
									<form method="POST" action="bill.php">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span6">
												<h4>Thông tin cá nhân</h4>
												<div class="control-group">
													<label class="control-label">Tên</label>
													<div class="controls">
														<input type="text" name="ten" class="input-xlarge" required>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Địa chỉ</label>
													<div class="controls">
														<input type="text" name="diachi" class="input-xlarge" required>
													</div>
												</div>					  
												<div class="control-group">
													<label class="control-label">Địa chỉ Email</label>
													<div class="controls">
														<input type="text" name="email" required>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Điện thoại</label>
													<div class="controls">
														<input type="text" name="sdt" class="input-xlarge" required>
													</div>
												</div>
                                                    <?php
                                         if (strcmp($_SESSION['name'], 'User')==0) {
                                         	echo '<input class="btn btn-primary pull-right" type="submit" value="Xác nhận" name="oke" disabled alt="Chưa đăng nhập">';
                                         }else{
                                         	echo '<input class="btn btn-primary pull-right" type="submit" value="Xác nhận" name="oke" >';
                                         }
									 
												 ?>
												
											</div>
											
										</div>
									</div>

								</form></div>
							</div>
						
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

							<li><a href="products.php">Danh sách sản phẩm</a></li>
							
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
		<script type="text/javascript" src="themes/js/common.js"></script>
    </body>
</html>