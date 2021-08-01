<!DOCTYPE html>
<html lang="en">
    <head>
        <title>History</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_cssDashboard.php'; ?>
        <link rel="stylesheet" href="../../css/jquery-ui.css">
        <link href="../../css/download/jquery-ui-timepicker-addon.css" rel="stylesheet" >
        <link href="../../css/custom/dashboard/history.css" rel="stylesheet">
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
                                                HISTORY
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
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="col-md-6 col-sm-12 col-xs-12 boxOut-checkbox-left">
                                                <div class="boxOut-left">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-check">
                                                        <div class="boxOut-checkbox">
                                                            <input class="checkbox1 checkbox-custom unique" type="checkbox" name="optMetode[]" id="checkbox-1" checked>
                                                            <label for="checkbox-1" class="checkbox-custom-label font-openSans"></label>
                                                        </div>
                                                        <div class="boxOut-checkbox-field font-RobotoCondensed-Light">
                                                            View All
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-check">
                                                        <div class="boxOut-checkbox">
                                                            <input class="checkbox2 checkbox-custom unique" type="checkbox" name="optMetode[]" id="checkbox-2">
                                                            <label for="checkbox-2" class="checkbox-custom-label font-openSans"></label>
                                                        </div>
                                                        <div class="boxOut-checkbox-field">
                                                            <div class="col-md-3 col-sm-3 col-xs-12 font-RobotoCondensed-Light">
                                                                Periode
                                                            </div>
                                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                                <select class="form-control dropdown-konfirmasiPembayaran font-RobotoCondensed-Light">
                                                                    <option value="" selected>Today</option>
                                                                    <option value="">15 hari terakhir</option>
                                                                    <option value="">30 hari terakhir</option>
                                                                    <option value="">6 bulan terakhir</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12 boxOut-checkbox-right">
                                                <div class="boxOut-right">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-check">
                                                        <div class="boxOut-checkbox">
                                                            <input class="checkbox3 checkbox-custom unique" type="checkbox" name="optMetode[]" id="checkbox-3">
                                                            <label for="checkbox-3" class="checkbox-custom-label font-openSans"></label>
                                                        </div>
                                                        <div class="boxOut-checkbox-field font-RobotoCondensed-Light">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 box-tanggal">
                                                                    <div class="col-md-4 col-sm-4 col-xs-12 font-RobotoCondensed-Light">
                                                                        Tanggal Awal
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-8 col-xs-12 boxOut-fieldTanggal">
                                                                        <div class="boxOut-tanggal">
                                                                            <div class="input-group">
                                                                                <input id="datepicker1" type="text" class="form-control input-form field-tanggal datepicker" name='tanggal-awal' placeholder="">
                                                                                <div class="input-group-addon input-group-content">
                                                                                    <div class="label lbl-input"><img src="../../img/icon/calendar-icon.png"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 box-tanggal">
                                                                    <div class="col-md-4 col-sm-4 col-xs-12 font-RobotoCondensed-Light">
                                                                        Tanggal Akhir
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-8 col-xs-12 boxOut-fieldTanggal">
                                                                        <div class="boxOut-tanggal">
                                                                            <div class="input-group">
                                                                                <input id="datepicker2" type="text" class="form-control input-form field-tanggal datepicker" name='tanggal-awal' placeholder="">
                                                                                <div class="input-group-addon input-group-content">
                                                                                    <div class="label lbl-input"><img src="../../img/icon/calendar-icon.png"></div>
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
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-table">

                                            <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                <table class="table table-history col-md-12 col-sm-12 col-xs-12 font-RobotoCondensed-Light">
                                                    <tr class="grey-tableTr font-RobotoCondensed-Bold">
                                                        <td class="title-table title-table-1 title-1">ID Transaction</td>
                                                        <td class="title-table title-table-2 title-2">Transaction Date</td>
                                                        <td class="title-table title-table-1 title-3">Transaction Remarks</td>
                                                        <td class="title-table title-table-2 title-4">Amounts</td>
                                                        <td class="title-table title-table-1 title-5">Account Balance</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tr-1-td-1 center">1234567890</td>
                                                        <td class="tr-1-td-2 center">07/12/2016</td>
                                                        <td class="tr-1-td-1 lorem">Lorem ipsum dolor sit amet</td>
                                                        <td class="tr-1-td-2 text-right">Rp 000,00</td>
                                                        <td class="tr-1-td-1 text-right">Rp 000,00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tr-2-td-1 center">1234567890</td>
                                                        <td class="tr-2-td-2 center">07/12/2016</td>
                                                        <td class="tr-2-td-1 lorem">Lorem ipsum dolor sit amet</td>
                                                        <td class="tr-2-td-2 text-right">Rp 000,00</td>
                                                        <td class="tr-2-td-1 text-right">Rp 000,00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tr-1-td-1 center">1234567890</td>
                                                        <td class="tr-1-td-2 center">07/12/2016</td>
                                                        <td class="tr-1-td-1 lorem">Lorem ipsum dolor sit amet</td>
                                                        <td class="tr-1-td-2 text-right">Rp 000,00</td>
                                                        <td class="tr-1-td-1 text-right">Rp 000,00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tr-2-td-1 center">1234567890</td>
                                                        <td class="tr-2-td-2 center">07/12/2016</td>
                                                        <td class="tr-2-td-1 lorem">Lorem ipsum dolor sit amet</td>
                                                        <td class="tr-2-td-2 text-right">Rp 000,00</td>
                                                        <td class="tr-2-td-1 text-right">Rp 000,00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tr-1-td-1 center">1234567890</td>
                                                        <td class="tr-1-td-2 center">07/12/2016</td>
                                                        <td class="tr-1-td-1 lorem">Lorem ipsum dolor sit amet</td>
                                                        <td class="tr-1-td-2 text-right">Rp 000,00</td>
                                                        <td class="tr-1-td-1 text-right">Rp 000,00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tr-2-td-1 center">1234567890</td>
                                                        <td class="tr-2-td-2 center">07/12/2016</td>
                                                        <td class="tr-2-td-1 lorem">Lorem ipsum dolor sit amet</td>
                                                        <td class="tr-2-td-2 text-right">Rp 000,00</td>
                                                        <td class="tr-2-td-1 text-right">Rp 000,00</td>
                                                    </tr>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
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
        <script src="../../js/jquery-ui.js"></script>
        <script src="../../js/download/jquery-ui-timepicker-addon.js"></script>
        <script src="../../js/custom/orderDatePicker.js"></script>
        <script>
            $(document).ready(function () {

                var $unique = $('input.unique');
                $unique.click(function () {
                    $unique.filter(':checked').not(this).removeAttr('checked');
                });

            });
        </script>
    </body>
</html>
