function buscar(){
    let username =  document.getElementById("username").value;
    let url = `https://api.github.com/users/${username}`;

    fetch(url)
    .then(res=>res.json())
    .then(json=>{
        let name = json["login"];
        let numRep = json["public_repos"];
        let img = json["avatar_url"];

        console.log(name);
        console.log(numRep);
        console.log(img);

        let imagen = document.createElement("img");
        imagen.src = img;

        let container = document.getElementById("results");
        container.appendChild(imagen);

        let username = document.createElement("p");
        let text = document.createTextNode(name);
        username.appendChild(text);
        container.appendChild(username);

    });
}