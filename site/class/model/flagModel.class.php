<?php 

require_once(dirname(__FILE__).'../../database/management.model.class.php');

class FlagModel 
{
    public function __construct()
    {
        
    }
    
    public function getFlag()
    {
        $flag =  Management::selectFrom('flags', '*');
        return $flag;
    }
}

?>