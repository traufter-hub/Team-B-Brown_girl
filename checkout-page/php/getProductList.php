<?php

include '../../db.php';

$con = mysqli_connect($host, $userName, $userPassword);
$db = mysqli_select_db($con, $dataBaseName);

///////////////////////

class ProductList
{
    public $product;
    public $amount;
}
class Product
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
    public $deliveryCharge;
    public $deliveryDays;
}
class ProductImages
{
    public $file;
    public $isPrimary;

    public function __construct($file, $isPrimary)
    {
        $this->file = $file;
        $this->isPrimary = $isPrimary;
    }
}
class Ratings
{
    public $user;
    public $rating;
    public $review;
}
class Offer
{
    public $offer_id;
    public $offer_title;
    public $offer_info;
}
//echo ($_SESSION['user_id']);
$sql = "SELECT * FROM `checkoutlist` WHERE `user_id` = " . $_SESSION['user_id'] . ";";
$result = mysqli_query($con, $sql);
$productList = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        //$prod->product = $row["product_id"];
        $prod = new ProductList();
        $prod->amount = $row["amount"];

        ///////////


        ///////////
        $prod->product = getProduct($row["product_id"]);
        $productList[] = $prod;
    }
} else {
    //No record in database
}

function getProduct($prodId)
{
    include '../../db.php';
    $con = mysqli_connect($host, $userName, $userPassword);
    $db = mysqli_select_db($con, $dataBaseName);


    $sql = "SELECT * FROM `product_info` WHERE product_id = '" . $prodId . "';";
    $result = mysqli_query($con, $sql);

    $product = new Product();

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
            $product->deliveryCharge =
                $row['deliver_charge'];
            $product->deliveryDays =
                $row['deliver'];
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
            $imgs[]  =  new ProductImages($row["file_name"], $row["is_primary"]);
        }
        $product->images = $imgs;
    } else {
        //No record in database
    }

    //ratings
    $sql = "SELECT * FROM `ratings` WHERE `product_id` = '" . $prodId . "';";
    $result = mysqli_query($con, $sql);



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

    return $product;
    //return json_encode($product);
    //return $a + $b;
}

echo json_encode($productList);
//////////////////////
//$prodId = $_POST['pid'];

mysqli_close($con);
