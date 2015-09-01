<?php

class basicInformationManager 
{
    private $cont;
    private $obj;
    
    public function __construct() {
        $this->cont = new DB();
    }
    
    public function insertBasicInformation($obj) 
    {
        try 
        {
            $UserID = $obj->getUserID();
            $FirstName = $obj->getFirstName();
            $LastName = $obj->getLastName();
            $FatherName = $obj->getFatherName();
            $DOB = $obj->getDOB();
            $Education = $obj->getEducation();
            $Designation = $obj->getDesignation();
            $CreateDate = $obj->getCreateDate();
            $UpdateDate = $obj->getUpdateDate();
            $sql = "insert into tblbasicinformation(UserID, FirstName, LastName, FatherName, DOB, Education, Designation, CreateDate, UpdateDate)values(:UserID, :FirstName, :LastName, :FatherName, :DOB, :Education, :Designation, :CreateDate, :UpdateDate)";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array("UserID"=>$UserID,":FirstName"=>$FirstName, ":LastName"=>$LastName, ":FatherName"=>$FatherName, ":DOB"=>$DOB, ":Education"=>$Education, ":Designation"=>$Designation, ":CreateDate"=>$CreateDate, ":UpdateDate"=>$UpdateDate));
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
    
    public function updateBasicInformation($obj) 
    {
        try 
        {
            $UserID = $obj->getUserID();
            $FirstName = $obj->getFirstName();
            $LastName = $obj->getLastName();
            $FatherName = $obj->getFatherName();
            $DOB = $obj->getDOB();
            $Education = $obj->getEducation();
            $Designation = $obj->getDesignation();
            $UpdateDate = $obj->getUpdateDate();
            $sql = "update tblbasicinformation set FirstName, LastName, FatherName, DOB, Education, Designation, UpdateDate where UserID=?";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array($FirstName, $LastName, $FatherName, $DOB, $Education, $Designation, $UpdateDate, $UserID));
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
    
    public function selectBasicInformation($UserId) 
    {
        try 
        {
            $sql = "select * from tblbasicinformation where UserID=?";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array($UserId));
            
            $value = $query->fetch(PDO::FETCH_ASSOC);
            if(count($value)>0)
            {
                $basicInformationObj = new basicInformationObject();
                $basicInformationObj->setUserID($value['UserID']);
                $basicInformationObj->setFirstName($value['FirstName']);
                $basicInformationObj->setLastName($value['LastName']);
                $basicInformationObj->setFatherName($value['FatherName']);
                $basicInformationObj->setDOB($value['DOB']);
                $basicInformationObj->setEducation($value['Education']);
                $basicInformationObj->setDesignation($value['Designation']);
                $basicInformationObj->setCreateDate($value['CreateDate']);
                $basicInformationObj->setUpdateDate($value['UpdateDate']);
                return $basicInformationObj;
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
    
    public function DeleteBasicInformation($UserID) 
    {
        try 
        {
            $sql = "delete from tblbasicinformation where UserID=?";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array($UserID));
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
