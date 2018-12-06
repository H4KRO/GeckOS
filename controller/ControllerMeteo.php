<?php
require_once (File::build_path(array('model','ModelMeteo.php'))); // chargement du modèle

class ControllerMeteo {
    
    private $name = "Meteo";
    
    public static function display(){  
        
        $controller = self::name;
        $view= 'detail' ;
        $pagetitle= "Application $controller";
        
        require (File::build_path(array('view' , 'global' , 'view.php')));      
    }
}


?>
