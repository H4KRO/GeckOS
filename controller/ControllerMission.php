<?php
require_once (File::build_path(array('model','ModelMission.php'))); // chargement du modèle

class ControllerMission {
    
    private $name = "Mission";
    
    public static function display(){  
        
        $controller = self::name;
        $view= 'detail' ;
        $pagetitle= "Application $controller";
        
        require (File::build_path(array('view' , 'global' , 'view.php')));      
    }
}


?>
