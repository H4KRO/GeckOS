<?php

class ControllerMeteo {
        
    public static function display(){  
        
        $controller = 'meteo';
        $view= 'detail' ;
        $pagetitle= "Application $controller";
        
        require (File::build_path(array('view' , 'global' , 'view.php')));      
    }
}


?>
