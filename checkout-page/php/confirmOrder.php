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
function selectTableForProductInfo($pid)
{
    global $mysqli;
    $sql = "SELECT * FROM product_info WHERE product_id = '" . $pid . "';";
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

                $amount = floatval(selectTableForProductInfo($product->product_id)[0]->deliver_charge) + floatval(selectTableForProductInfo($product->product_id)[0]->price);

                insertDataInOrders($product->product_id, $amount);
            }
            echo "Order Placed.";
        }
    } else {
        echo "No Product in Cart";
    }
}

function insertDataInOrders($pid, $amount)
{
    global $mysqli;
    $stmt = $mysqli->prepare("
    INSERT 
    INTO orders (
        user_id,
        product_id, 
        order_amount,
        address,
        orderTime,
        method,
        status, 
        arival
    ) 
    VALUES (?,?,?,?,?,?,?,?)");
    $stmt->bind_param(
        "isdsssss",
        $user_id,
        $product_id,
        $order_amount,
        $address,
        $orderTime,
        $method,
        $status,
        $arival
    );

    $user_id = $_SESSION['user_id'];
    $product_id = $pid;
    $order_amount = $amount;
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
