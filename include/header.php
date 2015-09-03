    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="<?php echo $con->getBaseUrl() . "home.php"; ?>" class="site_title">
                                <!--<i class="fa fa-paw"></i>-->
                                <img src="<?php echo $con->getBaseUrl()."assets/images/40x40-2.png" ?>" alt="logo" title="logo" />
                                <span>Employee Report</span></a>
                        </div>
                        <div class="clearfix"></div>
                        <!-- menu prile quick info -->
                        <div class="profile">
                            <div class="profile_pic">
                                <img src="<?php echo $con->getBaseUrl() . "assets/images/img.jpg"; ?>" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <?php
                                $basicInfoObj = new basicInformationObject();
                                $basicInfoMgr = new basicInformationManager();
                                $basicInfoObject = $basicInfoMgr->selectBasicInformation($_SESSION['UserID']);
                                ?>
                                <span>Welcome,</span>
                                <h2><?php echo $basicInfoObject->getFirstName(); ?></h2>
                            </div>
                        </div>
                        <!-- /menu prile quick info -->
                        <br />