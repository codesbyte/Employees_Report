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
    
    public function updateEmail($obj) 
    {
        try 
        {
            $UserID = $obj->getUserID();
            $Email = $obj->getEmail();
            $UpdateDate = $obj->getUpdateDate();
            $sql = "update tbllogininformation set Email=?, UpdateDate=? where UserID=?";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array($Email, $UpdateDate, $UserID));
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
    
    public function updatePassword($obj) 
    {
        try 
        {
            $UserID = $obj->getUserID();
            $Password = $obj->getPassword();
            $UpdateDate = $obj->getUpdateDate();
            $sql = "update tbllogininformation set tbllogininformation.Password=?, UpdateDate=? where UserID=?";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array($Password, $UpdateDate, $UserID));
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
    
    public function updateVrfCodeByUserId($obj) 
    {
        try 
        {
            $UserID = $obj->getUserID();
            $VrfCode = $obj->getVrfCode();
            $UpdateDate = $obj->getUpdateDate();
            $sql = "update tbllogininformation set VrfCode=?, UpdateDate=? where UserID=?";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array($VrfCode, $UpdateDate, $UserID));
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
    
    public function getAllUserId() 
    {
        try 
        {
            $sql = "select * from tbllogininformation where MemberID != 1";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute();
            $arr = new ArrayIterator();
            while ($value = $query->fetch(PDO::FETCH_ASSOC))
            {
                $loginInformationObj = new loginInformationObject();
                $loginInformationObj->setUserID($value['UserID']);
                $arr->append($loginInformationObj);
            }
            return $arr;
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
            $sql = "SELECT * FROM tbllogininformation WHERE Email=?";
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
