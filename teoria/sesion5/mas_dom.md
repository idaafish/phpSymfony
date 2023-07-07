# DOM Continuación

## Inserción de nodos en el árbol
Ya hemos hablado de que tenemos diferentes tipos de nodos, los que vamos a usar en este caso, son nodos elemento y de texto.

Una secuencia de pasos que podemos seguir para realizar la creación de nodos e inserción de los mismos es: 

1. Creación de un nodo de tipo Element que represente al elemento.

2.  Creación de un nodo de tipo Text que represente el contenido del elemento.

3. Añadir el nodo Text como nodo hijo del nodo Element.

4. Añadir el nodo Element a la página, como hijo del nodo Element en el que se quiere insertar, que puede ser el body directamente o cualquiera de sus hijos, por ejemplo


Veamos un ejemplo de inserción de un párrafo: 

```HTML

    <!DOCTYPE html> 
    <html lang="es"> 
        <head> 
            <meta charset="UTF-8" /> 
            <title>DOM</title> 
            <script type="text/javascript"> 
                function ejecutar() { 
                    var texto = prompt(" Escriba el texto del párrafo: "); 
                    var etiqueta = document.createElement("p"); 
                    var contenido = document.createTextNode (texto); 
                    etiqueta.appendChild (contenido); 
                    document.body.appendChild(etiqueta); 
                } 
            </script> 
        </head> 
        <body> 
            <p> Primer Párrafo</p> 
            <p> Segundo Párrafo</p> 
            <input type="button" value="Insertar párrafo" onclick="ejecutar();" /> 
        </body> 
    </html>

```

Otro ejemplo: 

```HTML

    <!DOCTYPE html>
    <html lang="es">
        <head> 
            <meta charset="UTF-8" /> 
            <title>DOM</title> 
            <script language="javascript"> 
            function ejecutar() { 
                var num = prompt (" Elija la tabla de Multiplicar: "); 
                // Defino la etiqueta que se va a presentar 
                var etiqueta = document.createElement ("p");
                // Defino el contenido de la etiqueta (aquí, la tabla de Multiplicar) 
                var textoNodo = document.createTextNode (multiplicar(num)); 
                // Completo el nodo agregando el contenido a la etiqueta 
                etiqueta.appendChild(textoNodo); // El nodo completo
                // Añado el nodo (etiqueta+contenido) al parrafo 
                document.getElementById("tablas").appendChild(etiqueta); 
            } 
            function multiplicar(tabla) { 
                var cadena = ""; 
                
                for (let i=1; i<=10; i++) { 
                    cadena = cadena + i + " x " + tabla + " = " + (tabla * i) + "; "; 
                } 
                return cadena; 
            } 
            // Borrado
            function borrar() { 
                document.getElementById("tablas").removeChild (document.getElementById("tablas").lastChild); 
            } 
            </script> 
        </head> 
        <body> 
            <div id="tablas"></div>
            <form name="form1"> 
                <input type="button" value="Multiplicar" onclick="ejecutar();" /> 
                <input type="button" value="Borrar" onclick="borrar();" /> 
            </form> 
        </body> 
    </html>


```

## Borrado de nodos del árbol
En este caso la complejidad del borrado está en la localización del nodo a borrar y del padre del mismo, pero no en el borrado, ya que se realiza directamente con removeChild()

Ejemplo: 

```HTML

    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>DOM</title>
        <script language="javascript">
            function ejecutar() {
                // Obtenemos el elemento 
                var li = document.getElementsByName("li")[(document.getElementsByName("li").length-1)];
                // Obtenemos el padre de dicho elemento 
                var padre = li.parentNode;
                // Eliminamos el hijo (li) del elemento padre 
                padre.removeChild(li);
            }
        </script>
    </head>

    <body>
        <ul>
            <li name="li">Elemento1</li>
            <li name="li">Elemento2</li>
            <li name="li">Elemento3</li>
        </ul>
        <form name="form1">
            <input type="button" value="Borrar li" onclick="ejecutar ();" />
        </form>
    </body>

    </html>

```
```HTML
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>DOM</title>
        <script language="javascript">
            function ejecutar() {
                // Obtenemos el elemento 
                var lis = document.getElementsByName("li");
                var li = lis[(lis.length-1)];
                // Obtenemos el padre de dicho elemento 
                var padre = li.parentNode;
                // Eliminamos el hijo (li) del elemento padre 
                padre.removeChild(li);
            }
        </script>
    </head>

    <body>
        <ul>
            <li name="li">Elemento1</li>
            <li name="li">Elemento2</li>
            <li name="li">Elemento3</li>
        </ul>
        <form name="form1">
            <input type="button" value="Borrar li" onclick="ejecutar ();" />
        </form>
    </body>

    </html>

```

