<?php 
    include 'include/global.inc.php'; 
    if (empty($_SESSION['UserID'])) {
        header("Location:index.php");
    }
    
    $memberTaskObj = new memberTaskObject();
    $memberTaskMgr = new memberTaskManager();
    $basicInformationObj = new basicInformationObject();
    $basicInformationMgr = new basicInformationManager();
    
    if($_SESSION['MemberID'] == "1")
    {
        if(isset($_GET['uid']) && !empty($_GET['uid']))
        {
            $basicInfoObj = $basicInformationMgr->selectBasicInformation($_GET['uid']);
            $FirstName = $basicInfoObj->getFirstName();
            $LastName = $basicInfoObj->getLastName();
        }
    }
    else
    {
        $basicInfoObj = $basicInformationMgr->selectBasicInformation($_SESSION['UserID']);
        $FirstName = $basicInfoObj->getFirstName();
        $LastName = $basicInfoObj->getLastName();
    }
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
        <!-- view form code start -->
        <?php
        if(isset($_GET['tid']) && !empty($_GET['tid']))
        {
            $taskid = $_GET['tid'];
            $mbrTaskObj = $memberTaskMgr->selectMemberTaskByTaskID($taskid);
            $Intime = $mbrTaskObj->getIntime();
            $Outtime = $mbrTaskObj->getOuttime();
            $TaskDate = $mbrTaskObj->getTaskDate();
            $TaskDescription = $mbrTaskObj->getTaskDescription();
            ?>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>View Task<small>(<?php echo (!empty($FirstName) ? (!empty($LastName) ? $FirstName.' '.$LastName : $FirstName) : ""); ?>)</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <!--<li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>-->
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Task Date <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="birthday" value="<?php echo (!empty($TaskDate) ? $TaskDate : ""); ?>" disabled="true" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">In Time <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="single-input_1" value="<?php echo (!empty($Intime) ? $Intime : ""); ?>" disabled="true" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Out Time <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="single-input_2" name="last-name" value="<?php echo (!empty($Outtime) ? $Outtime : ""); ?>" disabled="true" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Description <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" disabled="true" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"><?php echo (!empty($TaskDescription) ? $TaskDescription : ""); ?></textarea>
                                    </div>
                                </div>
                                <!--<div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary">Cancel</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>-->

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        <!-- view form code close -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Task History<small>(<?php echo (!empty($FirstName) ? (!empty($LastName) ? $FirstName.' '.$LastName : $FirstName) : ""); ?>)</small></h2>
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
                                    <th>Task Date</th>
                                    <th>In Time</th>
                                    <th>Out Date</th>
                                    <th>Description</th>
                                    <th>View</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                if($_SESSION['MemberID'] == "1")
                                {
                                    if(isset($_GET['uid']) && !empty($_GET['uid']))
                                    {
                                        $mbrTaskArr = $memberTaskMgr->selectMemberTaskByUserId($_GET['uid']);
                                    }
                                }
                                else
                                {
                                    $mbrTaskArr = $memberTaskMgr->selectMemberTaskByUserId($_SESSION['UserID']);
                                }
                                if(!empty($mbrTaskArr))
                                {
                                    foreach ($mbrTaskArr as $key => $value) 
                                    {
                                        $TaskID = $value->getTaskID();
                                        $TaskDate = $value->getTaskDate();
                                        $Intime = $value->getIntime();
                                        $Outtime = $value->getOuttime();
                                        $TaskDescription = $value->getTaskDescription();
                                        ?>
                                        <tr>
                                            <td><?php echo $TaskDate; ?></td>
                                            <td><?php echo $Intime; ?></td>
                                            <td><?php echo $Outtime; ?></td>
                                            <td>
                                                <?php 
                                                    //echo $TaskDescription; 
                                                    echo strlen($TaskDescription) >= 100 ? substr($TaskDescription, 0, 100) : $TaskDescription;
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo (isset($_GET['uid']) ? (!empty($_GET['uid']) ? $con->getBaseUrl()."task_history.php?uid=".$_GET['uid']."&tid=".$TaskID : $con->getBaseUrl()."task_history.php?tid=".$TaskID) : $con->getBaseUrl()."task_history.php?tid=".$TaskID);?>"><img src="<?php echo $con->getBaseUrl() . "assets/images/view.png"; ?>" alt="view" title="view" style="width: 60px;height: 60px;" /></a>
                                                <!--<ul class="nav navbar-nav navbar-right" style="width:100%;">
                                                    <li role="presentation" class="dropdown">
                                                        <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa fa-vimeo-square"></i>
                                                            <span class="badge bg-green">6</span>
                                                        </a>
                                                    </li>
                                                </ul>-->
                                                <!--if(isset($_GET['uid']) && !empty($_GET['uid']))
                                                {
                                                    echo $con->getBaseUrl()."task_history.php?uid=".$_GET['uid']."&tid=".$TaskID; 
                                                }
                                                else
                                                {
                                                    echo $con->getBaseUrl()."task_history.php?tid=".$TaskID; 
                                                }-->
                                            </td>
                                        </tr>
                                        <?php
                                    }
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
