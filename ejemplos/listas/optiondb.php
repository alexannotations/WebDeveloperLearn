<?php

function make_connection(): ?\PDO {
    $serverdb='172.21.0.2';
    $database='constancia';
    $username='root';
    $password='root';
    try {
        $connection = new \PDO("mysql:host=$serverdb;dbname=$database;port=3306", $username, $password);
        /*$setnames = $connection->prepare("SET NAMES 'utf8'");
        $setnames->execute();*/
        return $connection;
    } catch(PDOException $e){
        //die("Connection failed: {$e->getMessage()}");
        throw $e;
    }
}


function getJCDB(?string $jcSelected){
    $sqljuzgados="SELECT nombre FROM juzgados ORDER BY alcaldia,nombre";
    $stmtjuzgados = make_connection()->prepare($sqljuzgados);
    $stmtjuzgados->execute();

    $juzgados= $stmtjuzgados->fetchAll(\PDO::FETCH_ASSOC);
    foreach ($juzgados as $key => $jc) {
        $juzgadoc[$key]= "<option value=\"".$jc["nombre"]."\">".$jc["nombre"]."</option>";
        if ($jc["nombre"]==$jcSelected)
            $juzgadoc[$key]= "<option value=\"".$jc["nombre"]."\" selected>".$jc["nombre"]."</option>";
    }
    return $juzgadoc;
}


function getAlcaldiaDB(){
    $sqlalcaldia="SELECT DISTINCT alcaldia FROM juzgados ORDER BY alcaldia";
    $stmtalcaldia = make_connection()->prepare($sqlalcaldia);
    $stmtalcaldia->execute();

    $alcaldias= $stmtalcaldia->fetchAll(\PDO::FETCH_ASSOC);
    foreach ($alcaldias as $key => $a) {
        $alcaldia[$key]= "<option value=\"".$a["alcaldia"]."\">".$a["alcaldia"]."</option>";
    }
    return $alcaldia;
}


$jcSelectedPost = $_POST['juzgado'] ?? null;
$juzgados=getJCDB($jcSelectedPost);
$alcaldias=getAlcaldiaDB();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Juzgados form option</title>
</head>
<body>
    <form action="#" method="post">
    <fieldset>

    <?php if (isset($alcaldias)&&isset($juzgados)) { ?>
    <select name="alcaldia" id="alcaldia">
        <option selected hidden disabled>Seleccione alcaldía</option>
        <?php foreach ($alcaldias as $alc){echo $alc;} ?>
    </select>
    
    <select name="juzgado" id="juzgado">
        <option value="juzgadoPendiente" selected hidden disabled>Seleccione juzgado</option>
        <?php foreach ($juzgados as $jc){echo $jc;} ?>
    </select>
    <?php } ?>

    <button type="submit" name="update" title="Modificar para actuación" class="button">Actualizar</button>
    </fieldset>

    </form>
</body>
</html>
