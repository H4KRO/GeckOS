<?php

class ControllerGPS {
        
    public static function display(){  
        
        $controller = 'gps';
        $view= 'detail' ;
        $pagetitle= "Application $controller";
        
        require (File::build_path(array('view' , 'global' , 'view.php')));      
    }
}


?>