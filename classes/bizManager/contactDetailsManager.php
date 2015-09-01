<?php

class contactDetailsManager 
{
    private $cont;
    private $obj;
    
    public function __construct() {
        $this->cont = new DB();
    }
    
    public function insertContactDetails($obj) 
    {
        try 
        {
            $UserID = $obj->getUserID();
            $CountryID = $obj->getCountryID();
            $StateID = $obj->getStateID();
            $CityID = $obj->getCityID();
            $PermanentAddress = $obj->getPermanentAddress();
            $TemporaryAddress = $obj->getTemporaryAddress();
            $ContactNo = $obj->getContactNo();
            $CreateDate = $obj->getCreateDate();
            $UpdateDate = $obj->getUpdateDate();
            $sql = "insert into tblcontactdetails(UserID, CountryID, StateID, CityID, PermanentAddress, temporaryAddress, ContactNo, CreateDate, UpdateDate)values(:UserID, :CountryID, :StateID, :CityID, :PermanentAddress, :temporaryAddress, :ContactNo, :CreateDate, :UpdateDate)";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array(":UserID"=>$UserID, ":CountryID"=>$CountryID, ":StateID"=>$StateID, ":CityID"=>$CityID, ":PermanentAddress"=>$PermanentAddress, ":temporaryAddress"=>$TemporaryAddress, ":ContactNo"=>$ContactNo, ":CreateDate"=>$CreateDate, ":UpdateDate"=>$UpdateDate));
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
    
    public function updateContactDetails($obj) 
    {
        try 
        {
            $UserID = $obj->getUserID();
            $CountryID = $obj->getCountryID();
            $StateID = $obj->getStateID();
            $CityID = $obj->getCityID();
            $PermanentAddress = $obj->getPermanentAddress();
            $TemporaryAddress = $obj->getTemporaryAddress();
            $ContactNo = $obj->getContactNo();
            $UpdateDate = $obj->getUpdateDate();
            $sql = "update tblcontactdetails set CountryID=?, StateID=?, CityID=?, PermanentAddress=?, temporaryAddress=?, ContactNo=?, UpdateDate=? where UserID=?";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array($CountryID, $StateID, $CityID, $PermanentAddress, $TemporaryAddress, $ContactNo, $UpdateDate, $UserID));
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
    
    public function selectContactDetails($UserId) 
    {
        try 
        {
            $sql = "select * from tblcontactdetails where UserID=?";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array($UserId));
            
            $value = $query->fetch(PDO::FETCH_ASSOC);
            if(count($value)>0)
            {
                $contactDetailsObj = new contactDetailsObject();
                $contactDetailsObj->setUserID($value['UserID']);
                $contactDetailsObj->setCountryID($value['CountryID']);
                $contactDetailsObj->setStateID($value['StateID']);
                $contactDetailsObj->setCityID($value['CityID']);
                $contactDetailsObj->setPermanentAddress($value['PermanentAddress']);
                $contactDetailsObj->setTemporaryAddress($value['temporaryAddress']);
                $contactDetailsObj->setContactNo($value['ContactNo']);
                $contactDetailsObj->setCreateDate($value['CreateDate']);
                $contactDetailsObj->setUpdateDate($value['UpdateDate']);
                return $contactDetailsObj;
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
    
    public function DeleteContactDetails($UserID) 
    {
        try 
        {
            $sql = "delete from tblcontactdetails where UserID=?";
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
