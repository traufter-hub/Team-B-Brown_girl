<?php

include '../../db.php';

$con = mysqli_connect($host, $userName, $userPassword);
$db = mysqli_select_db($con, $dataBaseName);

class ReturnData
{
    public $added;
    public $alreadyAdded;
    public $invalidProduct;
    public $prodCount;
    public $errorDump;
}
try {
    $returnData = new ReturnData();

    $productId = $_POST['productId'];
    $sql = "select * from product_info where product_id = '" . $productId . "'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $pcount = mysqli_num_rows($result);
    if ($pcount == 1) {
        //echo ("Product Exist");
        $sql = "select * from checkoutlist where product_id = '" . $productId . "' AND user_id=" . $_SESSION['user_id'] . ";";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        $returnData->prodCount = $count;
        if ($count > 0) {
            //echo ("Product in cart Exist");
            $returnData->alreadyAdded = true;
            $sql = "UPDATE `checkoutlist` SET `amount`= `amount`+1 WHERE `user_id` = " . $_SESSION['user_id'] . " AND `product_id` = '" . $productId . "';";
            // echo ("$sql");
            if (mysqli_query($con, $sql)) {
                $returnData->added = true;
            } else {
                $returnData->errorDump = "Errors in the INSERT query: ";
                $returnData->added = false;
            }
        } else {
            //echo ("Product  cart Not Exist");
            $sql = "INSERT INTO `checkoutlist`(`user_id`, `product_id`,`amount`) VALUES (" . $_SESSION['user_id'] . ",'" . $productId . "',1);";

            if (mysqli_query($con, $sql)) {
                $returnData->added = true;
            } else {
                $returnData->errorDump = "Errors in the INSERT query: ";
                $returnData->added = false;
            }
        }
    } else {
        //echo ("Product Not Exist");
        $returnData->invalidProduct = true;
    }
} catch (Exception $e) {
}
echo json_encode($returnData);

mysqli_close($con);
