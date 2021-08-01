<!DOCTYPE html>
<html>
    <head>
        <title>Panduan Pembayaran</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_css.php'; ?>
        <link rel="stylesheet" href="../css/custom/panduanPembayaran.css">
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
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titlePage">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 box-titlePage center font-RobotoCondensed-Bold">
                                            Syarat dan Ketentuan
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 box-subTitlePage center font-openSans">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-buttonPesan center">
                                <button type="button" class="btn button-pesan font-RobotoCondensed-Bold">PESAN SEKARANG</button>
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