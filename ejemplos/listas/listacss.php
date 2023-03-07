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


function getJCDB():array{

    $sql="SELECT alcaldia, nombre FROM juzgados ORDER BY alcaldia, nombre";
    $stmt = make_connection()->prepare($sql);
    $stmt->execute();
    $juzgados= $stmt->fetchAll(\PDO::FETCH_ASSOC);

    $lastAlcaldia="";
    foreach ($juzgados as $key => $jc) {
        if($key===0){
            $juzgadoc[$key]= "<ul><li>Selecciona JC<ul><li>".$jc["alcaldia"]."<ul><li>".$jc["nombre"]."</li>";
        }elseif(count($juzgados)-1===$key) {
            $juzgadoc[$key]= "<li>".$jc["nombre"]."</li></ul></li></ul></li></ul>";
        }else{
            if($lastAlcaldia==$jc["alcaldia"]){
                $juzgadoc[$key]= "<li>".$jc["nombre"]."</li>";
            }else{
                $juzgadoc[$key]= "</ul></li><li>".$jc["alcaldia"]."<ul><li>".$jc["nombre"]."</li>";
            }
        }
        $lastAlcaldia=$jc["alcaldia"];
    }
    return $juzgadoc;
}


$juzgados=getJCDB();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php foreach ($juzgados as $key => $jc) {echo $jc;} ?>
    
</body>
</html>