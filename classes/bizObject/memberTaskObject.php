<?php

class memberTaskObject 
{
    private $TaskID;
    private $UserID;
    private $TaskDate;
    private $Intime;
    private $Outtime;
    private $TaskDescription;
    private $IsActive;
    private $CreateDate;
    private $UpdateDate;
    
    function setTaskID($TaskID) {
        $this->TaskID = $TaskID;
    }

    function setUserID($UserID) {
        $this->UserID = $UserID;
    }

    function setTaskDate($TaskDate) {
        $this->TaskDate = $TaskDate;
    }

    function setIntime($Intime) {
        $this->Intime = $Intime;
    }

    function setOuttime($Outtime) {
        $this->Outtime = $Outtime;
    }

    function setTaskDescription($TaskDescription) {
        $this->TaskDescription = $TaskDescription;
    }

    function setIsActive($IsActive) {
        $this->IsActive = $IsActive;
    }

    function setCreateDate($CreateDate) {
        $this->CreateDate = $CreateDate;
    }

    function setUpdateDate($UpdateDate) {
        $this->UpdateDate = $UpdateDate;
    }

    function getTaskID() {
        return $this->TaskID;
    }

    function getUserID() {
        return $this->UserID;
    }

    function getTaskDate() {
        return $this->TaskDate;
    }

    function getIntime() {
        return $this->Intime;
    }

    function getOuttime() {
        return $this->Outtime;
    }

    function getTaskDescription() {
        return $this->TaskDescription;
    }

    function getIsActive() {
        return $this->IsActive;
    }

    function getCreateDate() {
        return $this->CreateDate;
    }

    function getUpdateDate() {
        return $this->UpdateDate;
    }


}
