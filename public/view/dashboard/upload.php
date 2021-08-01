<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Upload</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_cssDashboard.php'; ?>
        <link href="../../css/custom/dashboard/upload.css" rel="stylesheet">
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
                                                UPLOAD
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
                                    <div class="col-md-6 col-sm-12 col-xs-12 boxOut-contentLeft inherit">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentLeft-left">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleContent font-RobotoCondensed-Bold">
                                                            Game name
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <input type="text" placeholder="Type your game name" class="form-control field-title font-RobotoCondensed-Light">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentLeft-Right">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleContent font-RobotoCondensed-Bold">
                                                            Category
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <select class="form-control dropdown-konfirmasiPembayaran font-RobotoCondensed-Light">
                                                                <option class="italic" value="" hidden selected>Select genre</option>
                                                                <option value="">Genre 1</option>
                                                                <option value="">Genre 2</option>
                                                                <option value="">Genre 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentLeft-left">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-thumbail" style="background-image: url('../../img/icon/game-video.png');">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file">
                                                            <div class="boxOut-button">
                                                                <span class="btn btn-file font-white font-RobotoCondensed-Light">
                                                                    Choose File Video<input type="file">
                                                                </span>
                                                            </div>
                                                            <div class="boxOut-nameFile">
                                                                <input type="text" class="form-control input-fieldKomfirmasi font-RobotoCondensed-Light hidden" placeholder="No File Choose" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentLeft-Right">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-thumbail" style="background-image: url('../../img/icon/game-img.png');">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file">
                                                            <div class="boxOut-button">
                                                                <span class="btn btn-file font-white font-RobotoCondensed-Light">
                                                                    Choose File Video<input type="file">
                                                                </span>
                                                            </div>
                                                            <div class="boxOut-nameFile">
                                                                <input type="text" class="form-control input-fieldKomfirmasi font-RobotoCondensed-Light hidden" placeholder="No File Choose" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentLeft-left">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleContent-border font-RobotoCondensed-Bold">
                                                            Upload game file
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                                    <div class="width-nameFile">
                                                                        <div class="boxOut-nameFile">
                                                                            <div class="input-group">
                                                                                <div class="input-group-btn">
                                                                                    <div class="input-logo input-html" style="background-image: url('../../img/icon/game-html.png');">

                                                                                    </div>
                                                                                </div>
                                                                                <input type="text" class="form-control input-fieldKomfirmasi font-RobotoCondensed-Light" placeholder="" readonly>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="width-fileButton">
                                                                        <div class="boxOut-button">
                                                                            <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                Choose File HTML<input type="file">
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                                    <div class="width-nameFile">
                                                                        <div class="boxOut-nameFile">
                                                                            <div class="input-group">
                                                                                <div class="input-group-btn">
                                                                                    <div class="input-logo input-img" style="background-image: url('../../img/icon/game-icon.png');">

                                                                                    </div>
                                                                                </div>
                                                                                <input type="text" class="form-control input-fieldKomfirmasi font-RobotoCondensed-Light" placeholder="" readonly>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="width-fileButton">
                                                                        <div class="boxOut-button">
                                                                            <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                Choose File Icon<input type="file">
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 input-form3 lampir-file boxOut-lampir-file">
                                                                    <div class="width-nameFile">
                                                                        <div class="boxOut-nameFile">
                                                                            <div class="input-group">
                                                                                <div class="input-group-btn">
                                                                                    <div class="input-logo input-img" style="background-image: url('../../img/icon/game-icon.png');">

                                                                                    </div>
                                                                                </div>
                                                                                <input type="text" class="form-control input-fieldKomfirmasi font-RobotoCondensed-Light" placeholder="" readonly>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="width-fileButton">
                                                                        <div class="boxOut-button">
                                                                            <span class="btn btn-file btn-file-2 font-white font-RobotoCondensed-Light">
                                                                                Choose File Banner<input type="file">
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 boxOut-contentLeft-Right">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleContent-border font-RobotoCondensed-Bold">
                                                            Control
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
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12 boxOut-contentRight inherit">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleContent font-RobotoCondensed-Bold">
                                                Description of your game
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textArea">

                                                <div class="form-group">
                                                    <textarea class="form-control editTextArea-2 font-RobotoCondensed" placeholder="Type description"></textarea>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-keteranganTitle font-RobotoCondensed-Bold">
                                                Things you must know
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                <table class="table table-keterangan col-md-12 col-sm-12 col-xs-12 font-RobotoCondensed-Light">
                                                    <tr class="">
                                                        <td class="td-strip">
                                                            -
                                                        </td>
                                                        <td class="">
                                                            Video, icon and games file changes can take up to 7 day before approval. Changes that are spontaneous includes : the description and control of your game.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-strip">
                                                            -
                                                        </td>
                                                        <td class="">
                                                            Your game files must be legitimately exported if not it will be rejected by our system.
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 font-RobotoCondensed-Bold">
                                                <button type="button" class="btn button-save font-RobotoCondensed-Bold">SAVE CHANGE</button>
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


                $('input,textarea').focus(function () {
                    $(this).data('placeholder', $(this).attr('placeholder'))
                            .attr('placeholder', '');
                }).blur(function () {
                    $(this).attr('placeholder', $(this).data('placeholder'));
                });

            });
        </script>


    </body>
</html>
