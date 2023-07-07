```html
<!DOCTYPE html> 
<html lang="es"> 
<head> 
    <meta charset="UTF-8" /> 
    <title>Ejercicio DOM básico</title>
</head>
<body>
    <p>Lorem ipsum dolor sit amet, <a href="http://prueba">consectetuer adipiscing elit</a>. Sed
    mattis enim vitae orci. Phasellus libero. Maecenas nisl arcu, consequat congue, commodo nec,
    commodo ultricies, turpis. Quisque sapien nunc, posuere vitae, rutrum et, luctus at, pede.
    Pellentesque massa ante, ornare id, aliquam vitae, ultrices porttitor, pede. Nullam sit amet
    nisl elementum elit convallis malesuada. Phasellus magna sem, semper quis, faucibus ut,
    rhoncus non, mi. <a href="http://prueba2">Fusce porta</a>. Duis pellentesque, felis eu
    adipiscing ullamcorper, odio urna consequat arcu, at posuere ante quam non dolor. Lorem ipsum
    dolor sit amet, consectetuer adipiscing elit. Duis scelerisque. Donec lacus neque, vehicula
    in, eleifend vitae, venenatis ac, felis. Donec arcu. Nam sed tortor nec ipsum aliquam
    ullamcorper. Duis accumsan metus eu urna. Aenean vitae enim. Integer lacus. Vestibulum
    venenatis erat eu odio. Praesent id metus.</p>
    <p>Aenean at nisl. Maecenas egestas dapibus odio. Vestibulum ante ipsum primis in faucibus
    orci luctus et ultrices posuere cubilia Curae; Proin consequat auctor diam. <a
    href="http://prueba">Ut bibendum blandit est</a>. Curabitur vestibulum. Nunc malesuada
    porttitor sapien. Aenean a lacus et metus venenatis porta. Suspendisse cursus, sem non dapibus
    tincidunt, lorem magna porttitor felis, id sodales dolor dolor sed urna. Sed rutrum nulla
    vitae tellus. Sed quis eros nec lectus tempor lacinia. Aliquam nec lectus nec neque aliquet
    dictum. Etiam <a href="http://prueba3">consequat sem quis massa</a>. Donec aliquam euismod
    diam. In magna massa, mattis id, pellentesque sit amet, porta sit amet, lectus. Curabitur
    posuere. Aliquam in elit. Fusce condimentum, arcu in scelerisque lobortis, ante arcu
    scelerisque mi, at cursus mi risus sed tellus.</p>
    <p>Donec sagittis, nibh nec ullamcorper tristique, pede velit feugiat massa, at sollicitudin
    justo tellus vitae justo. Vestibulum aliquet, nulla sit amet imperdiet suscipit, nunc erat
    laoreet est, a <a href="http://prueba">aliquam leo odio sed sem</a>. Quisque eget eros
    vehicula diam euismod tristique. Ut dui. Donec in metus sed risus laoreet sollicitudin. Proin
    et nisi non arcu sodales hendrerit. In sem. Cras id augue eu lorem dictum interdum. Donec
    pretium. Proin <a href="http://prueba4">egestas</a> adipiscing ligula. Duis iaculis laoreet
    turpis. Mauris mollis est sit amet diam. Curabitur hendrerit, eros quis malesuada tristique,
    ipsum odio euismod tortor, a vestibulum nisl mi at odio. <a href="http://prueba5">Sed non
    lectus non est pellentesque</a> auctor.</p>
    <script>
        //1 Número de enlaces
        let enlaces = document.getElementsByTagName("a");
        console.log(enlaces.length);

        //2
        let penul = enlaces[enlaces.length-2];
        console.log(penul.href);

        //3
        let arrayE = [];
        for (let i = 0; i < enlaces.length; i++) {
            if(enlaces[i].href == "http://prueba"){
                arrayE.push(enlaces[i]);
            }   
        }
        console.log(arrayE.length);

        //4
        let parrafo = document.getElementsByTagName("p")[2]
        let enalcesParrafo = parrafo.getElementsByTagName("a");
        console.log(enlacesParrafo);
    </script>
</body>
</html> 

```