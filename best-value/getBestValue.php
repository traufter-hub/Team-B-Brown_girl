<?php

    include '../db.php';

    $con = mysqli_connect($host, $userName, $userPassword);
    $db = mysqli_select_db($con, $dataBaseName);

    class ProductImage
    {
        // Properties
        public $product_id;
        public $title;
        public $description;
        public $price;
        public $altPrice;
        public $image;
        public $primary;
    }

    // $sql = "SELECT
    //  product_info.product_id,
    // product_info.title,
    //  product_info.description,
    //  product_info.price,
    //  product_info.altPrice,
    //  product_images.is_primary,
    //  product_images.file_name
    //  FROM product_info, product_images, best_value WHERE product_info.product_id = product_images.product_id AND product_images.is_primary = TRUE AND product_info.product_id = best_value.product_id;";

 $sql = "SELECT product_info.*, product_images.is_primary, product_images.file_name FROM product_info, product_images, best_value WHERE product_info.product_id = product_images.product_id AND product_images.is_primary = TRUE AND product_info.product_id = best_value.product_id;";

    $result = mysqli_query($con, $sql);

    $images = [];

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $temp = new ProductImage();
            $temp->image = $row["file_name"];
            $temp->product_id = $row["product_id"];
            $temp->title = $row["title"];
            $temp->description = $row["description"];
            $temp->price = $row["price"];
            $temp->altPrice = $row["altPrice"];
            $images[]  =  $temp;
        }
    } else {
        //No record in database
    }

    echo json_encode($images);
    mysqli_close($con);
