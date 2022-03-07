<?php
error_reporting(E_ALL ^ E_NOTICE);
include('../function.php');
?>
<style>
    :root {
        --colorPrimary: #00A4EF;
    }

    .btnM {
        background-color: #347ab6;
    }

    a,
    a:hover,
    a:focus,
    a:active {
        text-decoration: none;
        color: inherit;
    }

    #logoDiv>a,
    #logoDiv>a:link,
    #logoDiv>a:hover,
    #logoDiv>a:focus,
    #logoDiv>a:active {
        text-decoration-line: none !important;
        color: white !important;
    }

    /* for loadings */
    .loading {
        -webkit-animation: rotation 1s infinite linear;
    }

    @-webkit-keyframes rotation {
        from {
            -webkit-transform: rotate(0deg);
        }

        to {
            -webkit-transform: rotate(359deg);
        }
    }

    /*################ Navigation Bar ################*/
    header {
        flex-grow: 1;
        width: 100%;
    }

    .flex {
        display: flex;
        align-items: center;
    }

    .none {
        display: none;
    }

    .flip {
        transform: rotate(180deg);
    }

    .navBar {
        font-family: 'Roboto';
        align-content: stretch;
        justify-content: space-evenly;
        align-items: stretch;
        background-color: var(--colorPrimary);
        color: white;
        border: none;
        outline: none;
        height: 56px;
        font-size: large;
    }

    .links {
        flex-grow: 0.2;
        align-content: center;
        justify-content: center;
    }

    .outline {
        outline: none;
    }

    .linkHov {}

    .logoDiv {}

    .searchBox {
        background-color: white;
        border-radius: 2px;
    }

    .searchBox input[type=text],
    .searchBox input[type=text]:focus {
        color: black;
        width: 100% !important;
        box-sizing: border-box !important;
        border: none;
        outline: none;
        padding: 0px !important;
        margin: 0px !important;
    }

    .categorySection {
        justify-content: space-around;
        position: relative;
        display: flex;
        justify-content: space-evenly;
        width: 100%;

    }

    .categorySection span {
        cursor: pointer;
    }

    .navList {
        position: relative;
        display: inline-block;
    }

    .navListItem {
        display: none;
        position: absolute;
        background-color: white;
        box-shadow: 0px 2px 7px 0px rgb(0 0 0 / 20%);
        border-radius: 2px;
        padding-left: 20%;
        padding-right: 20%;
        padding-bottom: 15%;
        z-index: 5;
    }

    .navListItem a {
        padding-top: 15%;

        color: black;
        text-decoration: none;

    }

    .navListItem a:hover {
        color: var(--colorPrimary);
    }

    .navList:hover .navListItem {
        display: flex;
        flex-direction: column;
    }

    .navList:focus .navListItem {
        display: flex;
        flex-direction: column;
    }

    .searchBox i {
        padding: 4.5%;
        color: black;
    }

    .navButtons {
        flex-grow: 0.1;
        justify-content: space-between;
    }

    /*below code is for small screens */
    @media screen and (max-width:786px) {
        .navBar {
            font-family: 'Roboto';
            align-content: stretch;
            justify-content: space-evenly;
            align-items: stretch;
            background-color: var(--colorPrimary);
            color: white;
            border: none;
            outline: none;
            font-size: large;
        }

        .links {
            font-size: 15px;
            flex-grow: 0.8;
            align-content: center;
            justify-content: center;
        }
    }

    .navBar-m {
        width: 99%;
        display: flex;
        justify-content: center;
        align-items: flex-start;
    }

    .searchBox-m {
        width: 93%;
        height: 35px;
    }

    .w100 {
        width: 100%;
    }

    .blue {
        background-color: var(--colorPrimary);
    }

    /*################ Navigation Bar END ################*/

    /* ##############################  CSS for Signin modal  ######################### */

    .modal-open .modal {
        font-family: 'Roboto';
    }

    .tab-style {
        font-size: 20px;
        width: 50%;
        background-color: #f2f2f2;
        text-align: center;
    }

    .close {
        margin: 10px 18px;
        font-size: x-large;
    }

    .nav-tabs>li>a {
        margin-right: 0px;
        color: grey;
    }

    .group2 {
        position: relative;
        margin-top: 16px;
    }

    .btn-block {
        margin-top: 20px;
        margin-bottom: 20px;
        font-size: 18px;
    }

    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:focus,
    .nav-tabs>li.active>a:hover {
        background-color: #e5ecf4;
        color: #4a89dc;
    }

    .modal-header {
        background-color: #e5ecf4;
    }

    .welcome {
        color: #337ab7;
        margin-top: 30px;
        text-align: center;
    }

    .title {
        margin-bottom: 25px;
        font-weight: bolder;
        color: black;
        left: 0px;
        margin-top: 0px;
        margin-bottom: 20px;
    }

    fieldset {
        border: 1px solid white !important;
    }

    .modal-sm {
        max-width: 600px;
    }

    .group {
        position: relative;
        margin-top: 30px;
    }

    .input {
        font-size: 18px;
        padding: 10px 10px 10px 5px;
        -webkit-appearance: none;
        display: block;
        background: none;
        color: #636363;
        width: 100%;
        border: none;
        border-radius: 0;
        border-bottom: 1px solid #e5ecf4;
    }

    .input:focus {
        outline: none;
    }


    /* Label */

    .label {
        color: #757575;
        font-size: 18px;
        font-weight: normal;
        position: absolute;
        pointer-events: none;
        left: -10px;
        /* top: -15px; */
        top: 10px;
        transition: all 0.2s ease;
    }


    /* active */

    .input:focus~.label,
    .input.used~.label,
    .input:valid~.label,
    .input:not(:placeholder-shown)~.label {
        top: -20px;
        transform: scale(.75);
        left: -15px;
        /* font-size: 14px; */
        color: #4a89dc;
    }

    /* Underline */

    .bar {
        position: relative;
        display: block;
        width: 100%;
    }

    .bar:before,
    .bar:after {
        content: '';
        height: 2px;
        width: 0;
        bottom: 1px;
        position: absolute;
        background: #4a89dc;
        transition: all 0.2s ease;
    }

    .bar:before {
        left: 50%;
    }

    .bar:after {
        right: 50%;
    }


    /* active */

    .input:focus~.bar:before,
    .input:focus~.bar:after {
        width: 50%;
    }


    /* Highlight */

    .highlight {
        position: absolute;
        height: 60%;
        width: 100px;
        top: 25%;
        left: 0;
        pointer-events: none;
        opacity: 0.5;
    }


    /* active */

    .input:focus~.highlight {
        animation: inputHighlighter 0.3s ease;
    }

    .forgot-link {
        margin-top: 20px;
        font-size: small;
    }

    @media screen and (max-width: 767px) and (min-width: 576px) {
        #myModal {
            margin-left: 20%;
            margin-right: 20%;
        }

        #forgot-password {
            margin-left: 20%;
            margin-right: 20%;
        }
    }


    @media screen and (min-width: 768px) {

        #myModal .modal-dialog {
            width: 500px;
        }

        #forgot-password .modal-dialog {
            width: 500px;
        }

        .modal-body {
            padding-left: 50px;
            padding-right: 50px;
        }
    }

    em {
        display: none;
    }

    /* ##############################  CSS for Signin modal END ######################### */

    /*################ Carousel Header ################*/
    .carouselSection {
        display: flex;
        justify-content: center;
        max-width: var(--maxWidth);
    }

    /*################ Carousel Header END ################*/

    /*################ Snackbar ################*/
    #snackbarDiv {
        display: none;
        z-index: 2051;
        position: absolute;
        justify-content: center;
        align-content: flex-start;
        align-items: flex-start;
        width: 100vw;
        padding: 10px;
    }

    #snackbar {
        visibility: hidden;
        /* min-width: 250px; */
        /* margin-left: -125px; */
        background-color: #333;
        color: #fff;
        text-align: center;
        border-radius: 2px;
        padding: 16px;
        /* position: fixed; */
        z-index: 2051;
        /* left: 50%; */
        /* top: 30px; */
        font-size: 17px;
        border-radius: 6px;
    }

    #snackbar.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, fadeout 0.5s 2.5s;
    }

    @-webkit-keyframes fadein {
        from {
            top: 0;
            opacity: 0;
        }

        to {
            top: 30px;
            opacity: 1;
        }
    }

    @keyframes fadein {
        from {
            top: 0;
            opacity: 0;
        }

        to {
            top: 30px;
            opacity: 1;
        }
    }

    @-webkit-keyframes fadeout {
        from {
            top: 30px;
            opacity: 1;
        }

        to {
            top: 0;
            opacity: 0;
        }
    }

    @keyframes fadeout {
        from {
            top: 30px;
            opacity: 1;
        }

        to {
            top: 0;
            opacity: 0;
        }
    }

    #serchDiv>div>a>div>div>h5,
    #serchDiv>div>a>div>div>div>h6,
    #serchDiv>div>a>div>div>div>h5,
    #ordersDiv>a>div>div>h5,
    #ordersDiv>a>div>div>div>h5,
    #ordersDiv>a>div>div>div>h6,
    #ordersDiv>a>div>div>div>h6>strike,
    .card-body a,
    .card-body a:hover {
        text-decoration: none !important;
        color: black !important;
    }

    /* Search */
    #serchDiv {
        position: absolute;
        width: 100%;
        background-color: #ffffff;
        padding: 10px;
        z-index: 400;
        color: black !important;
    }

    #ordersDiv {
        margin-bottom: 10px;
    }

    .serchDiv_sub,
    #ordersDiv {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        justify-content: space-around;
        align-content: space-around;
    }

    #serchDiv div a {
        text-decoration: none !important;
        background-color: white;
        margin-top: 15px;
        margin-left: 15px;
        border-radius: 3px;
        transition: transform 0.2s;
    }

    #serchDiv div a div,
    #serchDiv div a div img {
        border-radius: 5px;
    }

    #serchDiv div a:hover {
        z-index: 1000;
        transform: scale(1.25);
    }

    #serchDiv>div>a>div>div>div {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        align-content: center;
    }

    .imgInProcCard {
        height: 150px;
        width: 100%;
        object-fit: cover;
    }

    @media screen and (min-width: 768px) {}

    /*################ End ################*/
    /* OTP */
    .fontNormal {
        font-size: small !important;
    }
