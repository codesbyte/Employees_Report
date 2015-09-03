<?php
include 'include/global.inc.php';
$loginInformationObj = new loginInformationObject();
$loginInformationMgr = new loginInformationManager();
$basicInformationObj = new basicInformationObject();
$basicInformationMgr = new basicInformationManager();
$contactDetailsObj = new contactDetailsObject();
$contactDetailsMgr = new contactDetailsManager();
$memberTaskObj = new memberTaskObject();
$memberTaskMgr = new memberTaskManager();
        
$a = $_GET['a'];
switch ($a) 
{
    case "login":
        $Email = $_POST['txtEmail'];
        $Password = $_POST['txtPassword'];
        
        $loginInfoObj = $loginInformationMgr->getPasswordByEmail($Email);
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
                    $rdr = "home.php";
                }
                else
                {
                    $_SESSION['Login_err'] = "Password not match.";
                    $rdr = "index.php";
                }
            }
            else
            {
                $_SESSION['Login_err'] = "Inactive account.";
                $rdr = "index.php";
            }
        }
        else
        {
            $_SESSION['Login_err'] = "Email not exist.";
            $rdr = "index.php";
        }
        header("Location:".$rdr);
        break;
        
    case "updateProfile":
        $UserID = $_SESSION['UserID'];
        $Email = $_POST['txtEmail'];
        $FirstName = $_POST['txtFirstName'];
        $LastName = (isset($_POST['txtLastName']) ? (!empty($_POST['txtLastName']) ? $_POST['txtLastName'] : NULL) : NULL);
        $FatherName = $_POST['txtFatherName'];
        $dob = $_POST['txtDob'];
        $Education = $_POST['txtEducation'];
        $Designation = $_POST['txtDesignation'];
        $Country = $_POST['ddlCountry'];
        $State = $_POST['ddlState'];
        $City = $_POST['ddlCity'];
        $PermanentAddress = $_POST['txtPermanentAddress'];
        $TemporaryAddress = $_POST['txtTemporaryAddress'];
        $ContactNo = $_POST['txtContactNo'];
        $UpdateDate = Date('Y-m-d H:i:s');
        $Dob = date("Y-m-d", strtotime($dob));
        
        
        $loginInformationObj->setUserID($UserID);
        $loginInformationObj->setEmail($Email);
        $loginInformationObj->setUpdateDate($UpdateDate);
        
        $basicInformationObj->setUserID($UserID);
        $basicInformationObj->setFirstName($FirstName);
        $basicInformationObj->setLastName($LastName);
        $basicInformationObj->setFatherName($FatherName);
        $basicInformationObj->setDOB($Dob);
        $basicInformationObj->setEducation($Education);
        $basicInformationObj->setDesignation($Designation);
        $basicInformationObj->setUpdateDate($UpdateDate);
            
        $contactDetailsObj->setUserID($UserID);
        $contactDetailsObj->setCountryID($Country);
        $contactDetailsObj->setStateID($State);
        $contactDetailsObj->setCityID($City);
        $contactDetailsObj->setPermanentAddress($PermanentAddress);
        $contactDetailsObj->setTemporaryAddress($TemporaryAddress);
        $contactDetailsObj->setContactNo($ContactNo);
        $contactDetailsObj->setUpdateDate($UpdateDate);
                
        if($loginInformationMgr->updateEmail($loginInformationObj))
        {
            if($basicInformationMgr->updateBasicInformation($basicInformationObj))
            {
                if($contactDetailsMgr->updateContactDetails($contactDetailsObj))
                {
                    $_SESSION['Profile_udt_succ'] = "Profile updated successfully";
                    $rdr = "profile.php";
                }
                else
                {
                    $_SESSION['Profile_udt_err'] = "Profile not update.Please try again.";
                    $rdr = "profile.php";
                }
            }
            else
            {
                $_SESSION['Profile_udt_err'] = "Profile not update.Please try again.";
                $rdr = "profile.php";
            }
        }
        else
        {
            $_SESSION['Profile_udt_err'] = "Profile not update.Please try again.";
            $rdr = "profile.php";
        }
        header("Location:".$rdr);
        break;
    
    case "changePassword":
        $UserID = $_SESSION['UserID'];
        $CurrentPassword = $_POST['txtCurrentPassword'];
        $NewPassword = $_POST['txtNewPassword'];
        $UpdateDate = Date('Y-m-d H:i:s');
        
        $loginInfoObj = $loginInformationMgr->selectLoginInformation($UserID);
        if($loginInfoObj->getPassword() == $CurrentPassword)
        {
            $loginInformationObj->setUserID($UserID);
            $loginInformationObj->setPassword($NewPassword);
            $loginInformationObj->setUpdateDate($UpdateDate);
            if($loginInformationMgr->updatePassword($loginInformationObj))
            {
                $basicInfoObj = $basicInformationMgr->selectBasicInformation($UserID);
                $FirstName = $basicInfoObj->getFirstName();
                $LastName = $basicInfoObj->getLastName();

                $loginInforObj = $loginInformationMgr->selectLoginInformation($UserID);
                $Email = $loginInforObj->getEmail();

                $name = $FirstName." ".$LastName;
                $to = $Email;
                $subject = "Change Password";
                $mailerObj = new mailer();
                $message_changePassword = $mailerObj->changePassword($Email, $NewPassword, $name);
                $headers = "Content-type: text/html; charset=iso-8859-1\r\n"."From: info@codesbyte.com" . "\r\n" . "CC: $Email";
                mail($to,$subject,$message_changePassword,$headers);
                
                $_SESSION['change_password_succ'] = "Password changed successfully.";
                $rdr = "profile.php";
            }
            else
            {
                $_SESSION['change_password_err'] = "Password not changed.Please try again.";
                $rdr = "profile.php";
            }
        }
        else
        {
            $_SESSION['Profile_udt_err'] = "Current password is invalid";
            $rdr = "profile.php";
        }
        header("Location:".$rdr);
        break;    
    
    case "sendTask":
        $UserID = $_SESSION['UserID'];
        $taskDate = $_POST['txtTaskDate'];
        $InTime = $_POST['txtInTime'];
        $OutTime = $_POST['txtOutTime'];
        $TaskDescription = $_POST['txtTaskDescription'];
        $Date = Date('Y-m-d H:i:s');
        $TaskDate = date("Y-m-d", strtotime($taskDate));
        
        $memberTaskObj->setUserID($UserID);
        $memberTaskObj->setTaskDate($TaskDate);
        $memberTaskObj->setIntime($InTime);
        $memberTaskObj->setOuttime($OutTime);
        $memberTaskObj->setTaskDescription($TaskDescription);
        $memberTaskObj->setIsActive(1);
        $memberTaskObj->setCreateDate($Date);
        $memberTaskObj->setUpdateDate($Date);
        if($memberTaskMgr->insertMemberTask($memberTaskObj))
        {
            $fromEmail = $_SESSION['Email'];
            $mailerObj = new mailer();
            $message_sendTask = $mailerObj->sendTask($Date, $TaskDescription, "info@codesbyte.com", $fromEmail);
            $subject = "Task";
            $message = $message_sendTask;
            $headers = "Content-type: text/html; charset=iso-8859-1\r\n"."From: $fromEmail" . "\r\n" . "CC: $fromEmail";
            mail("info@codesbyte.com",$subject,$message,$headers);
            
            $_SESSION['task_send_succ'] = "Task Sended Successfully.";
            $rdr = "send_task.php";
        }
        else
        {
            $_SESSION['task_send_err'] = "Task not Send.Please try again.";
            $rdr = "send_task.php";
        }
        header("Location:".$rdr);
        break;    
    
    case "forgotPassword":
        $Email = $_POST['txtEmail'];
        $loginInfoObj = $loginInformationMgr->getPasswordByEmail($Email);
        $UserID = $loginInfoObj->getUserID();
        $UpdateDate = Date('Y-m-d H:i:s');
        if(!empty($UserID))
        {
            $randomString = $con->randomString();
            $loginInformationObj->setUserID($UserID);
            $loginInformationObj->setVrfCode($randomString);
            $loginInformationObj->setUpdateDate($UpdateDate);
            if($loginInformationMgr->updateVrfCodeByUserId($loginInformationObj))
            {
                $to = "info@codesbyte.com";
                $subject = "Forgot Password";
                $message = "<a href='http://codesbyte/Employees_Report/userAction.php?a=forgotPassword_link&sessionId=$UserID&vrfCode=$randomString'>Click here for change password</a>";
                $mailerObj = new mailer();
                $message_activeLink = $mailerObj->activeLink($message);
                $headers = "Content-type: text/html; charset=iso-8859-1\r\n"."From: $Email" . "\r\n" . "CC: $Email";
                
                mail($to,$subject,$message_activeLink,$headers);
                
                $_SESSION['forgot_password_succ'] = "Check your mail for change password.";
                $rdr = "index.php";
            }
            else
            {
                $_SESSION['forgot_password_err'] = "Internal error.Please try again.";
                $rdr = "index.php";
            }
        }
        else
        {
            $_SESSION['forgot_password_err'] = "Email not exist.";
            $rdr = "index.php";
        }
        header("Location:".$rdr);
        break;    
    
    case "forgotPassword_link":
        $sessionId = $_GET['sessionId'];
        $vrfCode = $_GET['vrfCode'];
        $Date = Date('Y-m-d H:i:s');
        $randomString = $con->randomString();
        $loginInfoObj = $loginInformationMgr->selectLoginInformation($sessionId);
        $SdbVrfCode = $loginInfoObj->getVrfCode();
        if(!empty($SdbVrfCode))
        {
            if($SdbVrfCode == $vrfCode)
            {
                $loginInformationObj->setUserID($sessionId);
                $loginInformationObj->setVrfCode($randomString);
                $loginInformationObj->setUpdateDate($Date);
                if($loginInformationMgr->updateVrfCodeByUserId($loginInformationObj))
                {
                    $rdr = "change_password.php?sessionId=".$sessionId."&vrfCode=".$randomString;
                }
                else
                {
                    $_SESSION['forgot_password_err'] = "Password not change.Please try again.";
                    $rdr = "index.php";
                }
            }
            else
            {
                $_SESSION['forgot_password_err'] = "Link Expire.";
                $rdr = "index.php";
            }
        }
        else
        {
            $_SESSION['forgot_password_err'] = "Link Expire.";
            $rdr = "index.php";
        }
        header("Location:".$rdr);
        break;    
        
    case "change_password":
        $UserID = $_POST['txtUserId'];
        $VrfCode = $_POST['txtVrfCode'];
        $NewPassword = $_POST['txtNewPassword'];
        $UpdateDate = Date('Y-m-d H:i:s');
        
        $loginInfoObj = $loginInformationMgr->selectLoginInformation($UserID);
        if($loginInfoObj->getVrfCode() == $VrfCode)
        {
            $loginInformationObj->setUserID($UserID);
            $loginInformationObj->setPassword($NewPassword);
            $loginInformationObj->setUpdateDate($UpdateDate);
            if($loginInformationMgr->updatePassword($loginInformationObj))
            {
                $loginInformationObj->setUserID($UserID);
                $loginInformationObj->setVrfCode(NULL);
                $loginInformationObj->setUpdateDate($UpdateDate);
                if($loginInformationMgr->updateVrfCodeByUserId($loginInformationObj))
                {
                    $basicInfoObj = $basicInformationMgr->selectBasicInformation($UserID);
                    $FirstName = $basicInfoObj->getFirstName();
                    $LastName = $basicInfoObj->getLastName();
                    
                    $loginInforObj = $loginInformationMgr->selectLoginInformation($UserID);
                    $Email = $loginInforObj->getEmail();
                    
                    $name = $FirstName." ".$LastName;
                    $to = $Email;
                    $subject = "Change Password";
                    $mailerObj = new mailer();
                    $message_changePassword = $mailerObj->changePassword($Email, $NewPassword, $name);
                    $headers = "Content-type: text/html; charset=iso-8859-1\r\n"."From: info@codesbyte.com" . "\r\n" . "CC: $Email";
                    mail($to,$subject,$message_changePassword,$headers);
                    $_SESSION['change_password_succ'] = "Password changed successfully.";
                    $rdr = "index.php";
                }
            }
            else
            {
                $_SESSION['change_password_err'] = "Password not changed.Please try again.";
                $rdr = "index.php";
            }
        }
        else
        {
            $_SESSION['Profile_udt_err'] = "Current password is invalid";
            $rdr = "index.php";
        }
        header("Location:".$rdr);
        break;
        
    case "Logout":
        if(session_destroy())
        {
            $rdr = "index.php";
            header("Location:".$rdr);
        }
        break;

    default:
        break;
}
?>