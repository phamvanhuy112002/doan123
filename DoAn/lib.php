<?php

function showcart(){
	$ttgh="";
	if(isset($_SESSION['cart']) && (is_array($_SESSION['cart']))){
		$tong=0;
		for ($i=0; $i < sizeof($_SESSION['cart']) ; $i++) { 
			$tt=$_SESSION['cart'][$i][3]*$_SESSION['cart'][$i][4];
			$tong+=$tt;
			$ttgh.= '<tr>
									<td>'.($i+1).'</td>
									<td><img src="themes/images/cloth/'.$_SESSION['cart'][$i][0].'" width="50px" height="50px"></td>
									<td>'.$_SESSION['cart'][$i][1].'</td>
									<td>'.$_SESSION['cart'][$i][2].'</td>
									<td>'.$_SESSION['cart'][$i][4].'.000.000đ</td>
									<td>'.$_SESSION['cart'][$i][3].'</td>
									<td>'.$tt.'.000.000đ</td>
									<td><a href="cart.php?delid='.$i.'" >Xóa</a></td>
								</tr>	

								';
				
		}
		$ttgh.= '<tr>
									<td>&nbsp;</td>
									<td>&nbsp;Tổng giỏ hàng:</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><strong>'.$tong.'.000.000đ</strong></td>
								</tr>';
	}
	return $ttgh;

}
function tong(){
	$tong=0;
	if(isset($_SESSION['cart']) && (is_array($_SESSION['cart']))){
		if(sizeof($_SESSION['cart'])>0){

		}
		for ($i=0; $i < sizeof($_SESSION['cart']) ; $i++) { 
			$tt=$_SESSION['cart'][$i][3]*$_SESSION['cart'][$i][4];
			$tong+=$tt;
			
				
		}	
			
	}
	return $tong;

}
function taodonhang($ten,$diachi,$sdt,$email,$tong){
	$conn=ketnoidb();
	$sql=("INSERT INTO bill (ten, diachi, sdt, email, tong)
VALUES ('$ten', '$diachi', '$sdt', '$email', '$tong')");
$conn->exec($sql);
  $last_id = $conn->lastInsertId();
  $conn = null;
  return $last_id;

     
}
function taogiohang($tensp,$img,$gia,$sl,$tt,$idbill){
	$conn=ketnoidb();

	$sql=("INSERT INTO cart (tensp, img, gia, sl, tong, idbill)
VALUES ('$tensp', '$img', '$gia', '$sl', '$tt','$idbill')");
$conn->exec($sql);

  $conn = null;


     
}
function ketnoidb(){
	$servername="localhost";
    $username="root";
    $password="";
    $dbname="doan";
     try {
     	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     	return $conn;
     } catch (Exception $e) {
     	echo "Connection failed: " . $e->getMessage();
     }

} ?>