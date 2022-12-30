
<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<title> Store Website - Giỏ Hàng</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
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
					<form method="POST" class="search_form">
						<div class="input-group">
							<input type="text" class="search-query form-control input-group" Placeholder="My Linhkien.">
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
							<li><a href="index.php">Tài Khoản</a></li>
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
							
									
																						
							<li><a href="./products.php">Loại sản phẩm</a>
								<ul>									
										<li><a href="./products.php">Ram</a></li>
									<li><a href="./products.php">Chip</a></li>
									<li><a href="./products.php">Card</a></li>
								</ul>
							</li>			
							<li><a href="./products.php">Bán chạy nhất</a></li>
							<li><a href="./products.php">Sản phẩm mới</a></li>
						</ul>
					</nav>
				</div>
			</section>									
			
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/carousel/linhkien.jpg" alt="New products" >
				<h4><span>Liên hệ với chúng tôi</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">				
					<div class="span5">
						<div>
							<h5>Thông tin liên hệ</h5>
							<p>
							<strong>Địa chỉ:</strong>&nbsp;104 đường 2/9<br>	
							<strong>Điện thoại:</strong>&nbsp;0898.134.013<br>
							<strong>Fax:</strong>&nbsp;+04 (123) 456-7890<br>
							<strong>Email:</strong>&nbsp;<a href="#">Phamvanhuy112002@gmail.com</a>								
							</p>
							<br/>
							<h5>Cơ sở 2</h5>
							<p>
							<strong>Địa chỉ:</strong>&nbsp;300 Nguyễn Văn Cừ, <br>	
							<strong>Điện thoại:</strong>&nbsp;(113) 023-1125<br>
							<strong>Fax:</strong>&nbsp;+04 (113) 023-1145<br>
							<strong>Email:</strong>&nbsp;<a href="#">Phamvanhuy112002@gmail.com</a>					
							</p>
						</div>
					</div>
					<div class="span7">
						<p>Để lại tin nhắn để giúp chúng tôi có thể phục vụ bạn tốt hơn</p>
						<form method="post" action="#">
							<fieldset>
								<div class="clearfix">
									<label for="name"><span>Tên:</span></label>
									<div class="input">
										<input tabindex="1" size="18" id="name" name="name" type="text" value="" class="input-xlarge" placeholder="Họ Tên">
									</div>
								</div>
								
								<div class="clearfix">
									<label for="email"><span>Email:</span></label>
									<div class="input">
										<input tabindex="2" size="25" id="email" name="email" type="text" value="" class="input-xlarge" placeholder="Địa chỉ Email">
									</div>
								</div>
								
								<div class="clearfix">
									<label for="message"><span>Tin nhắn:</span></label>
									<div class="input">
										<textarea tabindex="3" class="input-xlarge" id="message" name="body" rows="7" placeholder="Viết gì đó ... "></textarea>
									</div>
								</div>
								
								<div class="actions">
									<button tabindex="3" type="submit" class="btn btn-primary">Gửi tin nhắn</button>
								</div>
							</fieldset>
						</form>
					</div>				
				</div>
			</section>		
			<section class="google_map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1776.457377173869!2d108.21018242418536!3d16.06168316113383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b419a87a59%3A0x3165407831b46a5c!2sMEGA%20Technology!5e1!3m2!1svi!2sus!4v1638332915027!5m2!1svi!2sus" width="1190px" height="350px" style="border:0;" allowfullscreen="" loading="lazy"></iframe><br>
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
								<a href="https://www.facebook.com/profile.php?id=100013161517621" class="button">
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
				<span>Copyright 2021 PVH Store.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
    </body>
</html>