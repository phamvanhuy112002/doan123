<?php 
require 'connect.php';
session_start();
if (isset($_POST['add'])) {
	
$id = $_POST['id'];
$tensp = $_POST['tensp'];
$loaisp = $_POST['loaisp'];
$nsx = $_POST['nsx'];
$dungluong = $_POST['dungluong'];

$img = $_POST['img'];
$gia = $_POST['gia'];
try {
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("INSERT INTO sp (ten, loaisp, dungluong, nsx, id, img, gia)
VALUES ('$tensp', '$loaisp', '$dungluong', '$nsx', '$id', '$img', '$gia')"); 
     
   
    $stmt->execute();
 
  
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     

    $result = $stmt->fetchAll();
    $message = "Đã thêm!";
echo "<script type='text/javascript'>alert('$message');</script>";
 header('Location: sanpham.php');
} catch (Exception $e) {
	  $message = "Thành Cong!";
 header('Location: sanpham.php');

}
}
    if (isset($_GET['delid'])) {
$id=$_GET['delid'];
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     

    $stmt = $conn->prepare("DELETE FROM sp WHERE id= '$id'"); 
     
   
    $stmt->execute();
       $message = "Đã Xóa!";
echo "<script type='text/javascript'>alert('$message');</script>";
 header('Location: sanpham.php');
    }

if (isset($_POST['del'])) {
	
$id = $_POST['id'];
try {
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("DELETE FROM sanpham WHERE id ='$id'"); 
     
   
    $stmt->execute();
 
  
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     

    $result = $stmt->fetchAll();
    $message = "Đã Xóa!";
echo "<script type='text/javascript'>alert('$message');</script>";

} catch (Exception $e) {
	  $message = "Lỗi!";
echo "<script type='text/javascript'>alert('$message');</script>";

}
}
if (isset($_POST['up'])) {
	
$id = $_POST['id'];
$tensp = $_POST['tensp'];
$loaisp = $_POST['loaisp'];
$nsx = $_POST['nsx'];
$dungluong = $_POST['dungluong'];
$img = $_POST['img'];
$gia = $_POST['gia'];
$stmt = $conn->prepare("UPDATE sp SET  ten = '$tensp', loaisp = '$loaisp',dungluong = '$dungluong',nsx = '$nsx',img = '$img', gia = '$gia' WHERE id ='$id';"); 
try {
	

     
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt->execute();
 
  
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     

    $result = $stmt->fetchAll();
    $message = "Đã sửa!";
echo "<script type='text/javascript'>alert('$message');</script>";
header('Location: sanpham.php');
} catch (Exception $e) {
	  $message = "Lỗi!";
	  header('Location: sanpham.php');
echo "<script type='text/javascript'>alert('$message');</script>";

}
}

 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin of this website</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="laptop" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<!-- <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> -->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />

<!-- tables -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>

</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
             <!--header start here-->
				<div class="header-main">
					
					
						 
						<div class="profile_details w3l">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="themes/images/admin.jpg" alt=""> </span> 
												<div class="user-name">
													<p>Thông tin</p>
													<span>Admin</span>
												</div>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
										 
											<li> <a href="https://www.facebook.com/huy.khuc.752"><i class="fa fa-user"></i> Thông tin</a> </li> 
											<li> <a href="customer.php"><i class="fa fa-sign-out"></i> Đăng xuất</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
		<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a> <i class="fa fa-angle-right"></i></li>
            </ol>

<!-- grids -->
				<div class="grids">
				
					
				
					<div class="agile-calendar-grid">
						<div class="page">
							
							<div class="w3l-calendar-left">
								<div class="calendar-heading">
<!-- 									<p>Noi dung</p>
 -->								
 					<div class="agile-tables">
					<div class="w3l-table-info">
					  		<h2>Danh mục chức năng của admin:</h2>
						  <div class="row">
						  	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						  		
						  	</div>
						  	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
						  		<div class="list-group">
								    <a href="index1.php" class="list-group-item active">Trang chủ</a>
								    <a href="sanpham.php" class="list-group-item">Sản Phẩm</a>
								    <a href="donhang.php" class="list-group-item">Đơn Hàng</a>
								   
								    <a href="customer.php" class="list-group-item">Đăng xuất</a>
								  </div>
						  	</div>
						  	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						  		
						  	</div>
						  </div>
					</div>
								</div>
								</div>
							</div>
							
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<!-- //grids -->
<!--photoday-section-->	
			
                        
                    	<div class="col-sm-4 wthree-crd">
                            <div class="card">
                                <div class="card-body">
                                    
                                </div>
                            </div>
                        </div>
                        
						<div class="clearfix"></div>
                   
	<!--//photoday-section-->	
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
<p>© 2021 design by  <a href="https://www.facebook.com/huy.khuc.752/" target="_blank">Van Huy</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Trang chủ</span><div class="clearfix"></div></a></li>
										
										
										 <li id="menu-academico" ><a href="donhang.php?id=1"><i class="fa fa-envelope nav_icon"></i><span>Đơn hàng</span><div class="clearfix"></div></a></li>
									<!-- <li><a href="gallery.php"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Gallery</span><div class="clearfix"></div></a></li> -->
									
									 <li id="menu-academico" ><a href="sanpham.php"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Sản phẩm</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										 
										</li>
									

									  <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i>  <span>Khác</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										 <ul id="menu-academico-sub" >
											<li id="menu-academico-boletim" ><a href="calendar.php">Lịch</a></li>
											<!-- <li id="menu-academico-avaliacoes" ><a href="signin.php">Đăng nhập</a></li>
											<li id="menu-academico-avaliacoes" ><a href="signup.php">Đăng ký</a></li> -->
											

										  </ul>
									 </li>
									
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
 <script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="js/raphael-min.js"></script>

</body>
</html>