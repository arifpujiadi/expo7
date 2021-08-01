<!DOCTYPE html>
<html>
    <head>
        <title>Payment Confirmation</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_css.php'; ?>
        <link rel="stylesheet" href="../css/custom/paymentConfirmation.css">
    </head>
    <body class="body-offcanvas">


        <!-- Header -->
        <!--==================================================-->
        <header>
            <?php include '_header.php'; ?>
        </header>


        <!-- Container -->
        <!--==================================================-->
        <section id="content">
            <div class="row backgroundContent">
                <div class="container container-padding">
                    <div class="col-md-12 col-sm-12 col-xs-12 background-container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-shadowPayment">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 center">
                                        <img class="img-ceklis" src="../img/icon/paymentCeklis.png">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-paddingTextShadow center font-RobotoCondensed">
                                        we will check your payment in advance 
                                        <br>
                                        and will notify you
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-terimakasih center">
                                        <img src="../img/icon/paymentTerimakasih.png">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-paddingTextShadow center font-RobotoCondensed">
                                        Ticket number
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-paddingTextRed center font-RobotoCondensed-Bold">
                                        1234567890
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 font-RobotoCondensed boxOut-paddingOut center">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--Footer-->
        <!--==================================================-->
        <footer>
            <?php include '_footer.php'; ?>
        </footer>


    </body>
    <!--js-->
    <!--==================================================-->
    <?php include './_js.php'; ?>
    <script>
        $(document).ready(function () {

            (function ($) {
                $(window).on("load", function () {
                    $(".content").mCustomScrollbar();
                });
            })(jQuery);

        });
    </script>

</html>