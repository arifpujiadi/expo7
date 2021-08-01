<!DOCTYPE html>
<html lang="en">
    <head>
        <title>New Ticket</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_cssDashboard.php'; ?>
        <link href="../../css/download/build.css" rel="stylesheet">
        <link href="../../css/custom/dashboard/newTicket.css" rel="stylesheet">
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
                                                TICKETING SYSTEM
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitleDashboard font-RobotoCondensed-Bold">
                                                NEW TICKET
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
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentRow">
                                            <div class="col-md-6 col-sm-6 col-xs-12 title-content font-Exo2SemiBold">
                                                New tickets
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 title-count font-Exo2SemiBold">
                                                #1234567890
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentRow">
                                            <div class="col-md-6 col-sm-6 col-xs-12 boxOut-divLeft">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-content-title font-RobotoCondensed-Bold">
                                                        Title
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <input type="text" placeholder="" class="form-control field-title font-RobotoCondensed" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 boxOut-divRight">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-content-title font-RobotoCondensed-Bold">
                                                        Select Departement
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <select class="form-control dropdown-konfirmasiPembayaran font-RobotoCondensed-Light">
                                                            <option value="" hidden selected></option>
                                                            <option value="">Departement 1</option>
                                                            <option value="">Departement 2</option>
                                                            <option value="">Departement 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentRow">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-content-title font-RobotoCondensed-Bold">
                                                    Messages
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textArea">

                                                    <div class="form-group">
                                                        <textarea class="form-control editTextArea font-RobotoCondensed"></textarea>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentRow2">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-content-title font-RobotoCondensed-Bold">
                                                    Attachments
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-attachments">

                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="col-md-6 col-sm-6 col-xs-12 input-form3 lampir-file">
                                                            <div class="boxOut-button">
                                                                <span class="btn btn-file font-white font-RobotoCondensed-Light">
                                                                    Choose File<input type="file">
                                                                </span>
                                                            </div>
                                                            <div class="boxOut-nameFile">
                                                                <input type="text" class="form-control input-fieldKomfirmasi font-RobotoCondensed-Light" placeholder="No File Choose" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12 boxOut-rightBrowse font-RobotoCondensed-Light">
                                                            (Allowed File Extensions: .jpg, .gif, .jpeg, .png, .pdf, .doc, .docx, .zip, .tif, .xlsx)
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentRow">
                                            <div class="col-md-12 col-sm-12 col-xs-12 box-contentRow">
                                                <div class="checkbox edit-checbox edit-checbox-agree font-RobotoCondensed-Light">
                                                    <input id="agree" class="select" name="agree[]" type="checkbox">
                                                    <label for="agree">
                                                        Saya setuju untuk memberikan akses dan resources yang diperlukan untuk mendapatkan bantuan dan saya bertanggung jawab penuh atas segala resiko yang ditimbulkan dari permintaan bantuan ini
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <button type="button" class="btn button-send font-RobotoCondensed">Send<img src="../../img/icon/arrowRight-button.png"></button>
                                            <button type="button" class="btn button-save font-RobotoCondensed">Cancel</button>
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
        <script src="../../js/download/bootstrap-wysiwyg.min.js"></script>
        <script src="../../js/download/jquery.hotkeys.js"></script>
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


                jQuery("#number").keydown(function (event) {
                    // Allow: backspace, delete, tab, escape, enter and .
                    if (jQuery.inArray(event.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                            // Allow: Ctrl+A
                                    (event.keyCode == 65 && event.ctrlKey === true) ||
                                    // Allow: home, end, left, right
                                            (event.keyCode >= 35 && event.keyCode <= 39)) {
                                // let it happen, don't do anything
                                return;
                            }
                            else {
                                // Ensure that it is a number and stop the keypress
                                if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
                                    event.preventDefault();
                                }
                            }
                        });
            });
        </script>
    </body>
</html>
