<?php
$inventaire = unserialize($_COOKIE['mission']);


echo ("<div class='app'>");

foreach ($inventaire[1] as $item) {
    echo ("<br>Objet : " . $item[0] . " dispo : " . $item[1]);
}
echo ("</div>");
?>