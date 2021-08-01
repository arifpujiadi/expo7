<!DOCTYPE html>
<html>
    <head>
        <title>Order</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_css.php'; ?>
        <link rel="stylesheet" href="../css/custom/order.css">
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
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleContent">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 box-titleContent font-RobotoCondensed-Bold center">
                                        Halaman Order
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textTitleContent center">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="col-md-5 col-sm-5 col-xs-12 boxOut-optionLeft">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <ul class="nav nav-profil nav-order-out">
                                                <li class="sideMenu-li sideMenu-li-first col-md-12 col-sm-12 col-xs-12 active">
                                                    <a data-toggle="tab" href="#detailOrder">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                                <img class="img-order1" src="../img/icon/order-1.png">
                                                                <img class="img-order1-active" src="../img/icon/order-1-active.png">
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 col-xs-8">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-title-left font-RobotoCondensed-Bold">
                                                                        Detail Order
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleText-left font-RobotoCondensed">
                                                                        Detail Data Anda
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="sideMenu-li sideMenu-li-last col-md-12 col-sm-12 col-xs-12">
                                                    <a data-toggle="tab" href="#paymentMethode">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-4 col-sm-4 col-xs-4">
                                                                <img class="img-order2" src="../img/icon/order-2.png">
                                                                <img class="img-order2-active" src="../img/icon/order-2-active.png">
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 col-xs-8">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-title-left font-RobotoCondensed-Bold">
                                                                        Payment Methode
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleText-left font-RobotoCondensed">
                                                                        Pilih metode pembayaran Anda
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div class="col-md-12 col-sm-12 col-xs-12 tab-content">
                                        <div id="detailOrder" class="col-md-12 col-sm-12 col-xs-12 tab-pane fade in active">
                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-paddingUsername">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-username font-RobotoCondensed">
                                                        Username : <font class="font-RobotoCondensed-Bold">ILUGROUP</font>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-reveralCode font-RobotoCondensed">
                                                        Reveral Code : <font class="font-RobotoCondensed-Bold">1234567890</font>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="paymentMethode" class="col-md-12 col-sm-12 col-xs-12 tab-pane fade">
                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentRight">

                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-contentRight payment-type">

                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <input class="single-check" type="checkbox" id="method-1" />
                                                                    <label class="label-inputPrimary font-RobotoCondensed-Bold" for="method-1">Card Payment</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-primaryText font-RobotoCondensed">
                                                                    Pembayaran menggunakan kartu kredit/debit 
                                                                    dari semua Bank yang berlogo VISA/MasterCard/JCB/Amex.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <ul class="nav nav-order-logoOut">
                                                                <li class="">
                                                                    <a data-toggle="tab" href="#order-1-4">
                                                                        <img src="../img/icon/order-1-4.png">
                                                                    </a>
                                                                </li>
                                                                <li class="">
                                                                    <a data-toggle="tab" href="#order-1-3">
                                                                        <img src="../img/icon/order-1-3.png">
                                                                    </a>
                                                                </li>
                                                                <li class="">
                                                                    <a data-toggle="tab" href="#order-1-2">
                                                                        <img src="../img/icon/order-1-2.png">
                                                                    </a>
                                                                </li>
                                                                <li class="active">
                                                                    <a data-toggle="tab" href="#order-1-1">
                                                                        <img class="img-sizeSmall" src="../img/icon/order-1-1.png">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="boxOut-toogle boxOut-toggle-1 col-md-12 col-sm-12 col-xs-12 red hide-element toggle-slide">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 tab-content">
                                                            <div id="order-1-1" class="col-md-12 col-sm-12 col-xs-12 tab-pane fade in active">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <input type="text" placeholder="Please insert your card number" class="form-control field-cardNumber font-Roboboto" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46" style="background: url('../img/icon/order-1-1.png') no-repeat;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="col-md-6 col-sm-6 col-xs-6 boxOut-leftCard">
                                                                                    <input id="cc-exp" type="text" placeholder="Expired Date" class="form-control field-expired font-Roboboto cc-exp" autocomplete="cc-exp" maxlength="7">
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-6 boxOut-rightCard">
                                                                                    <input type="text" placeholder="3 Digit CVV Number" class="form-control field-cvv font-Roboboto" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46" maxlength="3">
                                                                                    <a href="#" class="font-Roboboto" data-toggle="tooltip" data-trigger="hover" data-placement="auto right" title="CVV atau Card Verification Value Adalah tiga digit angka terakhir yang terdapat pada bagian belakang kartu kredit.">
                                                                                        <img src="../img/icon/circle-help.png">
                                                                                    </a>
                                                                                    </input>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 center">
                                                                                <button type="button" class="btn button-continue font-RobotoCondensed-Bold">SUBMIT</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="order-1-2" class="col-md-12 col-sm-12 col-xs-12 tab-pane fade">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <input type="text" placeholder="Please insert your card number" class="form-control field-cardNumber font-Roboboto" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46" style="background: url('../img/icon/order-1-2.png') no-repeat;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="col-md-6 col-sm-6 col-xs-6 boxOut-leftCard">
                                                                                    <input id="cc-exp" type="text" placeholder="Expired Date" class="form-control field-expired font-Roboboto cc-exp" autocomplete="cc-exp" maxlength="7">
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-6 boxOut-rightCard">
                                                                                    <input type="text" placeholder="3 Digit CVV Number" class="form-control field-cvv font-Roboboto" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46" maxlength="3">
                                                                                    <a href="#" class="font-Roboboto" data-toggle="tooltip" data-trigger="hover" data-placement="auto right" title="CVV atau Card Verification Value Adalah tiga digit angka terakhir yang terdapat pada bagian belakang kartu kredit.">
                                                                                        <img src="../img/icon/circle-help.png">
                                                                                    </a>
                                                                                    </input>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 center">
                                                                                <button type="button" class="btn button-continue font-RobotoCondensed-Bold">SUBMIT</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="order-1-3" class="col-md-12 col-sm-12 col-xs-12 tab-pane fade">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <input type="text" placeholder="Please insert your card number" class="form-control field-cardNumber font-Roboboto" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46" style="background: url('../img/icon/order-1-3.png') no-repeat;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="col-md-6 col-sm-6 col-xs-6 boxOut-leftCard">
                                                                                    <input id="cc-exp" type="text" placeholder="Expired Date" class="form-control field-expired font-Roboboto cc-exp" autocomplete="cc-exp" maxlength="7">
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-6 boxOut-rightCard">
                                                                                    <input type="text" placeholder="3 Digit CVV Number" class="form-control field-cvv font-Roboboto" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46" maxlength="3">
                                                                                    <a href="#" class="font-Roboboto" data-toggle="tooltip" data-trigger="hover" data-placement="auto right" title="CVV atau Card Verification Value Adalah tiga digit angka terakhir yang terdapat pada bagian belakang kartu kredit.">
                                                                                        <img src="../img/icon/circle-help.png">
                                                                                    </a>
                                                                                    </input>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 center">
                                                                                <button type="button" class="btn button-continue font-RobotoCondensed-Bold">SUBMIT</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="order-1-4" class="col-md-12 col-sm-12 col-xs-12 tab-pane fade">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <input type="text" placeholder="Please insert your card number" class="form-control field-cardNumber font-Roboboto" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46" style="background: url('../img/icon/order-1-4.png') no-repeat;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="col-md-6 col-sm-6 col-xs-6 boxOut-leftCard">
                                                                                    <input id="cc-exp" type="text" placeholder="Expired Date" class="form-control field-expired font-Roboboto cc-exp" autocomplete="cc-exp" maxlength="7">
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-6 boxOut-rightCard">
                                                                                    <input type="text" placeholder="3 Digit CVV Number" class="form-control field-cvv font-Roboboto" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46" maxlength="3">
                                                                                    <a href="#" class="font-Roboboto" data-toggle="tooltip" data-trigger="hover" data-placement="auto right" title="CVV atau Card Verification Value Adalah tiga digit angka terakhir yang terdapat pada bagian belakang kartu kredit.">
                                                                                        <img src="../img/icon/circle-help.png">
                                                                                    </a>
                                                                                    </input>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 center">
                                                                                <button type="button" class="btn button-continue font-RobotoCondensed-Bold">SUBMIT</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-contentRight payment-type">

                                                        <div class="col-md-6 col-sm-6 col-xs-12 ">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <input class="single-check" type="checkbox" id="method-2" />
                                                                    <label class="label-inputPrimary font-RobotoCondensed-Bold" for="method-2">Bank Transfer</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-primaryText font-RobotoCondensed">
                                                                    Pembayaran menggunakan kartu kredit/debit 
                                                                    dari semua Bank yang berlogo VISA/MasterCard/JCB/Amex.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <ul class="nav nav-order-logoOut">
                                                                <li class="">
                                                                    <a data-toggle="tab" href="#order-2-5">
                                                                        <img src="../img/icon/order-2-5.png">
                                                                    </a>
                                                                </li>
                                                                <li class="">
                                                                    <a data-toggle="tab" href="#order-2-4">
                                                                        <img src="../img/icon/order-2-4.png">
                                                                    </a>
                                                                </li>
                                                                <li class="">
                                                                    <a data-toggle="tab" href="#order-2-3">
                                                                        <img src="../img/icon/order-2-3.png">
                                                                    </a>
                                                                </li>
                                                                <li class="">
                                                                    <a data-toggle="tab" href="#order-2-2">
                                                                        <img src="../img/icon/order-2-2.jpg">
                                                                    </a>
                                                                </li>
                                                                <li class="active">
                                                                    <a data-toggle="tab" href="#order-2-1">
                                                                        <img src="../img/icon/order-2-1.png">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="boxOut-toogle col-md-12 col-sm-12 col-xs-12 red hide-element toggle-slide">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 tab-content">
                                                            <div id="order-2-1" class="col-md-12 col-sm-12 col-xs-12 tab-pane fade in active">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-bankTransfer">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="col-md-4 col-sm-4 col-xs-12 boxOut-optionBankTransfer">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-optionBankTransfer">
                                                                                            <a data-toggle="tab" href="#bank-transfer-1-1" class="link-bank-transfer">
                                                                                                <input class="check-bankTransfer" type="checkbox" id="bankTransfer-1-1" checked />
                                                                                                <label class="label-inputPrimary" for="bankTransfer-1-1"><img src="../img/icon/bank-transfer-1.png"></label>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-optionBankTransfer">
                                                                                            <a data-toggle="tab" href="#bank-transfer-1-2" class="link-bank-transfer">
                                                                                                <input class="check-bankTransfer" type="checkbox" id="bankTransfer-1-2" />
                                                                                                <label class="label-inputPrimary" for="bankTransfer-1-2"><img src="../img/icon/bank-transfer-2.png"></label>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-optionBankTransfer">
                                                                                            <a data-toggle="tab" href="#bank-transfer-1-3" class="link-bank-transfer">
                                                                                                <input class="check-bankTransfer" type="checkbox" id="bankTransfer-1-3" />
                                                                                                <label class="label-inputPrimary" for="bankTransfer-1-3"><img src="../img/icon/bank-transfer-3.png"></label>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-optionBankTransfer">
                                                                                            <a data-toggle="tab" href="#bank-transfer-1-4" class="link-bank-transfer">
                                                                                                <input class="check-bankTransfer" type="checkbox" id="bankTransfer-1-4" />
                                                                                                <label class="label-inputPrimary bankTransfer-4" for="bankTransfer-1-4"><img src="../img/icon/bank-transfer-4.png"></label>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-optionBankTransfer">
                                                                                            <a data-toggle="tab" href="#bank-transfer-1-5" class="link-bank-transfer">
                                                                                                <input class="check-bankTransfer" type="checkbox" id="bankTransfer-1-5" />
                                                                                                <label class="label-inputPrimary bankTransfer-5" for="bankTransfer-1-5"><img src="../img/icon/bank-transfer-5.png"></label>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-optionBankTransfer">
                                                                                            <a data-toggle="tab" href="#bank-transfer-1-6" class="link-bank-transfer">
                                                                                                <input class="check-bankTransfer" type="checkbox" id="bankTransfer-1-6" />
                                                                                                <label class="label-inputPrimary" for="bankTransfer-1-6"><img src="../img/icon/bank-transfer-6.png"></label>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-8 col-sm-8 col-xs-12 boxOut-contentBankTransfer tab-content">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-contentBankTransfer font-RobotoCondensed tab-pane fade in active" id="bank-transfer-1-1">
                                                                                        Please transfer the total amount to:
                                                                                        <br>
                                                                                        <b>
                                                                                            BCA
                                                                                            <br>
                                                                                            A.N: PT. WESTWOOD INC
                                                                                            <br>
                                                                                            AC# 00-67-68-67-68
                                                                                        </b>
                                                                                        <br>
                                                                                        <br>
                                                                                        1. Please put your order confirmation code in the transfer description
                                                                                        <br>
                                                                                        2. Keep the copy of the receipt and email it to payment@exposeven.biz
                                                                                        for faster process
                                                                                        <br>
                                                                                        3. A confirmation email will be sent to your email once your payment is
                                                                                        confirmed. Your order status will be updated.
                                                                                        <br>
                                                                                        4. Your order will be automatically cancelled if we do not receive payment
                                                                                        in two days (48 hours) from your order date. Any coupon / voucher code
                                                                                        used in the purchase will be deemed null and void.
                                                                                        <br>
                                                                                        5. Please be aware that inter-bank transfers require additional processing
                                                                                        time and we recommend transferring as soon as possible to avoid 
                                                                                        accidental cancellations.
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-contentBankTransfer font-RobotoCondensed tab-pane fade" id="bank-transfer-1-2">
                                                                                        Please transfer the total amount to:
                                                                                        <br>
                                                                                        <b>
                                                                                            BNI
                                                                                            <br>
                                                                                            A.N: PT. WESTWOOD INC
                                                                                            <br>
                                                                                            AC# 00-67-68-67-68
                                                                                        </b>
                                                                                        <br>
                                                                                        <br>
                                                                                        1. Please put your order confirmation code in the transfer description
                                                                                        <br>
                                                                                        2. Keep the copy of the receipt and email it to payment@exposeven.biz
                                                                                        for faster process
                                                                                        <br>
                                                                                        3. A confirmation email will be sent to your email once your payment is
                                                                                        confirmed. Your order status will be updated.
                                                                                        <br>
                                                                                        4. Your order will be automatically cancelled if we do not receive payment
                                                                                        in two days (48 hours) from your order date. Any coupon / voucher code
                                                                                        used in the purchase will be deemed null and void.
                                                                                        <br>
                                                                                        5. Please be aware that inter-bank transfers require additional processing
                                                                                        time and we recommend transferring as soon as possible to avoid 
                                                                                        accidental cancellations.
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-contentBankTransfer font-RobotoCondensed tab-pane fade" id="bank-transfer-1-3">
                                                                                        Please transfer the total amount to:
                                                                                        <br>
                                                                                        <b>
                                                                                            MANDIRI
                                                                                            <br>
                                                                                            A.N: PT. WESTWOOD INC
                                                                                            <br>
                                                                                            AC# 00-67-68-67-68
                                                                                        </b>
                                                                                        <br>
                                                                                        <br>
                                                                                        1. Please put your order confirmation code in the transfer description
                                                                                        <br>
                                                                                        2. Keep the copy of the receipt and email it to payment@exposeven.biz
                                                                                        for faster process
                                                                                        <br>
                                                                                        3. A confirmation email will be sent to your email once your payment is
                                                                                        confirmed. Your order status will be updated.
                                                                                        <br>
                                                                                        4. Your order will be automatically cancelled if we do not receive payment
                                                                                        in two days (48 hours) from your order date. Any coupon / voucher code
                                                                                        used in the purchase will be deemed null and void.
                                                                                        <br>
                                                                                        5. Please be aware that inter-bank transfers require additional processing
                                                                                        time and we recommend transferring as soon as possible to avoid 
                                                                                        accidental cancellations.
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-contentBankTransfer font-RobotoCondensed tab-pane fade" id="bank-transfer-1-4">
                                                                                        Please transfer the total amount to:
                                                                                        <br>
                                                                                        <b>
                                                                                            CIMG NIAGA
                                                                                            <br>
                                                                                            A.N: PT. WESTWOOD INC
                                                                                            <br>
                                                                                            AC# 00-67-68-67-68
                                                                                        </b>
                                                                                        <br>
                                                                                        <br>
                                                                                        1. Please put your order confirmation code in the transfer description
                                                                                        <br>
                                                                                        2. Keep the copy of the receipt and email it to payment@exposeven.biz
                                                                                        for faster process
                                                                                        <br>
                                                                                        3. A confirmation email will be sent to your email once your payment is
                                                                                        confirmed. Your order status will be updated.
                                                                                        <br>
                                                                                        4. Your order will be automatically cancelled if we do not receive payment
                                                                                        in two days (48 hours) from your order date. Any coupon / voucher code
                                                                                        used in the purchase will be deemed null and void.
                                                                                        <br>
                                                                                        5. Please be aware that inter-bank transfers require additional processing
                                                                                        time and we recommend transferring as soon as possible to avoid 
                                                                                        accidental cancellations.
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-contentBankTransfer font-RobotoCondensed tab-pane fade" id="bank-transfer-1-5">
                                                                                        Please transfer the total amount to:
                                                                                        <br>
                                                                                        <b>
                                                                                            PANIN BANK
                                                                                            <br>
                                                                                            A.N: PT. WESTWOOD INC
                                                                                            <br>
                                                                                            AC# 00-67-68-67-68
                                                                                        </b>
                                                                                        <br>
                                                                                        <br>
                                                                                        1. Please put your order confirmation code in the transfer description
                                                                                        <br>
                                                                                        2. Keep the copy of the receipt and email it to payment@exposeven.biz
                                                                                        for faster process
                                                                                        <br>
                                                                                        3. A confirmation email will be sent to your email once your payment is
                                                                                        confirmed. Your order status will be updated.
                                                                                        <br>
                                                                                        4. Your order will be automatically cancelled if we do not receive payment
                                                                                        in two days (48 hours) from your order date. Any coupon / voucher code
                                                                                        used in the purchase will be deemed null and void.
                                                                                        <br>
                                                                                        5. Please be aware that inter-bank transfers require additional processing
                                                                                        time and we recommend transferring as soon as possible to avoid 
                                                                                        accidental cancellations.
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-contentBankTransfer font-RobotoCondensed tab-pane fade" id="bank-transfer-1-6">
                                                                                        Please transfer the total amount to:
                                                                                        <br>
                                                                                        <b>
                                                                                            BANK BRI
                                                                                            <br>
                                                                                            A.N: PT. WESTWOOD INC
                                                                                            <br>
                                                                                            AC# 00-67-68-67-68
                                                                                        </b>
                                                                                        <br>
                                                                                        <br>
                                                                                        1. Please put your order confirmation code in the transfer description
                                                                                        <br>
                                                                                        2. Keep the copy of the receipt and email it to payment@exposeven.biz
                                                                                        for faster process
                                                                                        <br>
                                                                                        3. A confirmation email will be sent to your email once your payment is
                                                                                        confirmed. Your order status will be updated.
                                                                                        <br>
                                                                                        4. Your order will be automatically cancelled if we do not receive payment
                                                                                        in two days (48 hours) from your order date. Any coupon / voucher code
                                                                                        used in the purchase will be deemed null and void.
                                                                                        <br>
                                                                                        5. Please be aware that inter-bank transfers require additional processing
                                                                                        time and we recommend transferring as soon as possible to avoid 
                                                                                        accidental cancellations.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 center">
                                                                                <button type="button" class="btn button-continue font-RobotoCondensed-Bold">SUBMIT</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="order-2-2" class="col-md-12 col-sm-12 col-xs-12 tab-pane fade">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-bankTransfer">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="col-md-4 col-sm-4 col-xs-12 boxOut-optionBankTransfer">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-optionBankTransfer">
                                                                                            <a data-toggle="tab" href="#bank-transfer-2-1" class="link-bank-transfer">
                                                                                                <input class="check-bankTransfer" type="checkbox" id="bankTransfer-2-1" checked />
                                                                                                <label class="label-inputPrimary" for="bankTransfer-2-1"><img src="../img/icon/bank-transfer-1.png"></label>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-optionBankTransfer">
                                                                                            <a data-toggle="tab" href="#bank-transfer-2-2" class="link-bank-transfer">
                                                                                                <input class="check-bankTransfer" type="checkbox" id="bankTransfer-2-2" />
                                                                                                <label class="label-inputPrimary" for="bankTransfer-2-2"><img src="../img/icon/bank-transfer-2.png"></label>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-optionBankTransfer">
                                                                                            <a data-toggle="tab" href="#bank-transfer-2-3" class="link-bank-transfer">
                                                                                                <input class="check-bankTransfer" type="checkbox" id="bankTransfer-2-3" />
                                                                                                <label class="label-inputPrimary" for="bankTransfer-2-3"><img src="../img/icon/bank-transfer-3.png"></label>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-optionBankTransfer">
                                                                                            <a data-toggle="tab" href="#bank-transfer-2-4" class="link-bank-transfer">
                                                                                                <input class="check-bankTransfer" type="checkbox" id="bankTransfer-2-4" />
                                                                                                <label class="label-inputPrimary bankTransfer-4" for="bankTransfer-2-4"><img src="../img/icon/bank-transfer-4.png"></label>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-optionBankTransfer">
                                                                                            <a data-toggle="tab" href="#bank-transfer-2-5" class="link-bank-transfer">
                                                                                                <input class="check-bankTransfer" type="checkbox" id="bankTransfer-2-5" />
                                                                                                <label class="label-inputPrimary bankTransfer-5" for="bankTransfer-2-5"><img src="../img/icon/bank-transfer-5.png"></label>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-optionBankTransfer">
                                                                                            <a data-toggle="tab" href="#bank-transfer-2-6" class="link-bank-transfer">
                                                                                                <input class="check-bankTransfer" type="checkbox" id="bankTransfer-2-6" />
                                                                                                <label class="label-inputPrimary" for="bankTransfer-2-6"><img src="../img/icon/bank-transfer-6.png"></label>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-8 col-sm-8 col-xs-12 boxOut-contentBankTransfer tab-content">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-contentBankTransfer font-RobotoCondensed tab-pane fade in active" id="bank-transfer-2-1">
                                                                                        Please transfer the total amount to:
                                                                                        <br>
                                                                                        <b>
                                                                                            BCA
                                                                                            <br>
                                                                                            A.N: PT. WESTWOOD INC
                                                                                            <br>
                                                                                            AC# 00-67-68-67-68
                                                                                        </b>
                                                                                        <br>
                                                                                        <br>
                                                                                        1. Please put your order confirmation code in the transfer description
                                                                                        <br>
                                                                                        2. Keep the copy of the receipt and email it to payment@exposeven.biz
                                                                                        for faster process
                                                                                        <br>
                                                                                        3. A confirmation email will be sent to your email once your payment is
                                                                                        confirmed. Your order status will be updated.
                                                                                        <br>
                                                                                        4. Your order will be automatically cancelled if we do not receive payment
                                                                                        in two days (48 hours) from your order date. Any coupon / voucher code
                                                                                        used in the purchase will be deemed null and void.
                                                                                        <br>
                                                                                        5. Please be aware that inter-bank transfers require additional processing
                                                                                        time and we recommend transferring as soon as possible to avoid 
                                                                                        accidental cancellations.
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-contentBankTransfer font-RobotoCondensed tab-pane fade" id="bank-transfer-2-2">
                                                                                        Please transfer the total amount to:
                                                                                        <br>
                                                                                        <b>
                                                                                            BNI
                                                                                            <br>
                                                                                            A.N: PT. WESTWOOD INC
                                                                                            <br>
                                                                                            AC# 00-67-68-67-68
                                                                                        </b>
                                                                                        <br>
                                                                                        <br>
                                                                                        1. Please put your order confirmation code in the transfer description
                                                                                        <br>
                                                                                        2. Keep the copy of the receipt and email it to payment@exposeven.biz
                                                                                        for faster process
                                                                                        <br>
                                                                                        3. A confirmation email will be sent to your email once your payment is
                                                                                        confirmed. Your order status will be updated.
                                                                                        <br>
                                                                                        4. Your order will be automatically cancelled if we do not receive payment
                                                                                        in two days (48 hours) from your order date. Any coupon / voucher code
                                                                                        used in the purchase will be deemed null and void.
                                                                                        <br>
                                                                                        5. Please be aware that inter-bank transfers require additional processing
                                                                                        time and we recommend transferring as soon as possible to avoid 
                                                                                        accidental cancellations.
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-contentBankTransfer font-RobotoCondensed tab-pane fade" id="bank-transfer-2-3">
                                                                                        Please transfer the total amount to:
                                                                                        <br>
                                                                                        <b>
                                                                                            MANDIRI
                                                                                            <br>
                                                                                            A.N: PT. WESTWOOD INC
                                                                                            <br>
                                                                                            AC# 00-67-68-67-68
                                                                                        </b>
                                                                                        <br>
                                                                                        <br>
                                                                                        1. Please put your order confirmation code in the transfer description
                                                                                        <br>
                                                                                        2. Keep the copy of the receipt and email it to payment@exposeven.biz
                                                                                        for faster process
                                                                                        <br>
                                                                                        3. A confirmation email will be sent to your email once your payment is
                                                                                        confirmed. Your order status will be updated.
                                                                                        <br>
                                                                                        4. Your order will be automatically cancelled if we do not receive payment
                                                                                        in two days (48 hours) from your order date. Any coupon / voucher code
                                                                                        used in the purchase will be deemed null and void.
                                                                                        <br>
                                                                                        5. Please be aware that inter-bank transfers require additional processing
                                                                                        time and we recommend transferring as soon as possible to avoid 
                                                                                        accidental cancellations.
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-contentBankTransfer font-RobotoCondensed tab-pane fade" id="bank-transfer-2-4">
                                                                                        Please transfer the total amount to:
                                                                                        <br>
                                                                                        <b>
                                                                                            CIMG NIAGA
                                                                                            <br>
                                                                                            A.N: PT. WESTWOOD INC
                                                                                            <br>
                                                                                            AC# 00-67-68-67-68
                                                                                        </b>
                                                                                        <br>
                                                                                        <br>
                                                                                        1. Please put your order confirmation code in the transfer description
                                                                                        <br>
                                                                                        2. Keep the copy of the receipt and email it to payment@exposeven.biz
                                                                                        for faster process
                                                                                        <br>
                                                                                        3. A confirmation email will be sent to your email once your payment is
                                                                                        confirmed. Your order status will be updated.
                                                                                        <br>
                                                                                        4. Your order will be automatically cancelled if we do not receive payment
                                                                                        in two days (48 hours) from your order date. Any coupon / voucher code
                                                                                        used in the purchase will be deemed null and void.
                                                                                        <br>
                                                                                        5. Please be aware that inter-bank transfers require additional processing
                                                                                        time and we recommend transferring as soon as possible to avoid 
                                                                                        accidental cancellations.
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-contentBankTransfer font-RobotoCondensed tab-pane fade" id="bank-transfer-2-5">
                                                                                        Please transfer the total amount to:
                                                                                        <br>
                                                                                        <b>
                                                                                            PANIN BANK
                                                                                            <br>
                                                                                            A.N: PT. WESTWOOD INC
                                                                                            <br>
                                                                                            AC# 00-67-68-67-68
                                                                                        </b>
                                                                                        <br>
                                                                                        <br>
                                                                                        1. Please put your order confirmation code in the transfer description
                                                                                        <br>
                                                                                        2. Keep the copy of the receipt and email it to payment@exposeven.biz
                                                                                        for faster process
                                                                                        <br>
                                                                                        3. A confirmation email will be sent to your email once your payment is
                                                                                        confirmed. Your order status will be updated.
                                                                                        <br>
                                                                                        4. Your order will be automatically cancelled if we do not receive payment
                                                                                        in two days (48 hours) from your order date. Any coupon / voucher code
                                                                                        used in the purchase will be deemed null and void.
                                                                                        <br>
                                                                                        5. Please be aware that inter-bank transfers require additional processing
                                                                                        time and we recommend transferring as soon as possible to avoid 
                                                                                        accidental cancellations.
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-contentBankTransfer font-RobotoCondensed tab-pane fade" id="bank-transfer-2-6">
                                                                                        Please transfer the total amount to:
                                                                                        <br>
                                                                                        <b>
                                                                                            BANK BRI
                                                                                            <br>
                                                                                            A.N: PT. WESTWOOD INC
                                                                                            <br>
                                                                                            AC# 00-67-68-67-68
                                                                                        </b>
                                                                                        <br>
                                                                                        <br>
                                                                                        1. Please put your order confirmation code in the transfer description
                                                                                        <br>
                                                                                        2. Keep the copy of the receipt and email it to payment@exposeven.biz
                                                                                        for faster process
                                                                                        <br>
                                                                                        3. A confirmation email will be sent to your email once your payment is
                                                                                        confirmed. Your order status will be updated.
                                                                                        <br>
                                                                                        4. Your order will be automatically cancelled if we do not receive payment
                                                                                        in two days (48 hours) from your order date. Any coupon / voucher code
                                                                                        used in the purchase will be deemed null and void.
                                                                                        <br>
                                                                                        5. Please be aware that inter-bank transfers require additional processing
                                                                                        time and we recommend transferring as soon as possible to avoid 
                                                                                        accidental cancellations.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 center">
                                                                                <button type="button" class="btn button-continue font-RobotoCondensed-Bold">SUBMIT</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-contentRight payment-type">
                                                        <div class="col-md-5 col-sm-5 col-xs-12">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <input class="single-check" type="checkbox" id="method-3" />
                                                                    <label class="label-inputPrimary font-RobotoCondensed-Bold" for="method-3">Direct Debit</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-primaryText font-RobotoCondensed">
                                                                    Pembayaran melalui fasilitas Internet Banking 
                                                                    dari berbagai Bank ternama.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                                            <ul class="nav nav-order-logoOut">
                                                                <li class="">
                                                                    <a data-toggle="tab" href="#order-3-4">
                                                                        <img class="img-sizeSmall" src="../img/icon/order-3-4.jpg">
                                                                    </a>
                                                                </li>
                                                                <li class="">
                                                                    <a data-toggle="tab" href="#order-3-3">
                                                                        <img class="img-sizeSmall" src="../img/icon/order-3-3.png">
                                                                    </a>
                                                                </li>
                                                                <li class="">
                                                                    <a data-toggle="tab" href="#order-3-2">
                                                                        <img src="../img/icon/order-3-2.png">
                                                                    </a>
                                                                </li>
                                                                <li class="active">
                                                                    <a data-toggle="tab" href="#order-3-1">
                                                                        <img class="img-sizeSmall" src="../img/icon/order-3-1.png">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <div class="boxOut-toogle col-md-12 col-sm-12 col-xs-12 red hide-element toggle-slide">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-debit">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 box-optionDebit box-optionDebit-1">
                                                                                    <a href="#" class="link-debit">
                                                                                        <input class="check-bankTransfer" type="checkbox" id="debit-3-1"  onclick='window.location.assign("#")'/>
                                                                                        <label class="label-inputPrimary" for="debit-3-1"><img class="debit-3-1-img"src="../img/icon/order-3-1.png"></label>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 box-optionDebit box-optionDebit-2">
                                                                                    <a href="#debit3-2" data-toggle="tab" class="link-debit">
                                                                                        <input class="check-bankTransfer" type="checkbox" id="debit-3-2"/>
                                                                                        <label class="label-inputPrimary" for="debit-3-2"><img class="debit-mandiri" src="../img/icon/mandiri-clickPay.png"></label>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-8 col-sm-8 col-xs-12 boxOut-contentBankTransfer tab-content">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 tab-pane fade" id="debit3-1">

                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 tab-pane fade" id="debit3-2">
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <input type="text" placeholder="Please input your Mandiri Debit Card Number" class="form-control field-debit font-Roboboto">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <button type="button" class="btn button-token font-RobotoCondensed-Bold">Mandiri Token Inputs</button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-inputToken">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-inputToken font-Roboboto-Bold">
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                                                                    APPLI
                                                                                                </div>
                                                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                                    3
                                                                                                </div>
                                                                                                <div class="col-md-2 col-sm-2 col-xs-2 boxOut-step">
                                                                                                    Step 1
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-inputToken font-Roboboto-Bold">
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                                                                    INPUT 1
                                                                                                </div>
                                                                                                <div class="col-md-6 col-sm-6 col-xs-6 padding-input">
                                                                                                    <input type="text" class="form-control field-input font-Roboboto" placeholder="Insert your input">
                                                                                                </div>
                                                                                                <div class="col-md-2 col-sm-2 col-xs-2 boxOut-step">
                                                                                                    Step 2
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-inputToken font-Roboboto-Bold">
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                                                                    INPUT 2
                                                                                                </div>
                                                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                                    200000
                                                                                                </div>
                                                                                                <div class="col-md-2 col-sm-2 col-xs-2 boxOut-step">
                                                                                                    Step 3
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-inputToken font-Roboboto-Bold">
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                                                                    INPUT 3
                                                                                                </div>
                                                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                                    73799
                                                                                                </div>
                                                                                                <div class="col-md-2 col-sm-2 col-xs-2 boxOut-step">
                                                                                                    Step 4
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <input type="text" placeholder="Please Input Token Challenge" class="form-control field-debit font-Roboboto">
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 tab-pane fade" id="debit3-3"></div>
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 tab-pane fade" id="debit3-4"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 box-optionDebit box-optionDebit-3">
                                                                                    <a href="#" class="link-debit">
                                                                                        <input class="check-bankTransfer" type="checkbox" id="debit-3-3"  onclick='window.location.assign("#")'/>
                                                                                        <label class="label-inputPrimary" for="debit-3-3"><img src="../img/icon/order-3-3.png"></label>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 box-optionDebit box-optionDebit-4">
                                                                                    <a href="#debit3-4" class="link-debit">
                                                                                        <input class="check-bankTransfer" type="checkbox" id="debit-3-4"  onclick='window.location.assign("#")'/>
                                                                                        <label class="label-inputPrimary" for="debit-3-4"><img src="../img/icon/order-3-4.jpg"></label>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 center">
                                                                        <button type="button" class="btn button-continue font-RobotoCondensed-Bold">SUBMIT</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-contentRight payment-type">
                                                        <div class="col-md-5 col-sm-5 col-xs-12">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <input class="single-check" type="checkbox" id="method-4" />
                                                                    <label class="label-inputPrimary font-RobotoCondensed-Bold" for="method-4">eWallet</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-primaryText font-RobotoCondensed">
                                                                    Pembayaran dengan sistem e-Wallet 
                                                                    dari akun/nomor/PIN ponsel pelanggan.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                                            <ul class="nav nav-order-logoOut">
                                                                <li class="">
                                                                    <a data-toggle="tab" href="#order-4-4">
                                                                        <img src="../img/icon/order-4-4.jpg">
                                                                    </a>
                                                                </li>
                                                                <li class="">
                                                                    <a data-toggle="tab" href="#order-4-3">
                                                                        <img src="../img/icon/order-4-3.png">
                                                                    </a>
                                                                </li>
                                                                <li class="">
                                                                    <a data-toggle="tab" href="#order-4-2">
                                                                        <img src="../img/icon/order-4-2.png">
                                                                    </a>
                                                                </li>
                                                                <li class="active">
                                                                    <a data-toggle="tab" href="#order-4-1">
                                                                        <img src="../img/icon/order-4-1.png">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="boxOut-toogle col-md-12 col-sm-12 col-xs-12 red hide-element toggle-slide">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 tab-content">
                                                            <div id="order-4-1" class="col-md-12 col-sm-12 col-xs-12 tab-pane fade in active">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-bankTransfer">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="col-md-4 col-sm-4 col-xs-12 boxOut-eWallet">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-optionEWallet">
                                                                                            <a href="#eWallet4-1" class="link-eWallet">
                                                                                                <input class="check-bankTransfer" type="checkbox" id="eWallet-4-1" />
                                                                                                <label class="label-inputPrimary" for="eWallet-4-1"><img src="../img/icon/order-4-1.png"></label>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-optionEWallet">
                                                                                            <a href="#eWallet4-2" class="link-eWallet">
                                                                                                <input class="check-bankTransfer" type="checkbox" id="eWallet-4-2" />
                                                                                                <label class="label-inputPrimary" for="eWallet-4-2"><img src="../img/icon/order-4-2.png"></label>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-optionEWallet">
                                                                                            <a href="#eWallet4-3" class="link-eWallet">
                                                                                                <input class="check-bankTransfer" type="checkbox" id="eWallet-4-3" />
                                                                                                <label class="label-inputPrimary" for="eWallet-4-3"><img src="../img/icon/order-4-3.png"></label>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-optionEWallet">
                                                                                            <a href="#eWallet4-4" class="link-eWallet">
                                                                                                <input class="check-bankTransfer" type="checkbox" id="eWallet-4-4" />
                                                                                                <label class="label-inputPrimary" for="eWallet-4-4"><img src="../img/icon/order-4-4.jpg"></label>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-8 col-sm-8 col-xs-12 boxOut-contentBankTransfer tab-content">

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 center">
                                                                                <button type="button" class="btn button-continue font-RobotoCondensed-Bold">SUBMIT</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-contentRight payment-type">
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <input class="single-check" type="checkbox" id="method-5" />
                                                                    <label class="label-inputPrimary font-RobotoCondensed-Bold" for="method-5">Paypal</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-primaryText font-RobotoCondensed">
                                                                    Pembayaran dengan sistem Paypal
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <ul class="nav nav-order-logoOut">
                                                                <li class="active">
                                                                    <a data-toggle="tab" href="#order-5-1">
                                                                        <img class="" src="../img/icon/order-5-1.png">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="boxOut-toogle boxOut-toggle-1 col-md-12 col-sm-12 col-xs-12 red hide-element toggle-slide">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                &nbsp;
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <script src="../js/download/jquery.payment.js"></script>
    <script>

                                                                                        var selectedBox = null;

                                                                                        $(document).ready(function () {

                                                                                            $(".single-check").change(function () {
                                                                                                $('.single-check').not($(this)).prop('checked', false);
                                                                                                $(this).prop('checked', this.checked);

                                                                                                var slide = $(this).parents('.payment-type').siblings('.toggle-slide');
                                                                                                $('.toggle-slide').not(slide).hide();
                                                                                                if (this.checked) {
                                                                                                    slide.fadeIn(400);
                                                                                                } else {
                                                                                                    slide.fadeOut(0);
                                                                                                }

                                                                                            });




                                                                                            $('.link-bank-transfer').click(function () {
                                                                                                debugger;
                                                                                                $(this).closest('.boxOut-optionBankTransfer').find('input[type="checkbox"]').prop('checked', '');
                                                                                                $(this).find('input[type="checkbox"]').prop('checked', 'checked');
                                                                                            });

                                                                                            $('.link-debit').click(function () {
                                                                                                debugger;
                                                                                                $(this).closest('.boxOut-debit').find('input[type="checkbox"]').prop('checked', '');
                                                                                                $(this).find('input[type="checkbox"]').prop('checked', 'checked');
                                                                                            });

                                                                                            $('.link-eWallet').click(function () {
                                                                                                debugger;
                                                                                                $(this).closest('.boxOut-eWallet').find('input[type="checkbox"]').prop('checked', '');
                                                                                                $(this).find('input[type="checkbox"]').prop('checked', 'checked');
                                                                                            });




                                                                                            $('[data-toggle="popover"]').popover();

                                                                                            $('[data-toggle="tooltip"]').tooltip();



                                                                                        });

    </script>
    <script>
        jQuery(function ($) {
            $('.cc-exp').payment('formatCardExpiry');



            $('form').submit(function (e) {
                e.preventDefault();

                var cardType = $.payment.cardType($('.cc-number').val());
                $('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));

            });

        });
    </script>
</html>