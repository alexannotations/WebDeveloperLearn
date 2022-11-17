<?php
echo "<pre>";
echo  var_dump($_GET);
echo "</pre>";

$nombre = $_GET["name_user"];
$edad = $_GET["age_user"];

echo "El usuario $nombre tiene $edad años.";
