<?php

include '../db.php';

class OTP
{
    public $otp;
    public $timeStamp;

    public function __construct()
    {
        $this->otp = generateRandomString();
        $this->timeStamp = date("Y-m-d h:i:sa");
    }
}
class SendData
{
    public $isVerified;
}
$otp = $_REQUEST['otp'];
$SendData = new  SendData();
if ($otp==$_SESSION["otp"]->otp) {
    global $mysqli;
    $user_id = $_SESSION['user_id'];
    $sql = "UPDATE `user` SET isVerified=1 WHERE user_id = ".$user_id.";";
    if ($mysqli->query($sql) === true) {
        $SendData->isVerified = true;
    } else {
        $SendData->isVerified = false;
    }
} else {
    $SendData->isVerified = false;
}
 echo json_encode($SendData);
