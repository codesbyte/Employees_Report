<?php

class stateMasterManager 
{
    private $cont;
    private $obj;
    
    public function __construct() {
        $this->cont = new DB();
    }
    
    public function selectStateMaster($CountryID) 
    {
        try 
        {
            $sql = "select * from tblstatemaster where CountryID=?";
            $query = $this->cont->Connect()->prepare($sql);
            $query->execute(array($CountryID));
            $arr = new ArrayIterator();
            while ($value = $query->fetch(PDO::FETCH_ASSOC))
            {
                $stateMasterObj = new stateMasterObject();
                $stateMasterObj->setStateID($value['StateID']);
                $stateMasterObj->setStateName($value['StateName']);
                $stateMasterObj->setCountryID($value['CountryID']);
                $stateMasterObj->setCreatedate($value['createdate']);
                $stateMasterObj->setUpdatedate($value['updatedate']);
                $arr->append($stateMasterObj);
            }
            return $arr;
        }
        catch (PDOException $e) 
        {
            throw new PDOException($e->getMessage());
        }
    }
}
