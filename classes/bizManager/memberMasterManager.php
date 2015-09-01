<?php

class memberMasterManager 
{
    private $cont;
    private $obj;
    
    public function __construct() {
        $this->cont = new DB();
    }
    
    public function selectMemberMaster() 
    {
        try 
        {
            $sql = "select * from tblmembermaster";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute();
            $arr = new ArrayIterator();
            while ($value = $query->fetch(PDO::FETCH_ASSOC))
            {
                $memberMasterObj = new memberMasterObject();
                $memberMasterObj->setMemberID($value['MemberID']);
                $memberMasterObj->setMemberName($value['MemberName']);
                $memberMasterObj->setCreateDate($value['CreateDate']);
                $memberMasterObj->setUpdateDate($value['UpdateDate']);
                $arr->append($memberMasterObj);
            }
            return $arr;
        }
        catch (PDOException $e) 
        {
            throw new PDOException($e->getMessage());
        }
    }
    
    public function selectMemberMasterByMemberID($MemberID) 
    {
        try 
        {
            $sql = "select * from tblmembermaster where MemberID=?";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array($MemberID));
            $value = $query->fetch(PDO::FETCH_ASSOC);
            $memberMasterObj = new memberMasterObject();
            $memberMasterObj->setMemberID($value['MemberID']);
            $memberMasterObj->setMemberName($value['MemberName']);
            $memberMasterObj->setCreateDate($value['CreateDate']);
            $memberMasterObj->setUpdateDate($value['UpdateDate']);
            return $memberMasterObj;
        }
        catch (PDOException $e) 
        {
            throw new PDOException($e->getMessage());
        }
    }
}
