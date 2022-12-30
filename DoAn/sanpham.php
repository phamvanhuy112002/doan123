<?php
session_start();
include 'connect.php';
	
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     

    $stmt = $conn->prepare("SELECT * FROM sp "); 
     
   
    $stmt->execute();
 
  
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     

    $result = $stmt->fetchAll();


	    
 ?>	
<!DOCTYPE HTML>
<html>
<head>
<title>Thêm</title>
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
                <li class="breadcrumb-item"><a href="index1.php">Trang chủ</a><i class="fa fa-angle-right"></i>Sản phẩm</li>
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
 							
		<h2>Danh sách sản phẩm</h2>
		<table id="table">
			<thead>
				<tr>

					
					<th>TT</th>
				
					<th>Tên </th>
					<th>Loại</th>
					<th>Dung luong</th>
					
					<th>NSX</th>
				
					<th>Giá</th>
					<th>Ảnh</th>
		       <th>Xóa</th>
					<th>Sửa</th>
					
				</tr>
			</thead>
		
				<?php
				$i=0;
				foreach ($result as $item){
					$i+=1;

                      echo '<tr class="danger">
          
          <td>'.$i.'</td>
					
					<td>'.$item['ten'].'</td>
					<td>'.$item['loaisp'].'</td>
					<td>'.$item['dungluong'].'</td>
					<td>'.$item['nsx'].'</td>
				
					<td>'.$item['gia'].'.000.000đ</td>
					<td><img src="themes/images/cloth/'.$item['img'].'" height="25px" width="25px"/></td>
					<td ><a href="index1.php?delid='.$item['id'].'" >Xóa</a ></td>
					<td><a href="sanpham.php?upid='.$item['id'].'" >Sửa</a></td>
					
				</tr>';
				} ?>

		</table>
		<a href="sanpham.php?them=1"><button class="btn" type="button"> Thêm sản phẩm </button></a>
		
	</div>
	<?php
	if (isset($_GET['them']) && $_GET['them']==1) {
	
	echo '
					<div class="w3l-table-info">
					  <h2>Thêm sản phẩm</h2>
					  <div class="row">
					  	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					  		
					  	</div>
					  	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
					  		<form action="index1.php" method="POST">
								<div class="form-group">
							  <label for="ma">Mã sản phẩm:</label>
							  <input type="text" class="form-control" id="ma" name="id">
							</div>
							<div class="form-group">
							  <label for="ten">Tên sản phẩm:</label>
							  <input type="text" class="form-control" id="ten" name="tensp">
							</div>
							
							
							<div class="form-group">
							  <label for="loai">Loại:</label>
							  <input type="textarea" class="form-control" id="loai" name="loaisp">
							</div>
							<div class="form-group">
							  <label for="nsx">Dung luong:</label>
							  <input type="text" class="form-control" id="nsx" name="dungluong">
							</div>
							<div class="form-group">
							  <label for="nsx">Nsx:</label>
							  <input type="text" class="form-control" id="nsx" name="nsx">
							</div>
							<div class="form-group">
							  <label for="nsx">Đường dẫn ảnh:</label>
							  <input type="text" class="form-control" id="nsx" name="img">
							</div>
							<div class="form-group">
							  <label for="gia">Giá bán:</label>
							  <input type="textarea" class="form-control" id="gia" name="gia">
							</div>
						
							<input type="submit" name="add"  class="btn btn-primary large" value="Thêm sản phẩm">
							</form>
					  	</div>
					  	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					  		
					  	</div>
					  </div>
					 
					</div>';

				}

					
if (isset($_GET['upid'])) {
	$id=$_GET['upid'];

    $stmt = $conn->prepare("SELECT * FROM sp WHERE id='$id' "); 
     
   
    $stmt->execute();
 
  
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     

    $result = $stmt->fetchAll();
    foreach ($result as $item){}

	echo'
	

  <div class="w3l-table-info">
					  <h2>Sửa</h2>
					  <div class="row">
					  	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					  		
					  	</div>
					  	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
					  		<form action="index1.php" method="POST">
								<div class="form-group">
							  <label for="ma">Mã sản phẩm:</label>
							  <input type="text" class="form-control" id="ma" name="id" value="'.$item['id'].'">
							</div>
							<div class="form-group">
							  <label for="ten">Tên sản phẩm:</label>
							  <input type="text" class="form-control" id="ten" name="tensp" value="'.$item['ten'].'">
							</div>
							
							
							<div class="form-group">
							  <label for="loai">Loại:</label>
							  <input type="textarea" class="form-control" id="loai" name="loaisp" value="'.$item['loaisp'].'">
							</div>
							<div class="form-group">
							  <label for="nsx">Dung luong:</label>
							  <input type="text" class="form-control" id="nsx" name="dungluong" value="'.$item['dungluong'].'">
							</div>
							<div class="form-group">
							  <label for="nsx">Nsx:</label>
							  <input type="text" class="form-control" id="nsx" name="nsx" value="'.$item['nsx'].'"> 
							</div>
							<div class="form-group">
							  <label for="nsx">Đường dẫn ảnh:</label>
							  <input type="text" class="form-control" id="nsx" name="img" value="'.$item['img'].'">
							</div>
							<div class="form-group">
							  <label for="gia">Giá bán:</label>
							  <input type="textarea" class="form-control" id="gia" name="gia" value="'.$item['gia'].'">
							</div>
							
							<input type="submit" name="up"  class="btn btn-primary large" value="Xác nhận">
							</form>
					  	</div>
					  	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					  		
					  	</div>
					  </div>
					 
					</div>';
}
  ?>
  <!-- end mymodal -->
  <!-- sanpham -->
    <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Bạn có chắc chắn muốn xóa hay không?</h4>
        </div>
        <div class="modal-body">
          
	
				<button type="submit" class="btn btn-default" style="margin-left: 43%;">Xóa
				</button>
			
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- end modal sanpham -->
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

		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	<p>© 2021 design by  <a href="https://www.facebook.com/profile.php?id=100013161517621" target="_blank">Van Huy </a> </p>
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