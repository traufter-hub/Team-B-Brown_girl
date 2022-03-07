<?php
include '../function.php';

//echo json_encode(selectTableForUserAdd('address'));

class dummy
{
    public $building;
    public $city;
    public $landmark;
    public $locality;
    public $mobile;
    public $name;
    public $pincode;
    public $sr;
    public $state;
    public $user_id;
    function __construct()
    {
        $this->building = "";
        $this->city = "";
        $this->landmark = "";
        $this->locality = "";
        $this->mobile = "";
        $this->name = "";
        $this->pincode = "";
        $this->sr = "";
        $this->state = "";
        $this->user_id = "";
    }
}

if (sizeof(selectTableForUserAdd('address')) > 0)
    $addresInfo = selectTableForUserAdd('address')[0];
else
    // $addresInfo
    $addresInfo = new dummy();
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="/contactUs.css"> -->
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
            height: 1000px;
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
    </style>
</head>

<body>

    <div class="container my-5">

        <div class="sidebar">
            <h4 class="px-3 py-3 head"><a href="#">My Account</a> <a href="#" onclick="do_logout();"><i class="fas fa-sign-out-alt"></i>&nbsp;Log Out</a></h4>
            <a href="#" onclick=" loadSection('profile');">Profile Info</a>
            <a href="#" class="activeTab" onclick=" loadSection('address');"><i class="fas fa-arrow-right"></i>&nbsp;Address Info</a>
            <a href="#" onclick=" loadSection('order');">My Orders</a>
            <a href="#" onclick=" loadSection('reward');">My Rewards</a>
        </div>

        <div class="content px-4">
            <div class="row text-center pb-1 pt-4">
                <h2>Address Information</h2>
            </div>
            <hr class="mb-4">
            <form method="post" action="#" onsubmit="event.preventDefault();updateAddress();">
                <div class="row mb-3">
                    <label for="name">Name</label>
                    <input required class="textBx" value="<?php echo ($addresInfo->name); ?>" type="text" id="name" name="name">
                </div>
                <div class="row mb-3">
                    <label for="phone">Mobile</label>
                    <input oninput="numberFilter(this.id);" pattern="[0-9]{10}" title="Input 10 digit number" maxlength="10" class="textBx" type="text" value="<?php echo ($addresInfo->mobile); ?>" id="phone" name="phone">
                </div>
                <div class="row mb-3">
                    <label for="pin">Pincode</label>
                    <input oninput="numberFilter(this.id);" required class="textBx" value="<?php echo ($addresInfo->pincode); ?>" type="text" id="pin" name="pin">
                </div>
                <div class="row mb-3">
                    <label for="streets">Locality/Area/Street</label>
                    <input required class="textBx" value="<?php echo ($addresInfo->locality); ?>" type="text" id="streets" name="streets">
                </div>
                <div class="row mb-3">
                    <label for="building">Flat no./Building Name</label>
                    <input required class="textBx" type="text" value="<?php echo ($addresInfo->building); ?>" id="building" name="building">
                </div>
                <div class="row mb-3">
                    <label for="land">Landmark</label>
                    <input required class="textBx" value="<?php echo ($addresInfo->landmark); ?>" type="text" id="land" name="land">
                </div>
                <div class="row mb-3">
                    <label for="city">District/City</label>
                    <input required class="textBx" value="<?php echo ($addresInfo->city); ?>" type="text" id="city" name="city">
                </div>
                <div class="row mb-3">
                    <label for="state">State</label>
                    <input required class="textBx" value="<?php echo ($addresInfo->state); ?>" type="text" id="state" name="state">
                </div>
                <div class="row">
                    <div class="col">
                        <button id="resetBtn" onclick="resetFields();" class="button button1">Reset</button>
                        <button type="submit" class="button button2">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>