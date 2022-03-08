<style>
    ul {
        margin: 0px;
        padding: 0px;
    }

    .footer-section {
        background: #151414;
        position: relative;
    }

    .footer-content {
        position: relative;
        z-index: 2;
    }

    .footer-text-link {
        color: #a8e3ff;
        font-size: initial;
    }

    .footer-text-link:hover {
        color: #ff5e14;
    }

    .footer-text p {
        margin-bottom: 14px;
        font-size: 16px;
        color: #ffffff;
        line-height: 28px;
    }

    .footer-social-icon {
        display: flex;
        flex-direction: column;
    }

    .footer-social-icon a {
        color: #fff;
        font-size: 16px;
        margin-right: 15px;
    }

    .footer-social-icon i {
        height: 40px;
        width: 40px;
        text-align: center;
        line-height: 38px;
        border-radius: 50%;
    }

    .facebook-bg {
        background: #3B5998;
    }

    .twitter-bg {
        background: #55ACEE;
    }

    .google-bg {
        background: #DD4B39;
    }

    .footer-widget-heading h3 {
        text-align: left;
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 40px;
        position: relative;
    }

    .footer-widget-heading h3::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: -15px;
        height: 2px;
        width: 50px;
        background: #ff5e14;
    }

    .footer-widget ul li {
        display: inline-block;
        /* width: 50%; */
        margin-bottom: 12px;
    }

    .footer-widget ul li a:hover {
        color: #ff5e14;
    }

    .footer-widget ul li a {

        display: flex;
        align-items: center;
        flex-direction: row;
        font-size: initial;
        color: #ffffff;
        text-decoration: none;
        text-transform: capitalize;
    }

    .mail-section {
        border-left: 2px solid #ff5e14;
    }

    .copyright-area {
        background: #202020;
        padding: 25px 0;
    }

    .copyright-text p {
        margin: 0;
        font-size: 14px;
        color: #878787;
    }

    .copyright-text p a {
        color: #ff5e14;
    }

    .footer-menu li {
        display: inline-block;
        margin-left: 20px;
    }

    .footer-menu li:hover a {
        color: #ff5e14;
    }

    .footer-menu li a {
        font-size: 18px;
        text-decoration: none;
        color: #ffffff;
    }

    .p-0 {
        display: flex;
        flex-direction: column;
    }

    .footer-widget {
        margin-left: 10px;
    }

    .col-xl-3,
    .col-xl-2 {
        padding: 0px;
    }

    .footer-grid {

        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    @media screen and (max-width: 1998px) {

        .footer-grid {
            display: grid;
            justify-content: space-around;
            grid-template-columns: auto auto auto auto auto;
        }
    }

    @media screen and (max-width: 1024px) {

        .footer-grid {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            ;

        }
    }

    @media screen and (max-width: 991px) {
        .footer-grid {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
    }

    @media screen and (max-width: 768px) {
        .footer-grid {
            display: grid;
            grid-template-columns: auto auto auto;
        }
    }

    @media screen and (max-width: 425px) {


        .footer-grid {
            display: grid;
            grid-template-columns: auto auto;
        }
    }

    @media screen and (max-width: 300px) {

        .footer-grid {
            display: flex;
        }
    }



    @media (min-width: 768px) {
        .col-md-6 {
            /* width: 100%!important; */
        }
    }
</style>
<footer class="footer-section">
    <!--footer start-->
    <div class="container-fluid">
        <div class="footer-content pt-5 pb-5">
            <div class=" footer-grid">

                <div class="col-xl-2 col-lg-2 col-md-6 mb-30 pl-xl-5 pl-sm-0">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>About</h3>
                        </div>
                        <ul class="p-0">
                            <li><a href=" <?php global $domain;
                                            echo $domain; ?>/footer/AboutUs.php">Contact&nbsp;Us</a></li>
                            <li><a href=" <?php global $domain;
                                            echo $domain; ?>/footer/contactUs.php">About&nbsp;Us</a></li>
                            <li><a href=" <?php global $domain;
                                            echo $domain; ?>/footer/Stories.php">Stories</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Help</h3>
                        </div>
                        <ul class="p-0">
                            <li><a href=" <?php global $domain;
                                            echo $domain; ?>/profile/?section=order">Track&nbsp;your&nbsp;order</a></li>
                            <li><a href=" <?php global $domain;
                                            echo $domain; ?>/profile/?section=order">Payments</a></li>
                            <li><a href=" <?php global $domain;
                                            echo $domain; ?>/profile/?section=order">Shipping</a></li>
                            <li><a href=" <?php global $domain;
                                            echo $domain; ?>/profile/?section=order">Cancellation&nbsp;Return</a><br></li>
                        </ul>
                    </div>
                    <br>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Policy</h3>
                        </div>
                        <ul class="p-0">
                            <li><a href=" <?php global $domain;
                                            echo $domain; ?>/footer/returnPolicy.php">Return&nbsp;Policy</a></li>
                            <li><a href=" <?php global $domain;
                                            echo $domain; ?>/footer/TermOfUse.php">Term&nbsp;of&nbsp;use</a></li>
                            <li><a href=" <?php global $domain;
                                            echo $domain; ?>/footer/Security.php">Security</a></li>
                            <li><a href=" <?php global $domain;
                                            echo $domain; ?>/footer/Privacy.php">Privacy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-2 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Social</h3>
                        </div>
                        <ul class="p-0">
                            <div class="footer-social-icon">
                                <li><a href="#"><span><i class="fab fa-facebook-f facebook-bg mx-2"></i></span><span>Facebook</span></a></li>
                                <li><a href="#"><span><i class="fab fa-instagram google-bg mx-2"></span></i><span>Instagram</span></a></li>
                                <li><a href="#"><span><i class="fab fa-youtube google-bg mx-2"></span></i><span>Youtube</span></a></li>
                                <li><a href="#"><span><i class="fab fa-twitter twitter-bg mx-2"></span></i><span>Twitter</span></a></li>
                            </div>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 mail-section mb-30">
                    <div class="footer-widget ml-lg-5">
                        <div class="footer-widget-heading">
                            <h3>Mail&nbsp;Us</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <a class="footer-text-link" href=" mailto: abc@example.com">mailus@gmail.com</a>
                        </div>
                        <div class="footer-widget-heading my-5">
                            <h3>FAQs</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Got&nbsp;questions&nbsp;? call&nbsp;us&nbsp;24/7</p>
                            <p>(+91)&nbsp;9990056278</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- Footer section ends-->
    <div class="copyright-area">
        <!-- Copyright section start-->
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 text-lg-left">
                    <div class="footer-menu">
                        <ul>
                            <li class="mx-auto"><a href=" <?php global $domain;
                                                            echo $domain; ?>/footer/Advertise.php">Advertise</a></li>
                            <li class="mx-5"><a href=" <?php global $domain;
                                                        echo $domain; ?>/footer/Giftcards.php">Giftcards</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 text-center text-right">
                    <div class="copyright-text">
                        <p>&copy; <a href=" <?php global $domain;
                                            echo $domain; ?>/footer/AboutUs.php"> Thebrowngirl</a> - All Right Reserved </p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Copyright section start-->
</footer>