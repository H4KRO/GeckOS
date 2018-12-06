<?php
require_once (File::build_path(array('model','ModelMission.php'))); // chargement du modèle

class ControllerMission {
    
    
    public static function display(){  
        
        $controller = 'mission';
        $view= 'detail' ;
        $pagetitle= "Application $controller";
        
        require (File::build_path(array('view' , 'global' , 'view.php')));      
    }
    
    public static function mission(){
        $id = unserialize($_COOKIE['mission'])[0];
        
        $mission = ModelMission::getMission();
    
    }
   
}


?>
