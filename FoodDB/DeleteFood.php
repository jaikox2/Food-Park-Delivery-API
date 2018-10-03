<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectFoodTable.php';


  $Foodid = $_POST['food_id'];
  $img = $_POST['img'];
  
   unlink("upload-img/".$img);

  $sql = "DELETE FROM ".$TbName." where id=".$Foodid." ";


  $result=mysqli_query($conn,$sql);

  if($result){
    echo"ลบเรียบร้อย";
  }else {
    echo"ลบไม่สำเร็จ";
  }

mysqli_close($conn);
?>
