<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'connect.php';
if (isset($_POST['for'])) {
	$user=$_POST['username'];
	$email=$_POST['email'];
	$rand= rand(1000,9999);
	
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("SELECT Password, Email, Ten FROM taikhoan  WHERE Username = '$user'"); 
          $stmt->execute();
          $stmt->setFetchMode(PDO::FETCH_ASSOC); 
          $result = $stmt->fetchAll();
          foreach ($result as $item){}
          $pass=$item['Password'];
          $ten=$item['Ten'];
     if (strcmp($item['Email'], $email)==0) {
     	
include "PHPMailer/src/PHPMailer.php";
include "PHPMailer/src/Exception.php";
include "PHPMailer/src/OAuth.php";
include "PHPMailer/src/POP3.php";
include "PHPMailer/src/SMTP.php";


  
  $mail = new PHPMailer(true);
 // print_r($mail);
  try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'huykhuc002@gmail.com';                 // SMTP username
    $mail->Password = 'vjrmyxpifylzwdtc';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
 
    //Recipients
    $mail->setFrom('huykhuc002@gmail.com', 'Admin');
    $mail->addAddress($email, 'User');     // Add a recipient
              // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com'); //gui them 1 bang copy
   // $mail->addBCC('bcc@example.com');
 
    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments them file anh hoac vd
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'mail user';
    $mail->Body    = 'T??n:'.$ten.'<br>M?? c???a b???n l??:'.$rand.'<br> ?????ng chia s??? m?? n??y cho ng?????i kh??c. C???m ??n ???? ???ng h??? ch??ng t??i <3';
  //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
    $mail->send();
   header('Location: register3.php');
   $_SESSION['user'] = $_POST['username'];;
   $_SESSION['rand'] = $rand;
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
     }else{
     	$message = "Sai t??i kho???n";
	echo "<script type='text/javascript'>alert('$message');</script>";

     }
	

}

    



 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Qu??n m???t kh???u!</title>
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
							<input type="text" class="search-query form-control input-group" Placeholder="My Trees.">
							<span class="input-group-btn">
								<button class="btn btn-primary rounded-circle btnpro" type="button" id="btn-search">
									<span class="fa fa-search"></span>
								</button>
							</span>
							
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
					<a href="index.php" class="logo pull-left"><h4 class="title">Htrees</h4></a>
					<nav id="menu" class="pull-right">
						<ul>
							
							<li><a href="./">Danh S??ch C??y</a>	
												
								
							</li>															
	                               <li><a href="contact.php">Li??n H???</a>				
									</li>	
							
						</ul>
					</nav>
				</div>
			</section>
				<section  class="homepage-slider" id="home-slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<img src="themes/images/carousel/ab1.jpg" width="300px" height="1200px" alt="anh bia 1" />
						<div class="intro">
						</div>
					</li>
					<li>
						<img src="themes/images/carousel/ab2.jpg" alt="anh bia 2" />
						
					</li>
					<li>
						<img src="themes/images/carousel/ab3.jpg" alt="anh bia 3" />
						
					</li>
					<li>
						<img src="themes/images/carousel/ab4.jpg" alt="anh bia 4" />
						
					</li>
					<li>
						<img src="themes/images/carousel/ab5.jpg" alt="anh bia 5" />
						
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
				<h4><span>Qu??n m???t kh???u</span></h4>
			</section>			
			<section class="main-content">				
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text"><strong>Th??ng</strong> tin</span></h4>
						<form action="register2.php" method="post">
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label class="control-label">T??n ????ng nh???p</label>
									<div class="controls">
										<input type="text" placeholder="Nh???p t??i kho???n" id="username" class="input-xlarge" name="username" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Email</label>
									<div class="controls">

										<input type="text" placeholder="Nh???p email" id="password" class="input-xlarge" name="email" required>
									</div>
								</div>
								
								<div class="control-group">
									<input type="hidden" name="rand" value="<?php echo $rand; ?>">
									<input type="hidden" name="user" value="<?php echo $user; ?>">
									<input tabindex="3" class="btn btn-primary large" type="submit" name="for" id="submit"  value="Qu??n m???t kh???u">
									
									
								
								</div>
							</fieldset>
						</form>	<a href="register.php" ><button class="btn btn-primary large" >Quay l???i ????ng nh???p</button></a>			
					</div>
									
				</div>
			</section>			
				<section style="background-color: #857474;" id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>??i???u H?????ng</h4>
						<ul class="nav">
							<li><a href="./index.php">Trang ch???</a></li>  						
							<li><a href="./cart.php">Gi??? h??ng</a></li>
							<li><a href="./contact.php">Li??n h???</a></li>
							<li><a href="./register.php">????ng nh???p</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="customer.php">T??i kho???n c???a t??i</a></li>

							<li><a href="products.php">Danh s??ch s???n ph???m</a></li>
							
							<!-- <li><a href="#">L??m m???i</a></li> -->
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><!-- <img src="themes/images/logo.png" class="site_logo" alt=""> --><h4>Htrees</h4></p>
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
					<span>Copyright 2021 C??y c???nh Th???a Huy</span>
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