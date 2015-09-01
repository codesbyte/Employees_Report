<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <!--<h3>General</h3>-->
        <ul class="nav side-menu">
            <li><a href="<?php echo $con->getBaseUrl() . "home.php"; ?>"><i class="fa fa-home"></i>Dashboard </a></li>
            <li><a><i class="fa fa-history"></i> Statistics <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none">
                    <?php
                    if($_SESSION['MemberID'] != "1")
                    {
                        ?>
                            <li><a href="<?php echo $con->getBaseUrl() . "send_task.php"; ?>">Send Task</a></li>
                            <li><a href="<?php echo $con->getBaseUrl() . "task_history.php"; ?>">Task History</a></li>
                        <?php
                    }
                    ?>
                    <?php
                    if($_SESSION['MemberID'] == "1")
                    {
                        ?>
                            <li><a href="<?php echo $con->getBaseUrl() . "today_emp_task_list.php"; ?>">Today Task History</a></li>
                            <li><a href="<?php echo $con->getBaseUrl() . "pre_emp_task_list.php"; ?>">Previous Task History</a></li>
                            <?php
                            if(basename($_SERVER['PHP_SELF']) == "task_history.php")
                            {
                                ?><li><a href="<?php echo $con->getBaseUrl() . "task_history.php"; ?>">Employee Task History</a></li><?php
                            }
                            ?>
                        <?php
                    }
                    ?>
                </ul>
            </li>
            
            
            <li><a><i class="fa fa-users"></i> General <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo $con->getBaseUrl() . "profile_update.php"; ?>">Profile</a></li>
                    <li><a href="<?php echo $con->getBaseUrl() . "change_password.php"; ?>">Change Password</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /sidebar menu -->


<!-- /menu footer buttons -->
<!--<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>-->
<!-- /menu footer buttons -->