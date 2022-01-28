<?php

    include '../db.php';

    $con = mysqli_connect($host,$userName,$userPassword);
	$db = mysqli_select_db($con,$dataBaseName);

    class ProductImage {
  // Properties
        public $image;
        public $product_id;
    }

    $sql = "SELECT * FROM `carouselimages`";
	$result = mysqli_query($con,$sql);

    $images = [];

    if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {

        $temp = new ProductImage();
        $temp->image = $row["fileName"];
        $temp->product_id = $row["product_id"];
        $images[]  =  $temp;
    }
    } else {
        //No record in database
    }

    echo json_encode($images);
    mysqli_close($con);
?>