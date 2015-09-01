<?php
define("ROOT", "/Employees_Report/");
class config 
{
    public function getBaseUrl() 
    {
        return "http://".$_SERVER['HTTP_HOST'].ROOT;
    }
}
