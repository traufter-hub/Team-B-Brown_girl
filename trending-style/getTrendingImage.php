<?php

    include '../db.php';

    $con = mysqli_connect($host,$userName,$userPassword);
	$db = mysqli_select_db($con,$dataBaseName);

    class Product {
  // Properties
        public $product_id;
        public $image;
    }

     $sql = "SELECT product_info.product_id, product_images.is_primary, product_images.file_name FROM product_info, product_images, trending_images WHERE product_info.product_id = product_images.product_id AND product_images.is_primary = TRUE AND product_info.product_id = trending_images.product_id LIMIT 6;";
    
	$result = mysqli_query($con,$sql);

    $images = [];

    if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {

        $temp = new Product();
        $temp->image = $row["file_name"];
        $temp->product_id = $row["product_id"];
        $images[]  =  $temp;
        
    }
    } else {
        //No record in database
    }

    echo json_encode($images);
    mysqli_close($con);
?>