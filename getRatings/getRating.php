<?php

    include '../db.php';

    $con = mysqli_connect($host,$userName,$userPassword);
	$db = mysqli_select_db($con,$dataBaseName);

    $sql = "SELECT AVG(ratting) as avg FROM `ratings` WHERE product_id = '".$_POST['pid']."';";
	$result = mysqli_query($con,$sql);


    if (mysqli_num_rows($result) > 0) {
    $avg = 0;
    while($row = mysqli_fetch_assoc($result)) {
        $avg = $row['avg'];
    }
    } else {
        //No record in database
    }

    echo($avg);
    mysqli_close($con);
?>