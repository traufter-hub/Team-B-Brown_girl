<?php

//session_start();
include('../db.php');

$email = $_POST['email'];
$password = $_POST['password'];

// $email = $_GET['email'];
// $password = $_GET['password'];

//to prevent from mysqli injection
$email = stripcslashes($email);
$password = stripcslashes($password);

$con = mysqli_connect($host, $userName, $userPassword, $dataBaseName);

$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);

$sql = "select * from user where email = '$email' and password = '$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
        $email = $_SESSION['email'];
        $password = $_SESSION['password'];
        $sql = "select * from user where email = '$email' and password = '$password'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['user_id'] = ($row['user_id']);
                $_SESSION['name'] = ($row['name']);
                $_SESSION['email'] = ($row['email']);
            }
        } else {
            //No record in database
        }
    }

    echo 1;
} else {
    echo 0;
}
