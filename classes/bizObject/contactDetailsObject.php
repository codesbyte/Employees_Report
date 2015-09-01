<?php

class contactDetailsObject 
{
    private $UserID;
    private $CountryID;
    private $StateID;
    private $CityID;
    private $PermanentAddress;
    private $temporaryAddress;
    private $ContactNo;
    private $CreateDate;
    private $UpdateDate;
    
    function setUserID($UserID) {
        $this->UserID = $UserID;
    }

    function setCountryID($CountryID) {
        $this->CountryID = $CountryID;
    }

    function setStateID($StateID) {
        $this->StateID = $StateID;
    }

    function setCityID($CityID) {
        $this->CityID = $CityID;
    }

    function setPermanentAddress($PermanentAddress) {
        $this->PermanentAddress = $PermanentAddress;
    }

    function setTemporaryAddress($temporaryAddress) {
        $this->temporaryAddress = $temporaryAddress;
    }

    function setContactNo($ContactNo) {
        $this->ContactNo = $ContactNo;
    }

    function setCreateDate($CreateDate) {
        $this->CreateDate = $CreateDate;
    }

    function setUpdateDate($UpdateDate) {
        $this->UpdateDate = $UpdateDate;
    }

    function getUserID() {
        return $this->UserID;
    }

    function getCountryID() {
        return $this->CountryID;
    }

    function getStateID() {
        return $this->StateID;
    }

    function getCityID() {
        return $this->CityID;
    }

    function getPermanentAddress() {
        return $this->PermanentAddress;
    }

    function getTemporaryAddress() {
        return $this->temporaryAddress;
    }

    function getContactNo() {
        return $this->ContactNo;
    }

    function getCreateDate() {
        return $this->CreateDate;
    }

    function getUpdateDate() {
        return $this->UpdateDate;
    }


}
