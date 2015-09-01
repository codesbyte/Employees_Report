<?php

class memberTaskReplyObject 
{
    private $TaskReplyID;
    private $TaskID;
    private $MemberID;
    private $TaskReplyDescription;
    private $ReplyNo;
    private $CreateDate;
    
    function setTaskReplyID($TaskReplyID) {
        $this->TaskReplyID = $TaskReplyID;
    }

    function setTaskID($TaskID) {
        $this->TaskID = $TaskID;
    }

    function setMemberID($MemberID) {
        $this->MemberID = $MemberID;
    }

    function setTaskReplyDescription($TaskReplyDescription) {
        $this->TaskReplyDescription = $TaskReplyDescription;
    }

    function setReplyNo($ReplyNo) {
        $this->ReplyNo = $ReplyNo;
    }

    function setCreateDate($CreateDate) {
        $this->CreateDate = $CreateDate;
    }

    function getTaskReplyID() {
        return $this->TaskReplyID;
    }

    function getTaskID() {
        return $this->TaskID;
    }

    function getMemberID() {
        return $this->MemberID;
    }

    function getTaskReplyDescription() {
        return $this->TaskReplyDescription;
    }

    function getReplyNo() {
        return $this->ReplyNo;
    }

    function getCreateDate() {
        return $this->CreateDate;
    }


}
