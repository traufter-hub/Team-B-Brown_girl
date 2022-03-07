<?php
include '../../function.php';

function selectTableForUser2()
{
    global $mysqli;
    $sql = 'SELECT * FROM checkoutlist WHERE user_id = ' . $_SESSION['user_id'] . ';';
    $return = [];
    if ($result = $mysqli->query($sql)) {
        while ($obj = $result->fetch_object()) {
            $return[] = $obj;
        }
    }
    return $return;
}
if (isset($_REQUEST['method'])) {
    if (selectUserData()->isVerified == 1) {
        doAdd();
    } else {
        echo "Please Verify your number";
    }
} else echo "Please select payment method";

function doAdd()
{
    if (sizeof(selectTableForUser2()) > 0) {
        if (doPayment()) {
            foreach (selectTableForUser2() as $product) {
                //echo json_encode($product->product_id);
                insertDataInOrders($product->product_id);
                echo "Order Placed.";
            }
        }
    } else {
        echo "No Product in Cart";
    }
}

function insertDataInOrders($pid)
{
    global $mysqli;
    $stmt = $mysqli->prepare("
    INSERT 
    INTO orders (
        user_id,
        product_id, 
        address,
        orderTime,
        method,
        status, 
        arival
    ) 
    VALUES (?,?,?,?,?,?,?)");
    $stmt->bind_param(
        "issssss",
        $user_id,
        $product_id,
        $address,
        $orderTime,
        $method,
        $status,
        $arival
    );

    $user_id = $_SESSION['user_id'];
    $product_id = $pid;
    $address = json_encode(selectTableForUserAdd('address')[0]);
    $orderTime = date("Y-m-d h:i:sa");
    $method = $_REQUEST['method'];
    $status = "NA";
    $arival = "NA";

    if ($stmt->execute()) {
        deleteCartItem($pid);
    } else {
    }
}
function deleteCartItem($pid)
{
    global $mysqli;
    $stmt = $mysqli->prepare("DELETE FROM checkoutlist WHERE user_id = ? AND product_id = ?");
    $stmt->bind_param(
        "is",
        $user_id,
        $product_id
    );
    $product_id = $pid;
    $user_id = $_SESSION['user_id'];
    $stmt->execute();
}
function doPayment()
{
    return true;
}
