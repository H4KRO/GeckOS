<?php

class ControllerCanvas {
        
    public static function display(){  
        
        $controller = 'canvas';
        $view= 'detail' ;
        $pagetitle= "Application $controller";
        
        require (File::build_path(array('view' , 'global' , 'view.php')));      
    }
}


?>
