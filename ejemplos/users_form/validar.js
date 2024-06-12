function validarDatos(){
    var variable = true;

    if (!document.form.nombre.value) {
        alert("Se necesita un Nombre ...!");
        document.form.nombre.value.focus;
        variable="false";
    } else if (!document.form.apellidop.value) {
        alert("Se necesita un Apellido paterno ...!");
        document.form.apellidop.value.focus;
        variable=false;
    } else if (!document.form.apellidom.value) {
        alert("Se necesita un Apellido materno ...!");
        document.form.apellidom.value.focus;
        variable=false;
    } else if (!document.form.ciudad_natal.value) {
        alert("Se necesita una ciudad ...!");
        document.form.ciudad_natal.value.focus;
        variable=false;
    }

    if (variable) {
        document.form.submit();
    }
}

window.onload=function(){
    document.getElementById('boton').onclick=validarDatos;
}