<?php

$controller = 'Controller' . $_POST['controller'] ;

require_once '../lib/File.php';
require_once (File::build_path(array('controller', $controller . '.php'))); // chargement du modèle


$controller::display();

?>