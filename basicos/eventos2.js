var imagen=new Array(3);

function hazLaFuncion(){
    for (let i = 0; i<imagen.length; i++) {
        imagen[i] = document.getElementsByTagName("img")[i];
    }

    /* si se utilizara de la misma manera los listener como en eventos.js
        solo funcionaria el ultimo, por lo que se utilizara otra nomenclatura
        por lo que se utilizara una funcion anonima para cada funcion
    */
    for (let i = 0; i<imagen.length; i++) {
        imagen[i].addEventListener("click",function(){alert("Flores");},false);
        imagen[i].addEventListener("mouseover",function(){imagen[i].height=300;},false);
        imagen[i].addEventListener("mouseout",function(){imagen[i].height=400;},false); // para apreciar el cambio
    }
}

/*  Agregamos un listener a la ventana en lugar de cargarla al inicio
como con la anterior funcion: window.onload=hazLaFuncion;
*/
window.addEventListener("load",hazLaFuncion,false);
/** el tercer parametro sirve para establecer la prioridad cuando 
 * tenemos objetos anidados () y ambos objetos desencadenan eventos 
*/