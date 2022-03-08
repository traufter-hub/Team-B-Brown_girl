<?php
include('../function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Wishlist</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS -->
    <link rel="stylesheet" type="text/css" href="Wstyle.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- icons -->
    <script src="https://kit.fontawesome.com/da9dabfa40.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>

    <style>

    </style>
</head>


<body>
    <!-- Header -->
    <header><?php require("../header/header.php") ?></header>

    <!-- Wishlist Code -->
    <br>
    <h2 class="h2">Your Wishlist</h2>
    <div id="container" class="container">



        <!--1 Product Card/Block-->
        <div class="Cards">
            <!--Image box-->
            <div class="image">
                <a href="#"><img src="https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE1fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60"></a>
                <div class="overlay">
                    <a href="#">
                        <button type="button" class="btn btn-secondary" title="delete">
                            <i class="far fa-trash-alt"></i></a>
                    <a href="#">
                        <button type="button" class="btn btn-secondary" title="cart">
                            <i class="fas fa-shopping-bag"></i></button></a>
                </div>
            </div>
            <!--Details Box-->
            <div class="Title_container">
                <p>Handbag 1</p>
                <div class="Detail_container">
                    <p>₹599</p>
                </div>
                <div class="Price_container">
                    <p>₹1200</p>
                </div>

            </div>
        </div>

        <!--2 Product Card/Block-->
        <div class="Cards">
            <!--Image box-->
            <div class="image">
                <a href="#"><img src="https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE1fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60"></a>
                <div class="overlay">
                    <a href="#">
                        <button type="button" class="btn btn-secondary" title="delete">
                            <i class="far fa-trash-alt"></i></a>
                    <a href="#">
                        <button type="button" class="btn btn-secondary" title="cart">
                            <i class="fas fa-shopping-bag"></i></button></a>
                </div>
            </div>
            <!--Details Box-->
            <div class="Title_container">
                <p>Handbag 1</p>
                <div class="Detail_container">
                    <p>₹599</p>
                </div>
                <div class="Price_container">
                    <p>₹1200</p>
                </div>

            </div>
        </div>

        <!--3 Product Card/Block-->
        <div class="Cards">
            <!--Image box-->
            <div class="image">
                <a href="#"><img src="https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE1fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60"></a>
                <div class="overlay">
                    <a href="#">
                        <button type="button" class="btn btn-secondary" title="delete">
                            <i class="far fa-trash-alt"></i></a>
                    <a href="#">
                        <button type="button" class="btn btn-secondary" title="cart">
                            <i class="fas fa-shopping-bag"></i></button></a>
                </div>
            </div>
            <!--Details Box-->
            <div class="Title_container">
                <p>Handbag 1</p>
                <div class="Detail_container">
                    <p>₹599</p>
                </div>
                <div class="Price_container">
                    <p>₹1200</p>
                </div>

            </div>
        </div>

        <!--4 Product Card/Block-->
        <div class="Cards">
            <!--Image box-->
            <div class="image">
                <a href="#"><img src="https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE1fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60"></a>
                <div class="overlay">
                    <a href="#">
                        <button type="button" class="btn btn-secondary" title="delete">
                            <i class="far fa-trash-alt"></i></a>
                    <a href="#">
                        <button type="button" class="btn btn-secondary" title="cart">
                            <i class="fas fa-shopping-bag"></i></button></a>
                </div>
            </div>
            <!--Details Box-->
            <div class="Title_container">
                <p>Handbag 1</p>
                <div class="Detail_container">
                    <p>₹599</p>
                </div>
                <div class="Price_container">
                    <p>₹1200</p>
                </div>

            </div>
        </div>

        <!--5 Product Card/Block-->
        <div class="Cards">
            <!--Image box-->
            <div class="image">
                <a href="#"><img src="https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE1fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60"></a>
                <div class="overlay">
                    <a href="#">
                        <button type="button" class="btn btn-secondary" title="delete">
                            <i class="far fa-trash-alt"></i></a>
                    <a href="#">
                        <button type="button" class="btn btn-secondary" title="cart">
                            <i class="fas fa-shopping-bag"></i></button></a>
                </div>
            </div>
            <!--Details Box-->
            <div class="Title_container">
                <p>Handbag 1</p>
                <div class="Detail_container">
                    <p>₹599</p>
                </div>
                <div class="Price_container">
                    <p>₹1200</p>
                </div>

            </div>
        </div>

        <!--6 Product Card/Block-->
        <div class="Cards">
            <!--Image box-->
            <div class="image">
                <a href="#"><img src="https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE1fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60"></a>
                <div class="overlay">
                    <a href="#">
                        <button type="button" class="btn btn-secondary" title="delete">
                            <i class="far fa-trash-alt"></i></a>
                    <a href="#">
                        <button type="button" class="btn btn-secondary" title="cart">
                            <i class="fas fa-shopping-bag"></i></button></a>
                </div>
            </div>
            <!--Details Box-->
            <div class="Title_container">
                <p>Handbag 1</p>
                <div class="Detail_container">
                    <p>₹599</p>
                </div>
                <div class="Price_container">
                    <p>₹1200</p>
                </div>

            </div>
        </div>
    </div>
    <br>
    <br>
    <footer style="width: 100%;" id="footer">
        <?php require("../footer/footer.php") ?>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script>
    const whislistlocation = "#";
    const cartLocation = "../checkout-page/check.php";

    function getProducts() {
        $.ajax({
            url: "./getFavProductList.php",
            method: "GET",
            dataType: "JSON",
            success: function(data) {
                let elements = '';
                data.forEach(value => {
                    elements += '<div class="Cards">' +
                        '            <!--Image box-->' +
                        '            <div class="image">' +
                        '                <a href=../ProdDescPage/?pid=' + value.product_id + '><img src="../' + value.image + '"></a>' +
                        '                <div class="overlay">' +
                        '                    <a href="#">' +
                        '                        <button type="button" class="btn btn-secondary" id="' + value.product_id + '" onclick ="reMoveProductToWishList(this.id)" title="delete">' +
                        '                            <i class="far fa-trash-alt"></i></a>' +
                        '                    <a href="#">' +
                        '                        <button  id="' + value.product_id + '_" onclick ="addProductToCart(this.id)" type="button" class="btn btn-secondary" title="cart">' +
                        '                            <i class="fas fa-shopping-bag"></i></button></a>' +
                        '                </div>' +
                        '            </div>' +
                        '            <!--Details Box-->' +
                        '            <div class="Title_container"><br>' +
                        '                <p>' + value.title + '</p>' +
                        '                <div class="Detail_container">' +
                        '                    <p>₹' + value.price + '</p>' +
                        '                </div>' +
                        '                <div class="Price_container">' +
                        '                    <p>₹' + value.altPrice + '</p>' +
                        '                </div>' +
                        '' +
                        '            </div>' +
                        '        </div>' +
                        '';
                    // console.log(value);
                });
                document.getElementById('container').innerHTML = elements;
            }
        });
    }
    getProducts();

    function reMoveProductToWishList(prodId) {
        $.ajax({
            url: "./removeFromList.php",
            method: "POST",
            data: {
                productId: prodId
            },
            dataType: "JSON",
            success: function(data) {
                console.log(data);
                if (data.deleted) {
                    window.location.reload();
                }
            },
        });
    }

    function addProductToCart(product_id) {
        $.ajax({
            url: "../checkout-page/php/addToCart.php",
            method: "POST",
            data: {
                productId: product_id.substring(0, product_id.length - 1)
            },
            dataType: "JSON",
            success: function(data) {
                //console.log(data);
                alert("Product added to cart");
            },
        });
    }
</script>

</html>