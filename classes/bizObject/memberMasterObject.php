<?php

class memberMasterObject 
{
    private $MemberID;
    private $MemberName;
    private $CreateDate;
    private $UpdateDate;
    
    function setMemberID($MemberID) {
        $this->MemberID = $MemberID;
    }

    function setMemberName($MemberName) {
        $this->MemberName = $MemberName;
    }

    function setCreateDate($CreateDate) {
        $this->CreateDate = $CreateDate;
    }

    function setUpdateDate($UpdateDate) {
        $this->UpdateDate = $UpdateDate;
    }

    function getMemberID() {
        return $this->MemberID;
    }

    function getMemberName() {
        return $this->MemberName;
    }

    function getCreateDate() {
        return $this->CreateDate;
    }

    function getUpdateDate() {
        return $this->UpdateDate;
    }


}
