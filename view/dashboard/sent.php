<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sent</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_cssDashboard.php'; ?>
        <link href="../../css/download/jquery.mCustomScrollbar.css" rel="stylesheet">
        <link href="../../css/custom/dashboard/sent.css" rel="stylesheet">
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
                                                MESSAGES
                                            </div>
                                             <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitleDashboard font-RobotoCondensed-Bold">
                                                SEND ITEM
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
                                    <div class=" inherit box-content-left mCustomScrollbar" data-mcs-theme="dark-3">

                                        <ul class="nav nav-tabs tabs-left">
                                            <li>
                                                <a href="#message-1" data-toggle="tab">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="col-md-2 col-sm-3 col-xs-3">
                                                            <div class="boxOut-foto-img">
                                                                <img src="../../img/produk/message-photo-1.png">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10 col-sm-9 col-xs-9 boxOut-borderMessage">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageTitle font-Roboboto-Bold">
                                                                    Budi Ahsudahlah
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageText font-RobotoCondensed-Light">
                                                                    Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa...
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageTanggal font-RobotoCondensed-Light">
                                                                    20 Nov. 2016
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#message-2" data-toggle="tab">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="col-md-2 col-sm-3 col-xs-3">
                                                            <div class="boxOut-foto-img">
                                                                <img src="../../img/produk/message-photo-2.png">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10 col-sm-9 col-xs-9 boxOut-borderMessage">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageTitle font-Roboboto-Bold">
                                                                    Wati Aja
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageText font-RobotoCondensed-Light">
                                                                    Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa...
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageTanggal font-RobotoCondensed-Light">
                                                                    20 Nov. 2016
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#message-3" data-toggle="tab">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="col-md-2 col-sm-3 col-xs-3">
                                                            <div class="boxOut-foto-img">
                                                                <img src="../../img/produk/message-photo-3.png">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10 col-sm-9 col-xs-9 boxOut-borderMessage">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageTitle font-Roboboto-Bold">
                                                                    Bunga Nama Disamarkan
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageText font-RobotoCondensed-Light">
                                                                    Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa...
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageTanggal font-RobotoCondensed-Light">
                                                                    20 Nov. 2016
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#message-4" data-toggle="tab">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="col-md-2 col-sm-3 col-xs-3">
                                                            <div class="boxOut-foto-img">
                                                                <img src="../../img/produk/message-photo-4.png">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10 col-sm-9 col-xs-9 boxOut-borderMessage">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageTitle font-Roboboto-Bold">
                                                                    Bapaknya Budi 
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageText font-RobotoCondensed-Light">
                                                                    Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa...
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageTanggal font-RobotoCondensed-Light">
                                                                    20 Nov. 2016
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#message-5" data-toggle="tab">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="col-md-2 col-sm-3 col-xs-3">
                                                            <div class="boxOut-foto-img">
                                                                <img src="../../img/produk/message-photo-5.png">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10 col-sm-9 col-xs-9 boxOut-borderMessage">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageTitle font-Roboboto-Bold">
                                                                    Wawan Sebelah
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageText font-RobotoCondensed-Light">
                                                                    Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa...
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageTanggal font-RobotoCondensed-Light">
                                                                    20 Nov. 2016
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#message-1" data-toggle="tab">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="col-md-2 col-sm-3 col-xs-3">
                                                            <div class="boxOut-foto-img">
                                                                <img src="../../img/produk/message-photo-1.png">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10 col-sm-9 col-xs-9 boxOut-borderMessage">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageTitle font-Roboboto-Bold">
                                                                    Budi Ahsudahlah
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageText font-RobotoCondensed-Light">
                                                                    Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa...
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageTanggal font-RobotoCondensed-Light">
                                                                    20 Nov. 2016
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#message-2" data-toggle="tab">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="col-md-2 col-sm-3 col-xs-3">
                                                            <div class="boxOut-foto-img">
                                                                <img src="../../img/produk/message-photo-2.png">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10 col-sm-9 col-xs-9 boxOut-borderMessage">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageTitle font-Roboboto-Bold">
                                                                    Wati Aja
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageText font-RobotoCondensed-Light">
                                                                    Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa...
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageTanggal font-RobotoCondensed-Light">
                                                                    20 Nov. 2016
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#message-3" data-toggle="tab">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="col-md-2 col-sm-3 col-xs-3">
                                                            <div class="boxOut-foto-img">
                                                                <img src="../../img/produk/message-photo-3.png">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10 col-sm-9 col-xs-9 boxOut-borderMessage">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageTitle font-Roboboto-Bold">
                                                                    Bunga Nama Disamarkan
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageText font-RobotoCondensed-Light">
                                                                    Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa...
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageTanggal font-RobotoCondensed-Light">
                                                                    20 Nov. 2016
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#message-4" data-toggle="tab">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="col-md-2 col-sm-3 col-xs-3">
                                                            <div class="boxOut-foto-img">
                                                                <img src="../../img/produk/message-photo-4.png">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10 col-sm-9 col-xs-9 boxOut-borderMessage">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageTitle font-Roboboto-Bold">
                                                                    Bapaknya Budi 
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageText font-RobotoCondensed-Light">
                                                                    Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa...
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageTanggal font-RobotoCondensed-Light">
                                                                    20 Nov. 2016
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#message-5" data-toggle="tab">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="col-md-2 col-sm-3 col-xs-3">
                                                            <div class="boxOut-foto-img">
                                                                <img src="../../img/produk/message-photo-5.png">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10 col-sm-9 col-xs-9 boxOut-borderMessage">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageTitle font-Roboboto-Bold">
                                                                    Wawan Sebelah
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageText font-RobotoCondensed-Light">
                                                                    Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa...
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageTanggal font-RobotoCondensed-Light">
                                                                    20 Nov. 2016
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>

                                    </div>
                                    <div class="inherit box-content-right">

                                        <div class="inherit tab-content">
                                            <div class="inherit tab-pane active" id="blank">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-tabBlank center font-RobotoCondensed-Light">
                                                        No messages has been selected
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inherit tab-pane mCustomScrollbar" data-mcs-theme="dark-3" id="message-1">

                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageContent-1">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-message-top">
                                                                    <div class="col-md-11 col-sm-11 col-xs-11">
                                                                        <div class="boxOut-message-foto">
                                                                            <div class="box-message-foto">
                                                                                <img src="../../img/produk/message-photo-2.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="boxOut-message-name font-RobotoCondensed-Bold">
                                                                            Wati Aja 1
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1 col-sm-1 col-xs-1">
                                                                        <a class="collapse-link boxOut-button-title">
                                                                            <i class="button-title fa fa-chevron-up">
                                                                                <div class="box-button-title"></div>
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="x_content">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textMessage">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="box-triangle"></div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-textMessage">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    <p>
                                                                                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. 
                                                                                        Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                                                                                    </p>
                                                                                    <p>
                                                                                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. 
                                                                                        Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo 
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    20 Nov. 2016
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-buttonMessage">
                                                                        <button type="button" class="btn button-reply font-RobotoCondensed">Reply</button>
                                                                        <button type="button" class="btn button-forward font-RobotoCondensed">Forward</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageContent-2">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-message-top">
                                                                    <div class="col-md-11 col-sm-11 col-xs-11">
                                                                        <div class="boxOut-message-foto">
                                                                            <div class="box-message-foto">
                                                                                <img src="../../img/produk/member-login.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="boxOut-message-name font-RobotoCondensed-Bold">
                                                                            Me
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1 col-sm-1 col-xs-1">
                                                                        <a class="collapse-link boxOut-button-title">
                                                                            <i class="button-title fa fa-chevron-up">
                                                                                <div class="box-button-title"></div>
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="x_content">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textMessage">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="box-triangle"></div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-textMessage boxOut-textMessage-2">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    <p>
                                                                                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. 
                                                                                        Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    20 Nov. 2016
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
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageContent-3">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-message-top">
                                                                    <div class="col-md-11 col-sm-11 col-xs-11">
                                                                        <div class="boxOut-message-foto">
                                                                            <div class="box-message-foto">
                                                                                <img src="../../img/produk/message-photo-2.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="boxOut-message-name font-RobotoCondensed-Bold">
                                                                            Wati Aja 1
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1 col-sm-1 col-xs-1">
                                                                        <a class="collapse-link boxOut-button-title">
                                                                            <i class="button-title fa fa-chevron-up">
                                                                                <div class="box-button-title"></div>
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="x_content">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textMessage">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="box-triangle"></div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-textMessage">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    <p>
                                                                                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. 
                                                                                        Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    20 Nov. 2016
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-buttonMessage">
                                                                        <button type="button" class="btn button-reply font-RobotoCondensed">Reply</button>
                                                                        <button type="button" class="btn button-forward font-RobotoCondensed">Forward</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="inherit tab-pane mCustomScrollbar" data-mcs-theme="dark-3" id="message-2">
                                                
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageContent-1">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-message-top">
                                                                    <div class="col-md-11 col-sm-11 col-xs-11">
                                                                        <div class="boxOut-message-foto">
                                                                            <div class="box-message-foto">
                                                                                <img src="../../img/produk/message-photo-2.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="boxOut-message-name font-RobotoCondensed-Bold">
                                                                            Wati Aja 1
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1 col-sm-1 col-xs-1">
                                                                        <a class="collapse-link boxOut-button-title">
                                                                            <i class="button-title fa fa-chevron-up">
                                                                                <div class="box-button-title"></div>
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="x_content">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textMessage">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="box-triangle"></div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-textMessage">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    <p>
                                                                                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. 
                                                                                        Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                                                                                    </p>
                                                                                    <p>
                                                                                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. 
                                                                                        Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo 
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    20 Nov. 2016
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-buttonMessage">
                                                                        <button type="button" class="btn button-reply font-RobotoCondensed">Reply</button>
                                                                        <button type="button" class="btn button-forward font-RobotoCondensed">Forward</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageContent-2">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-message-top">
                                                                    <div class="col-md-11 col-sm-11 col-xs-11">
                                                                        <div class="boxOut-message-foto">
                                                                            <div class="box-message-foto">
                                                                                <img src="../../img/produk/member-login.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="boxOut-message-name font-RobotoCondensed-Bold">
                                                                            Me
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1 col-sm-1 col-xs-1">
                                                                        <a class="collapse-link boxOut-button-title">
                                                                            <i class="button-title fa fa-chevron-up">
                                                                                <div class="box-button-title"></div>
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="x_content">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textMessage">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="box-triangle"></div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-textMessage boxOut-textMessage-2">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    <p>
                                                                                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. 
                                                                                        Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    20 Nov. 2016
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
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageContent-3">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-message-top">
                                                                    <div class="col-md-11 col-sm-11 col-xs-11">
                                                                        <div class="boxOut-message-foto">
                                                                            <div class="box-message-foto">
                                                                                <img src="../../img/produk/message-photo-2.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="boxOut-message-name font-RobotoCondensed-Bold">
                                                                            Wati Aja 1
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1 col-sm-1 col-xs-1">
                                                                        <a class="collapse-link boxOut-button-title">
                                                                            <i class="button-title fa fa-chevron-up">
                                                                                <div class="box-button-title"></div>
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="x_content">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textMessage">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="box-triangle"></div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-textMessage">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    <p>
                                                                                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. 
                                                                                        Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    20 Nov. 2016
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-buttonMessage">
                                                                        <button type="button" class="btn button-reply font-RobotoCondensed">Reply</button>
                                                                        <button type="button" class="btn button-forward font-RobotoCondensed">Forward</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="inherit tab-pane mCustomScrollbar" data-mcs-theme="dark-3" id="message-3">
                                                
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageContent-1">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-message-top">
                                                                    <div class="col-md-11 col-sm-11 col-xs-11">
                                                                        <div class="boxOut-message-foto">
                                                                            <div class="box-message-foto">
                                                                                <img src="../../img/produk/message-photo-2.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="boxOut-message-name font-RobotoCondensed-Bold">
                                                                            Wati Aja 1
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1 col-sm-1 col-xs-1">
                                                                        <a class="collapse-link boxOut-button-title">
                                                                            <i class="button-title fa fa-chevron-up">
                                                                                <div class="box-button-title"></div>
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="x_content">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textMessage">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="box-triangle"></div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-textMessage">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    <p>
                                                                                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. 
                                                                                        Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                                                                                    </p>
                                                                                    <p>
                                                                                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. 
                                                                                        Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo 
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    20 Nov. 2016
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-buttonMessage">
                                                                        <button type="button" class="btn button-reply font-RobotoCondensed">Reply</button>
                                                                        <button type="button" class="btn button-forward font-RobotoCondensed">Forward</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageContent-2">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-message-top">
                                                                    <div class="col-md-11 col-sm-11 col-xs-11">
                                                                        <div class="boxOut-message-foto">
                                                                            <div class="box-message-foto">
                                                                                <img src="../../img/produk/member-login.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="boxOut-message-name font-RobotoCondensed-Bold">
                                                                            Me
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1 col-sm-1 col-xs-1">
                                                                        <a class="collapse-link boxOut-button-title">
                                                                            <i class="button-title fa fa-chevron-up">
                                                                                <div class="box-button-title"></div>
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="x_content">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textMessage">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="box-triangle"></div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-textMessage boxOut-textMessage-2">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    <p>
                                                                                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. 
                                                                                        Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    20 Nov. 2016
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
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageContent-3">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-message-top">
                                                                    <div class="col-md-11 col-sm-11 col-xs-11">
                                                                        <div class="boxOut-message-foto">
                                                                            <div class="box-message-foto">
                                                                                <img src="../../img/produk/message-photo-2.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="boxOut-message-name font-RobotoCondensed-Bold">
                                                                            Wati Aja 1
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1 col-sm-1 col-xs-1">
                                                                        <a class="collapse-link boxOut-button-title">
                                                                            <i class="button-title fa fa-chevron-up">
                                                                                <div class="box-button-title"></div>
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="x_content">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textMessage">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="box-triangle"></div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-textMessage">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    <p>
                                                                                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. 
                                                                                        Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    20 Nov. 2016
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-buttonMessage">
                                                                        <button type="button" class="btn button-reply font-RobotoCondensed">Reply</button>
                                                                        <button type="button" class="btn button-forward font-RobotoCondensed">Forward</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="inherit tab-pane mCustomScrollbar" data-mcs-theme="dark-3" id="message-4">
                                                
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageContent-1">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-message-top">
                                                                    <div class="col-md-11 col-sm-11 col-xs-11">
                                                                        <div class="boxOut-message-foto">
                                                                            <div class="box-message-foto">
                                                                                <img src="../../img/produk/message-photo-2.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="boxOut-message-name font-RobotoCondensed-Bold">
                                                                            Wati Aja 1
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1 col-sm-1 col-xs-1">
                                                                        <a class="collapse-link boxOut-button-title">
                                                                            <i class="button-title fa fa-chevron-up">
                                                                                <div class="box-button-title"></div>
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="x_content">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textMessage">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="box-triangle"></div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-textMessage">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    <p>
                                                                                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. 
                                                                                        Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                                                                                    </p>
                                                                                    <p>
                                                                                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. 
                                                                                        Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo 
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    20 Nov. 2016
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-buttonMessage">
                                                                        <button type="button" class="btn button-reply font-RobotoCondensed">Reply</button>
                                                                        <button type="button" class="btn button-forward font-RobotoCondensed">Forward</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageContent-2">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-message-top">
                                                                    <div class="col-md-11 col-sm-11 col-xs-11">
                                                                        <div class="boxOut-message-foto">
                                                                            <div class="box-message-foto">
                                                                                <img src="../../img/produk/member-login.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="boxOut-message-name font-RobotoCondensed-Bold">
                                                                            Me
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1 col-sm-1 col-xs-1">
                                                                        <a class="collapse-link boxOut-button-title">
                                                                            <i class="button-title fa fa-chevron-up">
                                                                                <div class="box-button-title"></div>
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="x_content">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textMessage">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="box-triangle"></div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-textMessage boxOut-textMessage-2">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    <p>
                                                                                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. 
                                                                                        Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    20 Nov. 2016
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
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-messageContent-3">
                                                        <div class="x_panel">
                                                            <div class="x_title">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-message-top">
                                                                    <div class="col-md-11 col-sm-11 col-xs-11">
                                                                        <div class="boxOut-message-foto">
                                                                            <div class="box-message-foto">
                                                                                <img src="../../img/produk/message-photo-2.png">
                                                                            </div>
                                                                        </div>
                                                                        <div class="boxOut-message-name font-RobotoCondensed-Bold">
                                                                            Wati Aja 1
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1 col-sm-1 col-xs-1">
                                                                        <a class="collapse-link boxOut-button-title">
                                                                            <i class="button-title fa fa-chevron-up">
                                                                                <div class="box-button-title"></div>
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="x_content">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textMessage">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="box-triangle"></div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-textMessage">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    <p>
                                                                                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. 
                                                                                        Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 textMessage font-RobotoCondensed-Light">
                                                                                    20 Nov. 2016
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-buttonMessage">
                                                                        <button type="button" class="btn button-reply font-RobotoCondensed">Reply</button>
                                                                        <button type="button" class="btn button-forward font-RobotoCondensed">Forward</button>
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
    </body>
</html>
