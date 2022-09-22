function ejecuta(){
    // primer elemento que coincida con el selector .importante (primer parrafo)
    document.querySelector(".importante").onclick=saludo;
    // coincide con el primero que coincida segun la especificidad CSS (ultimo parrafo escrito)
    document.querySelector("#principal article p:last-child").onclick=saludo;

    var elementos = document.querySelectorAll("article .texto");
    //elementos = document.querySelectorAll("article .texto")[0].onclick=hola;

    for (let i = 0; i < elementos.length; i++) {
        elementos[i].onclick=hola;
    }
    
    // ve la diferencia en el selector con CSS (la coma) para agregar varios selectores
    document.querySelector("article .texto, span").onmouseover=hi;
}

function saludo(){
    alert("Que hay de nuevo one");
}

function hola(){
    alert("selectorAll (explicacion)");
}

function hi(){
    alert("etiqueta span");
}

window.onload=ejecuta;
