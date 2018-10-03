<?php

include '../libs/connectDB.php';
$TbName = "tb_cart";
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
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    cart_id INT(10) NOT NULL,
    food_id INT(10) NOT NULL,
    Cus_id INT(10) NOT NULL,
    cart_amount INT(10) NOT NULL,
    cart_status VARCHAR(10) NOT NULL
    )";
    // check create table
    if (mysqli_query($conn, $sql)) {
        echo "<br>Table ".$TbName." created successfully";
    } else {
        echo "<br>Error creating table: " . mysqli_error($conn);
    }
}

 ?>
