<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit Profile</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_cssDashboard.php'; ?>
        <link href="../../css/download/jquery.mCustomScrollbar.css" rel="stylesheet">
        <link href="../../css/custom/dashboard/editProfile.css" rel="stylesheet">
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
                                            EDIT PROFILE
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
                                    <div class="boxOut-contentLeft inherit">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 box-contentLeft-top">
                                                <div class="boxOut-profilePhoto center-block">
                                                    <img src="../../img/produk/editProfile-user.png">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="boxOut-changePicture center-block input-form3 lampir-file">

                                                    <span class="btn btn-file button-changePicture font-RobotoCondensed-Bold">
                                                        Change Pictures<input type="file">
                                                    </span>
                                                    <div class="boxOut-nameFile">
                                                        <input type="text" class="form-control input-fieldKomfirmasi font-RobotoCondensed-Light hidden" placeholder="No File Choose" readonly>
                                                    </div>
                                                    <!--                                                    <button type="button" class="btn button-confirm font-RobotoCondensed-Bold">Change Pictures</button>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="boxOut-contentRight inherit">
                                        <div class="row boxOut-editProfile">
                                            <div class="col-md-12 col-sm-12 col-xs-12 box-editProfile">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <button type="button" class="btn button-editBank font-RobotoCondensed-Light">Edit Bank Account</button>
                                                        <div class="col-md-6 col-sm-6 col-xs-12 boxOut-editProfile-left">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 title-editProfile font-Exo2SemiBold">
                                                                    Edit Personal Profile
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 titleField-editProfile font-RobotoCondensed-Light">
                                                                            Name
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <input type="text" placeholder="" class="form-control field-title font-RobotoCondensed" >
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 boxOut-timeLeft">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 titleField-editProfile font-RobotoCondensed-Light">
                                                                                Date
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <input type="text" placeholder="" class="form-control field-title font-RobotoCondensed" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46" maxlength="2">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 boxOut-timeMiddle">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 titleField-editProfile font-RobotoCondensed-Light">
                                                                                Month
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <input type="text" placeholder="" class="form-control field-title font-RobotoCondensed" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46" maxlength="2">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 boxOut-timeRight">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 titleField-editProfile font-RobotoCondensed-Light">
                                                                                Year
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <input type="text" placeholder="" class="form-control field-title font-RobotoCondensed" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46" maxlength="4">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 boxOut-timeLeft">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 titleField-editProfile font-RobotoCondensed-Light">
                                                                                Gender
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <input type="text" placeholder="" class="form-control field-title font-RobotoCondensed" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 titleField-editProfile font-RobotoCondensed-Light">
                                                                            Address
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <input type="text" placeholder="" class="form-control field-title font-RobotoCondensed" >
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 boxOut-timeLeft">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 titleField-editProfile font-RobotoCondensed-Light">
                                                                                Postal Code
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <input type="text" placeholder="" class="form-control field-title font-RobotoCondensed" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-sm-6 col-xs-12 boxOut-editProfile-right">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 title-editProfile font-Exo2SemiBold">
                                                                            Edit Contact
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 titleField-editProfile font-RobotoCondensed-Light">
                                                                                    Email
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <input type="text" placeholder="" class="form-control field-title font-RobotoCondensed" >
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 titleField-editProfile font-RobotoCondensed-Light">
                                                                                    Mobile Phone
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <input type="text" placeholder="" class="form-control field-title font-RobotoCondensed" >
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 title-editProfile titleField-editPassword font-Exo2SemiBold">
                                                                            Change Password
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 titleField-editProfile font-RobotoCondensed-Light">
                                                                                    Current Password
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <input type="password" placeholder="" class="form-control field-title font-RobotoCondensed" >
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 titleField-editProfile font-RobotoCondensed-Light">
                                                                                    New Password
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <input type="password" placeholder="" class="form-control field-title font-RobotoCondensed" >
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 titleField-editProfile font-RobotoCondensed-Light">
                                                                                    Confirm  Password
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <input type="password" placeholder="" class="form-control field-title font-RobotoCondensed" >
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
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <button type="button" class="btn button-saveChange font-RobotoCondensed-Bold">SAVE CHANGE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row boxOut-editBank">
                                            <div class="col-md-12 col-sm-12 col-xs-12 box-editBank">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6 col-xs-6 title-editProfile font-Exo2SemiBold">
                                                                Edit Bank Account
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                <button type="button" class="btn button-editGeneralProfile font-RobotoCondensed-Light">Edit General Profile</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-universal">
                                                        
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-bankList" data-mcs-theme="dark-3">

                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 box-bankList">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 bankList">
                                                                        <div class="boxOut-keteranganBank-left">
                                                                            <div class="boxOut-buttonEdit">
                                                                                <div class="col-md-6 col-sm-6 col-xs-6 box-a">
                                                                                    <a href="#" class="a-rincian">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-actionImg">
                                                                                            <img src="../../img/icon/bank-edit.png">
                                                                                        </div>
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textAction font-RobotoCondensed-Light">
                                                                                            Edit
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-6 box-a">
                                                                                    <a href="#" class="">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-actionImg-delete">
                                                                                            <img src="../../img/icon/bank-delete.png">
                                                                                        </div>
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textAction font-RobotoCondensed-Light">
                                                                                            Delete
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="boxOut-bankImg box-bankImg">
                                                                                <img src="../../img/icon/bank-transfer-1.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="boxOut-keteranganBank-right">
                                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleList">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-titleList font-RobotoCondensed-Bold">
                                                                                                Account owner :
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitleList">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-subTitleList font-RobotoCondensed-Light">
                                                                                                Ilugroup Multimedia 
                                                                                            </div> 
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleList">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-titleList font-RobotoCondensed-Bold">
                                                                                                Account number :
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitleList">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-subTitleList font-RobotoCondensed-Light">
                                                                                                01234567890
                                                                                            </div> 
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-12 col-xs-12 boxOut-table-bottom">
                                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleList">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-titleList font-RobotoCondensed-Bold">
                                                                                                Bank name :
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitleList">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-subTitleList font-RobotoCondensed-Light">
                                                                                                Bank Central Asia
                                                                                            </div> 
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleList">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-titleList font-RobotoCondensed-Bold">
                                                                                                Branch :
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitleList">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-subTitleList font-RobotoCondensed-Light">
                                                                                                Mattoangin - Makassar
                                                                                            </div> 
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-rincianList">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="col-md-6 col-sm-6 col-xs-6 subTitle-editProfile font-RobotoCondensed-Bold">
                                                                                    Insert Bank Account
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="col-md-6 col-sm-6 col-xs-12 boxOut-bankAccount-left">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 titleField-editBank font-RobotoCondensed-Light">
                                                                                                        Account Name
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                        <input type="text" placeholder="" class="form-control field-bank font-RobotoCondensed-Bold" value="BUDI AHSUDAHLAH ">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 titleField-editBank font-RobotoCondensed-Light">
                                                                                                        Account Number
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                        <input type="text" placeholder="" class="form-control field-bank font-RobotoCondensed-Bold" value="01234567890" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 titleField-editBank font-RobotoCondensed-Light">
                                                                                                        Bank Name
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-namaBank font-RobotoCondensed-Bold">
                                                                                                            PT. BANK NEGARA INDONESIA (PERSERO) <a class="a-click" href="#"><img class="" src="../../img/icon/pencil-edit.png"></a>
                                                                                                        </div>
                                                                                                        <div class="editBank-popup">
                                                                                                            <button type="button" class="btn button-chooseBank button-circleClose font-RobotoCondensed-Bold">
                                                                                                                <img src="../../img/icon/close-icon2.png">
                                                                                                            </button>
                                                                                                            <div class="popup-triangle hidden-xs"></div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 titleField-editBankAccount font-RobotoCondensed-Light">
                                                                                                                    Choose Bank Account
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-search">
                                                                                                                    <div class="input-group">
                                                                                                                        <div class="input-group-btn">
                                                                                                                            <button class="btn btn-default btn-search" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                                                                                                        </div>
                                                                                                                        <input type="text" class="form-control field-search font-RobotoCondensed" placeholder="">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-radioButton font-RobotoCondensed-Light">
                                                                                                                    <div>
                                                                                                                        <input type="radio" id="radio01" name="radio" />
                                                                                                                        <label for="radio01"><span></span> PT. BCA (BANK CENTRAL ASIA) TBK / BCA</label>
                                                                                                                    </div>

                                                                                                                    <div>
                                                                                                                        <input type="radio" id="radio02" name="radio" />
                                                                                                                        <label for="radio02"><span></span> PT. BANK NEGARA INDONESIA (PERSERO) / BNI </label>
                                                                                                                    </div>

                                                                                                                    <div>
                                                                                                                        <input type="radio" id="radio03" name="radio" />
                                                                                                                        <label for="radio03"><span></span> PT. BANK RAKYAT INDONESIA (PERSERO) / BRI</label>
                                                                                                                    </div>

                                                                                                                    <div>
                                                                                                                        <input type="radio" id="radio04" name="radio" />
                                                                                                                        <label for="radio04"><span></span> PT. BANK CIMB NIAGA TBK</label>
                                                                                                                    </div>

                                                                                                                    <div>
                                                                                                                        <input type="radio" id="radio05" name="radio" />
                                                                                                                        <label for="radio05"><span></span> CITIBANK NA </label>
                                                                                                                    </div>

                                                                                                                    <div>
                                                                                                                        <input type="radio" id="radio06" name="radio" />
                                                                                                                        <label for="radio06"><span></span> PT. BANK DANAMON INDONESIA TBK</label>
                                                                                                                    </div>

                                                                                                                    <div>
                                                                                                                        <input type="radio" id="radio07" name="radio" />
                                                                                                                        <label for="radio07"><span></span> PT. BANK MANDIRI</label>
                                                                                                                    </div>

                                                                                                                    <div>
                                                                                                                        <input type="radio" id="radio08" name="radio" />
                                                                                                                        <label for="radio08"><span></span> BANGKOK BANK PUBLIC CO. LTD </label>
                                                                                                                    </div>

                                                                                                                    <div>
                                                                                                                        <input type="radio" id="radio09" name="radio" />
                                                                                                                        <label for="radio09"><span></span> BANK HANA</label>
                                                                                                                    </div>

                                                                                                                    <div>
                                                                                                                        <input type="radio" id="radio10" name="radio" />
                                                                                                                        <label for="radio10"><span></span> BANK JABAR BANTEN SYARIAH / BJB SYARIAH </label>
                                                                                                                    </div>

                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-popupButton">
                                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6 boxOut-popupButton-left">
                                                                                                                        <button type="button" class="btn button-prev font-RobotoCondensed-Bold">
                                                                                                                            <img src="../../img/icon/popupButton-left.png">
                                                                                                                        </button>
                                                                                                                    </div>
                                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6 boxOut-popupButton-right">
                                                                                                                        <button type="button" class="btn button-next font-RobotoCondensed-Bold active">
                                                                                                                            <img src="../../img/icon/popupButton-right.png">
                                                                                                                        </button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 titleField-editBank font-RobotoCondensed-Light">
                                                                                                        Branch
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                        <input type="text" placeholder="" class="form-control field-bank font-RobotoCondensed-Bold" value="MAKASSAR" >
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-keteranganField font-RobotoCondensed-Light">
                                                                                                For banks other than BCA, it is required to fill out Branch Office
                                                                                                <br>
                                                                                                along with city where the bank is located. e.g: Pondok Indah Jakarta Selatan
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-12 boxOut-bankAccount-right">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 titleField-editBank font-RobotoCondensed-Light">
                                                                                                        QTP Code 
                                                                                                        <a href="#" class="box-qtp" data-toggle="tooltip" data-trigger="hover" data-placement="auto right" title="Quick Test Professional (QTP)">
                                                                                                            <img src="../../img/icon/info.png">
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="col-md-7 col-sm-7 col-xs-7 boxOut-QTPfield">
                                                                                                            <input type="text" placeholder="" class="form-control field-bank font-RobotoCondensed-Bold" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46">
                                                                                                        </div>
                                                                                                        <div class="col-md-5 col-sm-5 col-xs-5">
                                                                                                            <button type="button" class="btn button-qtp font-RobotoCondensed-Bold">Send OTP to Phone</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 titleField-editBank font-RobotoCondensed-Light">
                                                                                                        Password Tokosayaonline
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                        <input type="password" placeholder="" class="form-control field-bank font-RobotoCondensed-Bold" >
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                <button type="button" class="btn button-cancel font-RobotoCondensed-Bold">Cancel</button>
                                                                                                <button type="button" class="btn button-send font-RobotoCondensed-Bold">Save</button>
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
                                                                <div class="col-md-12 col-sm-12 col-xs-12 box-bankList">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 bankList">
                                                                        <div class="boxOut-keteranganBank-left">
                                                                            <div class="boxOut-buttonEdit">
                                                                                <div class="col-md-6 col-sm-6 col-xs-6 box-a">
                                                                                    <a href="#" class="a-rincian">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-actionImg">
                                                                                            <img src="../../img/icon/bank-edit.png">
                                                                                        </div>
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textAction font-RobotoCondensed-Light">
                                                                                            Edit
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-6 box-a">
                                                                                    <a href="#" class="">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-actionImg-delete">
                                                                                            <img src="../../img/icon/bank-delete.png">
                                                                                        </div>
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textAction font-RobotoCondensed-Light">
                                                                                            Delete
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="boxOut-bankImg box-bankImg">
                                                                                <img src="../../img/icon/bank-transfer-2.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="boxOut-keteranganBank-right">
                                                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleList">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-titleList font-RobotoCondensed-Bold">
                                                                                                Account owner :
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitleList">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-subTitleList font-RobotoCondensed-Light">
                                                                                                Ilugroup Multimedia 
                                                                                            </div> 
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleList">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-titleList font-RobotoCondensed-Bold">
                                                                                                Account number :
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitleList">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-subTitleList font-RobotoCondensed-Light">
                                                                                                01234567890
                                                                                            </div> 
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-12 col-xs-12 boxOut-table-bottom">
                                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleList">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-titleList font-RobotoCondensed-Bold">
                                                                                                Bank name :
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitleList">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-subTitleList font-RobotoCondensed-Light">
                                                                                                Bank Central Asia
                                                                                            </div> 
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleList">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-titleList font-RobotoCondensed-Bold">
                                                                                                Branch :
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitleList">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-subTitleList font-RobotoCondensed-Light">
                                                                                                Mattoangin - Makassar
                                                                                            </div> 
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-rincianList">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="col-md-6 col-sm-6 col-xs-6 subTitle-editProfile font-RobotoCondensed-Bold">
                                                                                    Insert Bank Account
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="col-md-6 col-sm-6 col-xs-12 boxOut-bankAccount-left">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 titleField-editBank font-RobotoCondensed-Light">
                                                                                                        Account Name
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                        <input type="text" placeholder="" class="form-control field-bank font-RobotoCondensed-Bold" value="BUDI AHSUDAHLAH ">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 titleField-editBank font-RobotoCondensed-Light">
                                                                                                        Account Number
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                        <input type="text" placeholder="" class="form-control field-bank font-RobotoCondensed-Bold" value="01234567890" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 titleField-editBank font-RobotoCondensed-Light">
                                                                                                        Bank Name
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-namaBank font-RobotoCondensed-Bold">
                                                                                                            PT. BANK NEGARA INDONESIA (PERSERO) <a class="a-click" href="#"><img class="" src="../../img/icon/pencil-edit.png"></a>
                                                                                                        </div>
                                                                                                        <div class="editBank-popup">
                                                                                                            <button type="button" class="btn button-chooseBank button-circleClose font-RobotoCondensed-Bold">
                                                                                                                <img src="../../img/icon/close-icon2.png">
                                                                                                            </button>
                                                                                                            <div class="popup-triangle hidden-xs"></div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 titleField-editBankAccount font-RobotoCondensed-Light">
                                                                                                                    Choose Bank Account
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-search">
                                                                                                                    <div class="input-group">
                                                                                                                        <div class="input-group-btn">
                                                                                                                            <button class="btn btn-default btn-search" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                                                                                                        </div>
                                                                                                                        <input type="text" class="form-control field-search font-RobotoCondensed" placeholder="">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-radioButton font-RobotoCondensed-Light">
                                                                                                                    <div>
                                                                                                                        <input type="radio" id="radio01" name="radio" />
                                                                                                                        <label for="radio01"><span></span> PT. BCA (BANK CENTRAL ASIA) TBK / BCA</label>
                                                                                                                    </div>

                                                                                                                    <div>
                                                                                                                        <input type="radio" id="radio02" name="radio" />
                                                                                                                        <label for="radio02"><span></span> PT. BANK NEGARA INDONESIA (PERSERO) / BNI </label>
                                                                                                                    </div>

                                                                                                                    <div>
                                                                                                                        <input type="radio" id="radio03" name="radio" />
                                                                                                                        <label for="radio03"><span></span> PT. BANK RAKYAT INDONESIA (PERSERO) / BRI</label>
                                                                                                                    </div>

                                                                                                                    <div>
                                                                                                                        <input type="radio" id="radio04" name="radio" />
                                                                                                                        <label for="radio04"><span></span> PT. BANK CIMB NIAGA TBK</label>
                                                                                                                    </div>

                                                                                                                    <div>
                                                                                                                        <input type="radio" id="radio05" name="radio" />
                                                                                                                        <label for="radio05"><span></span> CITIBANK NA </label>
                                                                                                                    </div>

                                                                                                                    <div>
                                                                                                                        <input type="radio" id="radio06" name="radio" />
                                                                                                                        <label for="radio06"><span></span> PT. BANK DANAMON INDONESIA TBK</label>
                                                                                                                    </div>

                                                                                                                    <div>
                                                                                                                        <input type="radio" id="radio07" name="radio" />
                                                                                                                        <label for="radio07"><span></span> PT. BANK MANDIRI</label>
                                                                                                                    </div>

                                                                                                                    <div>
                                                                                                                        <input type="radio" id="radio08" name="radio" />
                                                                                                                        <label for="radio08"><span></span> BANGKOK BANK PUBLIC CO. LTD </label>
                                                                                                                    </div>

                                                                                                                    <div>
                                                                                                                        <input type="radio" id="radio09" name="radio" />
                                                                                                                        <label for="radio09"><span></span> BANK HANA</label>
                                                                                                                    </div>

                                                                                                                    <div>
                                                                                                                        <input type="radio" id="radio10" name="radio" />
                                                                                                                        <label for="radio10"><span></span> BANK JABAR BANTEN SYARIAH / BJB SYARIAH </label>
                                                                                                                    </div>

                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-popupButton">
                                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6 boxOut-popupButton-left">
                                                                                                                        <button type="button" class="btn button-prev font-RobotoCondensed-Bold">
                                                                                                                            <img src="../../img/icon/popupButton-left.png">
                                                                                                                        </button>
                                                                                                                    </div>
                                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6 boxOut-popupButton-right">
                                                                                                                        <button type="button" class="btn button-next font-RobotoCondensed-Bold active">
                                                                                                                            <img src="../../img/icon/popupButton-right.png">
                                                                                                                        </button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 titleField-editBank font-RobotoCondensed-Light">
                                                                                                        Branch
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                        <input type="text" placeholder="" class="form-control field-bank font-RobotoCondensed-Bold" value="MAKASSAR" >
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-keteranganField font-RobotoCondensed-Light">
                                                                                                For banks other than BCA, it is required to fill out Branch Office
                                                                                                <br>
                                                                                                along with city where the bank is located. e.g: Pondok Indah Jakarta Selatan
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-6 col-xs-12 boxOut-bankAccount-right">
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 titleField-editBank font-RobotoCondensed-Light">
                                                                                                        QTP Code 
                                                                                                        <a href="#" class="box-qtp" data-toggle="tooltip" data-trigger="hover" data-placement="auto right" title="Quick Test Professional (QTP)">
                                                                                                            <img src="../../img/icon/info.png">
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                        <div class="col-md-7 col-sm-7 col-xs-7 boxOut-QTPfield">
                                                                                                            <input type="text" placeholder="" class="form-control field-bank font-RobotoCondensed-Bold" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46">
                                                                                                        </div>
                                                                                                        <div class="col-md-5 col-sm-5 col-xs-5">
                                                                                                            <button type="button" class="btn button-qtp font-RobotoCondensed-Bold">Send OTP to Phone</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 titleField-editBank font-RobotoCondensed-Light">
                                                                                                        Password Tokosayaonline
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                        <input type="password" placeholder="" class="form-control field-bank font-RobotoCondensed-Bold" >
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                <button type="button" class="btn button-cancel font-RobotoCondensed-Bold">Cancel</button>
                                                                                                <button type="button" class="btn button-send font-RobotoCondensed-Bold">Save</button>
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
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-insert">
                                                            <button type="button" class="btn button-insert font-RobotoCondensed-Bold">
                                                                <img class="insert" src="../../img/icon/insert-plus.png">
                                                            </button>
                                                            <button type="button" class="btn button-closeInsert font-RobotoCondensed-Bold">
                                                                <img class="close-insert" src="../../img/icon/close-insert.png">
                                                            </button>
                                                        </div>
                                                        
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-tambahBankAccount">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="col-md-6 col-sm-6 col-xs-6 subTitle-editProfile font-RobotoCondensed-Bold">
                                                                        Insert Bank Account
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="col-md-6 col-sm-6 col-xs-12 boxOut-bankAccount-left">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 titleField-editBank font-RobotoCondensed-Light">
                                                                                            Account Name
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                            <input type="text" placeholder="" class="form-control field-bank font-RobotoCondensed-Bold" >
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 titleField-editBank font-RobotoCondensed-Light">
                                                                                            Account Number
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                            <input type="text" placeholder="" class="form-control field-bank font-RobotoCondensed-Bold" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 titleField-editBank font-RobotoCondensed-Light">
                                                                                            Bank Name
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                            <button type="button" class="btn button-chooseBank font-RobotoCondensed-Bold">Choose Bank</button>
                                                                                            <div class="chooseBank-popup">
                                                                                                <button type="button" class="btn button-chooseBank button-circleClose font-RobotoCondensed-Bold">
                                                                                                    <img src="../../img/icon/close-icon2.png">
                                                                                                </button>
                                                                                                <div class="popup-triangle hidden-xs"></div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 titleField-editBankAccount font-RobotoCondensed-Light">
                                                                                                        Choose Bank Account
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-search">
                                                                                                        <div class="input-group">
                                                                                                            <div class="input-group-btn">
                                                                                                                <button class="btn btn-default btn-search" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                                                                                            </div>
                                                                                                            <input type="text" class="form-control field-search font-RobotoCondensed" placeholder="">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-radioButton font-RobotoCondensed-Light">
                                                                                                        <div>
                                                                                                            <input type="radio" id="radio01" name="radio" />
                                                                                                            <label for="radio01"><span></span> PT. BCA (BANK CENTRAL ASIA) TBK / BCA</label>
                                                                                                        </div>

                                                                                                        <div>
                                                                                                            <input type="radio" id="radio02" name="radio" />
                                                                                                            <label for="radio02"><span></span> PT. BANK NEGARA INDONESIA (PERSERO) / BNI </label>
                                                                                                        </div>

                                                                                                        <div>
                                                                                                            <input type="radio" id="radio03" name="radio" />
                                                                                                            <label for="radio03"><span></span> PT. BANK RAKYAT INDONESIA (PERSERO) / BRI</label>
                                                                                                        </div>

                                                                                                        <div>
                                                                                                            <input type="radio" id="radio04" name="radio" />
                                                                                                            <label for="radio04"><span></span> PT. BANK CIMB NIAGA TBK</label>
                                                                                                        </div>

                                                                                                        <div>
                                                                                                            <input type="radio" id="radio05" name="radio" />
                                                                                                            <label for="radio05"><span></span> CITIBANK NA </label>
                                                                                                        </div>

                                                                                                        <div>
                                                                                                            <input type="radio" id="radio06" name="radio" />
                                                                                                            <label for="radio06"><span></span> PT. BANK DANAMON INDONESIA TBK</label>
                                                                                                        </div>

                                                                                                        <div>
                                                                                                            <input type="radio" id="radio07" name="radio" />
                                                                                                            <label for="radio07"><span></span> PT. BANK MANDIRI</label>
                                                                                                        </div>

                                                                                                        <div>
                                                                                                            <input type="radio" id="radio08" name="radio" />
                                                                                                            <label for="radio08"><span></span> BANGKOK BANK PUBLIC CO. LTD </label>
                                                                                                        </div>

                                                                                                        <div>
                                                                                                            <input type="radio" id="radio09" name="radio" />
                                                                                                            <label for="radio09"><span></span> BANK HANA</label>
                                                                                                        </div>

                                                                                                        <div>
                                                                                                            <input type="radio" id="radio10" name="radio" />
                                                                                                            <label for="radio10"><span></span> BANK JABAR BANTEN SYARIAH / BJB SYARIAH </label>
                                                                                                        </div>

                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-popupButton">
                                                                                                        <div class="col-md-6 col-sm-6 col-xs-6 boxOut-popupButton-left">
                                                                                                            <button type="button" class="btn button-prev font-RobotoCondensed-Bold">
                                                                                                                <img src="../../img/icon/popupButton-left.png">
                                                                                                            </button>
                                                                                                        </div>
                                                                                                        <div class="col-md-6 col-sm-6 col-xs-6 boxOut-popupButton-right">
                                                                                                            <button type="button" class="btn button-next font-RobotoCondensed-Bold active">
                                                                                                                <img src="../../img/icon/popupButton-right.png">
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 titleField-editBank font-RobotoCondensed-Light">
                                                                                            Branch
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                            <input type="text" placeholder="" class="form-control field-bank font-RobotoCondensed-Bold" >
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-keteranganField font-RobotoCondensed-Light">
                                                                                    For banks other than BCA, it is required to fill out Branch Office
                                                                                    <br>
                                                                                    along with city where the bank is located. e.g: Pondok Indah Jakarta Selatan
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6 col-xs-12 boxOut-bankAccount-right">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 titleField-editBank font-RobotoCondensed-Light">
                                                                                            QTP Code 
                                                                                            <a href="#" class="box-qtp" data-toggle="tooltip" data-trigger="hover" data-placement="auto right" title="Quick Test Professional (QTP)">
                                                                                                <img src="../../img/icon/info.png">
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="col-md-7 col-sm-7 col-xs-7 boxOut-QTPfield">
                                                                                                <input type="text" placeholder="" class="form-control field-bank font-RobotoCondensed-Bold" onkeydown="return (event.which >= 48 && event.which <= 57) || event.which == 8 || event.which == 46">
                                                                                            </div>
                                                                                            <div class="col-md-5 col-sm-5 col-xs-5">
                                                                                                <button type="button" class="btn button-qtp font-RobotoCondensed-Bold">Send OTP to Phone</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 titleField-editBank font-RobotoCondensed-Light">
                                                                                            Password Tokosayaonline
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                            <input type="password" placeholder="" class="form-control field-bank font-RobotoCondensed-Bold" >
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <button type="button" class="btn button-cancel font-RobotoCondensed-Bold">Cancel</button>
                                                                                    <button type="button" class="btn button-send font-RobotoCondensed-Bold">Save</button>
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
        <script>
                                                                                                    $(document).ready(function () {

                                                                                                        $(document).on('change', '.btn-file :file', function () {
                                                                                                            var input = $(this),
                                                                                                                    numFiles = input.get(0).files ? input.get(0).files.length : 1,
                                                                                                                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                                                                                                            input.trigger('fileselect', [numFiles, label]);
                                                                                                        });

                                                                                                        $(document).ready(function () {
                                                                                                            $('.btn-file :file').on('fileselect', function (event, numFiles, label) {

                                                                                                                var input = $(this).parents('.lampir-file').find(':text'),
                                                                                                                        log = numFiles > 1 ? numFiles + ' files selected' : label;

                                                                                                                if (input.length) {
                                                                                                                    input.val(log);
                                                                                                                } else {
                                                                                                                    if (log)
                                                                                                                        alert(log);
                                                                                                                }

                                                                                                            });
                                                                                                        });

                                                                                                        $('.boxOut-contentRight').find('.button-editBank').on('click', function (e) {
                                                                                                            $(this).parents('.boxOut-contentRight').find('.box-editProfile').fadeOut(0);
                                                                                                            $(this).parents('.boxOut-contentRight').find('.box-editBank').fadeIn(400);
                                                                                                        });

                                                                                                        $('.boxOut-contentRight').find('.button-editGeneralProfile').on('click', function (e) {
                                                                                                            $(this).parents('.boxOut-contentRight').find('.box-editBank').fadeOut(0);
                                                                                                            $(this).parents('.boxOut-contentRight').find('.box-editProfile').fadeIn(400);
                                                                                                        });


                                                                                                        $('.button-chooseBank').on("click", function () {
                                                                                                            $('.chooseBank-popup').fadeToggle(300);
                                                                                                        });

                                                                                                        $('.a-click').on("click", function () {
                                                                                                            $('.editBank-popup').fadeToggle(300);
                                                                                                        });

                                                                                                        $('.a-rincian').on("click", function () {
                                                                                                            $(this).parents('.box-bankList').find('.boxOut-rincianList').slideToggle(200);
                                                                                                        });
                                                                                                        
                                                                                                        $('.button-insert').on("click", function () {
                                                                                                            $(this).parents('.boxOut-universal').find('.boxOut-tambahBankAccount').slideToggle(200);
                                                                                                            $(this).parents('.boxOut-insert').find('.button-insert').hide();
                                                                                                            $(this).parents('.boxOut-insert').find('.button-closeInsert').show();
                                                                                                        });
                                                                                                        
                                                                                                        $('.button-closeInsert').on("click", function () {
                                                                                                            $(this).parents('.boxOut-universal').find('.boxOut-tambahBankAccount').slideToggle(200);
                                                                                                            $(this).parents('.boxOut-insert').find('.button-insert').show();
                                                                                                            $(this).parents('.boxOut-insert').find('.button-closeInsert').hide();
                                                                                                        });

                                                                                                    });
        </script>


    </body>
</html>
