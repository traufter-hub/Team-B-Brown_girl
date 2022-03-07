<?php
include('../function.php');
$userData = selectUserData();
//echo json_encode($userData);
$verifyBtnVisiblity = 'none';
if ($userData->isVerified == 0) {
    $verifyBtnVisiblity = 'flex';
}
$m = '';
$f = '';
if ($userData->gender == "m") {
    $m = 'checked';
}
if ($userData->gender == "f") {
    $f = 'checked';
}
?>
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

        label {
            color: rgb(0, 0, 0);
            background-color: #ffffff;
            font-size: 16px
        }

        .button {
            border: none;
            color: white;
            padding: 9px 32px;
            text-align: center;
            text-decoration: none;
            border-radius: 20px;
            display: inline-block;
            font-size: 16px;
            margin: 16px 2px;
            cursor: pointer;
            background-color: #00a6dd;
        }

        .vVisibility {
            display: <?php echo $verifyBtnVisiblity ?>;
        }

        .button:hover {
            background-color: #4CAF50;
            transition: 0.5s;
        }

        .head {
            background-color: #00a6dd;
            color: #ffffff;
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
            height: 750px;
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

        .dateInput {
            border: cornsilk;
            padding: 15px;
            font-size: initial;
            width: auto;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="sidebar">
            <h4 class="px-3 py-3 head"><a href="#">My Account</a> <a href="#" onclick="do_logout();"><i class="fas fa-sign-out-alt"></i>&nbsp;Log Out</a></h4>
            <a href="#" class="activeTab" onclick=" loadSection('profile');"><i class="fas fa-arrow-right"></i>&nbsp;Profile Info</a>
            <a href="#" onclick=" loadSection('address');">Address Info</a>
            <a href="#" onclick=" loadSection('order');">My Orders</a>
            <a href="#" onclick=" loadSection('reward');">My Rewards</a>
        </div>

        <div class="content px-4">
            <div class="row text-center pb-1 pt-4">
                <h2>Profile Information</h2>
            </div>
            <hr class="mb-4">
            <form id="profileForm" method="post" onsubmit="event.preventDefault();updateUserData();" action=" #">
                <div class="row mb-3">
                    <div class="col">
                        <label for="fname">First Name</label>
                        <input required class="textBx" type="text" id="fname" name="fname" value="<?php echo $userData->name; ?>">
                    </div>
                    <div class="col">
                        <label for="lname">Last Name</label>
                        <input class="textBx" type="text" id="lname" name="lname" value="<?php echo $userData->lastName; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ename">Email id</label>
                    <span style="font-size: medium;margin:10px">&nbsp;&nbsp;<?php echo $userData->email; ?></span>
                    <!-- <input class="textBx" type="text" id="ename" name="ename" value=""> -->
                </div>
                <div class="row mb-3" id="passDiv">
                    <div class="col">
                        <label for="pass">Password</label>
                        <input required class="textBx" type="text" id="pass" name="pass">
                    </div>
                    <div class="col">
                        <label for="passC">Confirm Password</label>
                        <input class="textBx" type="text" id="passC" name="passC">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="dob">Date of Birth</label>
                    <input required value="<?php echo $userData->dob; ?>" class="textBx dateInput" type="date" id="dob">
                </div>
                <div class="row my-4">
                    <div class="col">
                        <label for="gender">Gender</label>
                    </div>
                    <div class="col">
                        <label for="fgender">Female</label>
                        <input required class="textBx" type="radio" id="fgender" value="f" <?php echo $f; ?> name="gender">
                    </div>
                    <div class="col">
                        <label for="mgender">Male</label>
                        <input required class="textBx" type="radio" id="mgender" value="m" <?php echo $m; ?> name="gender">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="mobile">Phone no.</label>
                    <div style="display:flex;">
                        <form action="#" onsubmit="event.preventDefault();">
                            <input required class="textBx" pattern="[0-9]{10}" type="text" id="mobileNum" name="mobileNum" required value="<?php echo $userData->mobile; ?>">
                            <button type="button" onclick="showOtpModalIni();" class="button vVisibility">Verify</button>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col">

                        <button type="submit" onclick="updateUserData();" class="button button2">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>

    </script>
</body>

</html>