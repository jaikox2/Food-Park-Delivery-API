<?php

include '../libs/connectDB.php';
$TbName = "tb_delivery";
  // check table exists
$sql="DESCRIBE ".$TbName."";
$result=mysqli_query($conn,$sql);
if ($result) {
  // check num row table
  $row = mysqli_num_rows($result);
  //echo "<br>row: ".$row;
    if($row != 0) {
      //  echo "<br>Table exists";
    }
}
else {
  //  echo "<br>Table does not exist";
    // sql to create table
    $sql = "CREATE TABLE ".$TbName." (
    deli_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    order_id INT(10) NOT NULL,
    deliman_id INT(10) NOT NULL,
    deli_address Varchar(100) NOT NULL,
    deli_distance double(10,2) NOT NULL,
    deli_phone VARCHAR(10) NOT NULL,
    deli_addDetail TEXT NOT NULL,
    deli_name Varchar(255) NOT NULL,
    deli_distanceCost double(10,2) NOT NULL
    )";
    // check create table
    if (mysqli_query($conn, $sql)) {
        echo "<br>Table ".$TbName." created successfully";
    } else {
        echo "<br>Error creating table: " . mysqli_error($conn);
    }
}

 ?>
