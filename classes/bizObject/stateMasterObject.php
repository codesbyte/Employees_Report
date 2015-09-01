<?php

class stateMasterObject 
{
    private $StateID;
    private $StateName;
    private $CountryID;
    private $createdate;
    private $updatedate;
    
    function setStateID($StateID) {
        $this->StateID = $StateID;
    }

    function setStateName($StateName) {
        $this->StateName = $StateName;
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

    function getStateID() {
        return $this->StateID;
    }

    function getStateName() {
        return $this->StateName;
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
