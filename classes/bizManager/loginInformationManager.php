<?php

class loginInformationManager 
{
    private $cont;
    private $obj;
    
    public function __construct() {
        $this->cont = new DB();
    }
    
    public function insertLoginInformation($obj) 
    {
        try 
        {
            $Email = $obj->getEmail();
            $Password = $obj->getPassword();
            $MemberID = $obj->getMemberID();
            $VrfCode = $obj->getVrfCode();
            $IsActive = $obj->getIsActive();
            $CreateDate = $obj->getCreateDate();
            $UpdateDate = $obj->getUpdateDate();
            $sql = "insert into tbllogininformation(Email, tbllogininformation.Password, MemberID, VrfCode, IsActive, CreateDate, UpdateDate)values(:Email, :Password, :MemberID, :VrfCode, :IsActive, :CreateDate, :UpdateDate)";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array(":Email"=>$Email, ":Password"=>$Password, ":MemberID"=>$MemberID, ":VrfCode"=>$VrfCode, ":IsActive"=>$IsActive, ":CreateDate"=>$CreateDate, ":UpdateDate"=>$UpdateDate));
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
    
    public function updateLoginInformation($obj) 
    {
        try 
        {
            $UserID = $obj->getUserID();
            $Email = $obj->getEmail();
            $Password = $obj->getPassword();
            $MemberID = $obj->getMemberID();
            $IsActive = $obj->getIsActive();
            $UpdateDate = $obj->getUpdateDate();
            $sql = "update tbllogininformation set Email=?, Password=?, MemberID=?, IsActive=?, UpdateDate=? where UserID=?";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array($Email, $Password, $MemberID, $IsActive, $UpdateDate, $UserID));
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
    
    public function selectLoginInformation($UserId) 
    {
        try 
        {
            $sql = "select * from tbllogininformation where UserID=?";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array($UserId));
            $loginInformationObj = new loginInformationObject();

            $value = $query->fetch(PDO::FETCH_ASSOC);
            if(count($value)>0)
            {
                $loginInformationObj->setUserID($value['UserID']);
                $loginInformationObj->setEmail($value['Email']);
                $loginInformationObj->setPassword($value['Password']);
                $loginInformationObj->setMemberID($value['MemberID']);
                $loginInformationObj->setVrfCode($value['VrfCode']);
                $loginInformationObj->setIsActive($value['IsActive']);
                $loginInformationObj->setCreateDate($value['CreateDate']);
                $loginInformationObj->setUpdateDate($value['UpdateDate']);
                return $loginInformationObj;
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
    
    public function getPasswordByEmail($Email) 
    {
        try 
        {
            $sql = "select * from tbllogininformation where Email=?";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array($Email));
            $loginInformationObj = new loginInformationObject();

            $value = $query->fetch(PDO::FETCH_ASSOC);
            if(count($value)>0)
            {
                $loginInformationObj->setUserID($value['UserID']);
                $loginInformationObj->setEmail($value['Email']);
                $loginInformationObj->setPassword($value['Password']);
                $loginInformationObj->setMemberID($value['MemberID']);
                $loginInformationObj->setVrfCode($value['VrfCode']);
                $loginInformationObj->setIsActive($value['IsActive']);
                $loginInformationObj->setCreateDate($value['CreateDate']);
                $loginInformationObj->setUpdateDate($value['UpdateDate']);
                return $loginInformationObj;
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
    
    public function DeleteLoginInformation($UserID) 
    {
        try 
        {
            $sql = "delete from tbllogininformation where UserID=?";
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
