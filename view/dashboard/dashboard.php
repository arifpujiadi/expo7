<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_cssDashboard.php'; ?>
        <link href="../../css/download/jquery.mCustomScrollbar.css" rel="stylesheet">
        <link href="../../css/custom/dashboard/dashboard.css" rel="stylesheet">
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
                                            WELCOME ON DASHBOARD !
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
                                    <div class="col-md-5 col-sm-12 col-xs-12 boxOut-contentLeft">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentLeft-top">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 title-moneyEarned font-RobotoCondensed-Light">
                                                        Money Earned
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="circle-earn center-block font-Exo2SemiBold">
                                                            <font class="font-dollar">$</font>
                                                            45
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-batas"></div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 title-moneyEarned font-RobotoCondensed-Light">
                                                        Money Due
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="circle-earn center-block font-Exo2SemiBold">
                                                            <font class="font-dollar">$</font>
                                                            75
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentLeft-bottom table-responsive mCustomScrollbar" data-mcs-theme="dark-3">
                                            <table class="table edit-tableMail col-md-12 col-sm-12 col-xs-12 font-RobotoCondensed-Light">
                                                <tr class="tableTr-1">
                                                    <td class="icon-1 center">
                                                        <img class="td-mail" src="../../img/icon/mail-icon.png">
                                                    </td>
                                                    <td class="table-title">
                                                        <a href="#">
                                                            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque...
                                                        </a>
                                                    </td>
                                                    <td class="close-td">
                                                        <button type="button" class="btn button-closed center-block" style="background-image: url('../../img/icon/close-icon.png');"></button>
                                                    </td>
                                                </tr>
                                                <tr class="tableTr-2">
                                                    <td class="icon-2 center">
                                                        <img class="td-mail" src="../../img/icon/mail-icon.png">
                                                    </td>
                                                    <td class="table-title">
                                                        <a href="#">
                                                            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque...
                                                        </a>
                                                    </td>
                                                    <td class="close-td">
                                                        <button type="button" class="btn button-closed center-block" style="background-image: url('../../img/icon/close-icon.png');"></button>
                                                    </td>
                                                </tr>
                                                <tr class="tableTr-1">
                                                    <td class="icon-1 center">
                                                        <img class="td-mail" src="../../img/icon/mail-icon.png">
                                                    </td>
                                                    <td class="table-title">
                                                        <a href="#">
                                                            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque...
                                                        </a>
                                                    </td>
                                                    <td class="close-td">
                                                        <button type="button" class="btn button-closed center-block" style="background-image: url('../../img/icon/close-icon.png');"></button>
                                                    </td>
                                                </tr>
                                                <tr class="tableTr-2">
                                                    <td class="icon-2 center">
                                                        <img class="td-ticket" src="../../img/icon/ticket-icon.png">
                                                    </td>
                                                    <td class="table-title">
                                                        <a href="#">
                                                            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque...
                                                        </a>
                                                    </td>
                                                    <td class="close-td">
                                                        <button type="button" class="btn button-closed center-block" style="background-image: url('../../img/icon/close-icon.png');"></button>
                                                    </td>
                                                </tr>
                                                <tr class="tableTr-1">
                                                    <td class="icon-1 center">
                                                        <img class="td-ticket" src="../../img/icon/ticket-icon.png">
                                                    </td>
                                                    <td class="table-title">
                                                        <a href="#">
                                                            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque...
                                                        </a>
                                                    </td>
                                                    <td class="close-td">
                                                        <button type="button" class="btn button-closed center-block" style="background-image: url('../../img/icon/close-icon.png');"></button>
                                                    </td>
                                                </tr>
                                                <tr class="tableTr-2">
                                                    <td class="icon-2 center">
                                                        <img class="td-ticket" src="../../img/icon/ticket-icon.png">
                                                    </td>
                                                    <td class="table-title">
                                                        <a href="#">
                                                            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque...
                                                        </a>
                                                    </td>
                                                    <td class="close-td">
                                                        <button type="button" class="btn button-closed center-block" style="background-image: url('../../img/icon/close-icon.png');"></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12 boxOut-contentRight mCustomScrollbar" data-mcs-theme="dark-3">

                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 title-Accumulated font-RobotoCondensed-Light">
                                                            Accumulated Downline
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 table-responsive boxOut-table-people">
                                                            <table class="table table-people col-md-12 col-sm-12 col-xs-12 font-Exo2SemiBold">
                                                                <tr class="grey-tableTr font-Exo2SemiBold">
                                                                    <td class="minimum-td countNumber" rowspan="2">196</td>
                                                                    <td class="title-people" colspan="2">PEOPLE</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="minimum-td title-level">Level IV</td>
                                                                    <td class="">
                                                                        <img class="medal-level" src="../../img/icon/level-4.png">
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 table-responsive boxOut-table-progress">
                                                            <table class="table table-progress col-md-12 col-sm-12 col-xs-12">
                                                                <tr class="">
                                                                    <td class="font-RobotoCondensed-Light title-progress">
                                                                        <div class="boxOut-progress">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-progress">
                                                                                    Progress Level 
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-ofPeople font-RobotoCondensed-Bold">
                                                                                    95 of 100 People
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="minimum-td chart-progress">
                                                                        <canvas id="canvas" class="chart-percentage" height="100" width="100"></canvas>
                                                                        <div class="boxOut-title-chart font-Exo2SemiBold">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-chart">
                                                                                    95 
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 percent-chart">
                                                                                    % 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-rightBottom">
                                                <div class="col-md-6 col-sm-12 col-xs-12 boxOut-rightBottom-left table-responsive">
                                                    <table class="table table-progress col-md-12 col-sm-12 col-xs-12">
                                                        <tr class="tr-padding">
                                                            <td class="minimum-td">
                                                                <div class="circle-member">
                                                                    <img class="" src="../../img/icon/member.png">
                                                                    <div class="circle-number font-RobotoCondensed-Bold">
                                                                        1
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="boxOut-title-name">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-name font-RobotoCondensed-Bold">
                                                                    Barack Obama 
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12 subTitle-name font-RobotoCondensed-Light">
                                                                    Level I   Downline : 5
                                                                </div>
                                                            </td>
                                                            <td class="">
                                                                <div id="bar-1"></div>
                                                            </td>
                                                            <td class="minimum-td">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-peoplePercent font-RobotoCondensed-Bold">
                                                                    5 / 7 People
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12 subTitle-peoplePercent font-RobotoCondensed-Light">
                                                                    71.4 %
                                                                </div>
                                                            </td>
                                                            <td class="minimum-td">
                                                                <img class="member-medal-level" src="../../img/icon/level-4.png">
                                                            </td>
                                                        </tr>
                                                        <tr class="tr-padding">
                                                            <td class="minimum-td">
                                                                <div class="circle-member">
                                                                    <img class="" src="../../img/produk/member-1.png">
                                                                    <div class="circle-number font-RobotoCondensed-Bold">
                                                                        2
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="boxOut-title-name">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-name font-RobotoCondensed-Bold">
                                                                    Barack Obama 
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12 subTitle-name font-RobotoCondensed-Light">
                                                                    Level I   Downline : 5
                                                                </div>
                                                            </td>
                                                            <td class="">
                                                                <div id="bar-2"></div>
                                                            </td>
                                                            <td class="minimum-td">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-peoplePercent font-RobotoCondensed-Bold">
                                                                    5 / 7 People
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12 subTitle-peoplePercent font-RobotoCondensed-Light">
                                                                    71.4 %
                                                                </div>
                                                            </td>
                                                            <td class="minimum-td">
                                                                <img class="member-medal-level" src="../../img/icon/level-4.png">
                                                            </td>
                                                        </tr>
                                                        <tr class="tr-padding">
                                                            <td class="minimum-td">
                                                                <div class="circle-member">
                                                                    <img class="" src="../../img/icon/member.png">
                                                                    <div class="circle-number font-RobotoCondensed-Bold">
                                                                        3
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="boxOut-title-name">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-name font-RobotoCondensed-Bold">
                                                                    Barack Obama 
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12 subTitle-name font-RobotoCondensed-Light">
                                                                    Level I   Downline : 5
                                                                </div>
                                                            </td>
                                                            <td class="">
                                                                <div id="bar-3"></div>
                                                            </td>
                                                            <td class="minimum-td">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-peoplePercent font-RobotoCondensed-Bold">
                                                                    5 / 7 People
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12 subTitle-peoplePercent font-RobotoCondensed-Light">
                                                                    71.4 %
                                                                </div>
                                                            </td>
                                                            <td class="minimum-td">
                                                                <img class="member-medal-level" src="../../img/icon/level-4.png">
                                                            </td>
                                                        </tr>
                                                        <tr class="tr-padding">
                                                            <td class="minimum-td">
                                                                <div class="circle-member">
                                                                    <img class="" src="../../img/produk/member-1.png">
                                                                    <div class="circle-number font-RobotoCondensed-Bold">
                                                                        4
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="boxOut-title-name">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-name font-RobotoCondensed-Bold">
                                                                    Barack Obama 
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12 subTitle-name font-RobotoCondensed-Light">
                                                                    Level I   Downline : 5
                                                                </div>
                                                            </td>
                                                            <td class="">
                                                                <div id="bar-4"></div>
                                                            </td>
                                                            <td class="minimum-td">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-peoplePercent font-RobotoCondensed-Bold">
                                                                    5 / 7 People
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12 subTitle-peoplePercent font-RobotoCondensed-Light">
                                                                    71.4 %
                                                                </div>
                                                            </td>
                                                            <td class="minimum-td">
                                                                <img class="member-medal-level" src="../../img/icon/level-4.png">
                                                            </td>
                                                        </tr>

                                                    </table>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12 boxOut-rightBottom-right table-responsive">
                                                    <table class="table table-progress col-md-12 col-sm-12 col-xs-12">
                                                        <tr class="tr-padding">
                                                            <td class="minimum-td">
                                                                <div class="circle-member">
                                                                    <img class="" src="../../img/icon/member.png">
                                                                    <div class="circle-number font-RobotoCondensed-Bold">
                                                                        5
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="boxOut-title-name">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-name font-RobotoCondensed-Bold">
                                                                    Barack Obama 
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12 subTitle-name font-RobotoCondensed-Light">
                                                                    Level I   Downline : 5
                                                                </div>
                                                            </td>
                                                            <td class="">
                                                                <div id="bar-5"></div>
                                                            </td>
                                                            <td class="minimum-td">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-peoplePercent font-RobotoCondensed-Bold">
                                                                    5 / 7 People
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12 subTitle-peoplePercent font-RobotoCondensed-Light">
                                                                    71.4 %
                                                                </div>
                                                            </td>
                                                            <td class="minimum-td">
                                                                <img class="member-medal-level" src="../../img/icon/level-4.png">
                                                            </td>
                                                        </tr>
                                                        <tr class="tr-padding">
                                                            <td class="minimum-td">
                                                                <div class="circle-member">
                                                                    <img class="" src="../../img/icon/member.png">
                                                                    <div class="circle-number font-RobotoCondensed-Bold">
                                                                        6
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="boxOut-title-name">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-name font-RobotoCondensed-Bold">
                                                                    Barack Obama 
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12 subTitle-name font-RobotoCondensed-Light">
                                                                    Level I   Downline : 5
                                                                </div>
                                                            </td>
                                                            <td class="">
                                                                <div id="bar-6"></div>
                                                            </td>
                                                            <td class="minimum-td">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-peoplePercent font-RobotoCondensed-Bold">
                                                                    5 / 7 People
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12 subTitle-peoplePercent font-RobotoCondensed-Light">
                                                                    71.4 %
                                                                </div>
                                                            </td>
                                                            <td class="minimum-td">
                                                                <img class="member-medal-level" src="../../img/icon/level-4.png">
                                                            </td>
                                                        </tr>
                                                        <tr class="tr-padding">
                                                            <td class="minimum-td">
                                                                <div class="circle-member">
                                                                    <img class="" src="../../img/icon/member.png">
                                                                    <div class="circle-number font-RobotoCondensed-Bold">
                                                                        7
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="boxOut-title-name">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-name font-RobotoCondensed-Bold">
                                                                    Barack Obama 
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12 subTitle-name font-RobotoCondensed-Light">
                                                                    Level I   Downline : 5
                                                                </div>
                                                            </td>
                                                            <td class="">
                                                                <div id="bar-7"></div>
                                                            </td>
                                                            <td class="minimum-td">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-peoplePercent font-RobotoCondensed-Bold">
                                                                    5 / 7 People
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12 subTitle-peoplePercent font-RobotoCondensed-Light">
                                                                    71.4 %
                                                                </div>
                                                            </td>
                                                            <td class="minimum-td">
                                                                <img class="member-medal-level" src="../../img/icon/level-4.png">
                                                            </td>
                                                        </tr>


                                                    </table>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-5 col-sm-12 col-xs-12 hidden-xs hidden-sm">

                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12 boxOut-referral">
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <div class="col-md-3 col-sm-3 col-xs-12 boxOut-titleReferral font-RobotoCondensed">
                                                Your referral link :
                                            </div>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <div class="input-group edit-input-group">
                                                    <input type="text" class="form-control input-fieldKomfirmasi font-PoppinsSemiBold" value="http://rio.it-devgroup.com/?ref=a6a197b8d448610"/>
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn button-play font-RobotoCondensed-Bold">Copy</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-5 col-xs-12 boxOut-code">
                                            <div class="col-md-5 col-sm-5 col-xs-12 boxOut-titleReferral font-RobotoCondensed">
                                                Your referral code :
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-12">
                                                <div class="input-group edit-input-group">
                                                    <input type="text" class="form-control input-fieldKomfirmasi font-PoppinsSemiBold" value="a6a197b8d448610"/>
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn button-play font-RobotoCondensed-Bold">Copy</button>
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
        <script src="../../js/download/Chart.js"></script>
        <script src="../../js/download/bootstrap-brogressbar-manager.js"></script>
        <script>

            $(document).ready(function () {
                var pieData = [
                    {
                        value: 95,
                        color: "#1A64B8"
                    },
                    {
                        value: 100 - 95,
                        color: "#97DAF8"
                    }
                ];

                var myPie = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(pieData, {percentageInnerCutout: 80});


            });

            bar1 = $('#bar-1').progressbarManager({
                totalValue: 100,
                animate: true,
                stripe: true
            });

            bar1.setValue(60);

            bar2 = $('#bar-2').progressbarManager({
                totalValue: 100,
                animate: true,
                stripe: true
            });

            bar2.setValue(80);

            bar3 = $('#bar-3').progressbarManager({
                totalValue: 100,
                animate: true,
                stripe: true
            });

            bar3.setValue(90);

            bar4 = $('#bar-4').progressbarManager({
                totalValue: 100,
                animate: true,
                stripe: true
            });

            bar4.setValue(60);

            bar5 = $('#bar-5').progressbarManager({
                totalValue: 100,
                animate: true,
                stripe: true
            });

            bar5.setValue(90);

            bar6 = $('#bar-6').progressbarManager({
                totalValue: 100,
                animate: true,
                stripe: true
            });

            bar6.setValue(50);

            bar7 = $('#bar-7').progressbarManager({
                totalValue: 100,
                animate: true,
                stripe: true
            });

            bar7.setValue(70);




        </script>
    </body>
</html>
