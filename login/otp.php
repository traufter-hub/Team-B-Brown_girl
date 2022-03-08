<?php

include '../function.php';
include './vendor/autoload.php';

$user = selectUserData();

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

class ReturnData
{
    public $timer;
    public $sended;
    public $attempts;
    public $lastOtp;

    //FOR TESTING OLNLY
    public $other;
}
$json = new ReturnData();
function sendMsg()
{
    global  $json;

    $json->attempts = $_SESSION["attempts"];
    updateOtpAtempt($_SESSION["attempts"]);

    if (!isset($_SESSION["otp"])) {
        $_SESSION["otp"] = new OTP();
    }
    $countdown = strtotime(date("Y-m-d h:i:sa")) - strtotime($_SESSION["otp"]->timeStamp);

    if ($countdown > 300) {
        $_SESSION["otp"] = new OTP();
    }

    global $sid;
    global $token;
    global $from;

    $client = new Twilio\Rest\Client($sid, $token);


    $message = $client->messages
        ->create(
            "+91" . selectUserData()->mobile, // to
            [
                "body" => "Your OTP to verify your account is : " . $_SESSION["otp"]->otp,
                "from" => $from
            ]
        );

    $json->timer = $countdown;
    $json->sended = 0;

    if (1) {
        //if ($message->status == "sent" || $message->status == "queued") {
        $json->sended = 1;
    }

    //FOR TESTING ONLY
    $json->other =   ([
        // $_SESSION["otp"],
        0
        //$message->status
    ]);
}
//sendMsg();

//$lastAttempt =  strtotime(selectUserData()->lastAttempt)-strtotime(date("Y-m-d h:i:sa"));

//echo date("Y-m-d h:i:sa", strtotime(selectUserData()->lastAttempt))."\n";
//echo date("Y-m-d h:i:sa")."\n";
$lastAttempt = abs(strtotime(date("Y-m-d h:i:sa")) - strtotime(date("Y-m-d h:i:sa", strtotime(selectUserData()->lastAttempt))));

if ($lastAttempt > 86400) {
    $_SESSION["attempts"] = 0;
    updateOtpAtempt($_SESSION["attempts"]);
}
//echo selectUserData()->isVerified." ".selectUserData()->attempts;
if (selectUserData()->isVerified == 0 && (int)selectUserData()->attempts < 5) {
    //echo '345';
    $_SESSION["attempts"] += 1;
    sendMsg();
}
//sendMsg();
function generateRandomString($length = 6)
{
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$json->lastOtp = selectUserData()->lastAttempt;
echo json_encode($json);
