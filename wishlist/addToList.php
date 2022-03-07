<?php

// session_start();
include '../db.php';

$con = mysqli_connect($host, $userName, $userPassword);
$db = mysqli_select_db($con, $dataBaseName);

class ReturnData
{
    public $added;
    public $alreadyAdded;
    public $invalidProduct;
}

$returnData = new ReturnData();

$productId = $_POST['productId'];
$sql = "select * from product_info where product_id = '" . $productId . "'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$pcount = mysqli_num_rows($result);
if ($pcount == 1) {
    $sql = "select * from wish_list where user_id = " . $_SESSION['user_id'] . " and product_id = '" . $productId . "'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $returnData->alreadyAdded = true;
    } else {
        $sql = "INSERT INTO `wish_list`(`user_id`, `product_id`) VALUES (" . $_SESSION['user_id'] . ",'" . $productId . "');";

        if (mysqli_query($con, $sql)) {
            $returnData->added = true;
        } else {
            $returnData->errorDump = "Errors in the INSERT query: ";
            $returnData->added = false;
        }
    }
} else {
    $returnData->invalidProduct = true;
}
echo json_encode($returnData);

mysqli_close($con);
