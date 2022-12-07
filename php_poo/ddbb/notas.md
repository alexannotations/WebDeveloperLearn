
## instalar drivers para PDO en linux
``` sudo apt install php8.0-mysql ```
``` code /etc/php/8.0/apache2/php.ini ```


## [MySQL Improved Extension](https://www.php.net/manual/es/book.mysqli.php)



## [archivo .env](https://desarrolloweb.com/articulos/variables-entorno-php-env.html)
MODE="development"
HOST="local.test"
DDBB_USER="root"
DDBB_PASSWORD=""
DDBB_HOST="localhost"

Estos archivos no se deben encuentrar al alcance de los usuarios, por lo que nunca deberían estar dentro de la carpeta de publicación, sino un directorio por encima, se colocará en la raíz del proyecto, pero nunca dentro de la carpeta raíz de publicación

"PHP dotenv" https://github.com/vlucas/phpdotenv hace la tarea de abrir el archivo donde las variables de entorno se almacenan y procesar su contenido, para producir las variables de entorno y consumirlas cómodamente dentro de las aplicaciones.


## PDO

