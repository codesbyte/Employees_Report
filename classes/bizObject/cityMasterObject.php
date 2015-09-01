<?php

class cityMasterObject 
{
    private $CityID;
    private $CityName;
    private $StateID;
    private $CountryID;
    private $createdate;
    private $updatedate;
    
    function setCityID($CityID) {
        $this->CityID = $CityID;
    }

    function setCityName($CityName) {
        $this->CityName = $CityName;
    }

    function setStateID($StateID) {
        $this->StateID = $StateID;
    }

    function setCountryID($CountryID) {
        $this->CountryID = $CountryID;
    }

    function setCreatedate($createdate) {
        $this->createdate = $createdate;
    }

    function setUpdatedate($updatedate) {
        $this->updatedate = $updatedate;
    }

    function getCityID() {
        return $this->CityID;
    }

    function getCityName() {
        return $this->CityName;
    }

    function getStateID() {
        return $this->StateID;
    }

    function getCountryID() {
        return $this->CountryID;
    }

    function getCreatedate() {
        return $this->createdate;
    }

    function getUpdatedate() {
        return $this->updatedate;
    }


}
