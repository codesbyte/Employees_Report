<?php

class loginInformationObject
{
    private $UserID;
    private $Email;
    private $Password;
    private $MemberID;
    private $VrfCode;
    private $IsActive;
    private $CreateDate;
    private $UpdateDate;
    
    function setUserID($UserID) {
        $this->UserID = $UserID;
    }

    function setEmail($Email) {
        $this->Email = $Email;
    }

    function setPassword($Password) {
        $this->Password = $Password;
    }

    function setMemberID($MemberID) {
        $this->MemberID = $MemberID;
    }

    function setVrfCode($VrfCode) {
        $this->VrfCode = $VrfCode;
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

    function getUserID() {
        return $this->UserID;
    }

    function getEmail() {
        return $this->Email;
    }

    function getPassword() {
        return $this->Password;
    }

    function getMemberID() {
        return $this->MemberID;
    }

    function getVrfCode() {
        return $this->VrfCode;
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
