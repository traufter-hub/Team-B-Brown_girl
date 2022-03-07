<?php
include '../../function.php';

class JSONDATA
{
    public $invalidData;
    public $success;
    public $errorData;
    public $emptyField;
    public $other;
}
$json = new JSONDATA();

try {

    $stmt = $mysqli->prepare("UPDATE user SET password = ? WHERE user_id = ?;");
    $stmt->bind_param("si", $password, $user_id);

    $json->emptyField = false;
    // set parameters and execute
    $user_id = $_SESSION['user_id'];
    $password = snatizer($_REQUEST['password'], FILTER_SANITIZE_STRING);

    if (!$json->emptyField) {
        if ($stmt->execute()) {
            $json->success = true;
        } else {
            $json->success = false;
            $json->errorData = $mysqli->error;
        }
    }
    $stmt->close();
} catch (Exception $e) {
    $json->success = false;
    $json->errorData = $e->getMessage();
}
function snatizer($value, $FILTER)
{
    global $json;
    //echo strlen($value);
    if ($value === "") {
        $json->emptyField = true;
    }
    if (!filter_var($value, $FILTER) === false) {
        $json->invalidData = false;
        $json->emptyField = false;
    } else {
        $json->invalidData = true;
        $json->emptyField = true;
    }
    return filter_var($value, $FILTER);
}
$json->other = $_REQUEST;
echo json_encode($json);
//echo json_encode($_REQUEST);
