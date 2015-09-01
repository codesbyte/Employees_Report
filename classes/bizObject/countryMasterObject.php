<?php

class countryMasterObject 
{
    private $CountryID;
    private $CountryName;
    private $CountryCode;
    private $createdate;
    private $updatedate;
    
    function setCountryID($CountryID) {
        $this->CountryID = $CountryID;
    }

    function setCountryName($CountryName) {
        $this->CountryName = $CountryName;
    }

    function setCountryCode($CountryCode) {
        $this->CountryCode = $CountryCode;
    }

    function setCreatedate($createdate) {
        $this->createdate = $createdate;
    }

    function setUpdatedate($updatedate) {
        $this->updatedate = $updatedate;
    }

    function getCountryID() {
        return $this->CountryID;
    }

    function getCountryName() {
        return $this->CountryName;
    }

    function getCountryCode() {
        return $this->CountryCode;
    }

    function getCreatedate() {
        return $this->createdate;
    }

    function getUpdatedate() {
        return $this->updatedate;
    }


}
