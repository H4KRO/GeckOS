<?php
require_once (File::build_path(array('model','ModelMission.php'))); // chargement du modèle

class ControllerMission {
       
    public static function display(){
        $controller = 'mission';
        $view= 'detail' ;
        require (File::build_path(array('view' , $controller , "$view.php")));
    }   
    
    public static function updatedMission(){
       
    }
}


?>
