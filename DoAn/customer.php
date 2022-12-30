<?php
include 'connect.php';
session_start();
if (isset($_POST['change'])) {
	$ten=$_POST['ten'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$sdt=$_POST['sdt'];

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     

    $stmt = $conn->prepare("UPDATE khachhang SET  Password = '$password', Ten = '$ten',Email = '$email',SDT = '$sdt' WHERE Username ='$username';"); 
     
   
    $stmt->execute();
 
  

     

   

    $message = "Cập nhập thành công";
echo "<script type='text/javascript'>alert('$message');</script>";
    
$_SESSION['name']=$_POST['ten'];

}
if (isset($_POST['logout'])) {
       session_destroy();
       $message = "Đăng xuất thành công";
echo "<script type='text/javascript'>alert('$message');</script>";
 header('Location: index.php');
  $message = "Đăng xuất thành công";
echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Customer</title>
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
							<li><a href="checkout.php">Thanh toán</a></li>					
							<li><a href="customer.php">DPH</a></li>		
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
																				
							
							<li><a href="./products.php">Danh Sách Linh Kiện</a>
								
							</li>			
							<!-- <li><a href="./products.html">Man</a></li>						
								<li><a href="./products.html">Hangbag</a></li> -->
								
							</ul>
						</nav>
					</div>
				</section>
				<section  class="homepage-slider" id="home-slider">
					<img class="pageBanner" src="themes/images/carousel/anh2.png"  alt="New products" >
		</section>
		<section class="header_text">
			Website chúng tôi chuyên cung cấp các sản phẩm chất lượng có uy tín và mới nhất trên thị trường hiện nay
			<br/>Hãy ghé thăm trang web của chúng tôi và đừng bỏ lỡ các sản phẩm mới nhé!

		</section>			
		<br/>
		<br/>
	</section>			
	<section class="main-content">		
		<div class="row">
			<div class="span5">					
				<h4 class="title"><span class="text"><strong>Thông tin</strong> cá nhân</span></h4>
				<form action="customer.php" method="post">
					<input type="hidden" name="next" value="">
					<fieldset>
						<div class="control-group">
							<label class="control-label">Họ tên</label>
							<div class="controls">
								<input type="value"  class="output-xlarge" name="ten" id="name" value="">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Tài Khoản</label>
							<div class="controls">
								<input type="value"  class="output-xlarge" name="username" id="address" value="<?php echo $_SESSION['user'] ?>"  ?>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Mật Khẩu</label>
							<div class="controls">
								<input type="password" name="password"  class="output-xlarge" id="numberphone" >
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Email</label>
							<div class="controls">
								<input type="value"  class="output-xlarge" name="email" id="address" value="" >
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">SDT</label>
							<div class="controls">
								<input type="value"  class="output-xlarge" name="sdt" id="address"  >
							</div>
						</div>
						<div class="control-group">
							<input tabindex="3" class="btn btn-primary large" type="submit" id="submit"  value="Thay đổi thông tin" name="change">
							<input tabindex="3" class="btn btn-primary large" type="submit" id="submit"  value="Đăng xuất" name="logout">
							<hr>
						</div>
					</fieldset>
				</form>				
			</div>\
			<div class="span7">					
				<h4 class="title"><span class="text"><strong>Lịch sử</strong> mua hàng</span></h4>
				<form action="newcustomer.php" method="post" class="form-stacked">
					<fieldset>
						<div class="control-group">
							<label class="control-label"><strong>Các sản phẩm đã mua</strong> </label>
						</div>
						<li class="span3">
							<div class="product-box">												
								<a href="product_detail.php"><img alt="" src="themes/images/cloth/card1.jpg"width="120px"height="120px"></a><br/>
								<a href="product_detail.php" class="title">Card Màn Hình Asus DUAL RX 6600 XT-O8G</a><br/>

								<a href="#" class="category"></a>
								<p class="price">16.990.000 đ</p>
							</div>
						</li>
						<li class="span3">
							<div class="product-box">
								<span class="sale_tag"></span>												
								<a href="product_detail.php"><img alt="" src="themes/images/cloth/card2.jpg"width="120px"height="120px"></a><br/>
								<a href="product_detail.php" class="title">VGA CARD ASUS PH-GTX1660S-O6G</a><br/>
								<a href="#" class="category"></a>
								<p class="price">13.000.000 đ</p>
							</div>
						</li>
						<li class="span3">
							<div class="product-box">												
								<span class="sale_tag"></span>
								<a href="product_detail.php"><img alt="" src="themes/images/cloth/cpu7.jpg"width="130px"height="130px"></a><br/>
								<a href="product_detail.php" class="title">CPU INTEL CORE i5 10600K</a><br/>
								<a href="#" class="category"></a>
								<p class="price">6.500.000 đ</p>
							</div>
						</li>
						<li class="span3">
							<div class="product-box">												
								<a href="product_detail.php"><img alt="" src="themes/images/cloth/ram2.png"width="110px"height="110px"></a><br/>
								<a href="product_detail.php" class="title">RAM DDR4 8GB/3200Mhz KINGMAX ZEUS DRAGON</a><br/>
								<a href="#" class="category"></a>
								<p class="price">1.700.000 đ</p>
							</div>
						</li>
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
					<li><a href="./about.php">Thông tin</a></li>
					<li><a href="./contact.php">Liên hệ</a></li>
					<li><a href="./cart.php">Giỏ hàng</a></li>
					<li><a href="./register.php">Đăng nhập</a></li>							
				</ul>					
			</div>
			<div class="span4">
				<h4>My Account</h4>
				<ul class="nav">
					<li><a href="customer.php">Tài khoản của tôi</a></li>
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
			<span>Copyright 2021 Khách hàng luôn là ưu tiên hàng đầu của PVH Store và được phục vụ 24/7.</span>
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
		$(document).ready(function() {
			$('#checkout').click(function (e) {
				document.location.href = "checkout.php";
			})
		});
		
	</script>
</body>
</html>	