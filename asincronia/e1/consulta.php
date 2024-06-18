<?php
// TODO: deberia mostrarse en la pantalla pero no lo esta haciendo
include_once('bd.php');
$sql = mysqli_query($con,"SELECT * FROM empleados");
?>

<table style="color: #000099;width:400px">
    <tr style="background: #9BB;">
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Web</td>
    </tr>

    <?php
    while ($row = mysqli_fetch_array($sql)) {
        echo "<tr>";
        echo "<td>".$row['nombre']."</td>";
        echo "<td>".$row['apellido']."</td>";
        echo "<td>".$row['web']."</td>";
        echo "</tr>";
    }
    ?>
</table>