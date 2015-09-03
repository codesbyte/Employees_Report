<?php

class memberTaskManager 
{
    private $cont;
    private $obj;
    
    public function __construct() {
        $this->cont = new DB();
    }
    
    public function insertMemberTask($obj) 
    {
        try 
        {
            $UserID = $obj->getUserID();
            $TaskDate = $obj->getTaskDate();
            $Intime = $obj->getIntime();
            $Outtime = $obj->getOuttime();
            $TaskDescription = $obj->getTaskDescription();
            $IsActive = $obj->getIsActive();
            $CreateDate = $obj->getCreateDate();
            $UpdateDate = $obj->getUpdateDate();
            $sql = "insert into tblmembertask(UserID, TaskDate, Intime, Outtime, TaskDescription, IsActive, CreateDate, UpdateDate)values(:UserID, :TaskDate, :Intime, :Outtime, :TaskDescription, :IsActive, :CreateDate, :UpdateDate)";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array(":UserID"=>$UserID, ":TaskDate"=>$TaskDate, ":Intime"=>$Intime, ":Outtime"=>$Outtime, ":TaskDescription"=>$TaskDescription, ":IsActive"=>$IsActive, ":CreateDate"=>$CreateDate, ":UpdateDate"=>$UpdateDate));
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
    
    public function updateMemberTask($obj) 
    {
        try 
        {
            $TaskID = $obj->getTaskID();
            $UserID = $obj->getUserID();
            $TaskDate = $obj->getTaskDate();
            $Intime = $obj->getIntime();
            $Outtime = $obj->getOuttime();
            $TaskDescription = $obj->getTaskDescription();
            $IsActive = $obj->getIsActive();
            $UpdateDate = $obj->getUpdateDate();
            $sql = "update tblmembertask set UserID, TaskDate, Intime, Outtime, TaskDescription, IsActive, UpdateDate where TaskID=?";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array($UserID, $TaskDate, $Intime, $Outtime, $TaskDescription, $IsActive, $UpdateDate, $TaskID));
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
    
    public function selectMemberTaskByTaskID($TaskID) 
    {
        try 
        {
            $sql = "select * from tblmembertask where TaskID=?";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array($TaskID));
            $value = $query->fetch(PDO::FETCH_ASSOC);
            if(count($value)>0)
            {
                $memberTaskObj = new memberTaskObject();
                $memberTaskObj->setTaskID($value['TaskID']);
                $memberTaskObj->setUserID($value['UserID']);
                $memberTaskObj->setTaskDate($value['TaskDate']);
                $memberTaskObj->setIntime($value['Intime']);
                $memberTaskObj->setOuttime($value['Outtime']);
                $memberTaskObj->setTaskDescription($value['TaskDescription']);
                $memberTaskObj->setIsActive($value['IsActive']);
                $memberTaskObj->setCreateDate($value['CreateDate']);
                $memberTaskObj->setUpdateDate($value['UpdateDate']);
                return $memberTaskObj;
            }
            else
            {
                return NULL;
            }
        }
        catch (PDOException $e) 
        {
            throw new PDOException($e->getMessage());
        }
    }
    
    public function selectMemberTaskByUserId($UserId) 
    {
        try 
        {
            $sql = "select * from tblmembertask where UserID=? ORDER BY TaskID DESC";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array($UserId));
            $arr = new ArrayIterator();
            while ($value = $query->fetch(PDO::FETCH_ASSOC))
            {
                $memberTaskObj = new memberTaskObject();
                $memberTaskObj->setTaskID($value['TaskID']);
                $memberTaskObj->setUserID($value['UserID']);
                $memberTaskObj->setTaskDate($value['TaskDate']);
                $memberTaskObj->setIntime($value['Intime']);
                $memberTaskObj->setOuttime($value['Outtime']);
                $memberTaskObj->setTaskDescription($value['TaskDescription']);
                $memberTaskObj->setIsActive($value['IsActive']);
                $memberTaskObj->setCreateDate($value['CreateDate']);
                $memberTaskObj->setUpdateDate($value['UpdateDate']);
                $arr->append($memberTaskObj);
            }
            return $arr;
        }
        catch (PDOException $e) 
        {
            throw new PDOException($e->getMessage());
        }
    }
    
    public function selectTodayTask($Date) 
    {
        try 
        {
            //$sql = "select * from tblmembertask where TaskDate=? OR CreateDate=?";
            $sql = "SELECT * FROM tblmembertask WHERE CreateDate LIKE '$Date' OR TaskDate LIKE '$Date'";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute();
            $arr = new ArrayIterator();
            while ($value = $query->fetch(PDO::FETCH_ASSOC))
            {
                $memberTaskObj = new memberTaskObject();
                $memberTaskObj->setTaskID($value['TaskID']);
                $memberTaskObj->setUserID($value['UserID']);
                $memberTaskObj->setTaskDate($value['TaskDate']);
                $memberTaskObj->setIntime($value['Intime']);
                $memberTaskObj->setOuttime($value['Outtime']);
                $memberTaskObj->setTaskDescription($value['TaskDescription']);
                $memberTaskObj->setIsActive($value['IsActive']);
                $memberTaskObj->setCreateDate($value['CreateDate']);
                $memberTaskObj->setUpdateDate($value['UpdateDate']);
                $arr->append($memberTaskObj);
            }
            return $arr;
        }
        catch (PDOException $e) 
        {
            throw new PDOException($e->getMessage());
        }
    }
    
    public function selectPreviousTask($Date) 
    {
        try 
        {
            //$sql = "SELECT * FROM tblmembertask WHERE CreateDate NOT LIKE '$Date' OR TaskDate NOT LIKE '$Date'";
            $sql = "SELECT * FROM tblmembertask WHERE TaskDate NOT LIKE '$Date'";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute();
            $arr = new ArrayIterator();
            while ($value = $query->fetch(PDO::FETCH_ASSOC))
            {
                $memberTaskObj = new memberTaskObject();
                $memberTaskObj->setTaskID($value['TaskID']);
                $memberTaskObj->setUserID($value['UserID']);
                $memberTaskObj->setTaskDate($value['TaskDate']);
                $memberTaskObj->setIntime($value['Intime']);
                $memberTaskObj->setOuttime($value['Outtime']);
                $memberTaskObj->setTaskDescription($value['TaskDescription']);
                $memberTaskObj->setIsActive($value['IsActive']);
                $memberTaskObj->setCreateDate($value['CreateDate']);
                $memberTaskObj->setUpdateDate($value['UpdateDate']);
                $arr->append($memberTaskObj);
            }
            return $arr;
        }
        catch (PDOException $e) 
        {
            throw new PDOException($e->getMessage());
        }
    }
    
    public function DeleteMemberTask($TaskID) 
    {
        try 
        {
            $sql = "delete from tblmembertask where TaskID=?";
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
