<?php
include('../function.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <script src="https://kit.fontawesome.com/da9dabfa40.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" integrity="sha384-EvBWSlnoFgZlXJvpzS+MAUEjvN7+gcCwH+qh7GRFOGgZO0PuwOFro7qPOJnLfe7l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="check.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <title>Checkout</title>
</head>

<body>
    <section>
        <header><?php require("../header/header.php") ?></header>
        <?php
        $addresInfo = selectTableForUser('address')[0];
        ?>
    </section>
    <section>
        <div class="container my-3">
            <div class="row heading">
                <h3>Checkout</h3>
            </div>
            <div class="row mx-3 my-4">
                <div class="col-lg-8 address">
                    <div class="row heading">
                        <h3>Delivery Address</h3>
                    </div>

                    <span id="addressInfoView">

                    </span>


                    <span style="display: none;" id="addressInfoEdit">
                        <form action="#" onsubmit="event.preventDefault();updateAddress();">
                            <div class="row">
                                <div class="col mt-lg-4 mt-2">

                                    <label for="fname" class="mx-2"><b>Name</b></label><br>
                                    <input required class="textBx" value="<?php echo ($addresInfo->name); ?>" type="text" id="name" name="name">

                                </div>
                                <div class="col mt-lg-4 mt-2">

                                    <label for="fname" class="mx-2"><b>Phone number</b></label><br>
                                    <input oninput="numberFilter(this.id);" pattern="[0-9]{10}" title="Input 10 digit number" maxlength="10" class="textBx" type="text" value="<?php echo ($addresInfo->mobile); ?>" id="phone" name="phone">

                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col mt-lg-4 mt-2">

                                    <label for="fname" class="mx-2"><b>Pincode</b></label><br>
                                    <input oninput="numberFilter(this.id);" required class="textBx" value="<?php echo ($addresInfo->pincode); ?>" type="text" id="pin" name="pin"><br>

                                </div>
                                <div class="col mt-lg-4 mt-2">

                                    <label for="fname" class="mx-2"><b>State</b></label><br>
                                    <input required class="textBx" value="<?php echo ($addresInfo->state); ?>" type="text" id="state" name="state">

                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col mt-lg-4 mt-2">

                                    <label for="pin" class="mx-2"><b>District/City</b></label><br>
                                    <input required class="textBx" value="<?php echo ($addresInfo->city); ?>" type="text" id="city" name="city"><br>

                                </div>
                                <div class="col mt-lg-4 mt-2">

                                    <label for="state" class="mx-2"><b>Locality/Area/Street</b></label><br>
                                    <input required class="textBx" value="<?php echo ($addresInfo->locality); ?>" type="text" id="streets" name="streets"><br>

                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col mt-lg-4 mt-2">

                                    <label for="pin" class="mx-2"><b>Flat no./Building Name</b></label><br>
                                    <input required class="textBx" type="text" value="<?php echo ($addresInfo->building); ?>" id="building" name="building"><br>

                                </div>
                                <div class="col mt-lg-4 mt-2">

                                    <label for="state" class="mx-2"><b>Landmark</b></label><br>
                                    <input required class="textBx" value="<?php echo ($addresInfo->landmark); ?>" type="text" id="land" name="land"><br>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col my-4 mx-5">
                                    <button id="submitAddress" type="submit" class="buttons ">Save</button>
                                </div>
                                <div class="col my-4 mx-5">
                                    <button type="button" onclick="editAddress(false)" class="buttons">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </span>
                </div>
                <div class="col-lg-3 mx-1 my-lg-0 my-2 PR">
                    <div class="row heading">
                        <h3>Price Details</h3>
                    </div>
                    <div class="row my-3">
                        <div class="col-9">
                            <h4>Price</h4>
                        </div>
                        <div class="col-3">
                            <h4 id="price">₹0</h4>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-9">
                            <h5>Delivery charges</h5>
                        </div>
                        <div class="col-3">
                            <h5 id="deliveryCharges">FREE</h5>
                        </div>
                    </div>
                    <div class="row line">

                    </div>
                    <div class="row my-3">
                        <div class="col-9">
                            <h5>Total Price</h5>
                        </div>
                        <div class="col-3">
                            <h4 id='totalPrice'>₹0</h4>
                        </div>
                    </div>
                    <div class="payment">
                        <div class="row heading">
                            <h3>Payment details</h3>
                        </div>
                        <div class="row">
                            <form onsubmit="event.preventDefault();pay();">
                                <br>
                                <div class="row">
                                    <div class="rad my-1">
                                        &nbsp;&nbsp;<div class="form-check">
                                            <input required id="upi" class="form-check-input" type="radio" name="flexRadioDefault" value="upi">
                                            <label for="upi" class="form-check-label">
                                                UPI
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="rad my-1">

                                        &nbsp;&nbsp;<div class="form-check">
                                            <input required id="card" class="form-check-input" type="radio" name="flexRadioDefault" value="card">
                                            <label for="card" class="form-check-label">
                                                Credit/Debit/ATM Card
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="rad my-1">


                                        &nbsp;&nbsp;<div class="form-check">
                                            <input required id="net" class="form-check-input" type="radio" name="flexRadioDefault" value="net">
                                            <label for="net" class="form-check-label">
                                                Net Banking
                                            </label>
                                        </div>



                                    </div>
                                </div>
                                <div class="row">
                                    <div class="rad my-1">

                                        &nbsp;&nbsp;<div class="form-check">
                                            <input required id="cod" class="form-check-input" type="radio" name="flexRadioDefault" value="cod">
                                            <label for="cod" class="form-check-label">
                                                Cash on Delivery
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mx-4 my-4"><button type="submit" class="buttons">Pay</button></div>
                                </div>

                            </form>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mx-3 my-5">
                <div class="col-lg-8 OS">
                    <div class="row heading">
                        <h3>Order Summary</h3>
                    </div>
                    <span id="orderSummary">

                    </span>
                    <!-- <div class="row">
                        <div class="col my-4 text-center"><button type="button" class="buttons">Save</button></div>
                        <div class=" col my-4 text-center"><button type="button" class="buttons">Cancel</button></div>
                    </div> -->
                </div>
                <div class="col-lg-3">
                </div>
            </div>
            
        </div>
        </div>
    </section>
    <footer style="width: 100%;" id="footer">
        <?php require("../footer/footer.php") ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        const whislistlocation = "../wishlist/wishlist.php";
        const cartLocation = "#";

        var productList = '';

        function fetchProducts() {
            productList = '';
            $.ajax({
                url: "./php/getProductList.php",
                method: "GET",
                data: {
                    //pid: "p1"
                },
                dataType: "JSON",
                success: function(data) {

                    //console.log(data);


                    if (data.length == 0) {
                        alert("Please add product to cart")
                    }

                    productList = data;
                    price = 0;
                    total = 0;
                    deliveryCharge = 0;

                    prodDivs = '';
                    data.forEach(element => {
                        //console.log(element.product.price);
                        price += parseFloat(element.product.price)

                        deliveryCharge += parseFloat(element.product.deliveryCharge);

                        img = '../' + element.product.images[0].file;



                        prodDivs += '<div class="row FL">' +
                            '    <div class="imgBox col-5"><i class="far fa-times-circle fa-lg" id="' + element.product.product_id + '" onclick="removeProd(this.id)"></i>' + '        <img class="img" src="' + img + '" alt="pic" style="width: fit-content; height: 8em; margin: 10px;" />' +
                            '    </div>' +
                            '    <div class="col-5 mx-3">' +
                            '        <h3>' + element.product.title + '</h3>' +
                            '        <div class="row">' +
                            '            <div class="col-5">' +
                            '                <h3>&#8377;' + element.product.price + ' <strike class="mx-2 disc_price">&#8377;' + element.product.altPrice + '</strike></h3>' +
                            '            </div>' +
                            '            <div class="col">' +
                            '                <h4 class="discount">' + element.product.discount + '% OFF</h4>' +
                            '            </div>' +
                            '        </div>' +
                            '        <div class="row">' +
                            '            <h5>' +
                            '                Delivery in ' + element.product.deliveryDays + ' days' +
                            '            </h5>' +
                            '        </div>' +
                            '    </div>' +
                            '</div><hr>' +
                            '' +
                            '';

                    });
                    element('price').innerHTML = '₹' +
                        price;
                    element('deliveryCharges').innerHTML = '₹' + deliveryCharge;
                    element('totalPrice').innerHTML = '₹' +
                        (price + deliveryCharge);
                    element('orderSummary').innerHTML = prodDivs;
                },
            });
        }
        fetchProducts()

        function element(id) {
            return document.querySelector("#" + id);
        }

        function removeProd(id) {
            //console.log(id);
            $.ajax({
                url: "./php/removeFromList.php",
                method: "POST",
                data: {
                    productId: id
                },
                dataType: "JSON",
                success: function(data) {
                    //console.log(data);
                    if (data.deleted) {
                        //window.location.reload();
                        fetchProducts();
                    }
                },
            });
        }
        addressInfoView();

        function updateAddress() {
            showLoadingInside("submitAddress", true);
            $.ajax({
                url: site + "../profile/php/getAddress.php",
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
                    if (data.success) {
                        showLoadingInside("submitAddress", false);
                        alert("Address updated");
                        addressInfoView();
                        editAddress(false);
                    }
                },
            });
        }

        function getValue(id) {
            return document.getElementById(id).value;
        }

        function addressInfoView() {

            $.ajax({
                url: "./php/addressInfoView.php",
                method: "GET",
                success: function(data) {
                    getElement('addressInfoView').innerHTML = data;
                },
            });
        }

        function editAddress(doit) {
            if (!doit) {
                getElement('addressInfoEdit').style = 'display:none';
                getElement('addressInfoView').style = 'display:block';
            } else {
                getElement('addressInfoEdit').style = 'display:block';
                getElement('addressInfoView').style = 'display:none';
            }
        }

        function getElement(id) {
            return document.getElementById(id);
        }

        function pay() {
            let paymentMethod = 'NA';
            if (getElement('cod').checked) {
                paymentMethod = 'cod';
            }
            if (getElement('net').checked) {
                paymentMethod = 'net';
            }
            if (getElement('card').checked) {
                paymentMethod = 'card';
            }
            if (getElement('upi').checked) {
                paymentMethod = 'upi';
            }
            if (paymentMethod == 'NA') {
                alert("Please select payment method");
            } else {
                $.ajax({
                    url: "./php/confirmOrder.php",
                    method: "POST",
                    data: {
                        method: paymentMethod,
                    },
                    success: function(data) {
                        alert(data);
                        if (data == "Order Placed.") {

                            alert(data);
                            const myTimeout = setTimeout(doReload, 3000);


                            loc = '<?php global $domain;
                                    echo $domain; ?>/profile/?section=order';

                            function doReload() {
                                window.location.replace(loc);
                            }
                        }
                        if (data == "Please Verify your number") {
                            showOtpModalIni();
                        }
                    },
                });
            }
        }

        function loadLastAtemptData(lastAttempt) {
            var lastOtpAtemptI = document.getElementById("lastOtpAtempt");
            lastOtpAtemptI.innerHTML = ' - Last OTP sent at :' + lastAttempt;
            //console.log(1);
        }
        loadLastAtemptData(" <?php echo selectUserData()->lastAttempt; ?> ");
    </script>
</body>

</html>
