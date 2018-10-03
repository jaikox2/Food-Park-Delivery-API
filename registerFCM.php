<?php

  if(isset($_POST["Token"])){
   $token =$_POST["Token"];
  //  $token="dmsladjsaldjasljdk";

    $conn = mysqli_connect("localhost","root","","fcm");

    $query = "INSERT INTO users(Token) Values ('$token') ON DUPLICATE KEY UPDATE Token = '$token' ; ";

    $result=mysqli_query($conn,$query);

    if($result){
      echo"Token เรียบร้อย";
    }else {
      echo"Token ไม่สำเร็จ";
    }

    mysqli_close($conn);
  }

 ?>
