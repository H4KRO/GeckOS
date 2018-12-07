<?php
$inventaire = unserialize($_COOKIE['mission']);

foreach ($inventaire[1] as $item) {
    echo ("<br>Objet : " . $item[0] . " dispo : " . $item[1]);
}
?>