<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cómo obtener una solicitud al servidor con PHP</title>
</head>
<body>

<script>

const formData = new FormData();

formData.append('nombre', 'Mr.michi');
formData.append('edad', '14');

// asincronismo en javascript (solicitud asincrona)
fetch("htmlserver.php?color=naranja", {
    body: formData,
    method: "POST"
})
.then(res => res.text())
.then(data => {
    console.log(data);
});

</script>

<section>
    <h2>Variables superglobales</h2>
    <p>PHP define variables superglobales a traves 
        de las cuales podemos acceder a cierta informacion 
        desde cualquier parte del codigo:
    </p>
    <dl>
            <dt>$_GET</dt>
            <dd>permite solicitar informacion al servidor, 
                permite enviar informacion por la URL</dd>
            <dt>$_POST ()</dt>
            <dd>Permite guardar informacion, los datos 
                se envian en el cuerpo de la peticion</dd>
            <dt>$_REQUEST</dt>
            <dd>coloca ambas solicitudes GET y POST</dd>
        </dl>
</section>
    
</body>
</html>