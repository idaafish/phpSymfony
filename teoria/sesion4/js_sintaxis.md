# Introducción a JavaScript

¿Qué es?
Es un lenguaje de programación o de secuencias de comandos que te permite implementar funciones complejas en páginas web. Es la tercera capa del pastel de las tecnologías web estándar (HTML, CSS y JavaScript). 

Permite crear contenido de actualización dinámica, controlar multimedia, animar imágenes...

## Sintaxis JS

### Comentarios
Sirven para documentar el código. Son líneas ignoradas por el intérprete o compilador a la hora de ejecutar/compilar el programa. 

Los comentarios en Javascipt se colocan como se puede ver en el siguiente ejemplo: 

### Ejemplo: 
```javascript 
    // Cometario de linea
    /*
        Comentario de bloque
    */
```

### Variables
Una variable es donde se almacenan los datos en un programa y cuyo valor puede variar. 

A más bajo nivel, es un hueco en memoria volátil (RAM), que tiene un tamaño asociado a su tipo, como ya hemos comentado, y que permite almacenar valores.

### Ejemplo:  
```javascript

    var n = 9; //usada para variables globales
    let n2 = 8; //usada para variables locales

    var a = true; //Booleano
    var c = 'a'; //Caracter
    var n3 = 7; //Entero
    var n4 = 6.78; //Real
```

Para declarar variables se usan las palabras reservadas **var** o **let**.
**let** te permite declarar variables limitando su alcance al bloque, declaración, o expresión donde se está usando. A diferencia de la palabra clave **var** la cual define una variable global o local en una función sin importar el ámbito del bloque.

### El ámbito de una variable
El ámbito de una variable define su alcance de uso, o lo que es lo mismo, en qué secciones de código una variable está disponible. Fuera de este ámbito, una variable no podrá ser accedida (no existe). Hay tres tipos de ámbitos:

- Local: sólo están visibles dentro del bloque de código donde se han declarado (dentro de un método, un bucle, un condicional…), cuando éste finaliza, deja de existir.
 
- Global: son aquellas que pertenecen que se pueden acceder desde todo nuestro programa/script. No se deben usar variables globales.

[VAR](https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Statements/var)

[LET](https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Statements/let)		

## Constantes 
Las constantes también almacenan datos pero aquellos cuyo valor no cambie. El valor no puede variar durante la ejecución del programa.

### Ejemplo
```javascript

    const PI = 3.1416; 

```

[CONST](https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Statements/let)	

## Arrays de una dimensión
Se trata de un conjunto de elementos consecutivos en memoria, con tamaño fijo, todos del mismo tipo y con un nombre común. A cada elementos accedemos por posición.

Veamos un ejemplo en Javascript: 

```javascript
    let frutas = ["Manzana", "Banana"];
    console.log(frutas); // Manzana y Banana 
    console.log(frutas.length); // 2
    let primero = frutas[0] // Manzana
    let ultimo = frutas[frutas.length - 1]; // Banana
    let nuevaLongitud = frutas.push('Naranja'); // Añade "Naranja" al final
    // ["Manzana", "Banana", "Naranja"]
    ultimo = frutas.pop(); // Elimina "Naranja" del final
    // ["Manzana", "Banana"]
```

## Arrays asociativos
Los arrays asociativos son arrays cuyos keys son strings personalizados. Las keys son la clave del elemento.
Para acceder a los valores de un array asociativos se utiliza la clave del elemento en vez de la posición del mismos.

## Ejemplo:
```javascript
    var usuario = {
        "nombre":"Clara",
        "apellido":"Pérez",
        "edad":23,
        "email":"clara.perez@gmail.com"
    };
    
    var nombre = usuario.nombre;
    var apellido = usuario["apellido"];
```

## Cadenas de caracteres
Se trata de elementos que almacenan más un caracter, la disposición de los mismos es un array, pero por su uso tan habitual, dispone de un tratamiento especial. 

Ejemplo: 
```javascript
    var frase = "Hola Mundo!";
    alert(frase);

    console.log(frase[3]);
    console.log(frase.length);

    let radData = 'My NaMe Is MuD';
    radData.toLowerCase();

    frase.replace('Hola','Adios');
```

## Estructuras de control de flujo
La ejecución de nuestro código Javascript es secuencial, de arriba a abajo y línea a línea. El orden de ejecución es lo que llamamos flujo de ejecución.

Nos podemos encontrar situaciones en las que debamos interferir en ese flujo de ejecución; para esos casos los lenguajes ponen a nuestra disposición varias herramientas, que vamos a ver a continuación: 

1. Condicional simple (if)
2. Condicional múltiple (switch)
3. Bucles: 
    1. For
    2. While
    3. Do-While

Vayamos uno por uno.

### Condicional simple (if): 
Permite ejecutar código si se cumple una condición. 

Sintaxis: 
```

    if(condición){
        codigo;
    }[else{
        codigo2;
    }]

```

El código puede ser cualquier sentencia válida en Javascript.

