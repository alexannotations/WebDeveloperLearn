<?php
include_once('bd.php');
$nom=$_POST['nombre'];
$ape=$_POST['apellido'];
$web=$_POST['web'];

$sql="INSERT INTO empleados (nombre, apellido, web)
VALUES ('$nom','$ape','$web')";

mysqli_query($con,$sql) or die('Error. '.mysqli_error($con));

include('consulta.php');

