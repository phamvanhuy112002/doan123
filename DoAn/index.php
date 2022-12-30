
<?php
require 'connect.php';
session_start();
if (isset($_POST['login'])) {
	
	$user= $_POST['username'];
	$pass= $_POST['password'];

	
	$stmt = $conn->prepare("SELECT * FROM khachhang WHERE Username='$user'");
	
	$stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    $result = $stmt->fetchAll();
    if (!$result) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='register.php'>Trở lại</a>";
        exit;
    }
	foreach ($result as $item){
    if ($pass != $item['Password']) {
		
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='register.php'>Trở lại</a>";
        exit;
    }
    if (strcmp($user , 'admin')==0 && strcmp($pass, $item['Password'])==0) {	
        header('Location: index1.php');

        
    }
}

$_SESSION['name'] = $item['Ten'];
$_SESSION['user'] = $item['Username'];
$_SESSION['email'] = $item['Email'];
$_SESSION['sdt'] = $item['SDT'];
	$message = "Đăng nhập thành công";
echo "<script type='text/javascript'>alert('$message');</script>";
}
if (empty($_SESSION['name'])) {
	$_SESSION['name']='User';
}


?>

<!DOCTYPE html>
<script type="text/javascript" src="https://sharethuthuat.com/php/tet/tet.js"></script>
<html lang="vi">
	<head>
		<meta charset="utf-8">

		<title>Linh Kiện Máy Tính!</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="themes/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="themes/css/font-awesome.min2.css"> -->
	<link rel="stylesheet" type="text/css" href="themes/css/font-awesome.min3.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
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
							if (strcmp($_SESSION['name'], 'User')==0) {

								echo '<li ><a style="color: #FE2E64"  href="register.php">
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
							
																											
							<li><a href="./products.php">Danh Sách Linh Kiện</a>
								
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
			
				<marquee width="100%" behavior="scroll" bgcolor="white">  
     <h5> Chào Mừng bạn đến Website chúng tôi chuyên cung cấp các sản phẩm chất lượng có uy tín và mới nhất trên thị trường hiện nay</h5>
                 </marquee>	
			
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									
									<span class="pull-left"><span class="text"><span class="line"><a href="product_detail.php"><strong>Các sản phẩm gần đây nhất</strong></a></span></span>
									</span>
									
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><img src="themes/images/cloth/card1.jpg"  alt="" /></a></p>

														<a  class="title">Card Màn Hình Asus DUAL RX 6600 XT-O8G </a><br/>
														<a  class="category"><p class="price">15.000.000 đ</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="card1">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form></a>
															
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/card2.jpg"width="230px"height="230px"  alt="" /></a></p>
														<a  class="title">VGA ASUS ROG Strix Radeon RX 6600 XT OC 8GB GDDR6 </a><br/>
														<a class="category"> <p class="price">13.000.000đ</p><form action="product_detail.php" method="post">
															
															<input type="hidden" name="id" value="card2">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form></a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/cpu1.jpg"width="230px"height="230px"  alt="" /></a></p>
														<a  class="title">Mainboard ASUS ROG STRIX Z590-A GAMING WIFI</a><br/>
														<a  class="category"><p class="price">8.000.000đ</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="cpu1">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form></a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/ram1.jpg"width="230px"height="230px"  alt="" /></a></p>
														<a class="title">Bộ nhớ RAM DDR4 16GB/3000Mhz GSKILL TRIDENTZ RGB</a><br/>
														<a  class="category">
                                                          <p class="price">2.000.000</p></a><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="ram1">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/card3.jpg"width="230px"height="230px"  alt="" /></a></p>
														<a  class="title">Card màn hình ASUS DUAL-RTX2060-O6G-EVO </a><br/>
														<a class="category">6GB, GDR6, 192BIT, 2Fan, DVI+HDMI+DP
														<p class="price">16.000.000 đ</p><form action="product_detail.php" method="post"></a>
															<input type="hidden" name="id" value="card3">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/card4.jpg"width="230px"height="230px" alt="" /></a></p>
														<a  class="title">Card màn hình ASUS (PH-GTX1660-O6G) </a><br/>
														<a href="products.php" class="category">GTX1660, 6GB, OC, 192 BIT, 1 Fan</a>
														<p class="price">12.000.000 đ</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="card4">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/ram4.jpg" width="230px"height="230px" alt="" /></a></p>
														<a  class="title">RAM DDR4 32GB/3000Mhz (2x16GB) </a><br/>
														<a href="products.php" class="category">GSKILL JIPAWS V (F4-3000C16D-32GVRB)</a>
														<p class="price">4.000.000đ</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="ram4">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/cpu2.jpg"width="230px"height="230px"  alt="" /></a></p>
														<a  class="title">CPU INTEL CORE i3 10320</a><br/>
														<a class="category"> (3.8Ghz, 4C/8T, 8MB, LGA1200, GPU)</a>
														<p class="price">5.000.000đ</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="cpu2">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>																																	
											</ul>
										</div>

										<!-- -->
											<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/card5.png"width="230px"height="230px"   alt="" /></a></p>
														<a class="title">VGA CARD MSI GTX1650 GAMING </a><br/>
														<a href="products.php" class="category">GTX1660, 6GB, OC</a>
														<p class="price">7.999.000 đ</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="card5">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/cpu3.jpg"width="230px"height="230px" alt="" /></a></p><br>
														<a class="title">Bộ vi xử lý CPU INTEL CORE i5 9400 </a><br/>
														<a href="products.php" class="category"></a>
														<p class="price">5.000.000 đ</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="cpu3">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>
																																	
											</ul>
										</div>
										<!-- -->

									</div>							
								</div>
							</div>						
						</div>
						<br/>
					
							
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									
									<span class="pull-left"><span class="text"><span class="line"><a href="product_detail.php"><strong>Các sản phẩm được xem nhiều nhất</strong></a></span></span>
									</span>
									
									<span class="pull-right">
										<a class="left button" href="#myCarousel-4" data-slide="prev"></a><a class="right button" href="#myCarousel-4" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-4" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><img src="themes/images/cloth/card1.jpg" alt="" /></a></p><br>
														<a  class="title">Card Màn Hình Asus DUAL RX 6600 XT-O8G</a><br/>
														<a  class="category"><p class="price">15.000.000đ</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="card1">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
															
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/ram33.jpg" alt="" /></a></p><br>
														<a  class="title">VGA CARD MSI N730K-2GD5/OCV1</a><br/>
														<a  class="category"><p class="price">2.000.000đ</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="ram3">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/ram8.png"width="250px"height="250px" alt="" /></a></p><br>
														<a class="title"> RAM DDR4 16GB/3000Mhz GSKILL TRIDENTZ</a><br/>
														<a  class="category"><p class="price">5.000.000đ</p></a><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="ram8">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/ram9.png" width="230px"height="230px"alt="" /></a></p><br>
														<a  class="title">RAM DDR4 8GB/2400hz GALAX GAMER III </a><br/><br>
														<a  class="category"><p class="price">2.000.000đ</p></a><form action="product_detail.php" method="post">

															<input type="hidden" name="id" value="ram9">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3"><br><br>
													<div class="product-box">
														<p><img src="themes/images/cloth/card11.png" width="230px"height="230px"alt="" /></a></p>
														<a class="title">VGA CARD MSI (RTX3060-GAMINGX-12G)</a>
														<a  class="category">
														<p class="price">19.000.000đ</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="card11">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/cpu2.jpg " alt="" /></a></p>
														<a  class="title">CPU Intel Core i5 11400 </a><br/><br>
														<a  class="category">
														<p class="price"> 5.000.000 đ</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="cpu2">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/cpu4.jpg" alt="" /></a></p>
														<a  class="title">CPU Intel Core i9-12900K</a><br/><br>
														<a class="category">
														<p class="price">18.000.000đ</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="cp4">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/cpu5.png" alt="" /></a></p>
														<a  class="title">CPU Intel Core i7-12700KF</a><br/><br>
														<a  class="category">
														<p class="price">12.000.000đ</p><form action="product_detail.php" method="post"></a>
															<input type="hidden" name="id" value="cp5">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>																																	
											</ul>
										</div>

										<!-- -->
											<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/ram2.png"width="210px"height="210px" alt="" /></a></p>
														<a  class="title">RAM DDR4 8GB/3200Mhz KINGMAX ZEUS DRAGON  </a><br/><br><br>
														<a class="category">
														<p class="price">2.000.000đ</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="ram2">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/ram10.jpg" alt="" /></a></p>
														<a  class="title">Bộ Nhớ RAM PC DDR4 8G/2666 KINGSTON (KVR26N19S8/8)</a><br/>
														<a  class="category">
														<p class="price">2.000.000</p><form action="product_detail.php" method="post"></a>
															<input type="hidden" name="id" value="ram10">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>
																																	
											</ul>
										</div>
										<!-- -->

									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									
									<span class="pull-left"><span class="text"><span class="line"><a href="product_detail.php"><strong>Các sản phẩm khác</strong></a></span></span>
									</span>
									
									<span class="pull-right">
										<a class="left button" href="#myCarousel-5" data-slide="prev"></a><a class="right button" href="#myCarousel-5" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-5" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><img src="themes/images/cloth/card8.png" alt="" /></a></p>
														<a  class="title">VGA CARD ASUS PH-GTX1660S-O6G</a><br/>
														<a  class="category"><p class="price">12.000.000 đ</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="card8">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form></a>
															
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/cpu6.jpg" alt="" /></a></p>
														<a  class="title">CPU Intel Core i5 11400</a><br/>
														<a class="category"><p class="price">6.000.000đ</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="cpu6">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form></a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/card9.png" alt="" /></a></p>
														<a class="title">Card màn hình ASUS (DUAL-RTX2060-6G-EVO)</a><br/>
														<a class="category"><p class="price">7.000.000đ</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="card9">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form></a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/card10.jpg"width="230px"height="230px" alt="" /></a></p>
														<a  class="title"> Mainboard ASUS TUF</a><br/><br>
														<a class="category"><p class="price">6.000.000đ</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="card10">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form></a>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/ram8.png" width="250px"height="250px" alt="" /></a></p>
														<a  class="title">Bộ nhớ RAM DDR4 16GB/3200Mhz </a><br/>
														<a  class="category">
														<p class="price">4.000.000đ</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="ram6">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/ram7.png"width="250px"height="250px" alt="" /></a></p>
														<a  class="title">RAM DDR4 16GB Bus 3000Mhz (2x8GB)  </a><br/>
														<a class="category"><p class="price">4.000.000đ</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="ram7">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/cpu7.jpg" alt="" /></a></p>
														<a  class="title">CPU INTEL CORE i5 10600K</a><br/>
														<a class="category">
														<p class="price">7.000.000đ</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="cpu7">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/cpu8.jpg" alt="" /></a></p>
														<a class="title">CPU Intel Core i5 11500</a><br/>
														<a class="category">
														<p class="price">7.000.000đ</p><form action="product_detail.php" method="post"></a>
															<input type="hidden" name="id" value="cpu8">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>																																	
											</ul>
										</div>

										<!-- -->
											<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/cpu9.jpg" alt="" /></a></p>
														<a  class="title">CPU Intel Core i5 10400</a><br/>
														<a class="category">
														<p class="price">6.000.000đ</p><form action="product_detail.php" method="post"></a>
															<input type="hidden" name="id" value="cpu9">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/cpu10.jpg" alt="" /></a></p>
														<a class="title">CPU Intel Core i9 11900K</a><br/>
														<a  class="category">
														<p class="price">15.000.000đ</p><form action="product_detail.php" method="post"></a>
															<input type="hidden" name="id" value="cpu10">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>
																																	
											</ul>
										</div>
										<!-- -->

									</div>							
								</div>
							</div>						
						</div>
					</div>		

				</div>	
			</section>
			<div class="row feature_box">						
				<div class="span4">
					<div class="service">
						<div class="responsive">	
							<img src="themes/images/feature_img_2.png" alt="" />
							<h4>THIẾT KẾ <strong>HIỆN ĐẠI</strong></h4>
							<p>Các sản phẩm được thiết kế theo mẫu mã hiện đại, thời thượng phù hợp với xu hướng người dùng hiện nay.</p>
						</div>
					</div>
				</div>
				<div class="span4">	
					<div class="service">
						<div class="customize">			
							<img src="themes/images/feature_img_1.png" alt="" />
							<h4>GIAO HÀNG <strong>MIỄN PHÍ</strong></h4>
							<p>Sản phầm được giao hàng nhanh, gọn bằng nhiều hình thức nhằm đáp ứng tốt yêu cầu của khách hàng.</p>
						</div>
					</div>
				</div>
				<div class="span4">
					<div class="service">
						<div class="support">	
							<img src="themes/images/feature_img_3.png" alt="" />
							<h4>PHỤC VỤ <strong>24/7</strong></h4>
							<p>Khách hàng luôn là ưu tiên hàng đầu của PVH Store và được phục vụ 24/7.</p>
						</div>
					</div>
				</div>
			</div>
			
		
    </body>
   

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
</html>