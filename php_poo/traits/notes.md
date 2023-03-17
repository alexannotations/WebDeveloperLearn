https://www.php.net/manual/es/language.oop5.traits.php

# trait

Un __trait__ es una plantilla de metodos que podemos usar en diferentes clases.
Es decir, podemos crear un conjunto de metodos que podemos usar en varias clases a la vez.

Un trait se declara creando un nuevo archivo, muy parecido a una clase pero en vez de class se utiliza la palabra trait. Para que una clase utilice un trait, se deberá usar dentro de la clase la palabra use y el nombre del trait.
Lo interesante de hacer traits en vez de poner el código directamente en una clase, es que esta funcionalidad podría servir para otras clases que no están relacionadas entre sí.
Un trait puede ser implementado en tantas clases como queramos.

# softdelete
Soft Delete es una técnica de programación en la cual no borramos realmente los registros en la base de datos sino que únicamente los marcamos como borrados para que ya no sean mostrados en nuestras vistas o en las consultas de usuarios. Al implementar un soft delete tendrás que usar algo en tu base de datos que te permita definir que estás trabajando con soft deletes. Podrías usar una bandera o un datetime que te marque la fecha en la que fue borrado.
