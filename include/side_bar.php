<script>
    function activeNavFunction() {
        $(document).ready(function(){
        $("#tsk_his").attr('class','current-page');
        $("#nv_active").attr('class','nv active');
        /*$("#nav_child_menu").attr('style','display: block');
        $("#nav_child_menu").css("display", "block");*/
        });
    }
</script>
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <!--<h3>General</h3>-->
        <ul class="nav side-menu">
            <li><a href="<?php echo $con->getBaseUrl() . "home.php"; ?>"><i class="fa fa-home"></i>Dashboard </a></li>
            <li id="nv_active"><a><i class="fa fa-history"></i> Statistics <span class="fa fa-chevron-down"></span></a>
                <ul id="nav_child_menu" class="nav child_menu" style="display: none">
                    <?php
                    if($_SESSION['MemberID'] != "1")
                    {
                        if(basename($_SERVER['PHP_SELF']) == "task_history.php")
                        {
                            echo '<script type="text/javascript">'
                                , 'activeNavFunction();'
                                , '</script>'
                             ;
                        }
                        ?>
                            <li><a href="<?php echo $con->getBaseUrl() . "send_task.php"; ?>">Send Task</a></li>
                            <li id="tsk_his"><a href="<?php echo $con->getBaseUrl() . "task_history.php"; ?>">Task History</a></li>
                        <?php
                    }
                    ?>
                    <?php
                    if($_SESSION['MemberID'] == "1")
                    {
                        ?>
                            <li><a href="<?php echo $con->getBaseUrl() . "today_emp_task_list.php"; ?>">Today Task</a></li>
                            <li><a href="<?php echo $con->getBaseUrl() . "pre_emp_task_list.php"; ?>">Previous Task History</a></li>
                            <?php
                            if(basename($_SERVER['PHP_SELF']) == "task_history.php")
                            {
                                echo '<script type="text/javascript">'
                                    , 'activeNavFunction();'
                                    , '</script>'
                                 ;
                                ?><li id="tsk_his"><a href="<?php echo $con->getBaseUrl() . "task_history.php"; ?>">Employee Task History</a></li><?php
                            }
                            ?>
                        <?php
                    }
                    ?>
                </ul>
            </li>
            
            
            <li><a href="<?php echo $con->getBaseUrl() . "profile.php"; ?>"><i class="fa fa-user"></i>Profile </a></li>
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