**Ejemplos:**
```javascript 
    //Comprobar si el usuario acierta el 9
    const n = 9;
    var n2 = prompt("Inserta un número");
    if (n == n2) {
        alert("Has acertado el número");
    } else {
        alert("No has acertado el número");
    }
    
    
    //Comprobar si el usuario acierta el 9 y si lo hace, si el 9 es múltiplo de 3
    const n = 9;
    var n2 = prompt("Inserta un número");
    if (n == n2) {
        alert("Has acertado el número");
        if(n % 3 == 0){
            alert("Es múltiplo de 3");
        }
    } else {
        alert("No has acertado el número");
    }
    
    
    //Comprobar si el usuario acierta el 9 y si el 9 es multiplo de 3 (a la vez)
    const n = 9;
    var n2 = prompt("Inserta un número");
    if (n == n2 && n %3 == 0) {
        alert("Has acertado el número y es multiplo de 3");
    } else {
        alert("No has acertado el número");
    }
    
    
        //Comprobar si el usuario acierta el 9 y si no lo acierta, si el número insertado es múltiplo de 3
    const n = 9;
    var n2 = prompt("Inserta un número");
    if (n == n2) {
        alert("Has acertado el número");
    } else {
        if (n2 % 3 == 0) {
            alert("No has acertado el número, pero has insertado un número multiplo de 3");
        }
    }

```

[IF_ELSE](https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Statements/if...else)


### Condicional múltiple (switch):
Si necesitamos hacer varias comparaciones de igualdad, el switch es una buena manera de agruprlas y simplificar el código.

Síntaxis: 
```

    switch (expresión) {
    case valor1:
        codigo1;
        [break;]
    case valor2:
        codigo2;
        [break;]
    ...
    case valorN:
        codigoN;
        [break;]
    default:
        codigoD;
        [break;]
    }


```

Partes que componen al switch: 

1. expresión -> variable o expresión a evaluar en los case
2. case valor -> valores con los que comparamos 
3. default -> equivalente al else, si no se cumple ningún case
4. break -> Permiten terminar una vez ejecutado el código que queremos

**Ejemplo:**
```javascript 
    var foo = 0;
    switch (foo) {
    case -1:
        console.log('1 negativo');
        break;
    case 0: // foo es 0, por lo tanto se cumple la condición y se ejecutara el siguiente bloque
        console.log(0)
        // NOTA: el "break" olvidado debería estar aquí
    case 1: // No hay sentencia "break" en el 'case 0:', por lo tanto este caso también será ejecutado
        console.log(1);
        break; // Al encontrar un "break", no será ejecutado el 'case 2:'
    case 2:
        console.log(2);
        break;
    default:
        console.log('default');
    }

```

[SWITCH](https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Statements/switch)

### Bucles 
Los bucles son estructuras de repetición que permiten ejecutar código más de una vez.
Disponemos de 3 bucles en Javascript, de manera básica (hay variantes algo más complejas de estos, pero las veremos más adelante)

#### For 
Se usa cuando el número de repeticiones es fijo (aunque sea indeterminado porque dependa del usuario, por ejemplo).

Sintaxis:
```
    for (inicializacion/desde; condición/hasta ; incremento/decremento/de cuanto en cuanto){
        codigo
    }

```

Veamos la estructura de la cabecera o signatura: 

1. inicializacion/desde -> Inicialización de la variable que controla el bucle, nos sirve para contar las iteraciones (cada vez que se ejecuta el código).

2. condición/hasta -> Controla que la variable que lo controla tenga el valor que le indica que se para el bucle

3. incremento/decremento/de cuanto en cuanto -> Depende de si vamos contando hacia adelante o hacia atrás, es la parte del bucle que modifica el valor a la varible que lo controla

**Ejemplos:**
```javascript 
    
    //Muestra los números del 0 al 9
    for (let i = 0; i < 10 ; i = i + 1) {
        console.log(i);
    }
    //Muestra los números del 1 al 10
    for (let i = 1; i <= 10 ; i = i + 1) {
        console.log(i);
    }
    //Muestra los números del 1 al 10 con operador de post incremento
    for (let i = 1; i <= 10 ; i++) {
        console.log(i);
    }
    //Muestra los números pares que hay entre 1 y 10
    for (let i = 2; i <= 10 ; i=i+2) {
        console.log(i);
    }
```

#### While 
Se usa cuando el número de repeticiones depende de una condición.

Sintaxis: 
```

    while(condicion){
        codigo;
    }

```

**Ejemplo:**
```javascript

    var n = 9;
    while(n > 3){
        console.log(n);
        n--; //n = n -1
    }

```

**Ejercicio: Indica el flujo de ejecución**

**IMPORTANTE: Si la condición no se cumple en un while, el código no se ejecuta nunca.**

#### Do-while 
Igual que el while, pero se fuerza la primera ejecución del código. Se usa en validaciones, en las que hay que pedir la información una vez y luego comprobar si cumple las condiciones.

Sintaxis: 
```
    do{
        codigo
    }(condicion);

```

Ejemplo: 

```javascript

    var n = 9;
    do{
        console.log(n);
        n--; //n = n -1
    }while(n < 7);

```

## Ejercicios
1. Solicita al usuario tres números enteros e indícale cuál es el menor.
    NOTA.-Para solicitar al usuario algo por el navegador podemos utilizar la función prompt
2. Solicita al usuario una frase y una letra y muestra la cantidad de veces que aparece la letra en la frase.
3. Suma o resta (según elija el usuario) dos números reales.
4. Almacena en dos variables datos de validación (usuario y contraseña) correctos y permite que el usuario valide (dispone de 3 intentos).
5. Solicita al usuario una letra, si inserta una a muestra el número 7, si es una b, el 9, si es una c el 101 y si no es ninguno de los tres, indícale que se ha equivocado de letra.
 