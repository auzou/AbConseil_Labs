<?php 

require_once(dirname(__FILE__).'../../model/flagModel.class.php');


class FlagController
{
    private $flagModel;
    private $flag;
    
    public function __construct()
    {
       $this->flagModel = new FlagModel();
       $this->flag = null;
       $this->checkData();
       //$this->getView();
    }
    
    public function checkData()
    {
        $this->flag = $this->flagModel->getFlag();
        if(is_array($this->flag) && !empty($this->flag))
        {
            $this->getView($this->flag);
        } else{
            // unknown error
            // insert flag error 
        }
    }
    
    public function getView($flag)
    {
        require_once(dirname(__FILE__).'../../../include/flag.php');

    }
    
    public function getErrorView()
    {
         require_once(dirname(__FILE__).'../../../include/flagError.php');
         // sorry
    }
    
}

$flagController = new FlagController();



?>