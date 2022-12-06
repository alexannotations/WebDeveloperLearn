<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>

    <p>Un front controller actua como un unico punto de entrada a una pagin web desde el cual se puede cargar las paginas solicitadas</p>

    <p>
        El archivo .htaccess nos permite trabajar con un Front Controller, per a su vez seguir teniendo URL limpias, faciles de leer y buenas para SEO.
        Todos los archivos o rutas obtenidas con GET pasan por el archivo .htaccess,  estas a su vez seran pasadas al front controller, para mostrar sus rutas amigables.
        Para usar el archivo .htaccess se debe habiliar el modulo rewrite en Apache2
        Buscar el archivo "httpd.conf" y habilitar "LoadModule rewrite_module lib/httpd/modules/mod_rewrite.so"
        o en linux <strong>sudo a2enmod rewrite</strong>
    </p>

    <p>
        Sin la configuracion de url amigables, las direcciones de las paginas obtenidas por GET
        las direcciones se muestran en la barra de direcciones de esta forma:
       <strong>"WebDeveloperLearn/php_poo/front_controller/index.php?page=contact"</strong> 
        Si se habilitan las url amigables con .htaccess podemos acceder y visualizar las direcciones de esta forma:
        <strong>"WebDeveloperLearn/php_poo/front_controller/contact"</strong>
    </p>

    <a href="https://www.bonaval.com/kb/sistemas-operativos/linux-sistemas-operativos/ejemplos-de-htaccess-que-todo-webmaster-deberia-conocer">Ejemplos .htaccess</a>
    <a href="https://helponnet.com/2019/05/15/mod_rewrite_flags/">flags</a>


</body>
</html>