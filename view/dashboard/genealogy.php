<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Genealogy</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_cssDashboard.php'; ?>
        <link href="../../css/hierarchy-view.hack.css" rel="stylesheet">
        <link href="../../css/custom/dashboard/genealogy.css" rel="stylesheet">
        <link href="../../css/styleTree.css" rel="stylesheet">
    </head>
    <style>

    </style>

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
                                            GENEALOGY TREE
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

                                <button type="button" class="btn button-maximize" data-zoom-increment="0.1">
                                    <img class="" src="../../img/icon/maximize-icon.png">
                                </button>
                                <button type="button" class="btn button-minimize" data-zoom-decrement="0.1">
                                    <img class="" src="../../img/icon/minimize-icon.png">
                                </button>
                                <div class="col-md-12 col-sm-12 col-xs-12 box-content" style="">

                                    <section class="management-hierarchy" style="margin-bottom: 100px;">
                                        <div class="hv-container">
                                            <div class="hv-wrapper">

                                                <?php
                                                $tree = array(
                                                    0 => array(
                                                        'id' => 'a6a197b8d448610',
                                                        'name' => 'Diego Blessing',
                                                        'register' => '27/09/1993',
                                                        'invitations' => rand(1, 50),
                                                        'photo' => 'genology-1.png',
                                                        'parent' => 0,
                                                        'children' => array(
                                                            1 => array(
                                                                'id' => 'm4gmybs00opx78p',
                                                                'name' => 'Vincent Wardell',
                                                                'register' => '27/09/1993',
                                                                'invitations' => rand(1, 50),
                                                                'photo' => '58590_10151401510517329_1359874123_n-128x128.jpg',
                                                                'parent' => 0,
                                                                'children' => array(
                                                                    6 => array(
                                                                        'id' => 'fx6ikafbxbgajcq',
                                                                        'name' => 'Rebecka Apperson',
                                                                        'register' => '27/09/1993',
                                                                        'invitations' => rand(1, 50),
                                                                        'photo' => '398029fbf77578c6ae82e869147c9f9d1fb6916559e63472f274dcda.png',
                                                                        'parent' => 1,
                                                                        'children' => array(
                                                                            15 => array(
                                                                                'id' => 'g4mi4zfd2kc5pwd',
                                                                                'name' => 'Leonie Kenton',
                                                                                'register' => '27/09/1993',
                                                                                'invitations' => rand(1, 50),
                                                                                'photo' => '128.jpg',
                                                                                'parent' => 14,
                                                                            ),
                                                                        )
                                                                    ),
                                                                    7 => array(
                                                                        'id' => '1zhu9z6r22do9gp',
                                                                        'name' => 'Berry Canipe',
                                                                        'register' => '27/09/1993',
                                                                        'invitations' => rand(1, 50),
                                                                        'photo' => '1002465_og_2.jpg',
                                                                        'parent' => 1,
                                                                    ),
                                                                    8 => array(
                                                                        'id' => 'cb26nd2p2ztkvsb',
                                                                        'name' => 'An Mcelyea',
                                                                        'register' => '27/09/1993',
                                                                        'invitations' => rand(1, 50),
                                                                        'photo' => 'a64acad2254b024e687caebe478a5dae.jpg',
                                                                        'parent' => 1,
                                                                    ),
                                                                )
                                                            ),
                                                            2 => array(
                                                                'id' => 'acp7qleg3jtoe29',
                                                                'name' => 'Francina Shoaff',
                                                                'register' => '27/09/1993',
                                                                'invitations' => rand(1, 50),
                                                                'photo' => 'avatar_0436754f1458_128.png',
                                                                'parent' => 0,
                                                                'children' => array(
                                                                    9 => array(
                                                                        'id' => 'az6dr66ooej4afp',
                                                                        'name' => 'Donette Mondragon',
                                                                        'register' => '27/09/1993',
                                                                        'invitations' => rand(1, 50),
                                                                        'photo' => 'avatar_a9f695503c2c_128.png',
                                                                        'parent' => 2,
                                                                    ),
                                                                    10 => array(
                                                                        'id' => 'zoryjquahjllwo4',
                                                                        'name' => 'Valentin Atlas',
                                                                        'register' => '27/09/1993',
                                                                        'invitations' => rand(1, 50),
                                                                        'photo' => 'avatar_d9eebba769d5_128.png',
                                                                        'parent' => 2,
                                                                    ),
                                                                )
                                                            ),
                                                            3 => array(
                                                                'id' => 'doatlsnrwxnlz4k',
                                                                'name' => 'Quinton Lavin',
                                                                'register' => '27/09/1993',
                                                                'invitations' => rand(1, 50),
                                                                'photo' => 'bfea43d23cd50dacc3cbe45070622445.jpg',
                                                                'parent' => 0,
                                                                'children' => array()
                                                            ),
                                                            4 => array(
                                                                'id' => 'vmul2dab3ugbgvk',
                                                                'name' => 'Blair Derringer',
                                                                'register' => '27/09/1993',
                                                                'invitations' => rand(1, 50),
                                                                'photo' => 'c6157abc455eb6b6d689377ce1df2134534d5890618b52c98ee1e2f4.png',
                                                                'parent' => 0,
                                                                'children' => array(
                                                                    11 => array(
                                                                        'id' => '7a3grzq5ihme0d0',
                                                                        'name' => 'Irmgard Lofland',
                                                                        'register' => '27/09/1993',
                                                                        'invitations' => rand(1, 50),
                                                                        'photo' => 'd3cb18029e9a286ba039ccc45050d8ad2df59d1fc4d7b0e8c479de7c.png',
                                                                        'parent' => 4,
                                                                    ),
                                                                    12 => array(
                                                                        'id' => 'm1qynuxnzsrl0a8',
                                                                        'name' => 'Marceline Gray',
                                                                        'register' => '27/09/1993',
                                                                        'invitations' => rand(1, 50),
                                                                        'photo' => 'ImageGen.jpg',
                                                                        'parent' => 4,
                                                                    ),
                                                                    13 => array(
                                                                        'id' => 'mybwkoyub30q1u9',
                                                                        'name' => 'Pattie Agnew',
                                                                        'register' => '27/09/1993',
                                                                        'invitations' => rand(1, 50),
                                                                        'photo' => 'images-1.jpg',
                                                                        'parent' => 4,
                                                                    ),
                                                                )
                                                            ),
                                                            5 => array(
                                                                'id' => 'rokdg819sc4cxrq',
                                                                'name' => 'Buford Orourke',
                                                                'register' => '27/09/1993',
                                                                'invitations' => rand(1, 50),
                                                                'photo' => 'images-2.jpg',
                                                                'parent' => 0,
                                                                'children' => array(
                                                                    14 => array(
                                                                        'id' => 'g4mi4zfd2kc5ko6',
                                                                        'name' => 'Leonie Kenton',
                                                                        'register' => '27/09/1993',
                                                                        'invitations' => rand(1, 50),
                                                                        'photo' => '128.jpg',
                                                                        'parent' => 5,
                                                                    ),

                                                                )
                                                            )
                                                        )
                                                    )
                                                );
                                                $json = json_encode($tree, true);

                                                function sumTotalChildren($tree, $countAll) {
                                                    $counter = 0;

                                                    if ($countAll == true) {
                                                        foreach ($tree as $key => $value) {
                                                            if (isset($value['children']) && is_array($value['children'])) {
                                                                $tree = $value['children'];
                                                                $counter += count($value['children']) + sumTotalChildren($value['children'], $countAll);
                                                            }
                                                        }
                                                    } else {
                                                        $counter += count($tree);
                                                    }

                                                    return $counter;
                                                }

                                                ;
                                                ?>
                                                <script> var treeJSON = <?php echo $json; ?>;</script>

                                                <!-- Key component -->
                                                <div id="hv-tree" data-zoom-scale="1.0">
                                                    <!-- Root -->

                                                    <div class="tree">
                                                      <ul>
                                                        <li id="treeContainer">
                                                        <div class="clearfix normalizeTreeNode expandedBranch">
                                                        <div class="boxOut-person">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeTop">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeName font-RobotoCondensed">
                                                                    <?php echo $tree[0]['name']; ?>
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeId font-RobotoCondensed">
                                                                    <?php echo $tree[0]['id']; ?>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeFoto">
                                                                <a href="#" class="col-md-12 col-sm-12 col-xs-12" data-person-id="<?php echo $tree[0]['id']; ?>">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-treeFoto" style="background-image: url('../../img/genealogyPerson/<?php echo $tree[0]['photo']; ?>');"></div>
                                                                </a>
                                                            </div>
                                                            <div class="boxOut-treeCount font-RobotoCondensed-Bold">
                                                                <?php echo sumTotalChildren($tree, true); ?>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottom">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                        Register Date : 
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                        <?php echo $tree[0]['register']; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                        Available Invitation : 
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                        <?php echo $tree[0]['invitations'] . ' People'; ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                          <ul>
                                                            <li>
                                                                <div class="clearfix normalizeTreeNode">
                                                                <div class="boxOut-person">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeTop">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeName font-RobotoCondensed">
                                                                            <?php echo $tree[0]['children'][1]['name']; ?>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeId font-RobotoCondensed">
                                                                            <?php echo $tree[0]['children'][1]['id']; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeFoto">
                                                                        <a href="#" class="col-md-12 col-sm-12 col-xs-12" data-person-id="<?php echo $tree[0]['children'][1]['id']; ?>">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-treeFoto" style="background-image: url('../../img/genealogyPerson/<?php echo $tree[0]['children'][1]['photo']; ?>');"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="boxOut-treeCount font-RobotoCondensed-Bold">
                                                                        <?php echo sumTotalChildren($tree[0]['children'][1]['children'], false); ?>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottom">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                                Register Date : 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                                <?php echo $tree[0]['children'][1]['register']; ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                                Available Invitation : 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                                <?php echo $tree[0]['children'][1]['invitations'] . ' People'; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix normalizeTreeNode">
                                                                <div class="boxOut-person">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeTop">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeName font-RobotoCondensed">
                                                                            <?php echo $tree[0]['children'][2]['name']; ?>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeId font-RobotoCondensed">
                                                                            <?php echo $tree[0]['children'][2]['id']; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeFoto">
                                                                        <a href="#" class="col-md-12 col-sm-12 col-xs-12" data-index="1" data-parent-index="0" data-person-id="<?php echo $tree[0]['children'][2]['id']; ?>">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-treeFoto" style="background-image: url('../../img/genealogyPerson/<?php echo $tree[0]['children'][2]['photo']; ?>');"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="boxOut-treeCount font-RobotoCondensed-Bold">
                                                                        <?php echo sumTotalChildren($tree[0]['children'][2]['children'], false); ?>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottom">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                                Register Date : 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                                <?php echo $tree[0]['children'][2]['register']; ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                                Available Invitation : 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                                <?php echo $tree[0]['children'][2]['invitations'] . ' People'; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix normalizeTreeNode">
                                                                <div class="boxOut-person">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeTop">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeName font-RobotoCondensed">
                                                                            <?php echo $tree[0]['children'][3]['name']; ?>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeId font-RobotoCondensed">
                                                                            <?php echo $tree[0]['children'][3]['id']; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeFoto">
                                                                        <a href="#" class="col-md-12 col-sm-12 col-xs-12" data-index="1" data-parent-index="0" data-person-id="<?php echo $tree[0]['children'][3]['id']; ?>">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-treeFoto" style="background-image: url('../../img/genealogyPerson/<?php echo $tree[0]['children'][3]['photo']; ?>');"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="boxOut-treeCount font-RobotoCondensed-Bold">
                                                                        <?php echo sumTotalChildren($tree[0]['children'][3]['children'], false); ?>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottom">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                                Register Date : 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                                <?php echo $tree[0]['children'][3]['register']; ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                                Available Invitation : 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                                <?php echo $tree[0]['children'][3]['invitations'] . ' People'; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix normalizeTreeNode">
                                                                <div class="boxOut-person">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeTop">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeName font-RobotoCondensed">
                                                                            <?php echo $tree[0]['children'][4]['name']; ?>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeId font-RobotoCondensed">
                                                                            <?php echo $tree[0]['children'][4]['id']; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeFoto">
                                                                        <a href="#" class="col-md-12 col-sm-12 col-xs-12" data-index="1" data-parent-index="0" data-person-id="<?php echo $tree[0]['children'][4]['id']; ?>">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-treeFoto" style="background-image: url('../../img/genealogyPerson/<?php echo $tree[0]['children'][4]['photo']; ?>');"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="boxOut-treeCount font-RobotoCondensed-Bold">
                                                                        <?php echo sumTotalChildren($tree[0]['children'][4]['children'], false); ?>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottom">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                                Register Date : 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                                <?php echo $tree[0]['children'][4]['register']; ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                                Available Invitation : 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                                <?php echo $tree[0]['children'][4]['invitations'] . ' People'; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="clearfix normalizeTreeNode">
                                                                <div class="boxOut-person">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeTop">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeName font-RobotoCondensed">
                                                                            <?php echo $tree[0]['children'][5]['name']; ?>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeId font-RobotoCondensed">
                                                                            <?php echo $tree[0]['children'][5]['id']; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeFoto">
                                                                        <a href="#" class="col-md-12 col-sm-12 col-xs-12" data-index="1" data-parent-index="0" data-person-id="<?php echo $tree[0]['children'][5]['id']; ?>">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-treeFoto" style="background-image: url('../../img/genealogyPerson/<?php echo $tree[0]['children'][5]['photo']; ?>');"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="boxOut-treeCount font-RobotoCondensed-Bold">
                                                                        <?php echo sumTotalChildren($tree[0]['children'][5]['children'], false); ?>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottom">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                                Register Date : 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                                <?php echo $tree[0]['children'][5]['register']; ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                                Available Invitation : 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                                <?php echo $tree[0]['children'][5]['invitations'] . ' People'; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                
                                                            </li>
                                                          </ul>
                                                        </li>
                                                      </ul>
                                                    </div>
