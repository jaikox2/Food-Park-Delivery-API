<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectResTable.php';

$user = "pangerwr";
$password1 = "12345";

$sql = "SELECT id FROM ".$TbName." where email='".$user."' and password='".$password1."' ";

$result=mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    $obj->user_id =$row["id"];
    $obj->status ="#1";
    echo json_encode($obj);
} else {
    $obj->user_id ="0";
    $obj->status = "ท่านใส่รหัสผ่านไม่ถูกต้อง";
    echo json_encode($obj);
}

mysqli_close($conn);
?>
