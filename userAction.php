<?php
include 'include/global.inc.php';

$a = $_GET['a'];
switch ($a) 
{
    case "login":
        $Email = $_POST['txtEmail'];
        $Password = $_POST['txtPassword'];
        //$loginInfoObj = new loginInformationObject();
        $loginInfoMgr = new loginInformationManager();
        
        $loginInfoObj = $loginInfoMgr->getPasswordByEmail($Email);
        if(!is_null($loginInfoObj->getPassword()))
        {
            if($loginInfoObj->getIsActive() == "1")
            {
                 if($loginInfoObj->getPassword() == $Password)
                {
                    $_SESSION['login'] = "true";
                    $_SESSION['UserID'] = $loginInfoObj->getUserID();
                    $_SESSION['Email'] = $loginInfoObj->getEmail();
                    $_SESSION['MemberID'] = $loginInfoObj->getMemberID();
                    $redir = "home.php";
                }
                else
                {
                    $_SESSION['Login_err'] = "Password not match.";
                    $redir = "index.php";
                }
            }
            else
            {
                $_SESSION['Login_err'] = "Inactive account.";
                $redir = "index.php";
            }
        }
        else
        {
            $_SESSION['Login_err'] = "Email not exist.";
            $redir = "index.php";
        }
        header("Location:".$redir);
        break;
    case "Logout":
        if(session_destroy())
        {
            $redir = "index.php";
            header("Location:".$redir);
        }
        break;

    default:
        break;
}
?>