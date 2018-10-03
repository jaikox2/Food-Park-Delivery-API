<?php
header("Content-type: text/plain; charset=utf-8");

$conn = mysqli_connect("localhost","root","","FPDdb");
$TbName = "tb_order";

  $Resid = $_POST['Res_id'];
  //$Resid = "4";

  $sql = "SELECT * FROM ".$TbName." where res_id=".$Resid." ";

  //$sql = "SELECT * FROM ".$TbName."";

  $result=mysqli_query($conn,$sql);

  $object_array = array();

  while($data = mysqli_fetch_assoc($result)) {
    array_push($object_array,$data);
  }
  $json_array = json_encode($object_array);

  echo $json_array;

mysqli_close($conn);
?>
