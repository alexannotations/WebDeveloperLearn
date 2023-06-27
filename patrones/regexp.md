// https://developer.mozilla.org/es/docs/Web/JavaScript/Guide/Regular_expressions/
https://regex101.com/


/^\S*           // Al principio un solo caracter 
                // que no sea un espacio en blanco
                // que concuerde 0 o más veces con cualquier caracter que no sea un espacio en blanco
                // intentando coincidir la mayor cantidad de veces

(?=\S{9,})      // grupo de captura
                // con asercion anticipada
                // concuerda con al menos 9 apariciones de caracteres

(?=\S*[a-z])    // grupo de captura
                // con asercion anticipada de cuaquier caracter que no sea un espacio en blanco
                // intentando coincidir la mayor cantidad de veces
                // con cualquiera de las letras minusculas

(?=\S*[A-Z])    // grupo de captura
                // con asercion anticipada de cuaquier caracter que no sea un espacio en blanco
                // intentando coincidir la mayor cantidad de veces
                // con cualquiera de las letras mayusculas

(?=\S*[\d])     // grupo de captura
                // con asercion anticipada de cuaquier caracter que no sea un espacio en blanco
                // intentando coincidir la mayor cantidad de veces
                // con cualquiera digito arabigo

(?!.*(.)\1)     // grupo de captura
                // con asercion anticipada negativa de un caracter unico
                // intentando coincidir la mayor cantidad de veces
                // coincidiendo con un solo caracter y recordando la coincidencia
                //  \1 
                

\S*$/           // un solo caracter que no sea un espacio en blanco
                // que concuerde 0 o más veces la mayor cantidad de veces
                // coincide con el final de la entrada

