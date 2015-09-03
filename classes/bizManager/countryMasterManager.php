<?php

class countryMasterManager 
{
    private $cont;
    private $obj;
    
    public function __construct() {
        $this->cont = new DB();
    }
    
    public function selectCountryMaster() 
    {
        try 
        {
            $sql = "select * from tblcountrymaster";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute();
            $arr = new ArrayIterator();
            while ($value = $query->fetch(PDO::FETCH_ASSOC))
            {
                $countryMasterObj = new countryMasterObject();
                $countryMasterObj->setCountryID($value['CountryID']);
                $countryMasterObj->setCountryName($value['CountryName']);
                $countryMasterObj->setCountryCode($value['CountryCode']);
                $countryMasterObj->setCreatedate($value['createdate']);
                $countryMasterObj->setUpdatedate($value['updatedate']);
                $arr->append($countryMasterObj);
            }
            return $arr;
        }
        catch (PDOException $e) 
        {
            throw new PDOException($e->getMessage());
        }
    }
}