</style>
<div class="blue">
    <div class="navBar flex">
        <div id="logoDiv" class="logoDiv flex"><a href="http://localhost/thebrowngirl/"><span>LOGO</span></a></div>
        <div class="none" id="linkButton">
            <i id="listMore" class="fas fa-chevron-down"></i>
        </div>
        <div id="linkBox" class="flex links">

            <div class="flex categorySection linkHov">
                <div class="navList">
                    <span>What's&nbsp;New</span>
                    <div class="navListItem">
                        <a href="#">Placeholder</a>
                        <a href="#">Placeholder</a>
                        <a href="#">Placeholder</a>
                        <a href="#">Placeholder</a>
                        <a href="#">Placeholder</a>
                    </div>
                </div>
                <div class="navList">
                    <span>Bags</span>
                    <div class="navListItem">
                        <a href="#">Placeholder</a>
                        <a href="#">Placeholder</a>
                        <a href="#">Placeholder</a>
                        <a href="#">Placeholder</a>
                        <a href="#">Placeholder</a>
                    </div>
                </div>
                <div class="navList">
                    <span>Hand&nbsp;Bags</span>
                    <div class="navListItem">
                        <a href="#">Placeholder</a>
                        <a href="#">Placeholder</a>
                        <a href="#">Placeholder</a>
                        <a href="#">Placeholder</a>
                        <a href="#">Placeholder</a>
                    </div>
                </div>
                <div class="navList">
                    <span>Combo&nbsp;Offers</span>
                    <div class="navListItem">
                        <a href="#">Placeholder</a>
                        <a href="#">Placeholder</a>
                        <a href="#">Placeholder</a>
                        <a href="#">Placeholder</a>
                        <a href="#">Placeholder</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex">
            <div id="searchBox" class="searchBox flex">
                <input id="serchBoxHead" type="text" />
                <i class="fa fa-search fa-lg" aria-hidden="true"></i>
            </div>
        </div>


        <div id="navButtons" class="flex navButtons">
            <i id="loginNavIcon" class="fa fa-user-circle-o fa-lg" aria-hidden="true" href="#signup"></i>
            <i onclick="gotoWishList()" class="fa fa-heart-o fa-lg" aria-hidden="true"></i>
            <i onclick="gotoCart()" class="fa fa-shopping-bag fa-lg" aria-hidden="true"></i>
        </div>

    </div>
    <div class="navBar flex none" id="mobileSearch">
        <div class="flex navBar-m">
            <div id="searchBox " class="searchBox searchBox-m flex">
                <input type="text" id="serchBoxHeadM" oninput="Search(this.value);" />
                <i class="fa fa-search fa-lg" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</div>
