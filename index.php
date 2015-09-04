<?php 
    include 'include/global.inc.php'; 
    if(!empty($_SESSION['UserID']))
    {
        header("Location:home.php");
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
                        <form action="<?php echo $con->getBaseUrl()."userAction.php?a=login"; ?>" method="post" id="loginForm">
                            <h1>Login Form</h1>
                            <div>
                                <input type="text" name="txtEmail" class="form-control" placeholder="Username" style="margin-bottom: 10px;" />
                                <label class="error" for="txtEmail" generated="true" style="color: Red;  font-weight: normal;text-align: left;width: 100%;"></label>
                            </div>
                            <div>
                                <input type="password" name="txtPassword" class="form-control" placeholder="Password" style="margin-bottom: 0px;" />
                                <label class="error" for="txtPassword" generated="true" style="color: Red; font-weight: normal;text-align: left;width: 100%;"></label>
                            </div>
                            <div style="margin-top: 10px;">
                                <!--<a class="btn btn-default submit" href="index.html">Log in</a>-->
                                <!--<input class="btn btn-default submit" type="btn" name="submit" value="Log in"> -->
                                <button class="btn btn-default submit">Log in</button>
                                <a class="reset_pass" href="<?php echo $con->getBaseUrl()."forgot_password.php"; ?>">Lost your password?</a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="separator"></div>
                            <h1>Codesbyte Lab</h1>
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
        <?php 
        if(!empty($_SESSION['Login_err']))
        {
            ?><script>alert("<?php echo $_SESSION['Login_err']; ?>")</script><?php
                unset($_SESSION['Login_err']);
        }
        if(!empty($_SESSION['forgot_password_err']))
        {
            ?><script>alert("<?php echo $_SESSION['forgot_password_err']; ?>")</script><?php
                unset($_SESSION['forgot_password_err']);
        }
        if(!empty($_SESSION['forgot_password_succ']))
        {
            ?><script>alert("<?php echo $_SESSION['forgot_password_succ']; ?>")</script><?php
                unset($_SESSION['forgot_password_succ']);
        }
        if(!empty($_SESSION['forgot_password_err']))
        {
            ?><script>alert("<?php echo $_SESSION['forgot_password_err']; ?>")</script><?php
                unset($_SESSION['forgot_password_err']);
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