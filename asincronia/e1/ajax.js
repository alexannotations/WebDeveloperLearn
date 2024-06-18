// Contiene las funciones adecuadas para recojer los datos de PHP, recojer los datos del formulario y enviarlos
// mediante POST, y tambien instanciar el objeto AJAX

// Es necesario elegir el objeto XMLHttpRequest, teniendo en cuenta el navegador
function objetoAjax() {
    var xmlhttp = false;
    // deprecated
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}


function enviarDatosEmpleado() {
    nom = document.nuevo_empleado.nombre.value;
    ape = document.nuevo_empleado.apellido.value;
    web = document.nuevo_empleado.web.value;

    // Instancia el objeto AJAX y envia los datos al archivo PHP que realizara el registro de estos en la base de datos.
    ajax = objetoAjax();

    // Toma los datos del formulario y los envia al archivo que guarda en la BD
    ajax.open("POST", "registro.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            divResultado.innerHTML = ajax.responseText();
            LimpiarCampos();    // TODO: no esta limpiando los datos
        }
    }

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("nombre=" + nom + "&apellido=" + ape + "&web=" + web);
}

function LimpiarCampos() {
    document.nuevo_empleado.nombre.value = "";
    document.nuevo_empleado.apellido.value = "";
    document.nuevo_empleado.web.value = "";
    document.nuevo_empleado.nombre.focus();
}


function Consulta(datos) {
    divResultado = document.getElementById('resultado');
    ajax.objetoAjax();
    ajax.open("GET", datos);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            dicResultado.innerHTML = ajax.responseText;
        }
    }
    ajax.send(null);
}
