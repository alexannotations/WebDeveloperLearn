
class TaskManager{
    tasks=[];
    lastId=0;
    tagTasks=null;
    tagText=null;
    nameLabelStorage="tasks";

    constructor(tagTasks, tagText){
        this.tagTasks=tagTasks;
        this.tagText=tagText;
        console.log("He sido creado");

        // consulta si se ha usado localStorage, si hay informacion
        // cuando tenemos que acceder?
        if(localStorage.getItem(this.nameLabelStorage) !==null){
            this.tasks = JSON.parse(localStorage.getItem(this.nameLabelStorage));
             /* obtener el ultimo id operador ternario ? if , : else
                    Conditional operator (c ? t : f)    */
            this.lastId = this.tasks.length > 0 ?
                        this.tasks[this.tasks.length-1].id : 0;
            this.refresh();
        }
    }

    add(){
        this.lastId++;
        /* push agregua un elemento al final, 
        en este caso se agrega un objeto anonimo */
        this.tasks.push({
            id: this.add.lastId,
            text: this.tagText.value
        });
        localStorage.setItem(this.nameLabelStorage,
            JSON.stringify(this.tasks));
        console.log(this.tasks);

        this.tagText.value = "";    // borra el contenido del contenedor
        this.tagText.focus();       // agreua el foco en el textBox
        this.refresh();
    }

    remove(id){
        // crear un nuevo arreglo, este objeto es inmutable
        this.tasks = this.tasks.filter(e => e.id !==id);
        localStorage.setItem(this.nameLabelStorage,
            JSON.stringify(this.tasks));
        this.refresh();
    }

    refresh(){
        this.tagTasks.innerHTML = "";

        this.tasks.forEach(e=>{
            //console.log(e);
            let div = document.createElement("div");
            let divRemove = document.createElement("div");
            let buttonRemove = document.createElement("input");

            // div por elemento
            div.innerHTML = e.text;

            // div del boton
            divRemove.className="divButton";

            // botón
            buttonRemove.value="X";
            buttonRemove.className = "btn-danger";
            buttonRemove.type = "button";
            buttonRemove.addEventListener("click",()=>{
                //console.log("eliminar "+e.id);
                this.remove(e.id);
            })

            divRemove.appendChild(buttonRemove);
            div.appendChild(divRemove);

            // agregar
            this.tagTasks.appendChild(div);

        });
    }

}
