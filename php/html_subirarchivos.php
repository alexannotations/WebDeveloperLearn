<?php

echo "<pre>";
var_dump($_FILES);
echo "</pre>";

// cada vez que se sube la misma imagen se sobreescribe
$basename = $_FILES["image"]["name"];
$image=$_FILES["image"]["tmp_name"];
$ruta_guardado="./uploads/$basename";

move_uploaded_file($image,$ruta_guardado);

echo $basename;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envío de imágenes</title>
</head>
<body>
 
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <label for="image">Imagen:</label>
        <input type="file" name="image" id="image">
        <button type="submit">Subir archivo</button>
    </form>

    <section>
        <figure>
            <img loading="lazy" src="<?=$ruta_guardado?>" alt="<?=$basename?>">
            <figcaption>La imagen guardada en el servidor.</figcaption>   
        </figure>  
    </section>

    <section>
        <p>
            Los archivos enviados al servidor se guardan en una carpeta temporal.
            La variable $_FILES contiene informacion en forma de array 
            acerca del archivo que estamos manipulando,
            incluyendo su ruta a la carpeta temporal.
        </p>
        <p>
            Por defecto, al enviar formularios en HTML tenemos un tipo de encriptacion
            <b>"application/x-www-form-urlencoded"</b>, 
            sin embargo, cuando trabajamos con archivos debemos cambiar este tipo a
            <b>"multipart/form-data"</b>
        </p>
        <p>
            <a href="https://book.hacktricks.xyz/pentesting-web/file-upload">hack</a>
        </p>
    </section>
</body>
</html>