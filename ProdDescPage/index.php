<?php
include('../function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Details</title>
    <!-- Fonts link Starts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <!-- Fonts link Ends  -->
    <!-- navbar section links start -->


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/da9dabfa40.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>




    <!-- navbar section links ENDS -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../styles/animations.css">

</head>

<body class="body">
    <!-- Navbar section start  -->
    <section style="padding: 0px;" class="navbar_section">
        <?php require("../header/header.php") ?>
    </section>
    <!-- Navbar section ENDS  -->

    <!-- Page content Starts -->
    <section>
        <div class="container-md">
            <!-- breadcrumb Starts -->
            <div class="row">
                <nav style="--bs-breadcrumb-divider:'>';" aria-label="breadcrumb">
                    <ol class="breadcrumb pl-3 pt-3 pb-2">
                        <li class="breadcrumb-item"><a href="../">Home</a></li>
                        <li class="breadcrumb-item"><a href="../">Bags</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
            <!-- breadcrumb Ends -->

            <div class="row">
                <!-- Product image carousel section start  -->
                <div class="col-md-6 prodDisPad">
                    <div class="row">
                        <div id="img_carousel" class="carousel">

                        </div>
                    </div>
                </div>
                <!-- Product image carousel section Ends  -->

                <!-- Product Description section Starts  -->
                <div class="col-md-6 my-3 noPadding">
                    <!-- product heading -->
                    <div class="row prodDisPad">
                        <h4 class="prod_header" id="prod_header">
                            Women Blue Shoulder Bag - Spacious
                        </h4>
                    </div>
                    <!-- product price row -->
                    <div style="margin-top: 5px!important;" class="prodDisPad row mt-lg-5 mb-lg-3 my-sm-0 my-md-3 ">
                        <div class="col-lg-2 col-3 col-md-4 dis_price text-end">
                            <h3 id="price">
                                ₹&nbsp;1798
                            </h3>
                        </div>
                        <div class="col-lg-2 col-3 price">
                            <h5 id="altPrice">
                                ₹&nbsp;2499
                            </h5>
                        </div>
                        <div class="col-lg-3 col-5 text-start dis_per">
                            <span id="discount" class="discount">( 68% OFF)</span>
                        </div>
                    </div>
                    <!-- Product rating -->
                    <div class="prodDisPad row my-3">
                        <div>
                            <span class="rating">
                                <span id="ratingScore">4.8</span> <i class="fas fa-star"></i>
                            </span>
                            <h6 id="reviews" class="reviews mx-3">
                                10 Ratings & 3 Reviews
                            </h6>
                        </div>
                    </div>
                    <!-- Buttons -->
                    <div class="buttons_div">
                        <div>
                            <button onclick="addProductToCart(true)" class="btn pl-lg-5 pr-lg-5 pt-2 pb-2">ADD TO CART</button>
                        </div>
                        <div>
                            <button onclick="buyProduct()" class="btn-buy btn pl-lg-5 pr-lg-5 pt-2 pb-2">BUY NOW</button>
                        </div>
                        <div id="wishlistIcon">
                            <i onclick="addProductToWishList()" class="fa fa-heart-o fa-3x" aria-hidden="true"></i>
                        </div>
                    </div>
                    <br>
                    <!-- Offers Section -->
                    <div class="prodDisPad row mt-lg-4 mt-sm-4">
                        <h5><strong>Avilable Offers</strong></h5>
                        <div id="offersInfo">
                            <p class="pb-0 mt-2"><strong>Bank Offer</strong> 20% instant discount up to ₹200 on First
                                time
                                Txn via Dhani One Freedom Card <a href="" style="text-decoration: none;"><strong>T&C</strong></a></p>
                            <p class="mt-0 pt-0"><strong>Special Offer</strong> 10% discount up to ₹150 on ICICI Bank
                                Debit
                                Cards <a href="" style="text-decoration: none;"><strong>T&C</strong></a></p>
                        </div>
                    </div>
                    <!-- Product Details accordion Starts -->
                    <div class="prodDisPad row my-lg-3">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <strong>Product Description</strong>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div id="desci" class="accordion-body">
                                        Pick a boat shaped work bag from the Ibiza collection by Hidesign handcrafted in
                                        vegetable tanned leathers and solid brass. A thick guitar strap, well defined
                                        interiors, solid brass handle and ring detail makes this bag a conversation
                                        starter. For once it'll be legal to have a Tequila for the road!
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <strong>Details & Composition</strong>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p><strong>Front:</strong><span id="front"> 1 Slip Pocket</span></p>
                                        <p><strong>Inside:</strong> <span id="inside">11 Main Compartment, 1 Zip
                                                Compartment, 1
                                                Mobile & 1
                                                Slip Pocket.</span></p>
                                        <p><strong>Dimensions (LxHxW): </strong><span id="dimensions">30 x22 x 9
                                                cms</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <strong>Return Policy</strong>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong id="returnPolicy">5 Days</strong> of Return Policy.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Details accordion Ends -->
                </div>
                <!-- Product Description section Ends  -->
            </div>
        </div>
    </section>
    <?php

    include "SimilarProducts_Viewed.php";
    include "../footer/footer.php";
    ?>
    <!-- Page content Starts -->
    <script src="./js/main.js" type="text/javascript"></script>
    <script src="./js/zoomsl.js" type="text/javascript"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script>
        //const currentUrl = window.location.href;

        //location for wishlist
        const whislistlocation = "../wishlist/wishlist.php";
        const cartLocation = "../checkout-page/check.php";

        const loginUrl = "../login/login.php";

        const prod_header = document.querySelector("#prod_header");
        const price = document.querySelector("#price");
        const altPrice = document.querySelector("#altPrice");
        const ratingScore = document.querySelector("#ratingScore");
        const discount = document.querySelector("#discount");
        const reviews = document.querySelector("#reviews");
        const offersInfo = document.querySelector("#offersInfo");
        const desci = document.querySelector("#desci");
        const front = document.querySelector("#front");
        const inside = document.querySelector("#inside");
        const dimensions = document.querySelector("#dimensions");
        const returnPolicy = document.querySelector("#returnPolicy");

        const img_carousel = document.querySelector("#img_carousel");
        const carousel__slides = document.querySelector("#carousel__slides");
        const carousel__thumbnails = document.querySelector("#carousel__thumbnails");

        const urlParams = new URLSearchParams(location.search);
        const product_id = urlParams.get("pid");

        function getProductData() {

            $.ajax({
                url: "./php/getProductDetails.php",
                method: "GET",
                data: {
                    "pid": product_id,
                },
                dataType: "JSON",
                success: function(data) {
                    //console.trace();
                    //loadProductData(data);
                },
            });

            // Set up our HTTP request
            var xhr = new XMLHttpRequest();

            // Setup our listener to process completed requests
            xhr.onload = function() {

                // Process our return data
                if (xhr.status >= 200 && xhr.status < 300) {
                    // What do when the request is successful
                    //console.log(xhr.response);
                    let data = JSON.parse(xhr.response);
                    loadProductData(data);

                } else {
                    // What do when the request fails
                }

                // Code that should run regardless of the request status
            };

            url = "./php/getProductDetails.php/?pid=" + product_id;
            // Create and send a GET request
            // The first argument is the post type (GET, POST, PUT, DELETE, etc.)
            // The second argument is the endpoint URL
            xhr.open('GET', url);
            xhr.send();
        }
        getProductData();

        function loadProductData(data) {
            //console.trace();
            console.log(data);
            price.innerHTML = "₹" + data.price;
            altPrice.innerHTML = "&nbsp;₹" + data.altPrice;

            let ratCount = 0;
            if (data.ratings != null)
                data.ratings.forEach(element => {
                    ratCount++;
                });
            reviews.innerHTML = ratCount + " Reviews and Ratings"

            ratingScore.innerHTML = data.rating;

            discount.innerHTML = '(' + data.discount + '%&nbsp;OFF)';

            prod_header.innerHTML = data.title;

            let offersDiv = '';
            if (data.offers != null) {
                data.offers.forEach(element => {
                    offersDiv +=
                        '<p class="pb-0 mt-2"><strong>' + element.offer_title + '</strong> ' + element
                        .offer_info +
                        ' <a href = "" style = "text-decoration: none;"> <strong> T & C </strong></a></p>';
                });
            }

            offersInfo.innerHTML = offersDiv;

            desci.innerHTML = data.description;
            dimensions.innerHTML = data.dimension;
            inside.innerHTML = data.inside;
            front.innerHTML = data.front;

            returnPolicy.innerHTML = data.returnPolicy;

            let chek = '';
            let bigImg = '';
            let smallImg = '';
            let imgCount = 1;

            data.images.forEach(element => {
                //console.log(element);
                if (imgCount == 1) {
                    chek += '<input type="radio" name="slides" checked="checked" id="slide-' +
                        imgCount + '">'
                } else {
                    chek += ' <input type="radio" name="slides" id="slide-' + imgCount + '">';
                }
                bigImg +=
                    '<li class="carousel__slide"><div><img src="../' + element +
                    '" class = "big_img" ></div></li>';

                smallImg += '<li> <label for = "slide-' + imgCount + '" > <img src="../' + element +
                    '" alt = ""></label></li>';
                imgCount++
            });
            img_carousel.innerHTML = chek + '<ul id="carousel__slides" class="carousel__slides">' + bigImg +
                '</ul><ul id="carousel__thumbnails" class="prodDisPad carousel__thumbnails">' + smallImg + '</ul>';

            $(document).ready(function() {
                $(".big_img").imagezoomsl({
                    zoomrange: [2, 10],
                });
            });

            wishlisted(data.isWishlisted);

        }

        //function to add product to whishlist
        function addProductToWishList() {
            isLoggedIn();
            $.ajax({
                url: "../wishlist/addToList.php",
                method: "POST",
                data: {
                    productId: product_id
                },
                dataType: "JSON",
                success: function(data) {
                    if (data.added) {
                        wishlisted(true);
                        alert("Added to wishlist")

                    }
                    if (data.alreadyAdded) {

                        alert("Already Added to wishlist")
                    }
                    //console.log(data);
                },
            });
        }
        //function to add product to cart
        function addProductToCart(pop) {
            if (user_id > -1) {

            } else {
                LoginModel();
            }
            if (pop) isLoggedIn();
            $.ajax({
                url: "../checkout-page/php/addToCart.php",
                method: "POST",
                data: {
                    productId: product_id
                },
                dataType: "JSON",
                success: function(data) {
                    //console.log(data);
                    if (pop)
                        alert("Product added to cart");
                },
            });
        }

        //function for to buy product
        function buyProduct() {

            addProductToCart(false);
            gotoCart();
            if (user_id > -1) {

            } else {
                LoginModel();
            }
        }

        function wishlisted(is) {
            if (is) {
                let html = '<i onclick="addProductToWishList();" class="fa fa-heart fa-3x"aria-hidden="true "style="color:red;"></i>'
                document.getElementById('wishlistIcon').innerHTML = html;

            }
        }
    </script>
</body>

</html>