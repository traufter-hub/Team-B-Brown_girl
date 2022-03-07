<?php
include '../db.php';

$query = $_REQUEST['query'];

class Product
{
    public $product;
    public $images;
}
$parsl = [];

//$parsl->product = selectTableForProduct($query);

foreach (selectTableForProduct($query) as $prod) {
    $temp = new Product();
    $temp->product = $prod;
    $temp->images = selectData(
        "SELECT * FROM `product_images` WHERE `product_id` = '" . $prod->product_id . "' AND is_primary = 1 ;"
    );
    $parsl[] = $temp;
}

echo json_encode($parsl);

function selectTableForProduct($query)
{
    global $mysqli;
    $sql = "SELECT * FROM product_info WHERE title LIKE '%" . $query . "%';";
    $return = [];
    if ($result = $mysqli->query($sql)) {
        while ($obj = $result->fetch_object()) {
            $return[] = $obj;
        }
    }
    return $return;
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
