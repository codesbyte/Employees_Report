<?php

class memberTaskReplyManager 
{
    private $cont;
    private $obj;
    
    public function __construct() {
        $this->cont = new DB();
    }
    
    public function insertmemberTaskReply($obj) 
    {
        try 
        {
            $TaskID = $obj->getTaskID();
            $MemberID = $obj->getMemberID();
            $TaskReplyDescription = $obj->getTaskReplyDescription();
            $ReplyNo = $obj->getReplyNo();
            $CreateDate = $obj->getCreateDate();
            $sql = "insert into tblmembertaskreply(TaskID, MemberID, TaskReplyDescription, ReplyNo, CreateDate)values(:TaskID, :MemberID, :TaskReplyDescription, :ReplyNo, :CreateDate)";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array(":TaskID"=>$TaskID, ":MemberID"=>$MemberID, ":TaskReplyDescription"=>$TaskReplyDescription, ":ReplyNo"=>$ReplyNo, ":CreateDate"=>$CreateDate));
            if(!is_null($query))
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }
        catch (PDOException $e) 
        {
            throw new PDOException($e->getMessage());
        }
    }
    
    public function selectmemberTaskReply($TaskID) 
    {
        try 
        {
            $sql = "select * from tblmembertaskreply where TaskID=?";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array($TaskID));
            $arr = new ArrayIterator();
            while ($value = $query->fetch(PDO::FETCH_ASSOC))
            {
                $memberTaskReplyObj = new memberTaskReplyObject();
                $memberTaskReplyObj->setTaskReplyID($value['TaskReplyID']);
                $memberTaskReplyObj->setTaskID($value['TaskID']);
                $memberTaskReplyObj->setMemberID($value['MemberID']);
                $memberTaskReplyObj->setTaskReplyDescription($value['TaskReplyDescription']);
                $memberTaskReplyObj->setReplyNo($value['ReplyNo']);
                $memberTaskReplyObj->setCreateDate($value['CreateDate']);
                $arr->append($memberTaskReplyObj);
            }
            return $arr;
        }
        catch (PDOException $e) 
        {
            throw new PDOException($e->getMessage());
        }
    }
    
    public function DeletememberTaskReply($TaskReplyID) 
    {
        try 
        {
            $sql = "delete from tblmembertaskreply where TaskReplyID=?";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array($TaskReplyID));
            if(!is_null($query))
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }
        catch (PDOException $e) 
        {
            throw new PDOException($e->getMessage());
        }
    }
    
    public function DeletememberTaskReplyByTaskID($TaskID) 
    {
        try 
        {
            $sql = "delete from tblmembertaskreply where TaskID=?";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array($TaskID));
            if(!is_null($query))
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }
        catch (PDOException $e) 
        {
            throw new PDOException($e->getMessage());
        }
    }
}
