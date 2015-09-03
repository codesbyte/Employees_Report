<?php 
    include 'include/global.inc.php'; 
    if (empty($_SESSION['UserID'])) {
        header("Location:index.php");
    }
    
    $memberTaskObj = new memberTaskObject();
    $memberTaskMgr = new memberTaskManager();
    $loginInformationObj = new loginInformationObject();
    $loginInformationMgr = new loginInformationManager();
    $basicInformationObj = new basicInformationObject();
    $basicInformationMgr = new basicInformationManager();
    $contactDetailsObj = new contactDetailsObject();
    $contactDetailsMgr = new contactDetailsManager();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Employees_Report</title>
        <link rel="icon" href="<?php echo $con->getBaseUrl() . "assets/images/16x16.png"; ?>" type="image/gif" sizes="16x16">
        <!-- Bootstrap core CSS -->

        <!-- Bootstrap core CSS -->
        <link href="<?php echo $con->getBaseUrl() . "assets/css/bootstrap.min.css"; ?>" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.8/css/dataTables.bootstrap.min.css" rel="stylesheet">

        <link href="<?php echo $con->getBaseUrl() . "assets/fonts/css/font-awesome.min.css"; ?>" rel="stylesheet">
        <link href="<?php echo $con->getBaseUrl() . "assets/css/animate.min.css"; ?>" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="<?php echo $con->getBaseUrl() . "assets/css/custom.css"; ?>" rel="stylesheet">
        <link href="<?php echo $con->getBaseUrl() . "assets/css/icheck/flat/green.css"; ?>" rel="stylesheet">
        <link href="<?php echo $con->getBaseUrl() . "assets/css/datatables/tools/css/dataTables.tableTools.css"; ?>" rel="stylesheet">

        <!--<script src="assets/js/jquery.min.js"></script>-->
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

    </head>
    <?php include 'include/header.php'; ?>
    <?php include 'include/side_bar.php'; ?>
    <?php include 'include/top_navigation.php'; ?>

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Employees List</h2>
                        <!--<ul class="nav navbar-right panel_toolbox">
                            <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>-->
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <!--<th>Name</th>-->
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>ContactNo</th>
                                    <th>View Previous Task</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                //$mbrTodayTaskArr = $memberTaskMgr->selectPreviousTask(Date('Y-m-d')."%");
                                $loginInfoArr = $loginInformationMgr->getAllUserId();
                                foreach ($loginInfoArr as $key => $value) 
                                {
                                    $UserID = $value->getUserID();
                                    $basicInfoObj = $basicInformationMgr->selectBasicInformation($UserID);
                                    $FirstName = $basicInfoObj->getFirstName();
                                    $LastName = $basicInfoObj->getLastName();
                                    $Designation = $basicInfoObj->getDesignation();
                                    $contactObj = $contactDetailsMgr->selectContactDetails($UserID);
                                    $ContactNo = $contactObj->getContactNo();
                                    ?>
                                        <tr>
                                            <td><?php echo (!empty($UserID) ? $UserID : ""); ?></td>
                                            <td><?php echo (!empty($FirstName) ? (!empty($LastName) ? $FirstName.' '.$LastName : $FirstName) : ""); ?></td>
                                            <td><?php echo (!empty($Designation) ? $Designation : ""); ?></td>
                                            <td><?php echo (!empty($ContactNo) ? $ContactNo : ""); ?></td>
                                            <td>
                                                <a href="<?php echo $con->getBaseUrl()."task_history.php?uid=".$UserID; ?>"><img src="<?php echo $con->getBaseUrl() . "assets/images/view.png"; ?>" alt="view" title="view" style="width: 60px;height: 60px;" /></a>
                                                <!--<ul class="nav navbar-nav navbar-right" style="width:100%;">
                                                    <li role="presentation" class="dropdown">
                                                        <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa fa-vimeo-square"></i>
                                                            <span class="badge bg-green">6</span>
                                                        </a>
                                                    </li>
                                                </ul>-->
                                            </td>
                                        </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br />
            <br />
            <br />
        </div>
        <br />

        <!-- footer content -->
        <?php include 'include/footer.php'; ?>
        <!-- /footer content -->
    </div>
    <!-- /page content -->


</div>

</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>


<!-- Bootstrap core CSS -->
<script src="<?php echo $con->getBaseUrl() . "assets/js/bootstrap.min.js"; ?>"></script>
<script src="<?php echo $con->getBaseUrl() . "assets/js/chartjs/chart.min.js"; ?>"></script>
<script src="<?php echo $con->getBaseUrl() . "assets/js/progressbar/bootstrap-progressbar.min.js"; ?>"></script>
<script src="<?php echo $con->getBaseUrl() . "assets/js/nicescroll/jquery.nicescroll.min.js"; ?>"></script>
<script src="<?php echo $con->getBaseUrl() . "assets/js/icheck/icheck.min.js"; ?>"></script>

<script src="<?php echo $con->getBaseUrl() . "assets/js/custom.js"; ?>"></script>


<!-- Datatables -->
<!--<script src="assets/js/datatables/js/jquery.dataTables.js"></script>
<script src="assets/js/datatables/tools/js/dataTables.tableTools.js"></script>-->


<script src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.8/js/dataTables.bootstrap.min.js"></script>




<script>
            $(document).ready(function () {
                $('#example').DataTable();
            });
</script>



</body>

</html>
