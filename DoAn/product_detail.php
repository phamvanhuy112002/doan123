<?php
session_start();
include 'connect.php';

if (isset($_POST['submit'])) {
	$id=$_POST['id'];
	
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     

    $stmt = $conn->prepare("SELECT * FROM sp WHERE id='$id'"); 
     
   
    $stmt->execute();
 
  
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     

    $result = $stmt->fetchAll();
    
	    foreach ($result as $item){}
        

}

 ?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		
		<!-- bootstrap -->
		<link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link rel="stylesheet" type="text/css" href="themes/css/font-awesome.min.css">
		<link href="themes/css/main.css" rel="stylesheet"/>
		<link href="themes/css/jquery.fancybox.css" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="themes/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="themes/css/font-awesome.min2.css"> -->
	<link rel="stylesheet" type="text/css" href="themes/css/font-awesome.min3.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<script src="themes/js/jquery.fancybox.js"></script>
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
								Gi??? h??ng </a></li>';
							}else{
                           echo '<li ><a href="cart.php">
								Gi??? h??ng </a></li>';
							}


							 ?>
							<li><a href="checkout.php"> Thanh to??n </a></li>					
							<li><a href="register.php"> ????ng nh???p </a></li>		
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
														
							
							<li><a href="./products.php">Danh S??ch Linh Ki???n</a></li>
						</ul>
					</nav>
				</div>
			</section>				
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/carousel/linhkien.jpg" alt="New products" >

				<h2><span style="color: blue;">Chi ti???t s???n ph???m</span></h2>
				<h3><?php echo $item['ten']; ?></h3>
			</section>	
			<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4">
								<a href="themes/images/cloth/<?php echo $item['img'] ?>" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="themes/images/cloth/<?php echo $item['img'] ?>"></a>												
								<ul class="thumbnails small">								
									<li class="span1">
										<a href="themes/images/cloth/<?php echo $item['img2'] ?>" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="themes/images/cloth/<?php echo $item['img2'] ?>" alt=""></a>
									</li>								
									<li class="span1">
										<a href="themes/images/cloth/<?php echo $item['img3'] ?>" class="thumbnail" data-fancybox-group="group1" title="Description 3"><img src="themes/images/cloth/<?php echo $item['img3'] ?>" alt=""></a>
									</li>													
									<li class="span1">
										<a href="themes/images/cloth/<?php echo $item['img4'] ?>" class="thumbnail" data-fancybox-group="group1" title="Description 4"><img src="themes/images/cloth/<?php echo $item['img4'] ?>" alt=""></a>
									</li>
									<li class="span1">
										<a href="themes/images/cloth/<?php echo $item['img5'] ?>" class="thumbnail" data-fancybox-group="group1" title="Description 5"><img src="themes/images/cloth/<?php echo $item['img5'] ?>" alt=""></a>
									</li>
								</ul>
							</div>
							<div class="span5">
								<address>
									<strong>Nh?? s???n xu???t:</strong> <span><?php echo $item['nsx'] ?></span><br>
									<strong>??i???m ????nh gi??:</strong> <span>0</span><br>
									<strong>T??nh tr???ng:</strong> <span>C??n H??ng</span><br>
									<strong>Lo???i:</strong> <span><?php echo $item['loaisp'] ?></span><br>	
															
								</address>									
								<h4><strong style="color: red;">Gi??: <?php echo $item['gia'] ?>.000.000 ??</strong></h4>

							</div>
							<div class="span5">
								<form class="form-inline" method="POST" action="cart.php">
									<p>&nbsp;</p>
									<label>SL:</label>
									<input type="text" class="span1" name="sl" required>									
									<input type="hidden" name="id" value="<?php echo $item['id'] ?>">
									<?php
                                         if (strcmp($_SESSION['name'], 'User')==0) {
                                         	echo '<input class="btn btn-inverse" type="submit" value="Th??m v??o gi???" name="addcart" disabled alt="Ch??a ????ng nh???p">';
                                         }else{
                                         	echo '<input class="btn btn-inverse" type="submit" value="Th??m v??o gi???" name="addcart" >';
                                         }
									 ?>
								</form>
							</div>							
						</div>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									
									<li class=""><a href="#profile">Th??ng tin s???n ph???m</a></li>
								</ul>							 
								<div class="tab-content">
									<div class="tab-pane active" id="home"></div>
									<div class="tab-pane" id="profile">
										<table class="table table-striped shop_attributes">	
											<tbody>
												<tr class="">
													<th>T??n:</th>
													<td><?php echo $item['ten'] ?></td>
												</tr>		
												<tr class="alt">
													<th>Lo???i: </th>
													<td> <?php echo $item['loaisp'] ?></td>
												</tr>
												<tr class="">
													<th>Nh?? s???n xu???t:</th>
													<td><?php echo $item['nsx'] ?></td>
												</tr>
												<tr class="alt">
													<th>Dung l?????ng:</th>
													<td> <?php echo $item['dungluong'] ?></td>
												</tr>
												
											</tbody>
										</table>
									</div>
								</div>							
							</div>		

							<div class="span9">	
								<br>
								<h4 class="title">
									<span class="pull-left"><span class="text"><strong>S???n ph???m</strong> c??ng lo???i</span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-1" class="carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails listing-products">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<p><img src="themes/images/cloth/ram2.png"width="230px"height="230px" alt="" /></a></p>
														<a class="title">RAM DDR4 8GB/3200Mhz KINGMAX </a><br/><br><br>
														
														<p class="price">1.700.000??</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="ram2">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<p><img src="themes/images/cloth/cpu2.jpg " alt="" /></a></p>
														<a  class="title">CPU Intel Core i5 11400 </a><br/><br>
														<p class="price"> 4.290.000 ??</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="cpu2">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>       
												<li class="span3">
													<div class="product-box">												
														<p><img src="themes/images/cloth/ram10.jpg" alt="" /></a></p>
														<a  class="title">B??? Nh??? RAM PC DDR4 8G/2666 KINGSTON (KVR26N19S8/8)</a><br/>
														
														<p class="price">950.000??</p><form action="product_detail.php" method="post"></a>
															<input type="hidden" name="id" value="ram10">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>												
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails listing-products">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<p><img src="themes/images/cloth/card3.jpg"width="250px"height="250px"  alt="" /></a></p><br>
														<a class="title">Card m??n h??nh ASUS DUAL-RTX2060-O6G-EVO </a><br/>
													
														<p class="price">15.900.000 ??</p><form action="product_detail.php" method="post"></a>
															<input type="hidden" name="id" value="card3">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>       
												<li class="span3">
													<div class="product-box">										
														<p><img src="themes/images/cloth/card4.jpg"width="250px"height="250px" alt="" /></a></p><br>
														<a class="title">Card m??n h??nh ASUS (PH-GTX1660-O6G) </a><br/>
														<p class="price">11.990.000 ??</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="card4">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><img src="themes/images/cloth/ram4.jpg" width="250px"height="250px" alt="" /></a></p><br>
														<a  class="title">RAM DDR4 32GB/3000Mhz (2x16GB) </a><br/>
														
														<p class="price">4.350.000??</p><form action="product_detail.php" method="post">
															<input type="hidden" name="id" value="ram4">
															<input  class="SD20" type="submit" name="submit" value="Xem Ngay!" >
															
													</form>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="span9">	
								<br>
								<h4 class="title">
									<span class="pull-left"><span class="text"><strong>S???n ph???m</strong> c??ng nh?? s???n xu???t</span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails listing-products">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a><img alt="" src="themes/images/cloth/cardcunghang1.jpg"></a><br/>
														<a class="title">Bo m???ch ch??? ASUS ROG MAXIMUS XII EXTREME Z490</a><br/>
														
														<p class="price">18.690.000??</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a ><img alt="" src="themes/images/cloth/cardcunghang2.jpg"></a><br/>
														<a class="title"> Mainboard ASUS ROG STRIX Z590-F GAMING WIFI </a><br/>
														
														<p class="price">16.690.000??</p>
													</div>
												</li>       
												<li class="span3">
													<div class="product-box">												
														<a ><img alt="" src="themes/images/cloth/cardcunghang3.jpg"width="250px"height="250px"></a><br/><br>
														<a class="title"> Bo m???ch ch??? Mainboard ASUS TUF GAMING </a><br/>													
														<p class="price">6.290.000??</p>
													</div>
												</li>												
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails listing-products">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a ><img alt="" src="themes/images/cloth/cardcunghang4.jpg"></a><br/>
														<a class="title" >Mainboard ASUS TUF GAMING B460-PLUS</a><br/><br>
														
														<p class="price">6.290.000??</p>
													</div>
												</li>       
												<li class="span3">
													<div class="product-box">												
														<a ><img alt="" src="themes/images/cloth/cardcunghang5.jpg"width="250px"height="250px"></a><br/><br>
														<a   class="title">B??? Ph??t Wifi ASUS RT-AC68U </a><br/>
												
														<p class="price">4.690.000??</p>
													</div>
												</li>
												
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="span3 col">
						<div class="block">	
							
							<ul class="nav nav-list below">
								<li class="nav-header">Lo???i s???n ph???m</li>
								<li><a href="products2.php?checkbox22=Card+m??n+h??nh&search=T??m+Ki???m">Card m??n h??nh</a></li>
								<li><a href="products2.php?checkbox33=Cpu&search=T??m+Ki???m">Cpu</a></li>
								<li><a href="products2.php?checkbox44=Ram&search=T??m+Ki???m">Ram</a></li>
								
							
							</ul>
						</div>
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Ng???u nhi??n</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>												
													<img alt="" src="themes/images/cloth/card1.jpg"><br/>
													<a  class="title">Card M??n H??nh Asus DUAL RX 6600 XT-O8G</a><br/>
													<a  class="category"></a>
													<p class="price">16.000.000??</p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">												
													<img alt="" src="themes/images/cloth/card6.png"width="210px"height="210px"><br/><br>
													<a class="title">VGA CARD ASUS (TUF-GTX1660Ti-O6G-EVO-GAMING)</a><br/>
													<a href="#" class="category"></a>
													<p class="price">15.000.000??</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="block">								
							<h4 class="title"><strong>H???</strong> tr???</h4>								
							<ul  class="small-product">
								<li >
									<h5 style="color: #DC143C;">Tr??? gi??p:</h5>
									<h6 style="color:#696969";>&bull;H?????ng d???n mua h??ng nhanh ch??ng</h6>
								    <h6 style="color:#696969";>&bull;Ch??nh s??ch b???o h??nh t???i MYLINHKIEN</h6>
								    <h6 style="color:#696969">&bull;Ch??nh s??ch ?????i h??ng</h6>
								</li>
								<li>
									<h5 style="color: #DC143C;">??i???n tho???i t?? v???n - ?????t h??ng:</h5>
									<h6 style="color:#696969";>&bull;V??n Huy-0898134013</h6>
								    <h6 style="color:#696969";>&bull;Anh Khoa-0562014117</h6>
								    <h6 style="color:#696969">&bull;Th???a Huy 0934754566</h6>
								</li>
								<li>
									<h5 style="color: #DC143C;">?????a ch??? mua h??ng::</h5>
									<h6 style="color:#696969";>&bull;152 H??m Nghi, Thanh Kh??, TP. ???? N???ng</h6>
								    <h6 style="color:#696969";>&bull;52 Nguy???n V??n Linh, H???i Ch??u, TP. ???? N???ng</h6>
								    <h6 style="color:#696969">&bull;48 H??ng V????ng, Ph?? H???i, TP. Hu???</h6>
								</li>   
							</ul>
						</div>
					</div>
				</div>
			</section>			
			<section style="background-color: #857474;" id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>??i???u H?????ng</h4>
						<ul class="nav">
							<li><a href="./index.php">Trang ch???</a></li>  
							<li><a href="./about.php">Th??ng tin</a></li>
							<li><a href="./contact.php">Li??n h???</a></li>
							<li><a href="./cart.php">Gi??? h??ng</a></li>
							<li><a href="./register.php">????ng nh???p</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">T??i kho???n c???a t??i</a></li>
							<li><a href="#">L???ch s??? ?????t h??ng</a></li>
							<li><a href="#">Danh s??ch y??u th??ch</a></li>
							<!-- <li><a href="#">L??m m???i</a></li> -->
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><!-- <img src="themes/images/logo.png" class="site_logo" alt=""> --><h4>HUYLINHKIEN</h4></p>
						<p style="color: white;">Website ch??ng t??i chuy??n cung c???p c??c s???n ph???m ch???t l?????ng c?? uy t??n v?? m???i nh???t tr??n th??? tr?????ng hi???n nay
							<br/>H??y gh?? th??m trang web c???a ch??ng t??i v?? ?????ng b??? l??? c??c s???n ph???m m???i nh??!</p>
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
				<span>Li??n h??? s??? ??i???n tho???i: 0898134013-0562014117 ????? ???????c t?? v???n 24/24 xin c???m ??n.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				
				$('#myCarousel-2').carousel({
                    interval: 2500
                });								
			});
		</script>
    </body>
</html>