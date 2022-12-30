<?php
  try{
  $conn = new PDO ("mysql:host=localhost;dbname=doan",'root','');
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}catch(Exception $e){
   echo "Lỗi".$e->getMessage();
}


 ?>