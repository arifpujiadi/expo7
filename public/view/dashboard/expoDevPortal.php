<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Expo Dev. Portal</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_cssDashboard.php'; ?>
        <link href="../../css/download/jquery.mCustomScrollbar.css" rel="stylesheet">
        <link href="../../css/custom/dashboard/expoDevPortal.css" rel="stylesheet">
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
                                                GAME
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitleDashboard font-RobotoCondensed-Bold">
                                                EXPO DEV. PORTAL
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
                                <div class="col-md-12 col-sm-12 col-xs-12 box-content mCustomScrollbar" data-mcs-theme="dark-3">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="boxOut-gameImg center-block">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-gameImg">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-img">
                                                                <img src="../../img/produk/game-img-1.png">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 title-img  font-RobotoCondensed-Bold">
                                                                CROSS THE RIVER
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="div-hover">
                                                        <button type="button" class="btn button-circle font-RobotoCondensed-Bold" onclick='window.location.assign("detailExpoDevPortal.php")'>DETAIL GAME</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="boxOut-gameImg center-block">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-gameImg">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-img">
                                                                <img src="../../img/produk/game-img-2.png">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 title-img  font-RobotoCondensed-Bold">
                                                                BOB’S ADVENTURE
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="div-hover">
                                                        <button type="button" class="btn button-circle font-RobotoCondensed-Bold"  onclick='window.location.assign("detailExpoDevPortal.php")'>DETAIL GAME</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="boxOut-gameImg center-block">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-gameImg">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-img">
                                                                <img src="../../img/produk/game-img-3.png">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 title-img  font-RobotoCondensed-Bold">
                                                                NEIL’S LANDING
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="div-hover">
                                                        <button type="button" class="btn button-circle font-RobotoCondensed-Bold"  onclick='window.location.assign("detailExpoDevPortal.php")'>DETAIL GAME</button>
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
        <script src="../../js/download/jquery.mCustomScrollbar.js"></script>
    </body>
</html>
