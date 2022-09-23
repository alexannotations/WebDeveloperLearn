var imagen;

function youngDancing(){
    alert("Pensamientos");
}

function creceLaImagen(){
    imagen.height=500;
}

function menguarLaImagen(){
    imagen.height=300;
}

function hazLaFuncion(){
    /*  // onclick se utiliza cuando se desea que se ejecute en linea
        // document.getElementsByTagName("img")[0].onclick=youngDancing;
    */
    // usamos la variable que almacena el objeto a trabajar
    imagen = document.getElementsByTagName("img")[0];
    // preparamos el objeto para estar a la escucha del evento
    //             Listener(type, listener, useCapture)
    imagen.addEventListener("click",youngDancing,false);
    // al detectar el evento click se ejecutara la funcion youngDancing
    // el tercer argumento al no haber elementos anidados que desencadenen eventos

    // al objeto se le pueden agregar varios listener para desencadenar diversas funciones
    imagen.addEventListener("mouseover",creceLaImagen,false);
    imagen.addEventListener("mouseout",menguarLaImagen,false);


}

window.onload=hazLaFuncion;

/* Beneficios del listener
- desencadena eventos de forma sencilla, respecto a otras tecnicas


*/
