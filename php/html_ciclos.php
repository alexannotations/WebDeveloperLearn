<?php  
$edades=array(
    "Brenda"=> 18,
    "Magda"=> 22,
    "Yeri"=> 33,
    );
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<ul>
    <?php for($i=0; $i<=10; $i++): ?>
    <li><?= $i ?></li>
    <?php endfor; ?>
</ul>

<ul>
    <?php foreach ($edades as $name => $edad): ?>
    <li><?= "La edad de $name es $edad años." ?></li>
    <?php endforeach; ?>
</ul>
    
</body>
</html>