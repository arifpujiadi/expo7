<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registration Form</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_cssDashboard.php'; ?>
        <link href="../../css/download/jquery.mCustomScrollbar.css" rel="stylesheet">
        <link href="../../css/jquery-ui.css" rel="stylesheet">
        <link href="../../css/download/jquery-ui-timepicker-addon.css" rel="stylesheet" >
        <link href="../../css/download/build.css" rel="stylesheet">
        <link href="../../css/custom/dashboard/registrationForm.css" rel="stylesheet">
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
                                                REGISTRATION FORM
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

                                    <section>
                                        <div class="wizard">
                                            <div class="wizard-inner padding-wizard">
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
                                                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Contact Information">
                                                            <span class="round-tab"></span>
                                                            <div class="li-text font-RobotoCondensed">
                                                                CONTACT INFORMATION
                                                            </div>
                                                        </a>
                                                    </li>

                                                    <li role="presentation" class="li-3 disabled">
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
                                                                <div class="col-md-12 col-sm-12 col-xs-12 box-content-step-1">
                                                                    <div class="col-md-6 col-sm-6 col-xs-12 box-tableLeft table-responsive">
                                                                        <table class="table table-content col-md-12 col-sm-12 col-xs-12 font-Exo2SemiBold">
                                                                            <tr>
                                                                                <td class="font-RobotoCondensed">
                                                                                    ID REFERRAL :
                                                                                </td>
                                                                                <td class="font-RobotoCondensed-Bold">
                                                                                    0234567890
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6 col-xs-12 box-tableRight table-responsive">
                                                                        <table class="table table-content col-md-12 col-sm-12 col-xs-12 font-Exo2SemiBold">
                                                                            <tr>
                                                                                <td class="font-RobotoCondensed">
                                                                                    REFERRAL NAME :
                                                                                </td>
                                                                                <td class="font-RobotoCondensed-Bold">
                                                                                    Mr. Ilugroup Multimedia
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 center">
                                                                <button type="button" class="btn button-reset font-RobotoCondensed">Reset Data</button>
                                                                <button type="button" class="btn button-next next-step font-RobotoCondensed">Next Step</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" role="tabpanel" id="step2">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-content-step">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-content-step-2">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 box-step2-1">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-content-2">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-rowContent-2">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-judulContent-2 font-RobotoCondensed-Bold">
                                                                                                CONFIRM YOUR IDENTITY
                                                                                            </div>
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subJudulContent-2 font-RobotoCondensed-Light">
                                                                                                Isikan data login member
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentLeft-2">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-fieldContent-2">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-judulField font-RobotoCondensed-Bold">
                                                                                                            Username :
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                            <input type="text" placeholder="" class="form-control field-content2 font-RobotoCondensed" >
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-fieldContent-2">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-judulField font-RobotoCondensed-Bold">
                                                                                                            Email :
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                            <input type="text" placeholder="" class="form-control field-content2 font-RobotoCondensed" >
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentRight-2">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-fieldContent-2">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-judulField font-RobotoCondensed-Bold">
                                                                                                            Password :
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                            <input type="password" placeholder="" class="form-control field-content2 font-RobotoCondensed" >
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-fieldContent-2">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-judulField font-RobotoCondensed-Bold">
                                                                                                            Confirm Password :
                                                                                                        </div>
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                            <input type="password" placeholder="" class="form-control field-content2 font-RobotoCondensed" >
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-rowContent-2">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-judulContent-2 font-RobotoCondensed-Bold">
                                                                                                PERSONAL INFORMATION
                                                                                            </div>
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subJudulContent-2 font-RobotoCondensed-Light">
                                                                                                Isikan data pribadi Anda dengan baik dan benar
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentLeft-2">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-fieldContent-2">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-judulField font-RobotoCondensed-Bold">
                                                                                                                    First Name :
                                                                                                                </div>
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <input type="text" placeholder="" class="form-control field-content2 font-RobotoCondensed" >
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentRight-2">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-fieldContent-2">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-judulField font-RobotoCondensed-Bold">
                                                                                                                    Last Name :
                                                                                                                </div>
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <input type="text" placeholder="" class="form-control field-content2 font-RobotoCondensed" >
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentLeft-2">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-fieldContent-2">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-judulField font-RobotoCondensed-Bold">
                                                                                                                    Gender :
                                                                                                                </div>
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <select class="form-control dropdown-gender font-RobotoCondensed-Light">
                                                                                                                        <option value="" hidden selected>Select Gender</option>
                                                                                                                        <option value="">Male</option>
                                                                                                                        <option value="">Female</option>
                                                                                                                    </select>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentRight-2">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-fieldContent-2">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-judulField font-RobotoCondensed-Bold">
                                                                                                                    Date of Birth :
                                                                                                                </div>
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <input id="datepicker1" type="text" placeholder="DD/MM/YYYY" class="form-control field-postalCode datepicker font-RobotoCondensed" >
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentLeft-2">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-fieldContent-2">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-judulField font-RobotoCondensed-Bold">
                                                                                                                    Address Line 1 :
                                                                                                                </div>
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <input type="text" placeholder="" class="form-control field-content2 font-RobotoCondensed" >
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentRight-2">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-fieldContent-2">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-judulField font-RobotoCondensed-Bold">
                                                                                                                    Address Line 2 :
                                                                                                                </div>
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <input type="text" placeholder="" class="form-control field-content2 font-RobotoCondensed" >
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentLeft-2">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-fieldContent-2">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-judulField font-RobotoCondensed-Bold">
                                                                                                                    Country :
                                                                                                                </div>
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <select class="form-control dropdown-gender font-RobotoCondensed-Light">
                                                                                                                        <option value="" hidden selected>Select Country</option>
                                                                                                                        <option value="">Country 1</option>
                                                                                                                        <option value="">Country 2</option>
                                                                                                                        <option value="">Country 3</option>
                                                                                                                    </select>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentRight-2">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-fieldContent-2">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-judulField font-RobotoCondensed-Bold">
                                                                                                                    States :
                                                                                                                </div>
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <select class="form-control dropdown-gender font-RobotoCondensed-Light">
                                                                                                                        <option value="" hidden selected>Select Country</option>
                                                                                                                        <option value="">States 1</option>
                                                                                                                        <option value="">States 2</option>
                                                                                                                        <option value="">States 3</option>
                                                                                                                    </select>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentLeft-2">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-fieldContent-2">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-judulField font-RobotoCondensed-Bold">
                                                                                                                    City :
                                                                                                                </div>
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <select class="form-control dropdown-gender font-RobotoCondensed-Light">
                                                                                                                        <option value="" hidden selected>Select City</option>
                                                                                                                        <option value="">City 1</option>
                                                                                                                        <option value="">City 2</option>
                                                                                                                        <option value="">City 3</option>
                                                                                                                    </select>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentRight-2">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-fieldContent-2">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-judulField font-RobotoCondensed-Bold">
                                                                                                                    Postal Code :
                                                                                                                </div>
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <input type="text" placeholder="" class="form-control field-postalCode font-RobotoCondensed" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentLeft-2">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-fieldContent-2">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-judulField font-RobotoCondensed-Bold">
                                                                                                                    Phone Number :
                                                                                                                </div>
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <input type="text" placeholder="" class="form-control field-content2 font-RobotoCondensed" >
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentRight-2">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-fieldContent-2">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-judulField font-RobotoCondensed-Bold">
                                                                                                                    Mobile Phone Number :
                                                                                                                </div>
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <input type="text" placeholder="" class="form-control field-content2 font-RobotoCondensed" >
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
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-rowContent-2">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-judulContent-2 font-RobotoCondensed-Bold">
                                                                                                BANK INFORMATION
                                                                                            </div>
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subJudulContent-2 font-RobotoCondensed-Light">
                                                                                                Isikan data dengan baik dan benar
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentLeft-2">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-fieldContent-2">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-judulField font-RobotoCondensed-Bold">
                                                                                                                    Name of Bank :
                                                                                                                </div>
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <input type="text" placeholder="" class="form-control field-content2 font-RobotoCondensed" >
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentRight-2">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-fieldContent-2">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-judulField font-RobotoCondensed-Bold">
                                                                                                                    Branch Name :
                                                                                                                </div>
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <input type="text" placeholder="" class="form-control field-content2 font-RobotoCondensed" >
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentLeft-2">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-fieldContent-2">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-judulField font-RobotoCondensed-Bold">
                                                                                                                    Account Number :
                                                                                                                </div>
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <input type="text" placeholder="" class="form-control field-content2 font-RobotoCondensed" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentRight-2">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-fieldContent-2">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-judulField font-RobotoCondensed-Bold">
                                                                                                                    Account Holder :
                                                                                                                </div>
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <input type="text" placeholder="" class="form-control field-content2 font-RobotoCondensed" >
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
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-content-button center">
                                                                <button type="button" class="btn prev-step button-reset font-RobotoCondensed">Back</button>
                                                                <button type="button" class="btn button-next next-step font-RobotoCondensed">Next Step</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" role="tabpanel" id="complete">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-content-step boxOut-content-step-3">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-complete-up">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-complete-up">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-table-complete table-responsive">
                                                                                    <table class="table table-order center-block">
                                                                                        <tr>
                                                                                            <td class="td-imgOrder" rowspan="2">
                                                                                                <img src="../../img/icon/orderDetail-logo.png">
                                                                                            </td>
                                                                                            <td class="td-titleContent-complete font-PoppinsSemiBold">
                                                                                                Order Detail
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="td-subTitleContent-complete font-LatoLightItalic">
                                                                                                Your order detail
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentLeft-complete">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-contentLeft-complete font-PoppinsLight">
                                                                                            Username : 
                                                                                            <font class="font-PoppinsSemiBold">
                                                                                            ILUGROUP
                                                                                            </font>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentRight-complete">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-contentRight-complete font-PoppinsLight">
                                                                                            Reveral Code : 
                                                                                            <font class="font-PoppinsSemiBold">
                                                                                            1234567890
                                                                                            </font>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-complete-down">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-complete-down">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-table-complete table-responsive">
                                                                                    <table class="table table-payment center-block">
                                                                                        <tr>
                                                                                            <td class="td-imgOrder" rowspan="2">
                                                                                                <img src="../../img/icon/paymentMethode.png">
                                                                                            </td>
                                                                                            <td class="td-titleContent-complete font-PoppinsSemiBold">
                                                                                                Payment Methode
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="td-subTitleContent-complete font-LatoLightItalic">
                                                                                                Choose your payment methode
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-padding">

                                                                                    <div id="paymentMethode" class="col-md-12 col-sm-12 col-xs-12 tab-pane">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentRight">

                                                                                            <div class="row">
                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 box-contentRight payment-type">

                                                                                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                <input class="single-check" type="checkbox" id="method-1" />
                                                                                                                <label class="label-inputPrimary font-PoppinsSemiBold" for="method-1">Card Payment</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-primaryText font-LatoLightItalic">
                                                                                                                Pembayaran menggunakan kartu kredit/debit 
                                                                                                                dari semua Bank yang berlogo VISA/MasterCard/JCB/Amex.
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                                                                                        <ul class="nav nav-order-logoOut">
                                                                                                            <li class="">
                                                                                                                <a data-toggle="tab" href="#order-1-4">
                                                                                                                    <img src="../../img/icon/order-1-4.png">
                                                                                                                </a>
                                                                                                            </li>
                                                                                                            <li class="">
                                                                                                                <a data-toggle="tab" href="#order-1-3">
                                                                                                                    <img src="../../img/icon/order-1-3.png">
                                                                                                                </a>
                                                                                                            </li>
                                                                                                            <li class="">
                                                                                                                <a data-toggle="tab" href="#order-1-2">
                                                                                                                    <img src="../../img/icon/order-1-2.png">
                                                                                                                </a>
                                                                                                            </li>
                                                                                                            <li class="active">
                                                                                                                <a data-toggle="tab" href="#order-1-1">
                                                                                                                    <img class="img-sizeSmall" src="../../img/icon/order-1-1.png">
                                                                                                                </a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-borderDot">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-borderDot"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="boxOut-toogle boxOut-toggle-1 col-md-12 col-sm-12 col-xs-12  hide-element toggle-slide">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 tab-content">
                                                                                                        <div id="order-1-1" class="col-md-12 col-sm-12 col-xs-12 tab-pane fade in active">
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                            <input type="text" placeholder="Please insert your card number" class="form-control field-cardNumber font-Roboboto" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46" style="background: url('../../img/icon/order-1-1.png') no-repeat;">
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
                                                                                                                                    <img src="../../img/icon/circle-help.png">
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
                                                                                                                            <input type="text" placeholder="Please insert your card number" class="form-control field-cardNumber font-Roboboto" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46" style="background: url('../../img/icon/order-1-2.png') no-repeat;">
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
                                                                                                                                    <img src="../../img/icon/circle-help.png">
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
                                                                                                                            <input type="text" placeholder="Please insert your card number" class="form-control field-cardNumber font-Roboboto" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46" style="background: url('../../img/icon/order-1-3.png') no-repeat;">
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
                                                                                                                                    <img src="../../img/icon/circle-help.png">
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
                                                                                                                            <input type="text" placeholder="Please insert your card number" class="form-control field-cardNumber font-Roboboto" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46" style="background: url('../../img/icon/order-1-4.png') no-repeat;">
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
                                                                                                                                    <img src="../../img/icon/circle-help.png">
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

                                                                                                    <div class="col-md-8 col-sm-8 col-xs-12 ">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                <input class="single-check" type="checkbox" id="method-2" />
                                                                                                                <label class="label-inputPrimary font-PoppinsSemiBold" for="method-2">Bank Transfer</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-primaryText font-LatoLightItalic">
                                                                                                                Pembayaran menggunakan kartu kredit/debit 
                                                                                                                dari semua Bank yang berlogo VISA/MasterCard/JCB/Amex.
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                                                                                        <ul class="nav nav-order-logoOut">
                                                                                                            <li class="">
                                                                                                                <a data-toggle="tab" href="#order-2-5">
                                                                                                                    <img src="../../img/icon/order-2-5.png">
                                                                                                                </a>
                                                                                                            </li>
                                                                                                            <li class="">
                                                                                                                <a data-toggle="tab" href="#order-2-4">
                                                                                                                    <img src="../../img/icon/order-2-4.png">
                                                                                                                </a>
                                                                                                            </li>
                                                                                                            <li class="">
                                                                                                                <a data-toggle="tab" href="#order-2-3">
                                                                                                                    <img src="../../img/icon/order-2-3.png">
                                                                                                                </a>
                                                                                                            </li>
                                                                                                            <li class="">
                                                                                                                <a data-toggle="tab" href="#order-2-2">
                                                                                                                    <img src="../../img/icon/order-2-2.jpg">
                                                                                                                </a>
                                                                                                            </li>
                                                                                                            <li class="active">
                                                                                                                <a data-toggle="tab" href="#order-2-1">
                                                                                                                    <img src="../../img/icon/order-2-1.png">
                                                                                                                </a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-borderDot">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-borderDot"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="boxOut-toogle col-md-12 col-sm-12 col-xs-12 hide-element toggle-slide">
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
                                                                                                                                            <label class="label-inputPrimary" for="bankTransfer-1-1"><img src="../../img/icon/bank-transfer-1.png"></label>
                                                                                                                                        </a>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-optionBankTransfer">
                                                                                                                                        <a data-toggle="tab" href="#bank-transfer-1-2" class="link-bank-transfer">
                                                                                                                                            <input class="check-bankTransfer" type="checkbox" id="bankTransfer-1-2" />
                                                                                                                                            <label class="label-inputPrimary" for="bankTransfer-1-2"><img src="../../img/icon/bank-transfer-2.png"></label>
                                                                                                                                        </a>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-optionBankTransfer">
                                                                                                                                        <a data-toggle="tab" href="#bank-transfer-1-3" class="link-bank-transfer">
                                                                                                                                            <input class="check-bankTransfer" type="checkbox" id="bankTransfer-1-3" />
                                                                                                                                            <label class="label-inputPrimary" for="bankTransfer-1-3"><img src="../../img/icon/bank-transfer-3.png"></label>
                                                                                                                                        </a>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-optionBankTransfer">
                                                                                                                                        <a data-toggle="tab" href="#bank-transfer-1-4" class="link-bank-transfer">
                                                                                                                                            <input class="check-bankTransfer" type="checkbox" id="bankTransfer-1-4" />
                                                                                                                                            <label class="label-inputPrimary bankTransfer-4" for="bankTransfer-1-4"><img src="../../img/icon/bank-transfer-4.png"></label>
                                                                                                                                        </a>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-optionBankTransfer">
                                                                                                                                        <a data-toggle="tab" href="#bank-transfer-1-5" class="link-bank-transfer">
                                                                                                                                            <input class="check-bankTransfer" type="checkbox" id="bankTransfer-1-5" />
                                                                                                                                            <label class="label-inputPrimary bankTransfer-5" for="bankTransfer-1-5"><img src="../../img/icon/bank-transfer-5.png"></label>
                                                                                                                                        </a>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-optionBankTransfer">
                                                                                                                                        <a data-toggle="tab" href="#bank-transfer-1-6" class="link-bank-transfer">
                                                                                                                                            <input class="check-bankTransfer" type="checkbox" id="bankTransfer-1-6" />
                                                                                                                                            <label class="label-inputPrimary" for="bankTransfer-1-6"><img src="../../img/icon/bank-transfer-6.png"></label>
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
                                                                                                                                            <label class="label-inputPrimary" for="bankTransfer-2-1"><img src="../../img/icon/bank-transfer-1.png"></label>
                                                                                                                                        </a>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-optionBankTransfer">
                                                                                                                                        <a data-toggle="tab" href="#bank-transfer-2-2" class="link-bank-transfer">
                                                                                                                                            <input class="check-bankTransfer" type="checkbox" id="bankTransfer-2-2" />
                                                                                                                                            <label class="label-inputPrimary" for="bankTransfer-2-2"><img src="../../img/icon/bank-transfer-2.png"></label>
                                                                                                                                        </a>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-optionBankTransfer">
                                                                                                                                        <a data-toggle="tab" href="#bank-transfer-2-3" class="link-bank-transfer">
                                                                                                                                            <input class="check-bankTransfer" type="checkbox" id="bankTransfer-2-3" />
                                                                                                                                            <label class="label-inputPrimary" for="bankTransfer-2-3"><img src="../../img/icon/bank-transfer-3.png"></label>
                                                                                                                                        </a>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-optionBankTransfer">
                                                                                                                                        <a data-toggle="tab" href="#bank-transfer-2-4" class="link-bank-transfer">
                                                                                                                                            <input class="check-bankTransfer" type="checkbox" id="bankTransfer-2-4" />
                                                                                                                                            <label class="label-inputPrimary bankTransfer-4" for="bankTransfer-2-4"><img src="../../img/icon/bank-transfer-4.png"></label>
                                                                                                                                        </a>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-optionBankTransfer">
                                                                                                                                        <a data-toggle="tab" href="#bank-transfer-2-5" class="link-bank-transfer">
                                                                                                                                            <input class="check-bankTransfer" type="checkbox" id="bankTransfer-2-5" />
                                                                                                                                            <label class="label-inputPrimary bankTransfer-5" for="bankTransfer-2-5"><img src="../../img/icon/bank-transfer-5.png"></label>
                                                                                                                                        </a>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-optionBankTransfer">
                                                                                                                                        <a data-toggle="tab" href="#bank-transfer-2-6" class="link-bank-transfer">
                                                                                                                                            <input class="check-bankTransfer" type="checkbox" id="bankTransfer-2-6" />
                                                                                                                                            <label class="label-inputPrimary" for="bankTransfer-2-6"><img src="../../img/icon/bank-transfer-6.png"></label>
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
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                <input class="single-check" type="checkbox" id="method-3" />
                                                                                                                <label class="label-inputPrimary font-PoppinsSemiBold" for="method-3">Direct Debit</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-primaryText font-LatoLightItalic">
                                                                                                                Pembayaran melalui fasilitas Internet Banking 
                                                                                                                dari berbagai Bank ternama.
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                                        <ul class="nav nav-order-logoOut">
                                                                                                            <li class="">
                                                                                                                <a data-toggle="tab" href="#order-3-4">
                                                                                                                    <img class="img-sizeSmall" src="../../img/icon/order-3-4.jpg">
                                                                                                                </a>
                                                                                                            </li>
                                                                                                            <li class="">
                                                                                                                <a data-toggle="tab" href="#order-3-3">
                                                                                                                    <img class="img-sizeSmall" src="../../img/icon/order-3-3.png">
                                                                                                                </a>
                                                                                                            </li>
                                                                                                            <li class="">
                                                                                                                <a data-toggle="tab" href="#order-3-2">
                                                                                                                    <img src="../../img/icon/order-3-2.png">
                                                                                                                </a>
                                                                                                            </li>
                                                                                                            <li class="active">
                                                                                                                <a data-toggle="tab" href="#order-3-1">
                                                                                                                    <img class="img-sizeSmall" src="../../img/icon/order-3-1.png">
                                                                                                                </a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-borderDot">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-borderDot"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="boxOut-toogle col-md-12 col-sm-12 col-xs-12 hide-element toggle-slide">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-debit">
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-optionDebit box-optionDebit-1">
                                                                                                                                <a href="#" class="link-debit">
                                                                                                                                    <input class="check-bankTransfer" type="checkbox" id="debit-3-1"  onclick='window.location.assign("#")'/>
                                                                                                                                    <label class="label-inputPrimary" for="debit-3-1"><img class="debit-3-1-img"src="../../img/icon/order-3-1.png"></label>
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
                                                                                                                                    <label class="label-inputPrimary" for="debit-3-2"><img class="debit-mandiri" src="../../img/icon/mandiri-clickPay.png"></label>
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
                                                                                                                                    <label class="label-inputPrimary" for="debit-3-3"><img src="../../img/icon/order-3-3.png"></label>
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
                                                                                                                                    <label class="label-inputPrimary" for="debit-3-4"><img src="../../img/icon/order-3-4.jpg"></label>
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
                                                                                                                <label class="label-inputPrimary font-PoppinsSemiBold" for="method-4">eWallet</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-primaryText font-LatoLightItalic">
                                                                                                                Pembayaran dengan sistem e-Wallet 
                                                                                                                dari akun/nomor/PIN ponsel pelanggan.
                                                                                                            </div>
                                                                                                        </div>

                                                                                                    </div>
                                                                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                                                                        <ul class="nav nav-order-logoOut">
                                                                                                            <li class="">
                                                                                                                <a data-toggle="tab" href="#order-4-4">
                                                                                                                    <img src="../../img/icon/order-4-4.jpg">
                                                                                                                </a>
                                                                                                            </li>
                                                                                                            <li class="">
                                                                                                                <a data-toggle="tab" href="#order-4-3">
                                                                                                                    <img src="../../img/icon/order-4-3.png">
                                                                                                                </a>
                                                                                                            </li>
                                                                                                            <li class="">
                                                                                                                <a data-toggle="tab" href="#order-4-2">
                                                                                                                    <img src="../../img/icon/order-4-2.png">
                                                                                                                </a>
                                                                                                            </li>
                                                                                                            <li class="active">
                                                                                                                <a data-toggle="tab" href="#order-4-1">
                                                                                                                    <img src="../../img/icon/order-4-1.png">
                                                                                                                </a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-borderDot">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-borderDot"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="boxOut-toogle col-md-12 col-sm-12 col-xs-12 hide-element toggle-slide">
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
                                                                                                                                            <label class="label-inputPrimary" for="eWallet-4-1"><img src="../../img/icon/order-4-1.png"></label>
                                                                                                                                        </a>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-optionEWallet">
                                                                                                                                        <a href="#eWallet4-2" class="link-eWallet">
                                                                                                                                            <input class="check-bankTransfer" type="checkbox" id="eWallet-4-2" />
                                                                                                                                            <label class="label-inputPrimary" for="eWallet-4-2"><img src="../../img/icon/order-4-2.png"></label>
                                                                                                                                        </a>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-optionEWallet">
                                                                                                                                        <a href="#eWallet4-3" class="link-eWallet">
                                                                                                                                            <input class="check-bankTransfer" type="checkbox" id="eWallet-4-3" />
                                                                                                                                            <label class="label-inputPrimary" for="eWallet-4-3"><img src="../../img/icon/order-4-3.png"></label>
                                                                                                                                        </a>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-optionEWallet">
                                                                                                                                        <a href="#eWallet4-4" class="link-eWallet">
                                                                                                                                            <input class="check-bankTransfer" type="checkbox" id="eWallet-4-4" />
                                                                                                                                            <label class="label-inputPrimary" for="eWallet-4-4"><img src="../../img/icon/order-4-4.jpg"></label>
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
                                                                                                                <label class="label-inputPrimary font-PoppinsSemiBold" for="method-5">Paypal</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-primaryText font-LatoLightItalic">
                                                                                                                Pembayaran dengan sistem Paypal
                                                                                                            </div>
                                                                                                        </div>

                                                                                                    </div>
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                                        <ul class="nav nav-order-logoOut">
                                                                                                            <li class="active">
                                                                                                                <a data-toggle="tab" href="#order-5-1">
                                                                                                                    <img class="" src="../../img/icon/order-5-1.png">
                                                                                                                </a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-borderDot">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-borderDot"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="boxOut-toogle boxOut-toggle-1 col-md-12 col-sm-12 col-xs-12 hide-element toggle-slide">
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
                                                            <div class="col-md-12 col-sm-12 col-xs-12 center">
                                                                <button type="button" class="btn button-logout next-step font-RobotoCondensed">Finish</button>
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
        <script src="../../js/download/jquery.mCustomScrollbar.js"></script>
        <script src="../../js/jquery-ui.js"></script>
        <script src="../../js/download/jquery-ui-timepicker-addon.js"></script>
        <script src="../../js/custom/orderDatePicker.js"></script>
        <script src="../../js/download/jquery.payment.js"></script>
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

//                $('.boxOut-content-button').find('.button-select').on('click', function (e) {
//                    $(this).parents('.box-content-step').find('.box-step2-1').hide();
//                    $(this).parents('.box-content-step').find('.button-step2-1').hide();
//                    $(this).parents('.box-content-step').find('.box-step2-2').show();
//                    $(this).parents('.box-content-step').find('.button-step2-2').show();
//                });
//
//                $('.boxOut-content-button').find('.button-verify').on('click', function (e) {
//                    $(this).parents('.box-content-step').find('.box-step2-2').hide();
//                    $(this).parents('.box-content-step').find('.button-step2-2').hide();
//                    $(this).parents('.box-content-step').find('.box-step2-3').show();
//                    $(this).parents('.box-content-step').find('.button-step2-3').show();
//                });



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
    </body>
</html>
