<?php

class ControllerInventaire{
    
    public static $inventaire = array(
        
      1 => array(array('kawai', 1), array(0, 3) ),  
      2 => array(array('eau', 1), array(1, 0) ),
      3 => array(array('nourriture', 1), array(1, 0) ),
      4 => array(array('lunette', 1), array(1, 3) ),
      5 => array(array('pied de biche', 1), array(0) ),
      6 => array(array('Panneaux solaire', 1), array(1) ),
      7 => array(array('appareil photo', 1), array(1, 3) ),
      8 => array(array('Tente', 1), array(1,3) ),
    );
    
    public static function display(){          
        $controller = 'inventaire';
        $view= 'detail' ;
        $pagetitle= "Application $controller";        
        require (File::build_path(array('view' , 'global' , 'view.php')));      
    }
    
    public static function getInventaire(){
        if(!isset($_COOKIE['mission'])){
            self::setInventaire();   
        }
        $idMission = unserialize($_COOKIE['mission'])[0];
        setcookie("mission", "", time() - 1, "/"); // On supprime le cookie
        
        $mission = ModelMission::getMission($idMission);
        
        $meteo = $mission->get('meteo'); // 1
        
        $vent = $mission->get('wind'); // 'vent'
        
        $cooksMission = array($idMission, array() );
        foreach (self::$inventaire as $item){
            if(in_array($meteo, $item[1]) !== false || in_array($vent, $item[1]) !== false ){
                echo("<br>$meteo :     ");print_r($item[0]);
                
                array_push($cooksMission[1], $item[0]);
            }
        }
        
        setcookie("mission", serialize($cooksMission), time() + 86400 * 30, "/"); // Pour finir on re set le cookie panier avec notre variable $panier modifiais // Ne pas oublier de serialize($panier) car le cookie ne peut pas stocker des arrays, seulement des strings
        
        self::display();
    }
    
    public static function setInventaire(){
        $idMission = 1;
        
        $mission = ModelMission::getMission($idMission);
        
        $meteo = $mission->get('meteo');
        
        $vent = $mission->get('vent');
        
        $cooksMission = array($idMission, array() );
        foreach (self::$inventaire as $item){
            if(array_search($meteo, $item[1])  || array_search($vent, $item[1])){
                array_push($cooksMission[1], $item[0]);
            }
        }
        
        setcookie("mission", "", time() - 1, "/"); // On supprime le cookie
        
        setcookie("mission", serialize($cooksMission), time() + 86400 * 30, "/"); // Pour finir on re set le cookie panier avec notre variable $panier modifiais // Ne pas oublier de serialize($panier) car le cookie ne peut pas stocker des arrays, seulement des strings
        self::display();      
    }
    
    public static function changeDisponibility($dispo, $itemName){
        
        $mission = ModelMission::getMission($idMission);
        
        $cooksMission = unserialize($_COOKIE['mission'])[1];
        
        $meteo = $mission->get('meteo');
        
        $vent = $mission->get('vent');
        
        $cooksMission = array($idMission, array() );
        foreach (self::$inventaire as $item){
            if(array_search($meteo, $item[1])  || array_search($vent, $item[1])){
                array_push($cooksMission[1], $item[0]);
            }
        }
        
        setcookie("mission", "", time() - 1, "/"); // On supprime le cookie
        
        setcookie("mission", serialize($cooksMission), time() + 86400 * 30, "/"); // Pour finir on re set le cookie panier avec notre variable $panier modifiais // Ne pas oublier de serialize($panier) car le cookie ne peut pas stocker des arrays, seulement des strings
        self::display();
    }
    
}


?>
