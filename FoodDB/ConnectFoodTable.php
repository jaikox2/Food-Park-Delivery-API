<?php

include '../libs/connectDB.php';
$TbName = "Food";
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
    name VARCHAR(150) NOT NULL,
    detail TEXT NOT NULL,
    img VARCHAR(500) NOT NULL,
    price DOUBLE(10,2) NOT NULL,
    recom VARCHAR(50) DEFAULT 'NotRecom',
    stamp DOUBLE(10,2) DEFAULT 0.00,
    Res_id INT NOT NULL
    )";
    // check create table
    if (mysqli_query($conn, $sql)) {
        //echo "<br>Table ".$TbName." created successfully";
    } else {
        //echo "<br>Error creating table: " . mysqli_error($conn);
    }
}

 ?>
