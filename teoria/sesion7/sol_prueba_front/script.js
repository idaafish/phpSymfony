var bMostrar = document.createElement("button");
var mostrarText = document.createTextNode("Mostrar");
bMostrar.setAttribute("onclick","mostrar()");
bMostrar.appendChild(mostrarText);

var bEliminar = document.createElement("button");
var eliminarText = document.createTextNode("Eliminar");
bEliminar.setAttribute("onclick","eliminar()");
bEliminar.appendChild(eliminarText);

document.body.appendChild(bMostrar);
document.body.appendChild(bEliminar);

function mostrar(){
    fetch("https://dog.ceo/api/breeds/image/random")
    .then(res=>res.json())
    .then(json=>{
        let urlImg = json["message"];
        let image = document.getElementById("imagenRandom");
        if(!image){
            let img = document.createElement("img");
            img.setAttribute("id", "imagenRandom");
            img.setAttribute("src", urlImg);
            document.body.appendChild(img);
        }else{
            image.setAttribute("src", urlImg); 
        }
    });
}

function eliminar(){
    let image = document.getElementById("imagenRandom");
    if(image){
        image.remove();
    }
}

