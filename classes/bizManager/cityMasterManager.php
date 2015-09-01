<?php

class cityMasterManager 
{
    private $cont;
    private $obj;
    
    public function __construct() {
        $this->cont = new DB();
    }
    
    public function selectCityMaster($StateId) 
    {
        try 
        {
            $sql = "select * from tblcitymaster where StateID=?";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array($StateId));
            $arr = new ArrayIterator();
            $cityMasterObj = new cityMasterObject();
            
            while ($value = $query->fetch(PDO::FETCH_ASSOC))
            {
                $cityMasterObj->setCityID($value['CityID']);
                $cityMasterObj->setCityName($value['CityName']);
                $cityMasterObj->setStateID($value['StateID']);
                $cityMasterObj->setCountryID($value['CountryID']);
                $cityMasterObj->setCreatedate($value['createdate']);
                $cityMasterObj->setUpdatedate($value['updatedate']);
                $arr->append($cityMasterObj);
            }
            return $arr;
        }
        catch (PDOException $e) 
        {
            throw new PDOException($e->getMessage());
        }
    }
}
