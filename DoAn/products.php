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
								Gi??? h??ng </a></li>';
							}else{
                           echo '<li ><a href="cart.php">
								Gi??? h??ng </a></li>';
							}


							 ?>
							<li><a href="checkout.php">Thanh to??n</a></li>					
							<li><a href="register.php">????ng nh???p</a></li>		
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
							<li><a href="./products.">Danh S??ch Linh Ki???n</a>
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
							<p><span>Gi???m th??m ?????n 1.000.000??</span></p>
							<p><span>??p d???ng k??m theo khuy???n m??i tr??? th???ng kh??c</span></p> -->
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
			Website ch??ng t??i chuy??n cung c???p c??c s???n ph???m ch???t l?????ng c?? uy t??n v?? m???i nh???t tr??n th??? tr?????ng hi???n nay
			<br/>H??y gh?? th??m trang web c???a ch??ng t??i v?? ?????ng b??? l??? c??c s???n ph???m m???i nh??!
		</section>
		<hr>
		<h4><span>S???n Ph???m M???i </span></h4>
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
							
							<p class="price">'. $item['gia'].'.000.000?? </p>
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
	
			
			<h3>Lo???i S???n Ph???m</h3>
			<div><form action="products2.php" method="GET">
				<div class="checkbox checkbox-primary">
					<input id="checkbox11" type="checkbox" class="input-lg" value="all" name="checkbox11">
					<label for="checkbox11">
						T???t c???
					</label>
				</div>
				<div class="checkbox checkbox-primary">
					<input id="checkbox22" type="checkbox" class="input-lg" value="Card m??n h??nh" name="checkbox22">
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
				 <input class="SD20" type="submit" name="search" value="T??m Ki???m">
				</form>

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
			<p class="logo"><!-- <img src="themes/images/logo.png" class="site_logo" alt=""> --><h4>PVH Store</h4></p>
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
		<span>Kh??ch h??ng lu??n l?? ??u ti??n h??ng ?????u c???a PVH Store v?? ???????c ph???c v??? 24/7.</span>
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