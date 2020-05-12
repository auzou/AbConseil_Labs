<!DOCTYPE html>

<html lang="en">
<?php
    require_once(dirname(__FILE__).'/include/head.php'); 
?>
    <body>
    
<?php     
    require_once(dirname(__FILE__).'/include/menu.php');
    require_once(dirname(__FILE__).'/class/database/management.model.class.php');

    Management::createDatabase();
    Management::createBase();
    
    // this part shouldn't be here
    if(isset($_GET['page']))
    {
        // inclusion locale and externe
        $data = $_GET['page'];
        if(!empty($data))
        {
            if(strpos($data, 'http') !== false || strpos($data, 'https') !== false)
            {
                // extern
                Management::updateSet('flags', 'flag_view', '1', 'flag_name', 'INC_EXT');
                header('Location: flag');
            } else if(strpos($data, '/') !== false) {
                // local
                Management::updateSet('flags', 'flag_view', '1', 'flag_name', 'INC_LOCAL');
                header('Location: flag');    
            } else {
                // unknown (the site doesn't work like that)
                // the site works by inclusion of code by part
                header('Location: home');   
            }
        }
    }
    
    require_once(dirname(__FILE__).'/class/flagsLoader.class.php');
     
    FlagsLoader::initInstance();
    require_once(dirname(__FILE__).'/include/botcpp.php');
    require_once(dirname(__FILE__).'/include/footer.php'); 
?> 

    </body>
</html>