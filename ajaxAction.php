<?php
include 'include/global.inc.php';
$stateMasterMgr = new stateMasterManager();
$cityMasterMgr = new cityMasterManager();
$a = $_GET['a'];
switch ($a) {
    case "state":
        $countryId = $_GET['q'];
        $stateArr = $stateMasterMgr->selectStateMaster($countryId);
        ?><option value="">Select State</option><?php
        foreach ($stateArr as $key => $value) 
        {
            ?><option value="<?php echo $value->getStateID(); ?>"><?php echo $value->getStateName(); ?></option><?php
        }
        break;
        
    case "city":
        $stateId = $_GET['q'];
        $cityArr = $cityMasterMgr->selectCityMaster($stateId);
        ?><option value="">Select City</option><?php
        foreach ($cityArr as $key => $value) 
        {
            ?><option value="<?php echo $value->getCityID(); ?>"><?php echo $value->getCityName(); ?></option><?php
        }
        break;    

    default:
        break;
}
?>