<?php

class ControllerMeteo {
        
    public static function display(){  
        
        $controller = 'meteo';
        $view= 'detail' ;
        require (File::build_path(array('view' , $controller , "$view.php")));      
    }
    
    public static function getMeteoCamp(){
                
    }
}


?>
