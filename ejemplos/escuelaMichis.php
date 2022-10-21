<?php
# https://github.com/platzi/curso-basico-php-arreglos/tree/b3032a6810ca08ac6dbc23db950618bf9f5e5f4f


$escuela = array(

    # al no indicar un nombre para el subindice se asigna automaticamente un index
    array(
        "Nombre" => "Michijose",
        "Ocupacion" => "Developer increible",
        "Color" => "Naranja con rayitas",
        # comidas se crea en otro sub array
        "Comidas" => array(
            "Favoritas" => "Lasaña, Atun",
            "NoFavoritas" => "Fresas, Cacahuates"
        )
    ),

    array(
        "Nombre" => "Michisancio",
        "Ocupacion" => "jQuery Developer",
        "Color" => "Blanco con manchitas negras",
        "Comidas" => array(
            "Favoritas" => "Pescado, Pollo",
            "NoFavoritas" => "Atun, Verduras",
            "Croquetas", /* auto asigna un index 0 */
        )
    ),

    array(
        "Nombre" => "Mr. Michi",
        "Ocupacion" => "Pro en PHP",
        "Color" => "Blanco",
        "Comidas" => array(
            "Favoritas" => "Pizza",
            "NoFavoritas" => "Pescado"
        )
    ),

);

// print_r( $escuela[1]);
$michisancio = $escuela[1];
//print_r($michisancio);
 echo "Las comida indiferente de Michisancio es {$escuela[1]['Comidas'][0]}\n";
echo "Las comidas favoritas de Michisancio son " . $michisancio['Comidas']['Favoritas'] ."\n";
echo "La ocupacion de Michisancio es {$michisancio['Ocupacion']}\n";

// $mr_michi = $escuela[2];
echo "El color de Mr. Michi es " . $escuela[2]["Color"];
echo "\n";

?>
