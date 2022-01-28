<?php

include '../db.php';

$con = mysqli_connect($host, $userName, $userPassword);
$db = mysqli_select_db($con, $dataBaseName);

class ProductImage
{
    // Properties

    public $image;
}

$sql = "SELECT * FROM `comingsoonimg`";
$result = mysqli_query($con, $sql);

$images = [];

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        $temp = new ProductImage();
        $temp->image = $row["img"];
       
        $images[]  =  $temp;
    }
} else {
    //No record in database
}

echo json_encode($images);
mysqli_close($con);
?>