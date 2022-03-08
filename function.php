<?php

include 'db.php';
include('config.php');

//echo json_encode(selectTable('user'));
function selectTable($table)
{
    global $mysqli;
    $sql = 'SELECT * FROM ' . $table .
        'WHERE user_id = ' . $_SESSION['user_id'] . ';';
    $return = [];
    if ($result = $mysqli->query($sql)) {
        while ($obj = $result->fetch_object()) {
            $return[] = $obj;
        }
    }
    return $return;
}
function selectTableForUser($table)
{
    global $mysqli;
    $sql = 'SELECT * FROM ' . $table . ';';
    $return = [];
    if ($result = $mysqli->query($sql)) {
        while ($obj = $result->fetch_object()) {
            $return[] = $obj;
        }
    }
    return $return;
}
function selectTableForUserAdd($table)
{
    global $mysqli;
    $sql = 'SELECT * FROM ' . $table . ' WHERE user_id = ' . $_SESSION['user_id'] . ';';
    //echo $sql;
    $return = [];
    if ($result = $mysqli->query($sql)) {
        while ($obj = $result->fetch_object()) {
            $return[] = $obj;
        }
    }
    return $return;
}
//echo json_encode(selectUserData());
function selectUserData()
{
    $user_id = $_SESSION['user_id'];
    global $mysqli;
    $sql = 'SELECT `user_id`,`email`,`name`,`lastName`,`mobile`,`isVerified`,`attempts`,`lastAttempt`,`gender`,`dob` FROM `user` WHERE user_id = ' . $user_id . ';';
    $return = '';
    if ($result = $mysqli->query($sql)) {
        while ($obj = $result->fetch_object()) {
            $return = $obj;
        }
    }
    return $return;
}

function updateOtpAtempt($attempts)
{
    global $mysqli;
    $user_id = $_SESSION['user_id'];
    $sql = "UPDATE `user` SET attempts=" . $attempts . ", lastAttempt='" . date("Y-m-d h:i:sa") . "' WHERE user_id = " . $user_id . ";";
    if ($mysqli->query($sql) === true) {
        return 1;
    } else {
        return 0;
    }
}
