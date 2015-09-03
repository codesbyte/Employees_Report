<?php
ob_start();
session_start();

require_once 'classes/DB.php';
require_once 'classes/config.php';
require_once 'mailer.php';

/******* Biz Object start *******/
require_once 'classes/bizObject/basicInformationObject.php';
require_once 'classes/bizObject/cityMasterObject.php';
require_once 'classes/bizObject/contactDetailsObject.php';
require_once 'classes/bizObject/countryMasterObject.php';
require_once 'classes/bizObject/loginInformationObject.php';
require_once 'classes/bizObject/memberMasterObject.php';
require_once 'classes/bizObject/memberTaskObject.php';
require_once 'classes/bizObject/memberTaskReplyObject.php';
require_once 'classes/bizObject/stateMasterObject.php';
/******* Biz Object close *******/

/******* Biz Manager start *******/
require_once 'classes/bizManager/basicInformationManager.php';
require_once 'classes/bizManager/cityMasterManager.php';
require_once 'classes/bizManager/contactDetailsManager.php';
require_once 'classes/bizManager/countryMasterManager.php';
require_once 'classes/bizManager/loginInformationManager.php';
require_once 'classes/bizManager/memberMasterManager.php';
require_once 'classes/bizManager/memberTaskManager.php';
require_once 'classes/bizManager/memberTaskReplyManager.php';
require_once 'classes/bizManager/stateMasterManager.php';
/******* Biz Manager close *******/

$con = new config();
?>