<!--
                                                    <div class="tree-level-container">
                                                        <div class="hv-item-child root">
                                                            <div class="person expanded">
                                                                <div class="boxOut-person">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeTop">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeName font-RobotoCondensed">
                                                                            <?php echo $tree[0]['name']; ?>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeId font-RobotoCondensed">
                                                                            <?php echo $tree[0]['id']; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeFoto">
                                                                        <a href="#" class="col-md-12 col-sm-12 col-xs-12" data-person-id="<?php echo $tree[0]['id']; ?>">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-treeFoto" style="background-image: url('../../img/genealogyPerson/<?php echo $tree[0]['photo']; ?>');"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="boxOut-treeCount font-RobotoCondensed-Bold">
                                                                        <?php echo sumTotalChildren($tree, true); ?>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottom">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                                Register Date : 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                                <?php echo $tree[0]['register']; ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                                Available Invitation : 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                                <?php echo $tree[0]['invitations'] . ' People'; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Level 1 --
                                                    <div class="tree-level-container">
                                                        <!-- Children 1 -
                                                        <div class="hv-item-child">
                                                            <!-- Key component --
                                                            <div class="person">
                                                                <div class="boxOut-person">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeTop">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeName font-RobotoCondensed">
                                                                            <?php echo $tree[0]['children'][1]['name']; ?>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeId font-RobotoCondensed">
                                                                            <?php echo $tree[0]['children'][1]['id']; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeFoto">
                                                                        <a href="#" class="col-md-12 col-sm-12 col-xs-12" data-person-id="<?php echo $tree[0]['children'][1]['id']; ?>">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-treeFoto" style="background-image: url('../../img/genealogyPerson/<?php echo $tree[0]['children'][1]['photo']; ?>');"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="boxOut-treeCount font-RobotoCondensed-Bold">
                                                                        <?php echo sumTotalChildren($tree[0]['children'][1]['children'], false); ?>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottom">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                                Register Date : 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                                <?php echo $tree[0]['children'][1]['register']; ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                                Available Invitation : 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                                <?php echo $tree[0]['children'][1]['invitations'] . ' People'; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Children 2 --
                                                        <div class="hv-item-child">
                                                            <!-- Key component --
                                                            <div class="person">
                                                                <div class="boxOut-person">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeTop">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeName font-RobotoCondensed">
                                                                            <?php echo $tree[0]['children'][2]['name']; ?>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeId font-RobotoCondensed">
                                                                            <?php echo $tree[0]['children'][2]['id']; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeFoto">
                                                                        <a href="#" class="col-md-12 col-sm-12 col-xs-12" data-index="1" data-parent-index="0" data-person-id="<?php echo $tree[0]['children'][2]['id']; ?>">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-treeFoto" style="background-image: url('../../img/genealogyPerson/<?php echo $tree[0]['children'][2]['photo']; ?>');"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="boxOut-treeCount font-RobotoCondensed-Bold">
                                                                        <?php echo sumTotalChildren($tree[0]['children'][2]['children'], false); ?>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottom">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                                Register Date : 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                                <?php echo $tree[0]['children'][2]['register']; ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                                Available Invitation : 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                                <?php echo $tree[0]['children'][2]['invitations'] . ' People'; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Children 3 --
                                                        <div class="hv-item-child">
                                                            <!-- Key component --
                                                            <div class="person">
                                                                <div class="boxOut-person">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeTop">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeName font-RobotoCondensed">
                                                                            <?php echo $tree[0]['children'][3]['name']; ?>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeId font-RobotoCondensed">
                                                                            <?php echo $tree[0]['children'][3]['id']; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeFoto">
                                                                        <a href="#" class="col-md-12 col-sm-12 col-xs-12" data-index="1" data-parent-index="0" data-person-id="<?php echo $tree[0]['children'][3]['id']; ?>">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-treeFoto" style="background-image: url('../../img/genealogyPerson/<?php echo $tree[0]['children'][3]['photo']; ?>');"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="boxOut-treeCount font-RobotoCondensed-Bold">
                                                                        <?php echo sumTotalChildren($tree[0]['children'][3]['children'], false); ?>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottom">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                                Register Date : 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                                <?php echo $tree[0]['children'][3]['register']; ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                                Available Invitation : 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                                <?php echo $tree[0]['children'][3]['invitations'] . ' People'; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Children 4 --
                                                        <div class="hv-item-child">
                                                            <!-- Key component --
                                                            <div class="person">
                                                                <div class="boxOut-person">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeTop">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeName font-RobotoCondensed">
                                                                            <?php echo $tree[0]['children'][4]['name']; ?>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeId font-RobotoCondensed">
                                                                            <?php echo $tree[0]['children'][4]['id']; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeFoto">
                                                                        <a href="#" class="col-md-12 col-sm-12 col-xs-12" data-index="1" data-parent-index="0" data-person-id="<?php echo $tree[0]['children'][4]['id']; ?>">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-treeFoto" style="background-image: url('../../img/genealogyPerson/<?php echo $tree[0]['children'][4]['photo']; ?>');"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="boxOut-treeCount font-RobotoCondensed-Bold">
                                                                        <?php echo sumTotalChildren($tree[0]['children'][4]['children'], false); ?>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottom">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                                Register Date : 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                                <?php echo $tree[0]['children'][4]['register']; ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                                Available Invitation : 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                                <?php echo $tree[0]['children'][4]['invitations'] . ' People'; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Children 5 --
                                                        <div class="hv-item-child">
                                                            <!-- Key component --
                                                            <div class="person">
                                                                <div class="boxOut-person">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeTop">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeName font-RobotoCondensed">
                                                                            <?php echo $tree[0]['children'][5]['name']; ?>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeId font-RobotoCondensed">
                                                                            <?php echo $tree[0]['children'][5]['id']; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeFoto">
                                                                        <a href="#" class="col-md-12 col-sm-12 col-xs-12" data-index="1" data-parent-index="0" data-person-id="<?php echo $tree[0]['children'][5]['id']; ?>">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-treeFoto" style="background-image: url('../../img/genealogyPerson/<?php echo $tree[0]['children'][5]['photo']; ?>');"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="boxOut-treeCount font-RobotoCondensed-Bold">
                                                                        <?php echo sumTotalChildren($tree[0]['children'][5]['children'], false); ?>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottom">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                                Register Date : 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                                <?php echo $tree[0]['children'][5]['register']; ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomTitle font-RobotoCondensed">
                                                                                Available Invitation : 
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottomDate font-RobotoCondensed-Bold">
                                                                                <?php echo $tree[0]['children'][5]['invitations'] . ' People'; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Children 6 --
                                                        <div class="hv-item-child">
                                                            <div class="person">
                                                                <div class="boxOut-person">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeTop">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeName font-RobotoCondensed">
                                                                            None
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeId font-RobotoCondensed"></div>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeFoto boxOut-treeFoto-blank">
                                                                        <a href="#" class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-treeFoto"  style="background-image: url('../../img/icon/genology-blank.png');"></div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="boxOut-treeCount font-RobotoCondensed-Bold">0</div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-treeBottom">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-buttonInvite">
                                                                                <button type="button" class="btn button-invite font-RobotoCondensed-Bold">INVITE</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
-->
                                                </div>

                                            </div>
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
        <script type="text/javascript" src="../../js/genealogy.hack.js"></script>
    </body>
</html>
