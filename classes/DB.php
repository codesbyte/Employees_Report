<?php

class DB 
{
    private $cont;
    
    public function Connect() 
    {
        try 
        {
            $this->cont = new PDO("mysql:host=localhost;dbname=employees_report", "root", "");
            if($this->cont)
            {
                return $this->cont;
            }
            else
            {
                throw new PDOException("DB not connect");
            }
        } 
        catch (PDOException $e) 
        {
            throw new PDOException($e->getMessage());
        }
    }
}
