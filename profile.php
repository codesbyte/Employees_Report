<?php
include 'include/global.inc.php';
if (empty($_SESSION['UserID'])) 
{
    header("Location:index.php");
}
$stateMasterMgr = new stateMasterManager();
$cityMasterMgr = new cityMasterManager();
$countryMasterMgr = new countryMasterManager();
$countryMasterObj = new countryMasterObject();
$loginInformationObj = new loginInformationObject();
$loginInformationMgr = new loginInformationManager();
$basicInformationObj = new basicInformationObject();
$basicInformationMgr = new basicInformationManager();
$contactDetailsObj = new contactDetailsObject();
$contactDetailsMgr = new contactDetailsManager();

$countryArr = $countryMasterMgr->selectCountryMaster();

$loginInforObj = $loginInformationMgr->selectLoginInformation($_SESSION['UserID']);
$Email = $loginInforObj->getEmail();

$basicInfoObj = $basicInformationMgr->selectBasicInformation($_SESSION['UserID']);
$FirstName = $basicInfoObj->getFirstName();
$LastName = $basicInfoObj->getLastName();
$FatherName = $basicInfoObj->getFatherName();
$DOB = $basicInfoObj->getDOB();
$Education = $basicInfoObj->getEducation();
$Designation = $basicInfoObj->getDesignation();

