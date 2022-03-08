<?php
include('../function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
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
            height: 100%;
            padding: 0px !important;
            margin: 0px !important;
            overflow-y: none;
        }

        .sidebar {
            border-radius: 2px;
        }

        .sidebar a {
            font-size: initial;
            border-radius: 2px;
        }

        .activeTab {
            border-radius: 2px;
            background-color: #2cb2ff;
            color: white !important;

        }

        .head {
            display: flex;
            background-color: #00a6dd;
            color: #ffffff;
            flex-direction: row;
            align-items: center;
            align-content: center;
            justify-content: space-between;
        }

        .head a {
            color: #ffffff !important;
        }

        .passC {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-content: center;
            justify-content: flex-start;
            align-items: center;
        }

        .pcBtn {
            border-radius: 100px !important;
            background: #00a6dd !important;
            padding: 4px !important;
            border: #00a6dd !important;
            margin: 14px !important;
            font-size: medium !important;
        }

        .card {
            margin: 10px !important;
        }

        .flexD {
            display: flex;
            align-items: center;
            justify-content: center;
            align-content: center;
            margin-top: 10px;
        }
    </style>
</head>


<body>
    <!-- Header -->
    <header><?php require("../header/header.php") ?></header>

    <section id="mainPart"></section>

    <footer style="width: 100%;" id="footer">
        <?php require("../footer/footer.php") ?>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script>
    const mainPart = document.getElementById('mainPart');

    let section = 'profile';
    const urlParams = new URLSearchParams(location.search);
    section = urlParams.get("section");

    if (section == null) section = 'profile'

    loadSection(section);

    var userDATA = JSON.parse('<?php echo json_encode(selectUserData()); ?>');

    function loadSection(section) {
        $.ajax({
            url: "./" + section + ".php",
            method: "GET",
            success: function(data) {
                mainPart.innerHTML = data;
                if (section == 'profile') {
                    changePasswordSwitch();
                }
                if (section == 'order') {
                    loadMyOrders();
                }
            },
        });
    }

    function do_logout() {
        if (confirm("Do you want to logout ?") == true) {
            logout();
        } else {

        }

    }

    function logout() {
        window.location.href = '../logout.php';
    }

    function loadLastAtemptData(lastAttempt) {
        var lastOtpAtemptI = document.getElementById("lastOtpAtempt");
        lastOtpAtemptI.innerHTML = ' - Last OTP sent at :' + lastAttempt;
        //console.log(1);
    }
    loadLastAtemptData(" <?php echo selectUserData()->lastAttempt; ?> ");
    //const urlParams = new URLSearchParams(location.search);
    const idInfo = urlParams.get("newID");
    if (idInfo == 1) {
        showOtpModal();
        requestOTP();
        alert("An OTP is sended on your number for verification");
    }

    function updateAddress() {
        $.ajax({
            url: site + "/profile/php/getAddress.php",
            method: "POST",
            data: {
                name: getValue('name'),
                mobile: getValue('phone'),
                building: getValue('building'),
                city: getValue('city'),
                landmark: getValue('land'),
                pincode: getValue('pin'),
                state: getValue('state'),
                locality: getValue('streets'),
            },
            dataType: "JSON",
            success: function(data) {
                //console.log(data);
                if (data.success)
                    alert("Address updated");
            },
        });
    }

    function getValue(id) {
        //console.log(id);
        return document.getElementById(id).value;
        //console.log(document.getElementById(id).value);
    }

    function removeValue(id) {
        document.getElementById(id).value = '';
    }
    // document.getElementById('phone').addEventListener('keypress', e => {
    //     if (!(e.which >= 48 && e.which <= 57)) {
    //         e.preventDefault();
    //         return false;
    //     }
    // });

    let oldNum = '';

    function numberFilter(id) {
        //console.log(document.getElementById('phone').value);
        document.getElementById(id).value = digits_only(document.getElementById(id).value);
    }

    function digits_only(value) {
        let data = '';
        value.split('').forEach(element => {

            if (isNumeric(element)) {
                //console.log(element);
                data += element;
            }
        });
        return data;
    }

    function isNumeric(str) {
        if (typeof str != "string") return false // we only process strings!
        return !isNaN(str) && // use type coercion to parse the _entirety_ of the string (`parseFloat` alone does not do this)...
            !isNaN(parseFloat(str)) // ...and ensure strings of whitespace fail
    }
    const fields = ['name', 'phone', 'building', 'city', 'land', 'pin', 'state', 'streets']

    function resetFields() {
        fields.forEach(e => {
            removeValue(e);
        })
    }

    //changePasswordSwitch(false);

    function changePasswordSwitch(changePassDiv) {
        if (changePassDiv) {
            getElement('passDiv').innerHTML = '<div class="col"><label for="pname">Password</label><input required class="textBx" type="text" id="pass" name="pname"></div><div class="col"><label for="pname">Confirm Password</label><input class="textBx" type="text" id="passC" name="pname"></div><div class="col"><button onclick="changePasswordSwitch(false);" type="button" class="pcBtn btn btn-primary btn-sm">&nbsp;&nbsp;Cancel&nbsp;&nbsp;<i class="fas fa-times"></i></i>&nbsp;&nbsp;</button><button onclick="updateUserPass();"  type="button"  class="pcBtn btn btn-primary btn-sm">&nbsp;&nbsp;Save&nbsp;&nbsp;<i class="fas fa-times"></i></i>&nbsp;&nbsp;</button></div>';
        } else {
            getElement('passDiv').innerHTML = '<div class="col passC"><label for="pname">Password</label>&nbsp;&nbsp;<button onclick="changePasswordSwitch(true);" type="button" class="pcBtn btn btn-primary btn-sm">&nbsp;&nbsp;Change Password&nbsp;&nbsp;<i class="fas fa-edit"></i>&nbsp;&nbsp;</button></div>';
        }
    }

    function getElement(id) {
        return document.getElementById(id);
    }

    function updateUserData() {
        let num = document.getElementById('mobileNum');
        //log(num.value);
        let gen = "m";
        if (document.getElementById('fgender').checked) {
            gen = "f";
        }
        if (
            num.value == "" || num.value.length != 10) {
            alert("Please input valid number");
        } else {
            if (gen == "m" || gen == "f") {
                $.ajax({
                    url: site + "/profile/php/updateUserData.php",
                    method: "POST",
                    data: {
                        name: getValue("fname"),
                        lastName: getValue("lname"),
                        mobile: getValue("mobileNum"),
                        dob: getValue("dob"),
                        gender: gen,
                        // genderM: getValue("mgender"),
                        // state: getValue('state'),
                        // locality: getValue('streets'),
                    },
                    dataType: "JSON",
                    success: function(data) {
                        console.log(data);
                        if (data.success) {
                            alert("Profile info updated")
                        }
                    },
                });
            } else {
                alert("Please select gender.")
            }
        }


    }

    function updateUserPass() {
        console.log(getValue('pass'), getValue('passC'));
        if (
            getValue('pass') == getValue('passC') &&
            getValue('passC') != "" &&
            getValue('pass') != "" &&
            getValue('passC') != " " &&
            getValue('pass') != " "
        ) {
            $.ajax({
                url: site + "/profile/php/updatePassword.php",
                method: "POST",
                data: {
                    password: getValue('pass')
                },
                dataType: "JSON",
                success: function(data) {
                    console.log(data, "h");
                    if (data.success) {
                        alert("Password updated");
                        if (confirm("Password updated please login again") == true) {
                            logout();
                        } else {
                            logout();
                        }
                    }
                },
            });
        } else {
            alert("Password did'nt match")
        }

    }

    function loadMyOrders() {
        const ordersDiv = document.getElementById('ordersDiv');
        $.ajax({
            url: site + "/checkout-page/php/getOrders.php",
            method: "GET",
            dataType: "JSON",
            success: function(data) {
                console.log(data)
                let prods = '';
                ordersDiv.innerHTML = '';
                data.forEach(product => {
                    let prod = ' <a style="text-decoration: none;"' +
                        'href = "' + site + '/ProdDescPage/?pid=' + product.product.product_id + '" > ' +
                        '            <div class="card" style="width: 18rem;">' +
                        '<img class="card-img-top imgInProcCard" src="' + site + product.images.file_name + '" alt="Card image cap"><div class="card-body"><h5>' + product.product.title + '</h5><div class="flex flexD"><h5>₹' + product.product.order_amount + '</h5></div></div><h5 class="subInfo">Status : ' + product.product.orderTime + '</h5><h5 class="subInfo">Status : ' + product.product.status + '</h5><h5 class="subInfo">Payment method : ' + getPayment(product.product.method) + '</h5><h5 class="subInfo">Arriva : ' + product.product.arival + '</h5></div></a>';
                    //console.log(prod);
                    ordersDiv.innerHTML += prod;
                });
                //console.log(prods);
            }
        }, );
    }

    function getPayment(method) {
        if (method == 'upi')
            return "UPI";
        else if (method == 'net')
            return "Net Banking";
        else if (method == 'card')
            return "Card";
        else if (method == 'cod')
            return "COD";
        else
            return "NA"
    }
</script>

</html>