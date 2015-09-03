<?php 
    include 'include/global.inc.php'; 
    if(!empty($_SESSION['UserID']))
    {
        //header("Location:home.php");
    }
    if(!isset($_GET['sessionId']) && !isset($_GET['vrfCode']))
    {
        //header("Location:index.php");
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
        <link rel="icon" href="<?php echo $con->getBaseUrl() . "assets/images/16x16.png"; ?>" type="image/gif" sizes="16x16">
        <!-- Bootstrap core CSS -->
        <link href="<?php echo $con->getBaseUrl() . "assets/css/bootstrap.min.css"; ?>" rel="stylesheet">
        <link href="<?php echo $con->getBaseUrl() . "assets/fonts/css/font-awesome.min.css"; ?>" rel="stylesheet">
        <link href="<?php echo $con->getBaseUrl() . "assets/css/animate.min.css"; ?>" rel="stylesheet">
        <!-- Custom styling plus plugins -->
        <link href="<?php echo $con->getBaseUrl() . "assets/css/custom.css"; ?>" rel="stylesheet">
        <link href="<?php echo $con->getBaseUrl() . "assets/css/icheck/flat/green.css"; ?>" rel="stylesheet">
        <script src="<?php echo $con->getBaseUrl() . "assets/js/jquery.min.js"; ?>"></script>
    </head>
    <body style="background:#F7F7F7;">
        <div class="">
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <div id="login" class="animate form">
                    <section class="login_content">
                        <form action="<?php echo $con->getBaseUrl()."userAction.php?a=change_password"; ?>" method="post" id="ResetPasswordForm">
                            <h1>Change Password</h1>
                            <div>
                                <input type="hidden" name="txtUserId" value="<?php echo (isset($_GET['sessionId']) ? (!empty($_GET['sessionId']) ? $_GET['sessionId'] : "") : ""); ?>" class="form-control" required="" />
                                <input type="hidden" name="txtVrfCode" value="<?php echo (isset($_GET['vrfCode']) ? (!empty($_GET['vrfCode']) ? $_GET['vrfCode'] : "") : ""); ?>" class="form-control" required="" />
                                <input type="password" id="txtNewPassword" name="txtNewPassword" class="form-control" placeholder="New password" style="margin-bottom: 0px;" required="" />
                                <label class="error" for="txtNewPassword" generated="true" style="color: Red;  font-weight: normal;text-align: left;width: 100%;"></label>
                            </div>
                            <div>
                                <input type="password" name="txtConfirmNewPassword" class="form-control" placeholder="Confirm new password" style="margin-bottom: 0px;" required="" />
                                <label class="error" for="txtConfirmNewPassword" generated="true" style="color: Red;  font-weight: normal;text-align: left;width: 100%;"></label>
                            </div>
                            <div style="margin-top: 10px;">
                                <!--<a class="btn btn-default submit" href="index.html">Log in</a>-->
                                <!--<input class="btn btn-default submit" type="btn" name="submit" value="Log in"> -->
                                <button class="btn btn-default submit">Change</button>
                            </div>
                            <div class="clearfix"></div>
                            <div class="separator"></div>
                        </form>
                        <!-- form -->
                    </section>
                    <!-- content -->
                </div>
            </div>
        </div>
        <script src="<?php echo $con->getBaseUrl() . "assets/js/jquery.validate.min.js"; ?>"></script>
        <script src="<?php echo $con->getBaseUrl() . "assets/js/jQueryValidation.js"; ?>"></script>
    </body>
</html>