# Manejo de archivos
Debemos  tener en cuenta que los archivos poseen permisos,
por lo que deben asignarse segun se requiera

## abrir archivos
```php
fopen();
```

## recuperar contenido
```php
fgets();    // recupera una linea de un archivo
feof();     // devuelve true cuando alcanzamos el final del archivo
```

## escribir archivos
```php
fputs();    // escribe una cadena de texto en un archivo
```

## cerrar archivo
```php
fclose();    // cierra la conexión
```
