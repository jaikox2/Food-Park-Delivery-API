<?php
include 'ConnectFoodTable.php';

$sql = "SELECT * FROM ".$TbName."";

$result=mysqli_query($conn,$sql);



if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " Detail " . $row["detail"]. " IMG" . $row["img"]. " price" . $row["price"]. " recom" . $row["recom"]. "<br>";
    }
} else {
    echo "0 results";
}


echo "<br>";
echo"file name test <br>";
echo "IMG.jpg <br>";
$temp = explode(".", "IMG.jpg");
$newfilename = round(microtime(true)) . '.' . end($temp);

echo "new file name : ".$newfilename."<br>";

mysqli_close($conn);
?>
