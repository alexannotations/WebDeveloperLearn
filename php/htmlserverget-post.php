<?php
echo "<h2>GET</h2><pre>";
echo  var_dump($_GET);
echo "</pre>";

$nombre = $_GET["name_user"];
$edad = $_GET["age_user"];

echo "El usuario $nombre tiene $edad años.";

// --- --- --- --- --- --- 
echo "<h2>POST</h2><pre>";
echo  var_dump($_POST);
echo "</pre>";

$nombre = $_POST["name_user"];
$edad = $_POST["age_user"];

echo "El usuario $nombre tiene $edad años.";