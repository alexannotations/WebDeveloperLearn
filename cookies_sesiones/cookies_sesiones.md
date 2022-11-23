## cookies

Se puede almacenar informacion NO sensible y personalizada sobre el usuario.

Podemos obtener las [cookies](https://www.php.net/manual/es/features.cookies.php) guardadas a traves de la variable superglobal $_COOKIES

Para definir una cookie podemos usar los metodos [setcookie()](https://www.php.net/manual/es/function.setcookie.php) o setrawcookie()

Sus argumentos son: name, value
expires_or_options, path, domain, secure, httponly
```expires_or_options:0``` indica que expira cuando cierre la pestaña, se indica en el tiempo de marca unix, se puede usar la funcion ```time()``` para obtener los segundos actuales, se agregan segundos a partir de aqui.
```path:"/page"``` indica en que url estara disponible del sitio, si se deja el slash indica que en todo el sitio.
```domain:"test.example.com"``` se puede indicar solo el dominio, o subdominio
```secure: true``` esta cookie solo puede definirse en https o false si no se cuenta con certificado
```httponly:true``` true quiere decir que no lo pueden leer desde frontend javascript. Y false si los deja leer.


Se puede definir que solo este disponible en una sola pagina del sitio web, en lugar de que este en todo el sitio.

prevenir ataques XSS


## Sesiones
Son similares a las cookies, pero estas nos permiten implementar sistemas de autenticacion dentro de nuestro sitio web. Una sesion es una cookie temporal y encriptada que estara viva y contendra toda la informacion del usuario mientras este activa.
Las sesiones se destruyen en cuanto hacemos logout. Con las sesiones podemos tener informacion especifica de un usuario para personalizar el contenido que le mostramos.

### La funcion __session_start()__
Con esta funcion podemos decirle a PHP que queremos empezar a trabajar con sesiones, siempre hay que incluirla en todos los archivos en donde queremos usar sesiones.
Debemos tener cuidado de no usar dos veces la funcion session_start(), ya que esto puede provocar un error.

### La funcion __session_destroy()__
 el session_destroy() limpia por completo el arreglo de $_SESSION. unset($_SESSION); seria innecesario.

### $_SESSION
Una vez que tenemos una sesion iniciada, podemos empezar a escribir y obtener datos a traves de la variable superglobal $_SESSION. Es un arreglo unico por usuario. 

### session_regenerate_id
[session_regenerate_id()](https://www.php.net/manual/es/function.session-regenerate-id.php) renueva la cookie PHPSESSIONID