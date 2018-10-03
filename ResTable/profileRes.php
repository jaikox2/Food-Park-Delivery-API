<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectResTable.php';

class resUser {
       public $resname = "";
       public $address  = "";
       public $firstname  = "";
       public $lastname  = "";
       public $email  = "";
       public $phone  = "";
       public $addmap  = "";
}

$obj = new resUser();

$Resid = $_POST['Res_id'];
//$Resid = "4";

$sql = "SELECT * FROM ".$TbName." where id=".$Resid." ";

$result=mysqli_query($conn,$sql);

$data = mysqli_fetch_assoc($result);

$obj->resname =$data["resname"];
$obj->address =$data["address"];
$obj->firstname =$data["firstname"];
$obj->lastname =$data["lastname"];
$obj->email =$data["email"];
$obj->phone =$data["phone"];
$obj->addmap =$data["addmap"];

$json_data=json_encode($obj);

echo $json_data;

mysqli_close($conn);

?>
