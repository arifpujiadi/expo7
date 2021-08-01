<!DOCTYPE html>
<html>
    <head>
        <title>Full Instruction</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_css.php'; ?>
        <link rel="stylesheet" href="../css/custom/instruction.css">
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
                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-instruction">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="circle-instruction img-instruction-1" style="background-image: url('../img/icon/instruction-1.png');"></div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 box-instruction">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-instructionTitle font-RobotoCondensed-Bold">
                                                    Registration Stage
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textTitle font-Roboto-Light">
                                                    1. Receive e-mail from a friend containing Reference code or link.
                                                    <br>
                                                    2. Register yourself an account using the unique Referral Code
                                                    <br>
                                                    3. Obtain your membership fee of $2.99 (Giving you a copy of your friend’s table).
                                                    <br>
                                                    4. Check the table with your friend.
                                                    <br>
                                                    5. If it is the same, go ahead and pay the $9.99 dollar to the person at the top of the table.
                                                    <br>
                                                    (Remember: your goal is to be at the top too, but in order to do that you need to get 7 levels down).
                                                    <br>
                                                    6. Get a copy of this table for yourself.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="circle-instruction img-instruction-2" style="background-image: url('../img/icon/instruction-2.png');"></div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 box-instruction">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-instructionTitle font-RobotoCondensed-Bold">
                                                    Seeking 7
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textTitle font-Roboto-Light">
                                                    7. Choose among the people you want to invite wisely, you only have 7 referral codes.
                                                    <br>
                                                    (Tip: don’t waste them on people who you think might not be interested.)
                                                    <br>
                                                    8. Help your friends get started. 
                                                    <br>
                                                    (Tip: show them how to get registered and tell them why they should).
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="circle-instruction img-instruction-3" style="background-image: url('../img/icon/instruction-3.png');"></div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 box-instruction">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-instructionTitle font-RobotoCondensed-Bold">
                                                    Monitoring Stage
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textTitle font-Roboto-Light">
                                                    9. After successfully inviting 7 people, you have completed “your turn”
                                                    <br>
                                                    10. Just don’t forget to always check with your friends by clicking on the monitoring tab.
                                                    You can hover your cursor on the names and see when they last logged in and
                                                    how many people have they have invited.
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
    <script>
        $(document).ready(function () {

            (function ($) {
                $(window).on("load", function () {
                    $(".content").mCustomScrollbar();
                });
            })(jQuery);

        });
    </script>

</html>