<?php
include '../../function.php';

class JSONDATA
{
    public $invalidData;
    public $success;
    public $errorData;
    public $emptyField;
}
$json = new JSONDATA();

try {
    if (sizeof(selectTableForUser('address')) > 0) {
        $stmt = $mysqli->prepare("UPDATE address SET name = ?, mobile = ?, pincode = ?, locality = ?, building = ?, landmark = ?, city = ?, state= ? WHERE user_id = ?;");
        $stmt->bind_param("ssssssssi", $name, $mobile, $pincode, $locality, $building, $landmark, $city, $state, $user_id);
    } else {
        // prepare and bind
        $stmt = $mysqli->prepare("INSERT INTO address (user_id,name, mobile, pincode, locality, building, landmark, city, state) VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssssss", $user_id, $name, $mobile, $pincode, $locality, $building, $landmark, $city, $state);
    }
    $json->emptyField = false;
    // set parameters and execute
    $user_id = $_SESSION['user_id'];
    $name = snatizer($_REQUEST['name'], FILTER_SANITIZE_STRING);
    $mobile = snatizer($_REQUEST['mobile'], FILTER_SANITIZE_STRING);
    $pincode = snatizer($_REQUEST['pincode'], FILTER_SANITIZE_STRING);
    $locality = snatizer($_REQUEST['locality'], FILTER_SANITIZE_STRING);
    $building =  snatizer($_REQUEST['building'], FILTER_SANITIZE_STRING);
    $landmark = snatizer($_REQUEST['landmark'], FILTER_SANITIZE_STRING);
    $city = snatizer($_REQUEST['city'], FILTER_SANITIZE_STRING);
    $state = snatizer($_REQUEST['state'], FILTER_SANITIZE_STRING);
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

echo json_encode($json);
//echo json_encode($_REQUEST);