<div style="display: none;" id="serchDiv">
    <div class="serchDiv_sub">

    </div>
</div>
<!-- Modal -->

<div class="modal fade bs-modal-sm log-sign" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div>
                <button id="modelClose" onclick=" mClose();" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                &nbsp;&nbsp;<h4 class="welcome">Welcome to</h4>
                <h2 class="text-center title">
                    <strong>The Brown Girl</strong>
                </h2>

            </div>
            <div class="bs-example bs-example-tabs">
                <ul id="myTab" class="nav nav-tabs">
                    <li id="tab1" class=" tab-style login-shadow "><a href="#signin" data-toggle="tab">Log In</a>
                    </li>
                    <li id="tab2" class=" tab-style "><a href="#signup" data-toggle="tab">Sign Up</a></li>
                </ul>
            </div>
            <div class="modal-body">
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="signin">
                        <form onsubmit="event.preventDefault(); validateMyForm();" class="form-horizontal">
                            <fieldset>
                                <!-- Sign In Form -->
                                <!-- Text input-->
                                <div class="group">
                                    <input placeholder=" " oninput="checkInput(this.id)" id="loginUserId" name='loginUserId' required="" class="input"><span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="loginUserId">Email address</label>
                                </div>
                                <!-- Password input-->
                                <div class="group">
                                    <input required="" placeholder=" " oninput="checkInput(this.id)" id="loginUserPassword" class="input" type="password"><span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="loginUserPassword">Password</label>
                                </div>
                                <em>minimum 6 characters</em>
                                <div class="forgot-link">
                                    <a href="#forgot" data-toggle="modal" data-target="#forgot-password"> I forgot my
                                        password</a>
                                </div>
                                <!-- Button -->
                                <div class="control-group">
                                    <label class="control-label" for="signin"></label>
                                    <div class="controls">
                                        <button type="submit" onclick="loginFunction()" id="signin" name="signin" class="btnM btn btn-primary btn-block">Log
                                            In</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="signup">
                        <form onsubmit="event.preventDefault(); validateMyForm();" class="form-horizontal">
                            <fieldset>
                                <!-- Sign Up Form -->
                                <!-- Text input-->
                                <div class="group">
                                    <input required="" id="signUpName" placeholder=" " pattern="[A-Za-z0-9]+" title="Only Letters and Numbers allowed" class="input" type="text">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label class="label" for="signUpName">Fist Name</label>
                                </div>
                                <div class="group">
                                    <input required="" id="signUpNameLast" placeholder=" " title="Only Letters and Numbers allowed" pattern="[A-Za-z0-9]+" class="input" type="text">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label class="label" for="signUpNameLast">Last Name</label>
                                </div>
                                <!-- Password input-->
                                <div class="group">
                                    <input required="" placeholder=" " id="signUpEmail" title="Example name@name.domain" class="input" type="email"><span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="signUpEmail">Email</label>
                                </div>
                                <!-- Tel Input -->
                                <div class="group2">
                                    <input required="" placeholder=" " id="signUpMobile" class="input" pattern="[0-9]{10}" title="Input 10 digit number" type="tel" maxlength="10"><span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="signUpMobile">Mobile No.</label>
                                </div>
                                <!-- Text input-->
                                <div class="group">
                                    <input required="" placeholder=" " id="signUpPassword" class="input" type="password" pattern=".{8,}" title="Eight or more characters"><span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="signUpPassword">Password</label>
                                </div>
                                <em>1-8 Characters</em>
                                <!-- Button -->
                                <div class="control-group">
                                    <label class="control-label" for="confirmsignup"></label>
                                    <div class="controls">
                                        <button type="submit" id="confirmsignup" name="confirmsignup" class="btnM btn  btn-primary btn-block" onclick=" doSignin()">Sign Up</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!--modal2-->

