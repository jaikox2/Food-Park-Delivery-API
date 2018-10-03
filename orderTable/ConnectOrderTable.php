<?php

include '../libs/connectDB.php';
$TbName = "tb_order";
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
    order_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    cart_id INT(10) NOT NULL,
    Cus_id INT(10) NOT NULL,
    order_time TIME NOT NULL,
    order_date DATE NOT NULL,
    order_status VARCHAR(20) NOT NULL,
    order_cost DOUBLE(10,2) NOT NULL
    )";
    // check create table
    if (mysqli_query($conn, $sql)) {
        echo "<br>Table ".$TbName." created successfully";
    } else {
        echo "<br>Error creating table: " . mysqli_error($conn);
    }
}

 ?>
