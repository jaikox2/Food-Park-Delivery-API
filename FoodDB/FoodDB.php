<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectFoodTable.php';

class upload {
       public $status  = "";
}

@mkdir("upload-img"); 		//ถ้าไม่มีไดเร็กทอรี้นี้ ให้สร้างใหม่

$obj = new upload();

if(is_uploaded_file($_FILES['upload_file']['tmp_name'])) {          //Upload image

do{
  $temp = explode(".", $_FILES['upload_file']['name']);
  $newfilename = round(microtime(true)) . '.' . end($temp);  //check the same image name
}while (file_exists("upload-img/" . $newfilename));

	$target = "upload-img/" . $newfilename;
 	move_uploaded_file($_FILES['upload_file']['tmp_name'], $target);
	/*$obj->status = "uploaded";
	echo json_encode($obj);*/

  $name = $_POST['name'];
  $detail = $_POST['detail'];
  $img = $newfilename;
  $price = $_POST['price'];
  $stamp = $_POST['stamp'];
  $Resid = $_POST['Res_id'];

  $sql = "INSERT INTO ".$TbName." (name, detail, img, price, stamp, Res_id)
  VALUES ('".$name."', '".$detail."', '".$img."', ".$price.", ".$stamp.", ".$Resid.")";

  $result=mysqli_query($conn,$sql);

  if($result){
    $obj->status = "uploaded";
  	echo json_encode($obj);
  }else {
    $obj->status ="Uploaded Error";
    echo json_encode($obj);
  }

} else {
  $obj->status ="Uploaded Error image large";
	echo json_encode($obj);
}

mysqli_close($conn);
?>
