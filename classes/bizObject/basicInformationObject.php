<?php

class basicInformationObject 
{
    private $UserID;
    private $FirstName;
    private $LastName;
    private $FatherName;
    private $DOB;
    private $Education;
    private $Designation;
    private $CreateDate;
    private $UpdateDate;
    
    function setUserID($UserID) {
        $this->UserID = $UserID;
    }

    function setFirstName($FirstName) {
        $this->FirstName = $FirstName;
    }

    function setLastName($LastName) {
        $this->LastName = $LastName;
    }

    function setFatherName($FatherName) {
        $this->FatherName = $FatherName;
    }

    function setDOB($DOB) {
        $this->DOB = $DOB;
    }

    function setEducation($Education) {
        $this->Education = $Education;
    }

    function setDesignation($Designation) {
        $this->Designation = $Designation;
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

    function getFirstName() {
        return $this->FirstName;
    }

    function getLastName() {
        return $this->LastName;
    }

    function getFatherName() {
        return $this->FatherName;
    }

    function getDOB() {
        return $this->DOB;
    }

    function getEducation() {
        return $this->Education;
    }

    function getDesignation() {
        return $this->Designation;
    }

    function getCreateDate() {
        return $this->CreateDate;
    }

    function getUpdateDate() {
        return $this->UpdateDate;
    }


}

?>