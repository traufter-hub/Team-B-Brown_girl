<?php

// session_start();

include '../../db.php';

$con = mysqli_connect($host, $userName, $userPassword);
$db = mysqli_select_db($con, $dataBaseName);

//$prodId = $_POST['pid'];
$prodId = $_GET['pid'];

class ProductImage
{
    // Properties
    public $product_id;
    public $title;
    public $description;
    public $price;
    public $altPrice;
    public $images;
    public $offers;
    public $discount;
    public $policy;
    public $rating;
    public $ratings;
    public $inside;
    public $front;
    public $dimension;
    public $returnPolicy;
    public $isWishlisted;
}

$sql = "SELECT * FROM `product_info` WHERE product_id = '" . $prodId . "';";
$result = mysqli_query($con, $sql);

$product = new ProductImage();

if (mysqli_num_rows($result) > 0) {
    $avg = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $product->product_id = $row['product_id'];
        $product->title = $row['title'];
        $product->description = $row['description'];
        $product->price = $row['price'];
        $product->altPrice = $row['altPrice'];
        $product->rating = $row['ratings'];
        $product->dimension = $row['dimension'];
        $product->inside = $row['inside'];
        $product->front = $row['front'];
        $product->returnPolicy = $row['returnPolicy'];
        $product->discount = $row['discount'];
    }
} else {
    //No record in database
}



//images
$sql = "SELECT * FROM `product_images` WHERE `product_id` = '" . $prodId . "';";
$result = mysqli_query($con, $sql);

$imgs = [];

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $imgs[]  =  $row["file_name"];
    }
    $product->images = $imgs;
} else {
    //No record in database
}

//ratings
$sql = "SELECT * FROM `ratings` WHERE `product_id` = '" . $prodId . "';";
$result = mysqli_query($con, $sql);


class Ratings
{
    public $user;
    public $rating;
    public $review;
}

$rats = [];

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $temp  =  new Ratings();
        $temp->user =  $row["user_id"];
        $temp->rating =  $row["user_id"];
        $temp->review =  $row["review"];
        $rats[]  =  $temp;
    }
    $product->ratings = $rats;
} else {
    //No record in database
}

//offers
$sql = "SELECT * FROM `offers` WHERE `product_id` = '" . $prodId . "';";
$result = mysqli_query($con, $sql);


class Offer
{
    public $offer_id;
    public $offer_title;
    public $offer_info;
}

$offs = [];

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $xsql = "SELECT * FROM `offer_info` WHERE `offer_id` = '" . $row['offer_id'] . "';";
        $xresult = mysqli_query($con, $xsql);

        $ofs = new Offer();

        if (mysqli_num_rows($xresult) > 0) {
            while ($row = mysqli_fetch_assoc($xresult)) {
                $ofs->offer_id = $row['offer_id'];
                $ofs->offer_title = $row['offer_title'];
                $ofs->offer_info = $row['offer_info'];
            }
            $offs[] = $ofs;
        } else {
            //No record in database
        }
    }
    $product->offers = $offs;
} else {
    //No record in database
}
if (!isset($_SESSION['user_id'])) {
    $user_id = '';
} else {
    $user_id = $_SESSION['user_id'];
}
$sql = "select * from wish_list where product_id = '" . $prodId . "' and user_id = '" . $user_id . "'";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if ($count == 1) {
    $product->isWishlisted = true;
} else {
    $product->isWishlisted = false;
}
echo json_encode($product);

mysqli_close($con);
