<?php
include "../config.php";
include('../function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Advertise</title>


    <link rel="icon" sizes="any" type="image/svg+xml" href=" <?php global $domain;
                                                                echo $domain; ?>/favicon.svg">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS -->

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">
    <!-- icons -->
    <script src="https://kit.fontawesome.com/da9dabfa40.js" crossorigin="anonymous"></script>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>

    <style>
        html,
        body {

            padding: 0px !important;
            margin: 0px !important;
            overflow-y: none;
        }

        #mainPart {
            display: flex;
            margin: 30px;
            justify-content: center;
            align-items: stretch;
            align-content: center;
            flex-direction: column;
            flex-wrap: nowrap;
        }

        p {
            font-size: larger;
        }
    </style>
</head>


<body>
    <!-- Header -->
    <header><?php require("../header/header.php") ?></header>

    <section id="mainPart">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <h3>Advertise</h3>
                </h5>
                <br>
                <p class="card-text">Data</p>
            </div>
        </div>
    </section>

    <footer style="width: 100%;" id="footer">
        <?php require("footer.php") ?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
</body>