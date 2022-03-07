<?php

//session_start();
include '../db.php';

$con = mysqli_connect($host, $userName, $userPassword);
$db = mysqli_select_db($con, $dataBaseName);

class ReturnData
{
    public $emailIsValid;
    public $emailExist;
    public $accountCreated;
    public $emptyFields;
    public $errorDump;
    public $nameIsValid;
}

$returnData = new ReturnData();

$email = $_POST['email'];
$password = $_POST['password'];
$name = strip_tags($_POST['name']);
$nameLast = strip_tags($_POST['nameLast']);
$mobile = strip_tags($_POST['mobile']);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $returnData->emailIsValid = false;
    //$emailErr = "Invalid email format";
} else {
    $returnData->emailIsValid = true;


    $sql = "select * from user where email = '$email';";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 0) {
        //email available
        $returnData->emailExist = false;

        $sql = "INSERT INTO `user`( `email`, `password`, `name`, `lastName`, `mobile`,`lastAttempt`) VALUES ('" . $email . "','" . $password . "','" . $name . "','" . $nameLast . "','" . $mobile . "','" . date("Y-m-d h:i:sa") . "');";

        if (mysqli_query($con, $sql)) {
            //Acount created
            $returnData->accountCreated = true;
        } else {
            $returnData->errorDump = "Errors in the INSERT query: ";
            $returnData->accountCreated = false;
        }
    } else {
        //email not avilable
        $returnData->emailExist = true;
    }
}



echo json_encode($returnData);

mysqli_close($con);
