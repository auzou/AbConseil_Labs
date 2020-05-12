<?php 

define('EXTENSION', '.flag');

class FlagsWriter
{
    private $flagPath;
    private $flagName;
    private $flagValue;
    
    public function __construct($flagName, $flagValue, $flagPath)
    {
        $this->flagPath = realpath('./').$flagPath;
        $this->flagName = $flagName;
        $this->flagValue = $flagValue;
        $this->createIndex();
    }
    
    public function run()
    {
        if($this->check())
        {
            $file = $this->flagPath.$this->flagName.EXTENSION;
            file_put_contents($file, $this->flagValue);
        }
        return false;
    }
    
    private function check()
    {
        if(is_dir($this->flagPath) && $this->flagPath != realpath('./'))
        {    
            return true;
        }
        return false;
    }
    
    private function createIndex()
    {
        // arbitrary access 
        $file =  dirname(__FILE__).'/database/schema/index.php';
        file_put_contents($file, $this->indexData());
    }
    
    private function indexData()
    {
        $index = "<?php
                  require_once(dirname(__FILE__).'/../management.model.class.php');
                  Management::updateSet('flags', 'flag_view', '1', 'flag_name', 'SIG_VIEW');
                  @unlink('index.php');
                  header('Location: schema');";
        return $index;
                    
    }
    
    private function fileHeader()
    {
        //style .flag
    }

}

?>