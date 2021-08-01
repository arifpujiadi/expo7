<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Withdrawal</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_cssDashboard.php'; ?>
        <link href="../../css/download/build.css" rel="stylesheet">
        <link href="../../css/custom/dashboard/withdrawal.css" rel="stylesheet">
    </head>

    <body class="nav-sm">
        <div class="container body">
            <div class="main_container">

                <sideMenu>
                    <?php include '_sideMenu.php'; ?>
                </sideMenu>

                <header>
                    <div class="top_nav">
                        <div class="nav_menu">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="col-md-7 col-sm-6 col-xs-7">
                                    <div class="hidden-lg hidden-md col-sm-2 col-xs-3">
                                        <div class="nav toggle">
                                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-10 col-xs-9 boxOut-headerWelcome">
                                        <div class="col-md-7 col-sm-12 col-xs-12 boxOut-titleDashboard font-Exo2SemiBold">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                E-WALLET
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitleDashboard font-RobotoCondensed-Bold">
                                                WITHDRAWAL
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-12 col-xs-12 boxOut-selectHeader">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <select class="form-control dropdown-headerSelectLeft font-RobotoCondensed">
                                                    <option value="" selected disabled hidden>Select Currency</option>
                                                    <option value="">English</option>
                                                    <option value="">Indonesia</option>
                                                </select>
                                                <select class="form-control dropdown-headerSelectRight font-RobotoCondensed">
                                                    <option value="" selected disabled hidden>Select language</option>
                                                    <option value="">English</option>
                                                    <option value="">Indonesia</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-6 col-xs-5">
                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-table-headerName table-responsive">
                                        <table class="table table-headerName col-md-12 col-sm-12 col-xs-12 font-Exo2SemiBold">
                                            <tr class="grey-tableTr">
                                                <td class="td-headerName">HOWDY !</td>
                                                <td class="column-foto hidden-xs" rowspan="2">
                                                    <div class="boxOut-headerFoto" style="background-image: url('../../img/produk/member-login.png');"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-headerGroup">ILUGROUP  MULTIMEDIA</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </header>



                <!-- Content -->
                <!--==================================================-->
                <section id="content">
                    <div class="right_col" role="main">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-content">
                                <div class="col-md-12 col-sm-12 col-xs-12 box-content">

                                    <section>
                                        <div class="wizard">
                                            <div class="wizard-inner">
                                                <div class="connecting-line"></div>
                                                <ul class="nav nav-tabs" role="tablist">

                                                    <li role="presentation" class="li-1 active">
                                                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Confirm your identity">
                                                            <span class="round-tab"></span>
                                                            <div class="li-text font-RobotoCondensed">
                                                                CONFIRM YOUR IDENTITY
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li role="presentation" class="li-2 disabled">
                                                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Verify OTP or Email">
                                                            <span class="round-tab"></span>
                                                            <div class="li-text font-RobotoCondensed">
                                                                VERIFY OTP OR EMAIL
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="li-3 disabled">
                                                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Notice">
                                                            <span class="round-tab"></span>
                                                            <div class="li-text font-RobotoCondensed">
                                                                NOTICE
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li role="presentation" class="li-4 disabled">
                                                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Completed">
                                                            <span class="round-tab"></span>
                                                            <div class="li-text font-RobotoCondensed">
                                                                COMPLETED
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <form role="form">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" role="tabpanel" id="step1">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-content-step">
                                                                <div class="col-md-6 col-sm-6 col-xs-12 boxOut-fieldLeft">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-field-textTitle font-RobotoCondensed">
                                                                            Username :
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-field-icon form-group has-feedback">
                                                                            <input type="text" class="form-control field-icon font-RobotoCondensed" placeholder="">
                                                                            <span class="fa form-control-feedback field-icon-user right" aria-hidden="true"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-xs-12 boxOut-fieldRight">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-field-textTitle font-RobotoCondensed">
                                                                            Password :
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-field-icon form-group has-feedback">
                                                                            <input type="password" class="form-control field-icon font-RobotoCondensed" placeholder="">
                                                                            <span class="fa form-control-feedback field-icon-password right" aria-hidden="true"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 center">
                                                                <button type="button" class="btn button-next next-step font-RobotoCondensed">CONFIRM</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" role="tabpanel" id="step2">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-content-step">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-content-step">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 box-step2-1">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="boxOut-select center-block">
                                                                                <div class="checkbox edit-checbox font-RobotoCondensed">
                                                                                    <input id="otp" class="select" name="select[]" type="checkbox">
                                                                                    <label for="otp">
                                                                                        Verify With OTP (One Time Password) 
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="boxOut-select center-block">
                                                                                <div class="checkbox edit-checbox font-RobotoCondensed">
                                                                                    <input id="email" class="select" name="select[]" type="checkbox">
                                                                                    <label for="email">
                                                                                        Verify With Email
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12 box-step2-2">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-verify center-block">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-field-textTitle font-RobotoCondensed">
                                                                                Obtain code from OTP or email 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-field-icon form-group has-feedback">
                                                                                <input type="text" class="form-control field-otpEmail font-RobotoCondensed" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12 box-step2-3">
                                                                    <div class="boxOut-step2-next center-block">
                                                                        <img src="../../img/icon/ceklis-white.png">
                                                                        <div class="ceklis-title font-RobotoCondensed-Bold">
                                                                            IDENTITY VERIFIED
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-content-button center">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 button-step2-1">
                                                                    <button type="button" class="btn button-next button-select font-RobotoCondensed">SELECT</button>
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12 button-step2-2">
                                                                    <button type="button" class="btn button-next button-verify font-RobotoCondensed">VERIFY</button>
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12 button-step2-3">
                                                                    <button type="button" class="btn button-next next-step font-RobotoCondensed">NEXT</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" role="tabpanel" id="step3">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-content-step-3">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-content-step boxOut-content-step-3">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-step3-text font-RobotoCondensed-Light">
                                                                            - you account will no longer be held by our premises, meaning if your downline are still continuing any value you earn will not be able to be claimed and will instead be redirected to the bussiness  (Westwood Inc.)
                                                                            <br>
                                                                            - We will refund the money back fully ($12.98) with charges that may apply during transaction.
                                                                            <br>
                                                                            - if you heven’t paid your $12.98 membership, your account will only be disposed and referalls will be notified that they’re able to their used invitation
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-checbox-agree">
                                                                            <div class="checkbox edit-checbox edit-checbox-agree font-RobotoCondensed-Light">
                                                                                <input id="agree" class="select" name="agree[]" type="checkbox">
                                                                                <label for="agree">
                                                                                    I agree with the following conditions
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 center">
                                                                <button type="button" class="btn button-next next-step font-RobotoCondensed">NEXT</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" role="tabpanel" id="complete">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-content-step boxOut-content-logout ">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-success-text font-RobotoCondensed-Bold">
                                                                        SUCCESS !!!
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-success-logout font-RobotoCondensed-Light">
                                                                        Loggin out in   01:00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 center">
                                                                <button type="button" class="btn button-logout next-step font-RobotoCondensed">LOGOUT</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </form>
                                        </div>
                                    </section>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>



                <!-- footer content -->
                <footer>
                    <?php include '_footerDashboard.php'; ?>
                </footer>
                <!-- /footer content -->


            </div>
        </div>


        <!--js-->
        <!--==================================================-->
        <?php include '_jsDashboard.php'; ?>
        <script>
            $(document).ready(function () {
                //Initialize tooltips
                $('.nav-tabs > li a[title]').tooltip();

                //Wizard
                $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

                    var $target = $(e.target);

                    if ($target.parent().hasClass('disabled')) {
                        return false;
                    }
                });

                $(".next-step").click(function (e) {

                    var $active = $('.wizard .nav-tabs li.active');
                    $active.next().removeClass('disabled');
                    nextTab($active);

                });
                $(".prev-step").click(function (e) {

                    var $active = $('.wizard .nav-tabs li.active');
                    prevTab($active);

                });
            });

            function nextTab(elem) {
                $(elem).next().find('a[data-toggle="tab"]').click();
            }
            function prevTab(elem) {
                $(elem).prev().find('a[data-toggle="tab"]').click();
            }
        </script>
        <script>
            $(document).ready(function () {

                var $jasa = $('input.select');
                $jasa.click(function () {
                    $jasa.filter(':checked').not(this).removeAttr('checked');
                });

                $('.boxOut-content-button').find('.button-select').on('click', function (e) {
                    $(this).parents('.box-content-step').find('.box-step2-1').hide();
                    $(this).parents('.box-content-step').find('.button-step2-1').hide();
                    $(this).parents('.box-content-step').find('.box-step2-2').show();
                    $(this).parents('.box-content-step').find('.button-step2-2').show();
                });

                $('.boxOut-content-button').find('.button-verify').on('click', function (e) {
                    $(this).parents('.box-content-step').find('.box-step2-2').hide();
                    $(this).parents('.box-content-step').find('.button-step2-2').hide();
                    $(this).parents('.box-content-step').find('.box-step2-3').show();
                    $(this).parents('.box-content-step').find('.button-step2-3').show();
                });



            });
        </script>
    </body>
</html>
