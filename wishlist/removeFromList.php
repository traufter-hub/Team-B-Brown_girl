<?php

// session_start();
include '../db.php';

$con = mysqli_connect($host, $userName, $userPassword);
$db = mysqli_select_db($con, $dataBaseName);

class ReturnData
{
    public $exist;
    public $deleted;
}

$returnData = new ReturnData();

$productId = $_POST['productId'];

$sql = "DELETE FROM `wish_list` WHERE `user_id` = " . $_SESSION['user_id'] . " AND `product_id` = '" . $productId . "';";

if (mysqli_query($con, $sql)) {
    $returnData->deleted = true;
} else {
    $returnData->errorDump = "Errors in the INSERT query: ";
    $returnData->exist = false;
    $returnData->deleted = false;
}

echo json_encode($returnData);

mysqli_close($con);
