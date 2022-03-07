<?php

if (!isset($_SESSION['user_id'])) {
    session_start();
}

$host = "localhost";
$userName = "root";
$userPassword = "";
$dataBaseName = "thebrowngirl";

//object oriented
$mysqli = new mysqli($host, $userName, $userPassword, $dataBaseName);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}