$contactObj = $contactDetailsMgr->selectContactDetails($_SESSION['UserID']);
$CountryID = $contactObj->getCountryID();
$StateID = $contactObj->getStateID();
$CityID = $contactObj->getCityID();
$PermanentAddress = $contactObj->getPermanentAddress();
$TemporaryAddress = $contactObj->getTemporaryAddress();
$ContactNo = $contactObj->getContactNo();
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
        <link href="<?php echo $con->getBaseUrl() . "assets/css/bootstrap.min.css" ?>" rel="stylesheet">
        <link href="<?php echo $con->getBaseUrl() . "assets/fonts/css/font-awesome.min.css" ?>" rel="stylesheet">
        <link href="<?php echo $con->getBaseUrl() . "assets/css/animate.min.css" ?>" rel="stylesheet">
        <!-- Custom styling plus plugins -->
        <link href="<?php echo $con->getBaseUrl() . "assets/css/custom.css" ?>" rel="stylesheet">
        <link href="<?php echo $con->getBaseUrl() . "assets/css/icheck/flat/green.css" ?>" rel="stylesheet">
        <!-- editor -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo $con->getBaseUrl() . "assets/css/editor/external/google-code-prettify/prettify.css"; ?>" rel="stylesheet">
        <link href="<?php echo $con->getBaseUrl() . "assets/css/editor/index.css"; ?>" rel="stylesheet">
        <!-- select2 -->
        <link href="<?php echo $con->getBaseUrl() . "assets/css/select/select2.min.css"; ?>" rel="stylesheet">
        <!-- switchery -->
        <link rel="stylesheet" href="<?php echo $con->getBaseUrl() . "assets/css/switchery/switchery.min.css"; ?>" />
        <script src="<?php echo $con->getBaseUrl() . "assets/js/jquery.min.js" ?>"></script>
        <script>
            function state(countryId)
            {
                if(countryId !== null)
                {
                    if(window.XMLHttpRequest)
                    {
                        var xmlhttp = new XMLHttpRequest();
                    }
                    else
                    {
                        var xmlhttp = new ActiveXObject(Microsoft.XMLHTTP);
                    }
                    xmlhttp.onreadystatechange = function() 
                     {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
                        {
                            document.getElementById("ddl_state").innerHTML = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET", "ajaxAction.php?a=state&q=" + countryId, true);
                    xmlhttp.send();
                }
            }
            function city(stateId)
            {
                if(stateId !== null)
                {
                    if(window.XMLHttpRequest)
                    {
                        var xmlhttp = new XMLHttpRequest();
                    }
                    else
                    {
                        var xmlhttp = new ActiveXObject(Microsoft.XMLHTTP);
                    }
                    xmlhttp.onreadystatechange = function() 
                     {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
                        {
                            document.getElementById("ddl_city").innerHTML = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET", "ajaxAction.php?a=city&q=" + stateId, true);
                    xmlhttp.send();
                }
            }
        </script>
    </head>
    <?php include 'include/header.php'; ?>
    <?php include 'include/side_bar.php'; ?>
    <?php include 'include/top_navigation.php'; ?>
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Profile</h2>
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
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Update Profile</a>
                                        </li>
                                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Change Password</a>
                                        </li>
                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                            <!-- profile form start -->
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="x_panel">
                                                    <div class="x_content">
                                                        <br /><!-- default form id="demo-form2" -->
                                                        <form id="profile" method="post" action="<?php echo $con->getBaseUrl()."userAction.php?a=updateProfile"; ?>" data-parsley-validate class="form-horizontal form-label-left">

                                                            <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <input class="date-picker form-control col-md-7 col-xs-12" value="<?php echo (!empty($Email) ? $Email : ""); ?>" name="txtEmail" required="required" type="text">
                                                                    <label class="error" for="txtEmail" generated="true" style="color: Red;  font-weight: normal;text-align: left;width: 100%;"></label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <input type="text" required="required" name="txtFirstName" value="<?php echo (!empty($FirstName) ? $FirstName : ""); ?>" class="form-control col-md-7 col-xs-12">
                                                                    <label class="error" for="txtFirstName" generated="true" style="color: Red;  font-weight: normal;text-align: left;width: 100%;"></label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <input type="text" name="txtLastName" value="<?php echo (!empty($LastName) ? $LastName : ""); ?>" required="required" class="form-control col-md-7 col-xs-12">
                                                                    <label class="error" for="txtLastName" generated="true" style="color: Red;  font-weight: normal;text-align: left;width: 100%;"></label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="father-name">Father's Name 
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <input class="date-picker form-control col-md-7 col-xs-12" value="<?php echo (!empty($FatherName) ? $FatherName : ""); ?>" name="txtFatherName" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dob">DOB 
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" value="<?php echo (!empty($DOB) ? $DOB : ""); ?>" name="txtDob" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="education">Education 
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <textarea class="form-control" name="txtEducation" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"><?php echo (!empty($Education) ? $Education : ""); ?></textarea>
                                                                    <label class="error" for="txtEducation" generated="true" style="color: Red;  font-weight: normal;text-align: left;width: 100%;"></label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="designation">Designation <span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <input class="date-picker form-control col-md-7 col-xs-12" name="txtDesignation" value="<?php echo (!empty($Designation) ? $Designation : ""); ?>" type="text">
                                                                    <label class="error" for="txtDesignation" generated="true" style="color: Red;  font-weight: normal;text-align: left;width: 100%;"></label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="country">Country 
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <select class="form-control" onchange="state(this.value)" name="ddlCountry">
                                                                        <option value="">Select Country</option>
                                                                        <?php
                                                                            foreach ($countryArr as $key => $value) 
                                                                            {
                                                                                ?><option value="<?php echo $value->getCountryID(); ?>" <?php echo ($CountryID == $value->getCountryID() ? "selected" : "") ?> ><?php echo $value->getCountryName(); ?></option><?php
                                                                            }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="state">State 
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <select class="form-control" onchange="city(this.value)" id="ddl_state" name="ddlState">
                                                                        <option value="">Select State</option>
                                                                        <?php
                                                                        $stateArr = $stateMasterMgr->selectStateMaster($CountryID);
                                                                        foreach ($stateArr as $key => $value) 
                                                                        {
                                                                            ?><option value="<?php echo $value->getStateID(); ?>" <?php echo ($StateID == $value->getStateID() ? "selected" : "") ?> ><?php echo $value->getStateName(); ?></option><?php
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City 
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <select class="form-control" id="ddl_city" name="ddlCity">
                                                                        <option value="">Select City</option>
                                                                        <?php
                                                                        $cityArr = $cityMasterMgr->selectCityMaster($StateID);
                                                                        foreach ($cityArr as $key => $value) 
                                                                        {
                                                                            ?><option value="<?php echo $value->getCityID(); ?>" <?php echo ($CityID == $value->getCityID() ? "selected" : "") ?> ><?php echo $value->getCityName(); ?></option><?php
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="permanent-address">Permanent Address 
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <textarea class="form-control" name="txtPermanentAddress" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"><?php echo (!empty($PermanentAddress) ? $PermanentAddress : ""); ?></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="temporary-address">Temporary Address 
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <textarea class="form-control" name="txtTemporaryAddress" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"><?php echo (!empty($TemporaryAddress) ? $TemporaryAddress : ""); ?></textarea>
                                                                    <label class="error" for="txtTemporaryAddress" generated="true" style="color: Red;  font-weight: normal;text-align: left;width: 100%;"></label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contact-no">ContactNo <span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <input class="date-picker form-control col-md-7 col-xs-12" required="required" name="txtContactNo" value="<?php echo (!empty($ContactNo ) ? $ContactNo : ""); ?>" type="text">
                                                                    <label class="error" for="txtContactNo" generated="true" style="color: Red;  font-weight: normal;text-align: left;width: 100%;"></label>
                                                                </div>
                                                            </div>
                                                            <div class="ln_solid"></div>
                                                            <div class="form-group">
                                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                                    <button type="submit" class="btn btn-success">Update</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <script type="text/javascript">
                                                $(document).ready(function () {
                                                    $('#birthday').daterangepicker({
                                                        singleDatePicker: true,
                                                        calender_style: "picker_4"
                                                    }, function (start, end, label) {
                                                        console.log(start.toISOString(), end.toISOString(), label);
                                                    });
                                                });
                                            </script>
                                            <!-- profile form close -->
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                            <!-- change password form start -->
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="x_panel">
                                                    <div class="x_content">
                                                        <br /><!-- form default id="demo-form2" -->
                                                        <form id="ChangePassword" method="post" action="<?php echo $con->getBaseUrl()."userAction.php?a=changePassword"; ?>" data-parsley-validate class="form-horizontal form-label-left">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Current Password <span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <input class="form-control col-md-7 col-xs-12" name="txtCurrentPassword" required="required" type="password">
                                                                    <label class="error" for="txtCurrentPassword" generated="true" style="color: Red;  font-weight: normal;text-align: left;width: 100%;"></label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">New Password <span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <input type="password" id="single-input_1" required="required" name="txtNewPassword" class="form-control col-md-7 col-xs-12">
                                                                    <label class="error" for="single-input_1" generated="true" style="color: Red;  font-weight: normal;text-align: left;width: 100%;"></label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Confirm New Password <span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <input type="password" id="single-input_2" name="txtConfirmPassword" required="required" class="form-control col-md-7 col-xs-12">
                                                                    <label class="error" for="single-input_2" generated="true" style="color: Red;  font-weight: normal;text-align: left;width: 100%;"></label>
                                                                </div>
                                                            </div>
                                                            <div class="ln_solid"></div>
                                                            <div class="form-group">
                                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                                    <button type="submit" class="btn btn-success">Change</button>
                                                                    <button type="reset" class="btn btn-primary">Reset</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- change password form close -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

<script src="<?php echo $con->getBaseUrl() . "assets/js/jquery.validate.min.js"; ?>"></script>
<script src="<?php echo $con->getBaseUrl() . "assets/js/jQueryValidation.js"; ?>"></script>

<script src="<?php echo $con->getBaseUrl() . "assets/js/bootstrap.min.js" ?>"></script>
<!-- chart js -->
<script src="<?php echo $con->getBaseUrl() . "assets/js/chartjs/chart.min.js" ?>"></script>
<!-- bootstrap progress js -->
<script src="<?php echo $con->getBaseUrl() . "assets/js/progressbar/bootstrap-progressbar.min.js" ?>"></script>
<script src="<?php echo $con->getBaseUrl() . "assets/js/nicescroll/jquery.nicescroll.min.js" ?>"></script>
<!-- icheck -->
<script src="<?php echo $con->getBaseUrl() . "assets/js/icheck/icheck.min.js" ?>"></script>
<script src="<?php echo $con->getBaseUrl() . "assets/js/custom.js" ?>"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="<?php echo $con->getBaseUrl() . "assets/js/moment.min2.js"; ?>"></script>
<script type="text/javascript" src="<?php echo $con->getBaseUrl() . "assets/js/datepicker/daterangepicker.js"; ?>"></script>
<!-- image cropping -->
<script src="<?php echo $con->getBaseUrl() . "assets/js/cropping/cropper.min.js" ?>"></script>
<script src="<?php echo $con->getBaseUrl() . "assets/js/cropping/main.js" ?>"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="<?php echo $con->getBaseUrl() . "assets/js/moment.min.js" ?>"></script>
<script type="text/javascript" src="<?php echo $con->getBaseUrl() . "assets/js/datepicker/daterangepicker.js" ?>"></script>
<!-- moris js -->
<script src="<?php echo $con->getBaseUrl() . "assets/js/moris/raphael-min.js" ?>"></script>
<script src="<?php echo $con->getBaseUrl() . "assets/js/moris/morris.js" ?>"></script>
<script>
                                                $(function () {
                                                    var day_data = [
                                                        {
                                                            "period": "Jan",
                                                            "Hours worked": 80
                                                        },
                                                        {
                                                            "period": "Feb",
                                                            "Hours worked": 125
                                                        },
                                                        {
                                                            "period": "Mar",
                                                            "Hours worked": 176
                                                        },
                                                        {
                                                            "period": "Apr",
                                                            "Hours worked": 224
                                                        },
                                                        {
                                                            "period": "May",
                                                            "Hours worked": 265
                                                        },
                                                        {
                                                            "period": "Jun",
                                                            "Hours worked": 314
                                                        },
                                                        {
                                                            "period": "Jul",
                                                            "Hours worked": 347
                                                        },
                                                        {
                                                            "period": "Aug",
                                                            "Hours worked": 287
                                                        },
                                                        {
                                                            "period": "Sep",
                                                            "Hours worked": 240
                                                        },
                                                        {
                                                            "period": "Oct",
                                                            "Hours worked": 211
                                                        }
                                                    ];
                                                    Morris.Bar({
                                                        element: 'graph_bar',
                                                        data: day_data,
                                                        xkey: 'period',
                                                        hideHover: 'auto',
                                                        barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
                                                        ykeys: ['Hours worked', 'sorned'],
                                                        labels: ['Hours worked', 'SORN'],
                                                        xLabelAngle: 60
                                                    });
                                                });
</script>
<!-- datepicker -->
<script type="text/javascript">
    $(document).ready(function () {

        var cb = function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
        }

        var optionSet1 = {
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            minDate: '01/01/2012',
            maxDate: '12/31/2015',
            dateLimit: {
                days: 60
            },
            showDropdowns: true,
            showWeekNumbers: true,
            timePicker: false,
            timePickerIncrement: 1,
            timePicker12Hour: true,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            opens: 'left',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-small btn-primary',
            cancelClass: 'btn-small',
            format: 'MM/DD/YYYY',
            separator: ' to ',
            locale: {
                applyLabel: 'Submit',
                cancelLabel: 'Clear',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                firstDay: 1
            }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function () {
            console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function () {
            console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
            console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
            console.log("cancel event fired");
        });
        $('#options1').click(function () {
            $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function () {
            $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function () {
            $('#reportrange').data('daterangepicker').remove();
        });
    });
</script>
<!-- /datepicker -->
<?php
    if(!empty($_SESSION['Profile_udt_succ']))
    {
        ?>
            <script>
                alert("<?php echo $_SESSION['Profile_udt_succ']; ?>");
            </script>
        <?php
            unset($_SESSION['Profile_udt_succ']);
    }
    if(!empty($_SESSION['Profile_udt_err']))
    {
        ?><script>alert("<?php echo $_SESSION['Profile_udt_err']; ?>")</script><?php
            unset($_SESSION['Profile_udt_err']);
    }
    if(!empty($_SESSION['change_password_succ']))
    {
        ?><script>alert("<?php echo $_SESSION['change_password_succ']; ?>")</script><?php
            unset($_SESSION['change_password_succ']);
    }
    if(!empty($_SESSION['change_password_err']))
    {
        ?><script>alert("<?php echo $_SESSION['change_password_err']; ?>")</script><?php
            unset($_SESSION['change_password_err']);
    }
?>

</body>
</html>
