<!DOCTYPE html>
<html>
    <head>
        <title>Konfirmasi Pembayaran</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_css.php'; ?>
        <link rel="stylesheet" href="../css/jquery-ui.css">
        <link rel="stylesheet" href="../css/download/jquery-ui-timepicker-addon.css">
        <link rel="stylesheet" href="../css/custom/konfirmasiPembayaran.css">
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
                        <div class="row row-paddingPrimary">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titlePage">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 box-titlePage center font-RobotoCondensed-Bold">
                                            Halaman Konfirmasi Pembayaran
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
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-borderPayment">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-numberPayment center">
                                        <img src="../img/icon/konfirmasiNumber-1.png">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleRed font-RobotoCondensed-Bold">
                                        Order Detail
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-field">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-RobotoCondensed">
                                                    Refferal Code
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 font-RobotoCondensed">
                                                    <input type="text" placeholder="Please insert ur Refferal Code here" class="form-control field-konfirmasiPembayaran">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-RobotoCondensed">
                                                    Payment Date
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 font-RobotoCondensed">
                                                    <div class="input-group">
                                                        <input id="datepicker2" type="text" class="form-control input-form font-RobotoCondensed datepicker" name='payment-date'  placeholder="">
                                                        <div class="input-group-addon input-group-content">
                                                            <div class="label lbl-input"><img src="../img/icon/paymentDate1.png"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-borderPayment">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-numberPayment center">
                                        <img src="../img/icon/konfirmasiNumber-2.png">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleRed font-RobotoCondensed-Bold">
                                        Member Detail
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-field">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-RobotoCondensed">
                                                    Email
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 font-RobotoCondensed">
                                                    <input type="text" placeholder="Masukkan Email Anda" class="form-control field-konfirmasiPembayaran">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleField font-RobotoCondensed">
                                                    Handphone
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 font-RobotoCondensed">
                                                    <input type="text" placeholder="Masukkan nomor handphone Anda" class="form-control field-konfirmasiPembayaran">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-borderPayment">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-numberPayment center">
                                        <img src="../img/icon/konfirmasiNumber-3.png">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleRed font-RobotoCondensed-Bold">
                                        Kode Keamanan
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-field">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="col-md-1 col-sm-1 col-xs-1 custom-kode center font-RobotoCondensed-Bold">
                                                        hsdgfj
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <input type="text" class="form-control field-inputBox custom-input-kode font-RobotoCondensed" placeholder="Masukkan kode" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 center">
                                <button type="button" class="btn button-pesan font-RobotoCondensed-Bold">KIRIM KONFIRMASI <img src="../img/icon/contact-right-arrow.png"></button>
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
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/download/jquery.spinner.js"></script>
    <script src="../js/download/jquery-ui-sliderAccess.js"></script>
    <script src="../js/download/jquery-ui-timepicker-addon.js"></script>
    <script src="../js/custom/orderDatePicker.js"></script>
    <script>
        $(document).ready(function () {

            $('input,textarea').focus(function () {
                $(this).data('placeholder', $(this).attr('placeholder'))
                        .attr('placeholder', '');
            }).blur(function () {
                $(this).attr('placeholder', $(this).data('placeholder'));
            });

        });
    </script>
</html>