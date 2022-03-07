<?php

include '../db.php';
$productID = $_REQUEST['productID'];
class Product
{
    public $info;
    public $images;
    public $ratings;
    public $offers;
}
function getData($prodId)
{
    $product = new Product();

    $product->info = selectData("SELECT * FROM `product_info` WHERE product_id = '" . $prodId . "';");
    $product->images = selectDatas(
        "SELECT * FROM `product_images` WHERE `product_id` = '" . $prodId . "';"
    );
    $product->ratings = selectDatas(
        "SELECT * FROM `ratings` WHERE `product_id` = '" . $prodId . "';"
    );
    $product->offers = selectDatas(
        "SELECT * FROM `offers` WHERE `product_id` = '" . $prodId . "';"
    );

    return  $product;
}
function selectData($sql)
{
    global $mysqli;
    $return = '';
    if ($result = $mysqli->query($sql)) {
        while ($obj = $result->fetch_object()) {
            $return = $obj;
        }
    }
    return $return;
}
function selectDatas($sql)
{
    global $mysqli;
    $return = [];
    if ($result = $mysqli->query($sql)) {
        while ($obj = $result->fetch_object()) {
            $return[] = $obj;
        }
    }
    return $return;
}
echo json_encode(getData($productID));
