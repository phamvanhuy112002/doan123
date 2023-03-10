<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>New Customer</title>
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
					<form method="POST" class="search_form">
						<div class="input-group">
							<input type="text" class="search-query form-control input-group" Placeholder="My laptop.">
							<span class="input-group-btn">
								<button class="btn btn-primary rounded-circle btnpro" id="btn-search" type="button">
									<span class=" fas fa-search"></span>
								</button>
							</span>
							
						</div>
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="cart.html">Gi??? h??ng</a></li>
							<li><a href="checkout.html">Thanh to??n</a></li>					
							<li><a href="customer.html">DPH</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left"><h4 class="title">KLAPTOP </h4></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./products.html">H??ng s???n xu???t</a>					
								<ul>
									<li><a href="./products.html">Apple</a></li>									
									<li><a href="./products.html">Dell</a></li>
									<li><a href="./products.html">Asus</a></li>	
									<li><a href="./products.html">HP</a></li>									
									<li><a href="./products.html">Acer</a></li>
									<li><a href="./products.html">Lenovo</a></li>									
								</ul>
							</li>															

							<li><a href="./products.html">Lo???i s???n ph???m</a>
								<ul>									
									<li><a href="./products.html">Ch??i game</a></li>
									<li><a href="./products.html">H???c t???p-v??n ph??ng</a></li>
									<li><a href="./products.html">????? h???a-k??? thu???t</a></li>
									<li><a href="./products.html">Cao c???p sang tr???ng</a></li>
								</ul>
							</li>			
							<!-- <li><a href="./products.html">Man</a></li>						
								<li><a href="./products.html">Hangbag</a></li> -->
								<li><a href="./products.html">B??n ch???y nh???t</a></li>
								<li><a href="./products.html">S???n ph???m m???i</a></li>
							</ul>
						</nav>
					</div>
				</section>
				<section  class="homepage-slider" id="home-slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<img src="themes/images/carousel/slider_1.jpg" alt="anh bia 1" />
								<div class="intro">
							<!--<h1>Laptop mua online</h1>
							<p><span>Gi???m th??m ?????n 1.000.000??</span></p>
							<p><span>??p d???ng k??m theo khuy???n m??i tr??? th???ng kh??c</span></p> -->
						</div>
					</li>
					<li>
						<img src="themes/images/carousel/slider_4.png" alt="anh bia 2" />
						
					</li>
					<li>
						<img src="themes/images/carousel/slider_5.png" alt="anh bia 3" />
						
					</li>
					<li>
						<img src="themes/images/carousel/slider_6.png" alt="anh bia 4" />
						
					</li>
					<li>
						<img src="themes/images/carousel/slider_7.png" alt="anh bia 5" />
						
					</li>
				</ul>
			</div>			
		</section>
		<section class="header_text">
			Website ch??ng t??i chuy??n cung c???p c??c s???n ph???m ch???t l?????ng c?? uy t??n v?? m???i nh???t tr??n th??? tr?????ng hi???n nay
			<br/>H??y gh?? th??m trang web c???a ch??ng t??i v?? ?????ng b??? l??? c??c s???n ph???m m???i nh??!

		</section>			
		<br/>
		<br/>
		<h4><span>C???p nh???t th??ng tin</span></h4>
	</section>			
	<section class="main-content">		
		<div class="row">
			<div class="span5">					
				<h4 class="title"><span class="text"><strong>Th??ng tin</strong> c?? nh??n</span></h4>
				<form action="newcustomer.html" method="post">
					<input type="hidden" name="next" value="/">
					<fieldset>
						<div class="control-group">
							<label class="control-label">H??? t??n</label>
							<div class="controls">
								<input type="text" placeholder="Nh???p h??? t??n"  class="input-xlarge" id="name" name="name" required>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">?????a ch???</label>
							<div class="controls">
								<input type="text" placeholder="Nh???p ?????a ch???"  class="input-xlarge" id="address" name="address" required>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">S??? ??i???n tho???i</label>
							<div class="controls">
								<input type="text" placeholder="Nh???p s??? ??i???n tho???i" id="numberphone" class="input-xlarge" name="numberphone" required>
							</div>
						</div>
						<div class="control-group">
							<input tabindex="3" class="btn btn-primary large" type="submit" id="submit" onclick="validate()" value="C???p nh???t th??ng tin">
							<hr>
						</div>
					</fieldset>
				</form>				
			</div>

		</div>
	</section>			
	<section style="background-color: #857474;" id="footer-bar">
		<div class="row">
			<div class="span3">
				<h4>??i???u H?????ng</h4>
				<ul class="nav">
					<li><a href="./index.html">Trang ch???</a></li>  
					<li><a href="./about.html">Th??ng tin</a></li>
					<li><a href="./contact.html">Li??n h???</a></li>
					<li><a href="./cart.html">Gi??? h??ng</a></li>
					<li><a href="./register.html">????ng nh???p</a></li>							
				</ul>					
			</div>
			<div class="span4">
				<h4>My Account</h4>
				<ul class="nav">
					<li><a href="customer.html">T??i kho???n c???a t??i</a></li>
					<li><a href="#">L???ch s??? ?????t h??ng</a></li>
					<li><a href="#">Danh s??ch y??u th??ch</a></li>
					<!-- <li><a href="#">L??m m???i</a></li> -->
				</ul>
			</div>
			<div class="span5">
				<p class="logo"><!-- <img src="themes/images/logo.png" class="site_logo" alt=""> --><h4>ILAPTOP</h4></p>
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
			<span>Copyright 2013 bootstrappage template  All right reserved.</span>
		</section>
	</div>
	<script type="text/javascript" src="themes/js/common.js"></script>
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
				document.location.href = "checkout.html";
			})
		});
	</script>
	<script type="text/javascript">
		var attempt=3;
		function validate(){
			var name=document.getElementById("name").value;
			var address=document.getElementById("address").value;
			var numberphone=document.getElementById("numberphone").value;
			if(name!=null && address!=null && numberphone!=null )
			{
				alert('Update information successfully!');
				window.location.href = "customer.html";
				return false;
			}
			else{
				attempt--;
				alert("Fail to update");
				return true;
			}
			if(attempt==0){
				document.getElementById("name").disabled=true;
				document.getElementById("address").disabled=true;
				document.getElementById("numberphone").disabled=true;
				document.getElementById("submit").disabled=true;
				return false;
			}
		}
		</script>
	</body>
	</html>	