
<?php
# con practicas poco aceptables
$zorritos = ["https://randomfox.ca/images/1.jpg", 
            "https://randomfox.ca/images/108.jpg", 
            "https://randomfox.ca/images/3.jpg"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zorros en PHP y HTML</title>
</head>

<body>

    <h1>Hola! Esto es HTML desde PHP!</h1>

    <!--<img src="https://randomfox.ca/images/1.jpg">-->
    <?php foreach($zorritos as $zorrito) { ?>
        <img src="<?php echo $zorrito;     ?>">
    <?php } ?>

</body>

</html>
