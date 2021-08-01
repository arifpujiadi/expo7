<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Play Now</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_cssDashboard.php'; ?>
        <link href="../../css/custom/dashboard/playNow.css" rel="stylesheet">
    </head>

    <body>
        <div class="container body">
            <div class="main_container">







                <!-- Content -->
                <!--==================================================-->
                <section id="content">
                    <div class="boxOut-howTo">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleHow font-RobotoCondensed-Bold">
                                HOW TO PLAY :
                            </div>
                            <a class="a-close font-RobotoCondensed-Bold">
                                x
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentHow">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 box-contentHow">
                                        <div class="col-md-5 col-sm-5 col-xs-5 boxOut-contentImg">
                                            <img class="" src="../../img/icon/howTo-1.png">
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-7 boxOut-contentText font-RobotoCondensed-Light">
                                            Using the arrow keys 
                                            to navigate your bout
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 box-contentHow">
                                        <div class="col-md-5 col-sm-5 col-xs-5 boxOut-contentImg">
                                            <img class="" src="../../img/icon/howTo-2.png">
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-7 boxOut-contentText font-RobotoCondensed-Light">
                                            Wear SHIELD
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 box-contentHow">
                                        <div class="col-md-5 col-sm-5 col-xs-5 boxOut-contentImg">
                                            <img class="" src="../../img/icon/howTo-3.png">
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-7 boxOut-contentText font-RobotoCondensed-Light">
                                            Launch FIREBALL
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 box-contentHow">
                                        <div class="col-md-5 col-sm-5 col-xs-5 boxOut-contentImg">
                                            <img class="" src="../../img/icon/howTo-4.png">
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-7 boxOut-contentText font-RobotoCondensed-Light">
                                            Wear SHIELD
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 box-contentHow">
                                        <div class="col-md-5 col-sm-5 col-xs-5 boxOut-contentImg">
                                            <img class="" src="../../img/icon/howTo-5.png">
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-7 boxOut-contentText font-RobotoCondensed-Light">
                                            Launch FIREBALL
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 fit-screen">
                        <img class="" src="../../img/produk/game-preview-2.png">
                    </div>
                </section>






            </div>
        </div>


        <!--js-->
        <!--==================================================-->
        <?php include '_jsDashboard.php'; ?>
        <script>

            $(document).ready(function () {

                $('.a-close').on("click", function () {
                    $(this).parents('#content').find('.boxOut-howTo').hide();
                });

            });

        </script>
    </body>
</html>
