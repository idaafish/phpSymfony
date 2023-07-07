# DOM (Document Object Model)

**DOM** o *Document Object Model* es un conjunto de utilidades específicamente diseñadas para manipular documentos XML. También se puede utilizar para manipular documentos XHTML y HTML.

Técnicamente, DOM es una API de funciones que se pueden utilizar para manipular las páginas HTML de forma rápida y eficiente.

Antes de poder utilizar sus funciones, DOM transforma internamente el archivo HTML original en una estructura más fácil de manejar formada por una jerarquía de nodos. De esta forma, DOM transforma el código HTML en una serie de nodos interconectados en forma de **árbol**.

Este árbol se crea automáticamente por el navegador

Para una página HTML básica cómo la siguiente:

![img](../../assets/sesion5/HTML_DOM.png)

El árbol será el siguiente:

![img](../../assets/sesion5/DOM.png)

[HERRAMIENTA DE DOM](https://yoksel.github.io/html-tree/en/)

## Tipos de nodos en los árboles
La especificación completa de DOM define 12 tipos de nodos, aunque las páginas HTML habituales se pueden manipular manejando solamente cuatro o cinco tipos de nodos (los más comunes):

- **Document:** nodo raíz del que derivan todos los demás nodos del árbol.

- **Element:** representa cada una de las etiquetas HTML. Se trata del único nodo que puede contener atributos y el único del que pueden derivar otros nodos.

- **Attr:** se define un nodo de este tipo para representar cada uno de los atributos de las etiquetas HTML, es decir, uno por cada par atributo=valor.

- **Text:** nodo que contiene el texto encerrado por una etiqueta HTML.

- **Comment:** representa los comentarios incluidos en la página HTML.

## Acceso a los nodos

Antes de nada, recordemos que el acceso a los nodos, su modificación y su eliminación solamente es posible cuando el **árbol DOM ha sido construido completamente**, es decir, después de que la página HTML se cargue por completo. 

Nos tendremos que asegurar de que el código JavaScript solamente se ejecute cuando el navegador ha cargado entera la página HTML. Por ejemplo, con el evento **onload**

```javascript
    window.addEventListener('load', function() {
        console.log('La página ha terminado de cargarse!!');
    });
```
NOTA.- La función *addEventListener()* añade un evento a un objeto en específico.

Para acceder a los nodos tenemos una serie de funciones:

### getElemenstByTagName()
Obtiene todos los elementos de la página HTML cuya etiqueta sea igual que el parámetro que se le pasa a la función y los devuelve con formato array (por esto su nombre es en plural).

El siguiente ejemplo muestra cómo obtener todos los párrafos (p) de una página HTML:

```javascript

    var parrafos = document.getElementsByTagName("p");

```

El valor que se indica delante del nombre de la función (en este caso, **document**) es el nodo a partir del cual se realiza la búsqueda de los elementos. En este caso, como se quieren obtener todos los párrafos de la página, se utiliza el valor document como punto de partida de la búsqueda.

El valor que devuelve la función es un array con todos los nodos que cumplen la condición de que su
etiqueta coincide con el parámetro proporcionado.

El siguiente ejemplo obtiene el texto del primer párrafo del HTML: 

```javascript

    var primerParrafo = parrafos[0].innerHTML;

```

- innerHTML -> Nos devuelve el contenido de los párrafos (el texto en sí)

De la misma forma, se podrían recorrer todos los párrafos de la página con el siguiente código:

```javascript
    
    for(var i=0; i<parrafos.length; i++) {
        var parrafo = parrafos[i].innerHTML;
    }

```

Veamos un ejemplo completo: 

```HTML
    
    <!DOCTYPE html> 
    <html lang="es"> 
        <head> 
        <meta charset="UTF-8" /> 
        <title>JavaScript</title> 
        </head> 
        <body> 
            <p>Este es el primer párrafo</p> 
            <p>Este es el segundo párrafo</p> 
            <input type="button" value="Ver párrafos" onclick="ejecutar();" />    
            <script type="text/javascript"> 
                var parrafos; 
                function ejecutar () { 
                    parrafos = document.getElementsByTagName("p"); 
                    for(let i=0; i<parrafos.length; i++) { 
                        let parrafo = parrafos[i].innerHTML; 
                        alert (parrafo); 
                    } 
                } 
            </script> 
        </body>
    </html>

```

También podemos hacer algo como lo siguiente (aplicar la función de forma recursiva): 

```javascript

    var parrafos = document.getElementsByTagName("p");
    var primerParrafo = parrafos[0];
    var enlacesPrimerP = primerParrafo.getElementsByTagName("a");

```

### getElementsByName()
La función getElementsByName() es similar a la anterior, pero en este caso se buscan los elementos
cuyo atributo atributo name sea igual al parámetro proporcionado. En el siguiente ejemplo, se obtiene directamente el único párrafo con el nombre indicado:

```HTML
    <p name="prueba">...</p>
    <p name="especial">...</p>
    <p>...</p>
    <script>
        var parrafoEspecial = document.getElementsByName("especial");
    </script>

```

El atributo name se puede repetir en un HTML, por esta razón también devuelve un array.

Ejemplo: 

```HTML

    <!DOCTYPE html> 
    <html lang="es"> 
        <head> 
        <meta charset="UTF-8" /> 
        <title>JavaScript</title> 
        </head> 
        <body> 
            <p name="normal">Un párrafo normal</p> 
            <p name="especial">Contenido especial 1</p> 
            <p name="especial">Contenido especial 2</p> 
            <button onclick="ejecutar();"> Mostrar Párrafos Especiales</button> 
            <script type="text/javascript"> 
                var parrafos; 
                
                function ejecutar () { 
                    parrafos = document.getElementsByName("especial"); 
                    for(var i=0; i<parrafos.length; i++) { 
                        var parrafo = parrafos[i].innerHTML; 
                        window.alert (parrafo); 
                    } 
                } 
            </script> 
        </body> 
    </html> 

```

### getElementById()
Devuelve el elemento HTML cuyo atributo id coincide con el parámetro indicado en la función. Como el atributo id debe ser único, la función devuelve únicamente el nodo deseado.

Ejemplo: 

```HTML

    <!DOCTYPE html>
    <html lang="es">
        <head> 
            <meta charset="UTF-8" /> 
            <title>JavaScript</title> 
        </head> 
        <body> 
            <p id="1"> Primer Párrafo</p> 
            <p id="2"> Segundo Párrafo</p> 
            <p id="3"> Tercer Párrafo</p> 
            <input type="button" value="Ver párrafo" onclick="ejecutar();" /> 
            <script language="javascript"> 
                function ejecutar() { 
                    var parrafoElegido = window.prompt (" Seleccione Párrafo (1,2,3): "); 
                    var parrafo = document.getElementById (parrafoElegido); 
                    document.write (parrafo.innerHTML); // Escribimos directamente dentro del body (hay que usar innerHTML)
                } 
            </script> 
        </body> 
    </html> 

```

## getElementsByClassName()
También podemos obtener los elementos por el nombre de la clase.

Ejemplo: 

```HTML

    <!DOCTYPE html>
    <html lang="es">

        <head>
            <meta charset="UTF-8" />
            <title>DOM</title>
            <script language="javascript">
                function pintar() {
                    var color = prompt("Inserta un color para pintar el primer div");
                    var div = document.getElementsByClassName("clase1")[0];
                    div.style = "background-color: "+ color;
                }
            </script>
        </head>¡
        <body>
            <div class="clase1">div1</div>
            <div class="clase2" style="background-color: pink;">div2</div>
            <input type="button" value="Pintar div" onclick="pintar();">
        </body>
    </html>

```


## EJERCICIO 
A partir del siguiente HTML: 

```HTML

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
    </body>
    </html> 

```
Se solicita mostrar por consola: 

- Número de enlaces de la página
- Dirección a la que enlaza el penúltimo enlace
- Número de enlaces que enlazan a http://prueba
- Número de enlaces del tercer párrafo

**AYUDA: Si queremos acceder al contenido de un atributo de un nodo elemento es suficiente con usar nodo.atributo (ej: p.id accede al contenido del id del nodo almacenado en p)**

NOTA.- Para mostrar por consola usaremos la función de javaScript console.log(). 


[SOLUCIÓN EJERCICIO](./solucion_ejercicio_intro_dom.md)
