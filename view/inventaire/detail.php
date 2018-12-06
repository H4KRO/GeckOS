<?php
$inventaire = unserialize($_COOKIE['mission']);


echo ("<p>");

foreach ($inventaire[1] as $item) {
    echo ("<br>Objet : " . $item[0] . " dispo : " . $item[1]);
}
echo ("</p>");
?>