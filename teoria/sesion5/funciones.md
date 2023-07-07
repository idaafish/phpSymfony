# Funciones

Una función es un conjunto de instrucciones realizan una tarea y que a lo largo del programa pueden ser ejecutadas multitud de veces. Es por ello, que este conjunto de instrucciones se agrupan en una función. Ayudan a estructurar el código dentro de un programa y a la reutilización de código. Las funciones pueden ser llamadas y ejecutadas desde cualquier punto del programa.

## Funciones Javascript
Javascript nos da varias herramientas para gestionar los subprogramas y en todos los casos por la palabra reservada que usa el propio lenguaje, las denominamos funciones.

Una cuestión importante que debemos tener en cuenta es que **los parámetros de las funciones son de entrada**.

Vamos a ver y a explicar los tipos de funciones que nos permite crear Javascript:

### 1. Funciones declaradas (tradicionales, forma más simple)

Sintaxis: 
```javascript 

    function nombre([param1, param2...]){
        codigo
        return valorDevuelto; //El return termina la ejecución y es opcional
    }
```

**Ejemplo:**

**index.html:**
```html
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <script src="./script.js"></script>
        <input type="button" onclick="holaMundo();" value="Hola Mundo">
        <input type="button" onclick="alert(holaMundo2());" value="Hola Mundo 2">
        <input type="button" onclick="saludar('Davinia');" value="Saludar">
    </body>
    </html>
```

**script.js:**
```javascript 
    function holaMundo(){
        alert("Hola Mundo!");
    }

    function holaMundo2(){
        return "Hola Mundo2!";
    }
    
    //console.log(holaMundo());
    //console.log(holaMundo2());

    function saludar(nombre){
        alert("Hola "+nombre+"!!");
    }
```

### 2. Funciones expresión
Podemos asignar una función completa a una variable o constante, esto nos permite incluírlas en estructuras de datos más complejas.

Sintaxis: 
```javascript 
    const/var nombre = function [nombreF]([param]){codigo}
```

```javascript
    const sumar = function suma(n1, n2){ return n1 + n2; }
    console.log(sumar(3,4));
    //console.log(suma(3,4)); -> Error suma no es accesible por sí misma, sin usar la constante sumar
    var restar = function(n1, n2){ return n1 - n2; } //Con una función anónima, sin nombre
    console.log(restar(3,4));
```

### 3. IIFE: Expresión de función ejecutada inmediatamente
Es posible que queramos crear una función y ejecutarla una única vez, sin ser accesible posteriormente. 

Este tipo de expresiones ejecutan la función directamente.

Sintaxis: 

```javascript
    ( function () {
        codigo
    })();
```

**Ejemplo:**
```javascript
    ( function () {
        let nombre = "Davinia"; //Si la declaráramos con var seguiría siendo local
        alert("Hola " + nombre);
    })();
```

### 4. Funciones flecha
Primero definiremos la lista de parámetros, en caso de ser necesario, entre paréntesis seguido del símbolo **=>** y las **{}** para indicar las instrucciones que se van a realizar.

Además de la sintaxis que es diferente a las anteriores este tipo de funciones tienen las siguientes características.

- No crean su propio contexto al ejecutarse. Al contrario que las "expresión" o las "declaradas" que crea su propio contexto.

- Son anónimas.

- El objeto arguments no se encuentra en el contexto de la función.

- Si al definir la función no utilizamos el símbolo de las llaves. La función devolverá como resultado de la función el resultado de la ejecución de la instrucción que hayamos indicado.

**Ejemplos:** 
```javascript

    // Función tradicional
    function suma100_1(a){
        return a + 100;
    }
    console.log(suma100_1(3));
    // Opciones de sintaxis

    //1
    (a) => {
        return a + 100;
    }

    //2
    (a) => a + 100;

    //3
    a => a + 100;

    const suma100_2 = (a) => a + 100;
    console.log(suma100_2(4));

```

## Ejercicios
1. Realiza todos los ejercicios de las estructuras haciendo uso de un único fichero HTML, un único fichero Javascript y funciones (debes usar al menos una de cada tipo).
2. Dentro del mismo archivo de Javascript y con un único HTML crea: 
    - Una función que devuelva el número de cifras de un entero solicitado al usuario
    - Una función que muestre al usuario una secuencia de * (se debe construir la cadena de uno en uno), la cantidad de * será solicitada al usuario
    - Una función que permita mostrar la secuencia (se debe construir la cadena de uno en uno):
    ```
     *+_*+_*+_*+_
    ```
    - Una función que permita mostrar un triángulo como el siguiente: 
    ```
    *
    **
    ***
    ****
    *****
    ```
    - Una función que devuelva la diferencia en días entre dos fechas del mismo año (sólo tenemos en cuenta dia y mes)

