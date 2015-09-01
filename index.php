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
                        <form action="<?php echo $con->getBaseUrl()."userAction.php?a=login"; ?>" method="post">
                            <h1>Login Form</h1>
                            <div>
                                <input type="text" name="txtEmail" class="form-control" placeholder="Username" required="" />
                            </div>
                            <div>
                                <input type="password" name="txtPassword" class="form-control" placeholder="Password" required="" />
                            </div>
                            <div>
                                <!--<a class="btn btn-default submit" href="index.html">Log in</a>-->
                                <!--<input class="btn btn-default submit" type="btn" name="submit" value="Log in"> -->
                                <button class="btn btn-default submit">Log in</button>
                                <!--<a class="reset_pass" href="#">Lost your password?</a>-->
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
    </body>
</html>