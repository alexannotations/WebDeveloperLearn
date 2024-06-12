<?php
/**
 * para procesar el formulario
 * se utiliza el metodo POST para procesar cada una de las variables que corresponden al formulario
 * aunque se requiere el archivo de js para validar y enviar la solicitud
 * 
 */

 $nombre = $_POST['nombre'];
 $apellidop = $_POST['apellidop'];
 $apellidom = $_POST['apellidom'];
 $ciudadnatal = $_POST['ciudad_natal'];

 echo $nombre."<br>". $apellidop."<br>". $apellidom."<br>". $ciudadnatal."<br>";