<div class="modal fade bs-modal-sm" id="forgot-password" tabindex="0" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Password will be sent to your email</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form onsubmit="event.preventDefault(); validateMyForm();" class="form-horizontal">
                    <fieldset>
                        <div class="group">
                            <input required="" placeholder=" " class="input" type="email"><span class="highlight"></span><span class="bar"></span>
                            <label class="label" for="date">Email address</label>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="forpassword"></label>
                            <div class="controls">
                                <button type="submit" id="forpasswodr" name="forpassword" class="btnM btn btn-primary btn-block">Send</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="snackbarDiv">
    <div id="snackbar">Some text some message..</div>
</div>
<!-- OTP MODAL -->
<div id="otpModal" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fontNormal">Verify OTP <i id="lastOtpAtempt">Last Verification Atempt : </i></h5>
                <button type="button" class="close" data-dismiss="otpModal" onclick=" hideOtpModal();" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <input id="otpInput" placeholder="Input OTP" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="modal-footer">
                <button type="button" onclick="requestOTP();" class="btn btn-secondary fontNormal">Resend</button>
                <button type="button" onclick="verifyOTP();" class="btn btn-primary fontNormal">Verify</button>
            </div>
        </div>
    </div>
</div>

<script>
    var userData = null;
    const ud = '<?php

                if (isset($_SESSION['user_id'])) {
                    echo json_encode(selectUserData());
                } ?>';

    if (ud == '') {
        userData = null;
    } else {
        userData = userData = JSON.parse(ud);
    }




    //Change this domain to domian of site
    const site = 'http://localhost/thebrowngirl';

    const loginNavIcon = document.getElementById("loginNavIcon");
    const tab1 = document.querySelector("#tab1");
    const tab2 = document.querySelector("#tab2");
    const tab1A = document.querySelector("#tab1 > a");
    const tab2A = document.querySelector("#tab2 > a");

    loginNavIcon.addEventListener("click", LoginModel);

    function mClose() {
        $('#myModal').modal('hide')
    }

    function LoginModel() {

        if (user_id > -1) {

            window.location.replace(site + '/profile/');

            //alert("Already Logged");

            //const myTimeout = setTimeout(close, 700);

            function close() {
                modelClose.click();
            }


        } else {
            $('#myModal').modal('show')
            tab1A.click()
        }
    }
    tab1A.addEventListener('click', function() {
        tab1.classList.add('active');
        tab2.classList.remove('active');
    })
    tab2A.addEventListener('click', function() {
        tab2.classList.add('active');
        tab1.classList.remove('active');
    })
    /*################ Navigation Bar ################*/
    const linkButton = document.querySelector("#linkButton");
    const listBox = document.querySelector("#linkBox");
    const logoDiv = document.querySelector("#logoDiv");
    const navButtons = document.querySelector("#navButtons");
    const searchBox = document.querySelector("#searchBox");
    const mobileSearch = document.querySelector("#mobileSearch");
    const listMore = document.querySelector("#listMore");
    window.addEventListener("resize", hideList);

    let linkButtonFlip = false;
    linkButton.addEventListener("click", function() {
        hideNavItem(listBox, linkButtonFlip);
        hideNavItem(logoDiv, !linkButtonFlip);
        hideNavItem(navButtons, !linkButtonFlip);

        if (linkButtonFlip) {
            linkButtonFlip = false;
            listMore.classList.remove("flip");
        } else {
            linkButtonFlip = true;
            listMore.classList.add("flip");
        }
    });

    var x = 0;
    //Below code is for small screen size
    function hideList() {
        const h = window.innerHeight;
        const w = window.innerWidth;
        //console.log(w);
        if (w < h && w < 750) {
            hideNavItem(linkButton, false);
            hideNavItem(listBox, true);
            hideNavItem(searchBox, true);
            hideNavItem(mobileSearch, false);
        } else {
            hideNavItem(linkButton, true);
            hideNavItem(listBox, false);

            hideNavItem(logoDiv, false);
            hideNavItem(navButtons, false);
            hideNavItem(searchBox, false);
            hideNavItem(mobileSearch, true);
        }
    }

    function hideNavItem(element, hide) {
        if (hide) {
            element.classList.add("none");
            element.classList.remove("flex");
        } else {
            element.classList.add("flex");
            element.classList.remove("none");
        }
    }
    hideList();

    /*################ Navigation Bar END ################*/
    <?php
    if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
        echo 'var user_id = ' . $_SESSION['user_id'] . ';';
        echo 'var user_name = "' . $_SESSION['name'] . '";';
        echo 'var user_email = "' . $_SESSION['email'] . '";';
    } else {
        echo 'var user_id = -1;';
        echo 'var user_name = "";';
        echo 'var user_email = "";';
    }
    ?>


    /*################ Code For Login Signup ################*/



    const signUpName = document.getElementById('signUpName');
    const signUpNameLast = document.getElementById('signUpNameLast');
    const signUpEmail = document.getElementById('signUpEmail');
    const signUpMobile = document.getElementById('signUpMobile');
    const signUpPassword = document.getElementById('signUpPassword');

    signUpMobile.addEventListener('keypress', e => {
        if (!(e.which >= 48 && e.which <= 57)) {
            e.preventDefault();
            return false;
        }
    })

    function doSignin() {
        //console.log(!(signUpName.value || signUpEmail.value || signUpMobile.value || signUpPassword.value));
        if (!(signUpName.value && signUpEmail.value && signUpMobile.value && signUpPassword.value)) {

            // console.log("empt");
        } else {
            // console.log(signUpName.value, signUpEmail.value, signUpMobile.value, signUpPassword.value);
            $.ajax({
                url: site + "/signup/signUp.php",
                method: "POST",
                data: {
                    name: signUpName.value,
                    nameLast: signUpNameLast.value,
                    email: signUpEmail.value,
                    mobile: signUpMobile.value,
                    password: signUpPassword.value
                },
                dataType: "JSON",
                success: function(data) {
                    //console.log(data);

                    if (data.accountCreated) {

                        //console.log('login');

                        let uEmail = signUpEmail.value;
                        let uPassword = signUpPassword.value;

                        $.ajax({
                            url: loginUrl,
                            method: "POST",
                            data: {
                                email: uEmail,
                                password: uPassword
                            },
                            dataType: "JSON",
                            success: function(data) {
                                //console.log(data)
                                if (data == 0) {
                                    alert("Please check your email and password");
                                }
                                if (data == 1) {

                                    window.location.replace(site + '/profile/?newID=1');

                                    //alert("Login successful");
                                    //modelClose.click();
                                    //window.location.reload();

                                }
                            },
                        });

                    }

                    if (data.emailExist) {
                        alert("Account from this email already exists, please select another email");
                    } else if (!data.emailIsValid) {
                        alert("Invalid email");
                    } else {


                        //alert("Congratulations account created, now you can login with this account");


                        //window.location.href = window.location.href;

                        //tab1A.click();
                        //modelClose.click();
                    }
                },
            });
        }
    }
    signUpName
    /*################ Code For Login Signup END ################*/

    function validateMyForm() {
        return false;
    }

    /*################ for login ################*/



    const modelClose = document.querySelector("#modelClose");

    const loginUserPassword = document.querySelector("#loginUserPassword");
    const signin = document.getElementById("signin");

    //signin.addEventListener("click", loginFunction);
    function checkInput(id) {
        //console.log(id);
        const element = document.getElementById(id);
        if (element.value == '') {
            element.blur();
            //.log(element, "blur");
        } else {
            element.focus();
            element.classList.add('outline')
            //console.log(element, "focus");
        }
    }


    let uEmail;
    let uPassword;

    function loginFunction() {
        uEmail = loginUserId.value;
        uPassword = loginUserPassword.value;
        console.log(uEmail, uPassword);
        if (uEmail == '' || uPassword == '') {
            //alert("Please input your email and password");
        } else {
            $.ajax({
                url: loginUrl,
                method: "POST",
                data: {
                    email: uEmail,
                    password: uPassword
                },
                dataType: "JSON",
                success: function(data) {
                    //console.log(data)
                    if (data == 0) {
                        alert("Please check your email and password");
                    }
                    if (data == 1) {

                        window.location.replace(site + '/profile/');

                        //alert("Login successful");
                        //modelClose.click();
                        //window.location.reload();

                    }
                },
            });
        }
    }

    function showOtpModalIni() {
        let phone = null;
        try {
            let num = document.getElementById('mobileNum');
            phone = num.value;
        } catch (err) {
            phone = userData.mobile;
        }


        //log(num.value);
        if (phone == "" || phone.length < 10) {
            alert("Please input number");
        } else {
            requestOTP();
            showOtpModal();
        }
    }

    function showOtpModal() {

        $('#otpModal').modal('show');
    }

    function hideOtpModal() {
        $('#otpModal').modal('hide');
        document.querySelector("#otpModal").click();
    }

    function verifyOTP() {
        otp = document.getElementById('otpInput').value;
        $.ajax({
            url: site + "/login/verifyOTP.php",
            method: "POST",
            data: {
                otp: otp,
            },
            dataType: "JSON",
            success: function(data) {
                if (data.isVerified) {
                    alert("Your number is Verified");
                    hideOtpModal();
                    loadSection('profile');

                } else {
                    alert("Wrong OTP");
                }
                console.log(data);
            }
        }, );
    }

    function requestOTP() {
        $.ajax({
            url: site + "/login/otp.php",
            method: "POST",
            dataType: "JSON",
            success: function(data) {
                if (data)
                    if (data.sended == 1) {
                        loadLastAtemptData(data.lastOtp);
                    }
                console.log(data);
                if (data.sended)
                    log(data.other[0].otp);
            }
        }, );
    }

    function gotoHome() {
        if (isLoggedIn())
            //location.replace(homeLocation);
            window.location.href = site;
    }

    function gotoWishList() {
        if (isLoggedIn())
            //location.replace(whislistlocation);
            window.location.href = site + '/wishlist/wishlist.php';
    }

    function gotoCart() {
        if (isLoggedIn())
            window.location.href = site + '/checkout-page/check.php';
        //location.replace(cartLocation);
    }

    function isLoggedIn() {
        if (user_id > -1) {

            return true;
        } else {
            alert("Please login first")
            return false;
        }
    }
    /*################ Snackbar ################*/
    function alert(msg) {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        var x = document.getElementById("snackbar");
        var y = document.getElementById("snackbarDiv");
        y.style = 'display:flex;'
        x.innerHTML = msg;
        x.className = "show";
        setTimeout(function() {
            x.className = x.className.replace("show", "");
            setTimeout(function() {
                y.style = 'display:none;'
            }, 3000);
        }, 3000);

    }

    // for loading
    function showLoadingInside(id, toAdd) {
        element = document.getElementById(id);
        const spinner = '&nbsp;<i class="fas fa-spinner loading" aria-hidden="true"></i>&nbsp;';
        if (toAdd) {
            element.innerHTML = spinner + element.innerHTML;
        } else {
            let html = element.innerHTML + "";
            html = html.replace(spinner, '');
            element.innerHTML = html;
        }
    }

    /*################ Snackbar end ################*/
    // Fancy Log
    function log(data) {
        setTimeout(console.log.bind(console, "%c " + data + " %c", "background: #3F51B5;color:#FFF;padding:5px;border-radius: 5px;line-height: 26px;font-size: 20px", ""));
    }

    /*################ Search Logic start ################*/
    const serchBoxHead = document.getElementById('serchBoxHead');
    const serchBoxHeadM = document.getElementById('serchBoxHeadM');
    const serchDiv = document.getElementById('serchDiv');
    const serchDiv_sub = document.querySelector("#serchDiv > div");

    serchBoxHead.addEventListener('focus', e => {
        serchDiv.style = 'display: block';
    });
    serchBoxHead.addEventListener('blur', e => {
        let q = e.target.value;
        if (q == "" && q == " ") {
            serchDiv.style = 'display: none';
        }
    });

    serchBoxHeadM.addEventListener('focus', e => {
        serchDiv.style = 'display: block';
    });
    serchBoxHeadM.addEventListener('blur', e => {
        let q = e.target.value;
        if (q == "" && q == " ") {
            serchDiv.style = 'display: none';
        }
    });

    serchBoxHead.addEventListener('input', e => {
        let q = e.target.value;
        Search(q);
    });

    function Search(q) {
        if (q != "" && q != " ") {
            $.ajax({
                url: site + "/product/searchProducts.php",
                method: "POST",
                data: {
                    query: q,
                },
                dataType: "JSON",
                success: function(data) {
                    //console.log(data)
                    let prods = '';
                    serchDiv_sub.innerHTML = '';
                    data.forEach(product => {
                        let prod = ' <a href="' + site + '/ProdDescPage/?pid=' + product.product.product_id + '">' +
                            '            <div class="card" style="width: 18rem;">' +
                            '<img class="card-img-top imgInProcCard" src="' + site + product.images.file_name + '" alt="Card image cap"><div class="card-body"><h5>' + product.product.title + '</h5><div class="flex"><h5>₹' + product.product.price + '</h5>&nbsp;<h6><strike>₹' + product.product.altPrice + '</strike></h6></div></div></div></a>';
                        //console.log(prod);
                        serchDiv_sub.innerHTML += prod;
                    });
                    //console.log(prods);
                }
            }, );
        }
    }
    /*################ Search Logic End ################*/
</script>