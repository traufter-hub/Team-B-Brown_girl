<?php
include '../../db.php';

class Product
{
    public $product;
    public $images;
}
$parsl = [];

//$parsl->product = selectTableForProduct($query);

foreach (selectTableForProduct() as $prod) {
    $temp = new Product();
    $temp->product = $prod;
    $temp->images = selectData(
        "SELECT * FROM `product_images` WHERE `product_id` = '" . $prod->product_id . "' AND is_primary = 1 ;"
    );
    $parsl[] = $temp;
}

echo json_encode($parsl);

function selectTableForProduct()
{
    global $mysqli;
    $sql = "SELECT product_info.*,orders.order_amount,orders.orderTime,orders.method,orders.status,orders.arival FROM product_info,orders WHERE orders.product_id = product_info.product_id";
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
