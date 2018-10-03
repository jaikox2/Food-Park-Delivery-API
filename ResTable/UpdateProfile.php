<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectResTable.php';


class upload {
       public $status  = "";
}

$obj = new upload();

$res_name =$_POST['resname'];
$res_add = $_POST['address'];
$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$addmap = $_POST['addmap'];
$Resid = $_POST['Res_id'];


/*$res_name ="fesfesf";
$res_add = "fsdfds";
$name = "jiojh";
$lastname ="kofd90";
$email = "iu09uo";
$phone = "vnidniu";
$addmap = "4789305fd";
$Resid = 1;*/

$sql = "UPDATE ".$TbName." SET 	resname='".$res_name."',firstname='".$name."',lastname='".$lastname."',address='".$res_add."',phone='".$phone."',addmap='".$addmap."' WHERE id=".$Resid."";

$result=mysqli_query($conn,$sql);

if($result){
  $obj->status = "update success";
  echo json_encode($obj);
}else {
  $obj->status ="update Error";
  echo json_encode($obj);
}

mysqli_close($conn);
?>
