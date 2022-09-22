/**
 * Los metodos queryselector y queryselectorall
 * permiten identificar elementos en la pagina html
 * con selectores CSS.
 */

function mensajeAlert(){
    alert("Que hay de nuevo (archivoJS)");
}


/* 
la funcion se ejecuta al identificar un elemento
con ayuda del objeto document y el metodo get que 
requiere el parametro a identificar: etiqueta p
[#etiqueta <p>?].evento=funcion_a_ejecutar()
*/
function ejecutaAlCargar(){
    // el metodo devuelve un array, devolviendo el primer elemento [0]
    //document.getElementsByTagName("p")[0].onclick=saludo; // al asignar la funcion no lleva parentesis
    /* Para todos los elementos <p> se usa un ciclo 
    la diferencia entre var y let es el scope, var tiene un alcance de función y
     let tiene un alcance de bloque.
    */

    for (let i = 0; i < 5; i++) {
        document.getElementsByTagName("p")[i].onclick=saludo; 
    }

    document.getElementById("id_de_identificicacion").onmouseover=saludo;
    // de igual manera se puede utilizar el ciclo FOR para obtener todos los elementos
    var x= document.getElementsByClassName("class_element")[0].onclick=saludo; // requiere un variable
}

function saludo(){
    alert("Saludo desde document.getElement");
}

/* 
al cargar la pagina se ejecuta
el siguiente script, que llama a la 
funcion ejecutaAlCargar() */
window.onload=ejecutaAlCargar;  // al asignar la funcion no lleva parentesis

