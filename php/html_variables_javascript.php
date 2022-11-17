<?php  
$usuarios=array(
    array(
        "id"=>0,
        "username"=>"Sandra"
    ),
    array(
        "id"=>1,
        "username"=>"Samantha"
    ),
    array(
        "id"=>2,
        "username"=>"Sarahi"
    )
    );
$edad_usuario=23;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar variables de PHP a JavaScript</title>
</head>
<body>

<!-- el script es javascript -->
<script>
    // convierte un string a JSON, convierte un arreglo a un stringJSON
    let users = JSON.parse('<?= json_encode($usuarios) ?>');
    //console.log(users);
    let edadUsuario = <?= $edad_usuario ?>;
</script>

<section>
    <h2>Pasar variables de Javascript a php</h2>
    <p>Se puede hacer, pero tal vez necesite replantearse porque
        se quiere hacer, ya que esto es tan simple como hacer una 
        petición asincrona al servidor.
    </p>
    <p>Recuerda que PHP solo se ejecuta en tiempode carga, 
        mientras la pagina es preprocesada, javascript se
        ejecuta despues de que la pagina fue cargada.
    </p>
    <p>
        Buenas practicas
        - nombres de variables descriptivas
        - no combinar logica de php con html
        - usa las etiquetas de php diseñadas para imprimir en html
        - deja toda la logica al inicio del documento y solo imprime los resultados en html
        - No abuses de la libertar que te da php
    </p>
</section>
    
</body>
</html>