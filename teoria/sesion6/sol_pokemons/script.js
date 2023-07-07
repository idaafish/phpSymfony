function prueba(){

    fetch("https://pokeapi.co/api/v2/pokemon?limit=10")
    .then(res=>res.json())
    .then(json=>{
      
        let results = json ["results"];
        
        let div = document.getElementById("prueba");

        results.forEach(element => {
            let divP = document.createElement("p");
            divP.textContent=`${element["name"]} --- ${element["url"]} `;
            div.appendChild(divP);
        });
    })
}

prueba();