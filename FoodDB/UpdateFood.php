<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectFoodTable.php';

class upload {
       public $status  = "";
}

@mkdir("upload-img"); 		//ถ้าไม่มีไดเร็กทอรี้นี้ ให้สร้างใหม่

$obj = new upload();
$newfilename = $_POST['img'];

if(isset($_FILES['upload_file'])) {          //Upload image

  is_uploaded_file($_FILES['upload_file']['tmp_name']);

    //check the same image name

	$target = "upload-img/" . $newfilename;
 	move_uploaded_file($_FILES['upload_file']['tmp_name'], $target);
/*	$obj->status = "uploaded";
	echo json_encode($obj);*/

  $food_id =$_POST['food_id'];
  $name = $_POST['name'];
  $detail = $_POST['detail'];
  $img = $newfilename;
  $price = $_POST['price'];
  $stamp = $_POST['stamp'];
  $Resid = $_POST['Res_id'];

  /*$food_id = 6;
  $name = "checken";
  $detail = "Egg";
  $img = "newFile";
  $price = 30.4;
  $stamp = 10.4;
  $Resid = 4;*/

//  $sql = "UPDATE food SET name='Doe',detail='egg',img='newfile',price=30,stamp=40.5,Res_id=8 WHERE id=6";
$sql = "UPDATE ".$TbName." SET name='".$name."',detail='".$detail."',img='".$img."',price=".$price.",stamp=".$stamp.",Res_id=".$Resid." WHERE id=".$food_id."";

  $result=mysqli_query($conn,$sql);

  if($result){
    $obj->status = "update success";
  	echo json_encode($obj);
  }else {
    $obj->status ="update Error";
    echo json_encode($obj);
  }

} else {
  $food_id =$_POST['food_id'];
  $name = $_POST['name'];
  $detail = $_POST['detail'];
  $img = $newfilename;
  $price = $_POST['price'];
  $stamp = $_POST['stamp'];
  $Resid = $_POST['Res_id'];

  /*$food_id = 6;
  $name = "checken";
  $detail = "Egg";
  $img = "newFile";
  $price = 30.4;
  $stamp = 10.4;
  $Resid = 4;*/

//  $sql = "UPDATE food SET name='Doe',detail='egg',img='newfile',price=30,stamp=40.5,Res_id=8 WHERE id=6";
$sql = "UPDATE ".$TbName." SET name='".$name."',detail='".$detail."',img='".$img."',price=".$price.",stamp=".$stamp.",Res_id=".$Resid." WHERE id=".$food_id."";

  $result=mysqli_query($conn,$sql);

  if($result){
    $obj->status = "update success";
  	echo json_encode($obj);
  }else {
    $obj->status ="update Error";
    echo json_encode($obj);
  }
}

mysqli_close($conn);
?>