Otro ejemplo: Inserción y borrado en  una lista : 

```HTML

    <!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="UTF-8" />
            <title>DOM</title>
            <script language="javascript">
                function insertar() {
                    var textoNodo = window.prompt(" Escriba el texto del nuevo elemento: ");
                    var etiqueta = document.createElement("li");
                    var contenido = document.createTextNode(textoNodo);
                    etiqueta.appendChild(contenido);

                    document.getElementById("miLista").appendChild(etiqueta);
                }
                function borrar() {
                    miLista.removeChild(document.getElementById("miLista").lastChild);
                }
            </script>
        </head>

        <body>
            <ul id="miLista">
                <li> Primer elemento de la lista</li>
            </ul>
            <input type="button" value="Añadir Elemento" onclick="insertar();" />
            <input type="button" value="Borrar Elemento" onclick="borrar();" />
        </body>
    </html>

``` 

## Extraer información de un input

Ejemplo: 

```HTML

    <!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="UTF-8" />
            <title>DOM</title>
            <script language="javascript">
                function saludar() {
                    var nombre = document.getElementsByName("nombre")[0];
                    alert("Hola " + nombre.value);
                }

            </script>
        </head>

        <body>

            <label>Nombre: </label>
            <input type="text" name="nombre">
            <br>
            <br>
            <br>
            <input type="button" value="Saludar" onclick="saludar();">

        </body>
    </html>

```
## Ejercicio

1. A partir del siguiente código HTML (debes extraer el CSS y el Javascript del mismo): 

```HTML

    <!DOCTYPE html> 
    <html lang="es"> 
        <head> 
            <meta charset="UTF-8" /> 
            <title>Ejercicio DOML</title>
            <style type="text/css">
                .oculto { display: none; }
                .visible { display: inline; }
            </style>
            <script type="text/javascript">
                function muestra() { }
            </script>
        </head>
        <body>
            <p id="texto">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed mattis enim vitae
            orci. Phasellus libero. Maecenas nisl arcu, consequat congue, commodo nec, commodo ultricies,
            turpis. Quisque sapien nunc, posuere vitae, rutrum et, luctus at, pede. Pellentesque massa
            ante, ornare id, aliquam vitae, ultrices porttitor, pede. <span id="adicional"
            class="oculto">Nullam sit amet nisl elementum elit convallis malesuada. Phasellus magna sem,
            semper quis, faucibus ut, rhoncus non, mi. Duis pellentesque, felis eu adipiscing ullamcorper,
            odio urna consequat arcu, at posuere ante quam non dolor. Lorem ipsum dolor sit amet,
            consectetuer adipiscing elit. Duis scelerisque. Donec lacus neque, vehicula in, eleifend
            vitae, venenatis ac, felis. Donec arcu. Nam sed tortor nec ipsum aliquam ullamcorper. Duis
            accumsan metus eu urna. Aenean vitae enim. Integer lacus. Vestibulum venenatis erat eu odio.
            Praesent id metus.</span>
            </p>
            <a id="enlace1" href="#" onclick="muestra();">Seguir leyendo</a> <br /> 
            <a id="enlace2" href="#" class="oculto">Atrás</a> <br />
        </body>
    </html>

```

Completar la función muestra de JavaScript para que realice lo siguiente:

- Ocultar el enlace Seguir leyendo.
- Mostrar el texto incluido dentro del **span**

Una vez acabada esta parte, realizar lo siguiente:

- Crear un nuevo evento en el enlace2 que llamará a la función oculta().
- Dicha función ocultará el enlace2, el texto el span y volverá a mostrar el enlace Seguir leyendo.

2. Cambia todos los ejercicios de funciones para eliminar todos los alert y los prompts y utilizar elementos HTML y funciones de DOM
