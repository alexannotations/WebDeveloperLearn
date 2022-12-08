
## instalar drivers para PDO en linux
``` sudo apt install php8.0-mysql ```
``` code /etc/php/8.0/apache2/php.ini ```


## [MySQL Improved Extension](https://www.php.net/manual/es/book.mysqli.php)


## [PDO::__construct](https://www.php.net/manual/es/pdo.construct.php)



## [archivo .env](https://desarrolloweb.com/articulos/variables-entorno-php-env.html)
MODE="development"
HOST="local.test"
DDBB_USER="root"
DDBB_PASSWORD=""
DDBB_HOST="localhost"

Estos archivos no se deben encuentrar al alcance de los usuarios, por lo que nunca deberían estar dentro de la carpeta de publicación, sino un directorio por encima, se colocará en la raíz del proyecto, pero nunca dentro de la carpeta raíz de publicación

"PHP dotenv" https://github.com/vlucas/phpdotenv hace la tarea de abrir el archivo donde las variables de entorno se almacenan y procesar su contenido, para producir las variables de entorno y consumirlas cómodamente dentro de las aplicaciones.


## Controladorea para la aplicacion
[prepare](https://www.php.net/manual/es/mysqli.prepare.php)
Por lo general un controlador tiene 7 metodos, en el API pueden ser 5.
Un recurso suele seer cualquier cosa que queramos controlar.

- __index__: muestra la lista de todos los recursos.(GET)
- __create__: muestra un formulario para ingresar un nuevo recurso. (luego manda a llamar al método store), (responde a una peticion tipo GET)
- __store__: registra dentro de la base de datos el nuevo recurso. (responde a una peticion tipo POST)
- __show__: muestra un recurso específico.(GET)
- __edit__: muestra un formulario para editar un recurso. (luego manda a llamar al método update).(responde a una peticion tipo GET)
- __update__: actualiza el recurso dentro de la base de datos.(responde a una peticion tipo POST)
- __destroy__: elimina un recurso.(GET)


## ENUMS
Sirve para dar significado a un numero. Enumerations, or “Enums” allow a developer to define a custom type that is limited to one of a discrete number of possible values. 
Estan disponibles a partir de PHP8.1

## SQL injection con bindParam
https://es.stackoverflow.com/questions/18232/c%C3%B3mo-evitar-la-inyecci%C3%B3n-sql-en-php
https://www.php.net/manual/es/pdo.prepare.php

Para ligar valores podemos usar bindParam o bindValue
- Con bindParam se vincula la variable al parámetro y en el momento de hacer el execute es cuando se asigna realmente el valor de la variable a ese parámetro. Es decir como todavia no se ejecuta, se puede ligar otro valor
- Con bindValue se asigna el valor de la variable a ese parámetro justo en el momento de ejecutar la instrucción bindValue.
- bindColumn


## Transacciones
Como revertir una consulta SQL con PHP con beginTransaction()


## Router
Nos permite ligar de las urls con algun metodo de los controladores. Los metodos pueden mandar llamar a las vistas con los datos de la DB.
