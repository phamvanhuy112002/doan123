<?php
session_start();
require 'connect.php';
if(isset($_POST['register'])){

$user = $_POST['username'];
$ten = $_POST['ten'];
$pass = $_POST['password'];
$email = $_POST['email'];
$sdt = $_POST['sdt'];
  
     	  try {
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO khachhang (Username, Password, Ten, Email, SDT)
VALUES ('$user', '$pass', '$ten', '$email', '$sdt')"); 
     
   
    $stmt->execute();
 
  
   
     $message = "Đăng ký thành công";
echo "<script type='text/javascript'>alert('$message');</script>";
} catch (Exception $e) {
     	 $message = "Tài khoản đã bị trùng";
echo "<script type='text/javascript'>alert('$message');</script>";
     }
}	
    



 ?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Đăng Ký!</title>
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
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<div class="input-group">
							<input type="text" class="search-query form-control input-group" Placeholder="My Linhkien">
							<span class="input-group-btn">
								<input span type="submit" name="btn-search" id="btn-search" class="btn btn-primary rounded-circle btnpro" value="Search" >
							</span></span>
							
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
                           echo '<li ><a style="color: #FE2E64"  href="register.php">
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
							
							<li><a href="./">Danh Sách linh kiện</a>	
												
								
							</li>															
	                               <li><a href="contact.php">Liên Hệ</a>				
									</li>	
							
						</ul>
					</nav>
				</div>
			</section>
				<section  class="homepage-slider" id="home-slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<img src="themes/images/carousel/slider9.png " alt="anh bia 1" />
						<div class="intro">
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
						<img src="themes/images/carousel/slider7.png"alt="anh bia 5" />
						
					</li>
				</ul>
			</div>			
			</section>
			<section class="header_text">
				Website chúng tôi chuyên cung cấp các sản phẩm chất lượng có uy tín và mới nhất trên thị trường hiện nay
				<br/>Hãy ghé thăm trang web của chúng tôi và đừng bỏ lỡ các sản phẩm mới nhé!

			</section>			
			<br/>
			<br/>
				<h4><span>Đăng nhập và đăng kí</span></h4>
			</section>			
			<section class="main-content">				
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text"><strong>Đăng</strong> nhập</span></h4>
						<form action="index.php" method="post">
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Tên đăng nhập</label>
									<div class="controls">
										<input type="text" placeholder="Nhập tài khoản" id="username" class="input-xlarge" name="username" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Mật khẩu</label>
									<div class="controls">

										<input type="password" placeholder="Nhập mật khẩu" id="password" class="input-xlarge" name="password" required>
									</div>
								</div>
								<label>
							        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Ghi nhớ mật khẩu
							    </label>
								<div class="control-group">
									<input tabindex="3" class="btn btn-primary large" type="submit" name="login" id="submit"  value="Đăng nhập">
									<hr>
									<p class="reset">Thay đổi <a tabindex="4" href="#" title="Recover your username or password">tên đăng nhập và mật khẩu</a></p>
								</div>
							</fieldset>
						</form>				
					</div>
					<div class="span7">					
						<h4 class="title"><span class="text"><strong>Đăng kí</strong> Form</span></h4>
						<form action="register.php" method="post" class="form-stacked">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Tên đăng nhập</label>
									<div class="controls">
										<input type="text" placeholder="Nhập tên đăng nhập" class="input-xlarge"
										id="username1" name="username" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Họ và tên</label>
									<div class="controls">
										<input type="text" placeholder="Nhập họ và tên" class="input-xlarge"
										id="username1" name="ten" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Địa chỉ email</label>
									<div class="controls">
										<input type="text" placeholder="Nhập 123@gmail.com" class="input-xlarge" id="email1" name="email" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Số DT</label>
									<div class="controls">
										<input type="text" placeholder="09xxxxx" class="input-xlarge" id="email1" name="sdt" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Mật khẩu:</label>
									<div class="controls">
										<input type="password" placeholder="" class="input-xlarge" id="password1" name="password" required>
									</div>
								</div>							                            
								<hr>
								
								<div class="actions"><input tabindex="9" class="btn btn-primary large" id="submit1"  type="submit" value="Tạo tài khoản" name="register"></div>

							</fieldset>
							
						</form>					
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
							<li><a href="./contact.php">Liên hệ</a></li>
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
					<span>Copyright 2021 PVH Store</span>
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