<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="contactUs.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            font-family: "Lato", sans-serif;
            background-color: rgb(230, 230, 230);
        }

        input[type=text] {
            width: 100%;
            padding: 10px 15px;
            margin: 8px 0;
            font-weight: lighter;
            font-size: 16px;
            box-sizing: border-box;
            border: none;
            outline: none;
            border-bottom: 2px solid rgb(153, 153, 153);
            background-color: #ffffff;
        }

        .head {
            background-color: #00a6dd;
            color: #ffffff;
        }

        label {
            color: rgb(0, 0, 0);
            background-color: #ffffff;
            font-size: 16px
        }

        .button {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            border-radius: 20px;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            background-color: #00a6dd;
        }

        .button:hover {
            background-color: #4CAF50;
            transition: 0.5s;
        }

        .sidebar {
            margin: 0;
            padding: 0;
            width: 250px;
            background-color: #ffffff;
            position: fixed;
            height: auto;
            overflow: auto;
        }

        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        .sidebar a.active {
            background-color: #2cb2ff;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #2cb2ff;
            color: white;
        }

        div.content {
            margin-left: 300px;
            padding: 1px 16px;
            background-color: white;
            /* height: 1000px; */
        }

        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                float: left;
            }

            div.content {
                margin-left: 0;
            }
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }

        .subInfo {
            color: #0000009c;
            margin-bottom: 7px;
        }
    </style>
</head>

<body>
    <div class="container my-5">

        <div class="sidebar">
            <h4 class="px-3 py-3 head"><a href="#">My Account</a> <a href="#" onclick="do_logout();"><i class="fas fa-sign-out-alt"></i>&nbsp;Log Out</a></h4>
            <a href="#" onclick=" loadSection('profile');">Profile Info</a>
            <a href="#" onclick=" loadSection('address');">Address Info</a>
            <a href="#" class="activeTab" onclick=" loadSection('order');"><i class="fas fa-arrow-right"></i>&nbsp;My Orders</a>
            <a href="#" onclick=" loadSection('reward');">My Rewards</a>
        </div>

        <div class="content px-4">
            <div class="row text-center pb-4 pt-4">
                <h2>Orders</h2>
            </div>
            <hr>
            <div class="row my-5 text-center">
                <!-- <h4>Orders</h4> -->
                <div style="" id="ordersDiv"></div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>

    </script>
</body>

</html>