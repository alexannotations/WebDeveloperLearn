<html>
<head>
<title>nothing to do here!</title>
</head>

<body>
	<h1>Consulta</h1>
	<table border="1px" style="border-style: dotted">
		<th>id</th>
		<th>Delegación</th>

<?php cargarscrips() ?>
	</table>
</body>
</html>

<?php
/* Funcion para agregar los elementos de la lista que se pida */
function cargarscrips() {
	include './scripts/config.php';
	include './scripts/opendb.php';
	
	$result = mysql_query("SELECT * FROM delegaciones;");
	if (mysql_num_rows($result) > 0) {
		while($fila = mysql_fetch_row($result)) {
			echo '		<tr>
';
			echo '			<td>'.$fila[0].'</td>
';
			echo '			<td>'.$fila[1].'</td>
';
			echo '		</tr>
';

		}
	}
	include './scripts/closedb.php';
}
?>