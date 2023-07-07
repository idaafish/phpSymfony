# Sintaxis PHP

```php
//Comentario en una línea

#Otro forma de poner un comentario en una línea

/*
    * Comentario en bloque. 
    * Un comentario en bloque puede contener muchas líneas
    */
```

## Variables

```php
$nombre = 'Roberto'; //tipo texto
$Nombre = 'Juan'; //tipo texto

$apellido = "Perez"; //tipo texto
$edad = 25; //tipo entero
$nota_media = 8.5; //tipo float (decimal)
$zapato_cuero = "La zapateria";
$zapatoCuero = 'la zapateria';

```

NOTA: Un nombre de variable válido tiene que empezar con una letra o guión bajo.

```php
$4site = 'hola';      // inválido; comienza con un número
$_4site = 'adios';     // válido; comienza con un carácter de subrayado
$täyte = 'bye';    // válido; 'ä' es ASCII (Extendido) 228

``` 

## Constantes 
```php
// Nombres de constantes correctos
define("FOO",     "something");
define("FOO2",    "something else");
define("FOO_BAR", "something more");

const MIN_VALUE = 0.0; 
const MAX_VALUE = 1.0; 

// Nombres de constantes incorrectos
define("2FOO",    "something");

```

NOTA: Efectivamente, desde PHP 5.0.3, ambos métodos se pueden usar para la defición de constantes. En el caso de **define()** puede ser usado en cualquier punto de la ejecución, mientras que **const** que debe ser usado solo en el ámbito de nivel más alto. Esto significa, que const no puede ser usado dentro de estructuras de control o funciones.

[define() y const](https://www.mclibre.org/consultar/php/lecciones/php-constantes.html)


## Arrays indexados
```php
    $frutas = ["Manzana", "Banana"];
    $numeros = [1, 2];

    echo $frutas[0]; //Primer elemento del array. La primera posición del array es 0. 
    echo $frutas[1]; //Segundo elemento del array. 
  
```

## Arrays asociativos
```php
    $usuario = [
        "nombre" => "Clara",
        "apellido" => "Pérez",
        "edad" => 23,
        "email" => "clara.perez@gmail.com"
    ];

    echo $usuario["nombre"] . "<br>"; 
    echo $usuario["apellido"] . "<br>"; 
    echo $usuario["edad"] . "<br>"; 
    echo $usuario["email"] . "<br>";  
  
```

## Cadenas de caracteres (strings)
```php
    $frase = "Hola Mundo!";
    echo $frase;
```

### 1. Operadores  aritméticos: 
Para poder realizar estas operaciones disponemos de los operadores básicos: 

| Ejemplo | Nombre | Resultado |
| ------------ | ------------ | ------------ |
| -$a |	Negación |	Opuesto de $a.|
| $a + $b |	Suma |	Suma de $a y $b.|
|$a - $b |	Resta |	Diferencia de $a y $b.|
| $a * $b |	Multiplicación |	Producto de $a y $b.|
|$a / $b |	División |	Cociente de $a y $b.|
| $a % $b |	Módulo | Resto de $a dividido por $b.|
| $a ** $b |	Exponenciación	| Resultado de elevar $a a $b. |


## Operador de Asignación (=)
```php

    $num = 7; //Asignación simple
    $suma = $num *3; //En esta caso se resuelve la expresión de la derecha y cuando hay un resultado se asigna a suma
    $b = "Hola ";

```

## Operadores de Comparación 
Los operadores de comparación son:

| Ejemplo | Nombre | Resultado |
| ------------ | ------------ | ------------ |
|$a == $b	|Igual	|true si $a es igual a $b después de la manipulación de tipos.|
|$a === $b	|Idéntico	|true si $a es igual a $b, y son del mismo tipo.|
|$a != $b	|Diferente	|true si $a no es igual a $b después de la manipulación de tipos.|
|$a <> $b	|Diferente	|true si $a no es igual a $b después de la manipulación de tipos.|
|$a !== $b	|No idéntico	|true si $a no es igual a $b, o si no son del mismo tipo.|
|$a < $b	|Menor que	|true si $a es estrictamente menor que $b.|
|$a > $b	|Mayor que	|true si $a es estrictamente mayor que $b.|
|$a <= $b	|Menor o igual que	|true si $a es menor o igual que $b.|
|$a >= $b	|Mayor o igual que	|true si $a es mayor o igual que $b.|


```php 
    //Igualdad
    $num = 9;
    $num2 = 9;
    var_dump($num == $num2); // Devuelve true porque son iguales los contenidos de las variables
    $num3 = 109;
    var_dump($num == $num3); // Devuelve false porque no son iguales los contenidos de las variables

    //Igualdad estricta (Idéntico)
    $num = 9;
    $num2 = 9;
    var_dump($num === $num2); // Devuelve true porque son iguales los contenidos de las variables y los tipos
    $num3 = 109;
    var_dump($num === $num3); // Devuelve false porque no son iguales los contenidos de las variables y los tipos
    $num4 = '9';
    var_dump($num === $num4);// Devuelve false porque son iguales los contenidos de las variables aunque no los tipos

    //Desigualdad (Diferente)
    $num = 9;
    $num2 = 9;
    var_dump($num != $num2); // Devuelve false porque son iguales los contenidos de las variables
    $num3 = 109;
    var_dump($num != $num3); // Devuelve true porque no son iguales los contenidos de las variables

    //Desigualdad estricta (No idéntico)
    $num = 9;
    $num2 = 9;
    var_dump($num !== $num2); // Devuelve false porque son iguales los contenidos de las variables y los tipos
    $num3 = 109;
    var_dump($num !== $num3); // Devuelve true porque no son iguales los contenidos de las variables
    $num4 = '9';
    var_dump($num !== $num4);// Devuelve true porque no son iguales los tipos de las variables

    //Mayor o menor que
    $a = 9;
    $b= 8;
    var_dump($a>$b); //Devuelve true porque a es mayor que b
    $c = 9;git stt
    var_dump($a>=$c); //Devuelve true porque a es igual que c

    $cadena = "Hola";
    $cadena2 = "Adios";
    var_dump($cadena > $cadena2); //Devuleve true porque "Hola" es mayor alfabéticamente hablando
    var_dump($cadena < $cadena2);

```

NOTA: La funciíon **var_dump** muestra información sobre una variable (tipo y valor)

## Operadores lógicos

| Ejemplo | Nombre | Resultado |
| ------------ | ------------ | ------------ |
|$a and $b	|And (y)	|true si tanto $a como $b son true.|
|$a or $b	|Or (o inclusivo)	|true si cualquiera de $a o $b es true.|
|$a xor $b	|Xor (o exclusivo)	|true si $a o $b es true, pero no ambos.|
|! $a  |Not(no)	|true si $a no es true.|
|$a && $b	|And (y)	|true si tanto $a como $b son true.|
|$a  \| \| $b	|Or (o inclusivo)	|true si cualquiera de $a o $b es true.|

```php

    $a = (false && true);
    $b = (true  || true);
    $c = (false and false);
    $d = (3>5  or $a == $b );

```

## Condicional simple (if): 
```php
    //Comprobar si un número es mayor que el 9
    $n = 7;
    if ($n > 9 ) {
        echo("Es mayor");
    } else {
        echo("Es menor");
    }
 
    //Comprobar si el usuario acierta el 9 y si lo hace, si el 9 es múltiplo de 3
    $n = 9;
    $numUsuario = 7;
    if ($n == $numUsuario) {
        echo("Has acertado el número");
        if($n % 3 == 0){
            echo "Es múltiplo de 3";
        }
    } else {
        echo("No has acertado el número");
    }
```

[IF](https://www.php.net/manual/es/control-structures.if.php)

## Elseif
Como su nombre lo sugiere, es una combinación de if y else. Del mismo modo que else, extiende una sentencia if para ejecutar una sentencia diferente en caso que la expresión if original se evalúe como false. Sin embargo, a diferencia de else, esa expresión alternativa sólo se ejecutará si la expresión condicional del elseif se evalúa como true.

```php

$a = 5;
$b = 7;
if ($a > $b) {
    echo "a es mayor que b";
} elseif ($a == $b) {
    echo "a es igual que b";
} else {
    echo "a es menor que b";
}

if ($a > 10) {
    echo "a es mayor que 10";
} elseif ($a < 10) {
    echo "a es menor que 10";
} elseif($a == 10) {
    echo "a es igual a 10";
}else{
    echo "a no existe";
}

if ($a > $b) {
    echo "a es mayor que b";
} else{
    if ($a == $b) {
        echo "a es igual que b";
    } else {
        echo "a es menor que b";
        if($a < 3){
            echo "a es menor que 3";
        }else{
            echo "a es mayor que 3:
        }    
    }
}

```

## Operador ternario
En ocasiones queremos introducir sentencias condicionales en una sola línea, El operador ternario es la forma corta de la sentencia if { ... } else { ... }.

Sintaxis: 
```php

(expression1) ? (expression2) : (expression3)

```

```php

$condicion = true;

if ($condicion) {
    $resultado = 'verdadero';
} else {
    $resultado = 'falso';
}

echo $resultado;

//Mismo código pero con el operador ternario
$condicion = false;
$resultado = $condicion ? 'verdadero' : 'falso';
echo $resultado;

```

## Condicional múltiple (switch):
```php 
    $i = "perro";
   switch ($i) {
    case "perro":
        echo "$i es un perro";
        break;
    case "gato":
        echo "$i es un gato";
        break;
    case "avestruz":
        echo "$i es un avestruz";
        break;
}

```

[SWITCH](https://www.php.net/manual/es/control-structures.switch.php);

## For 
```php
    
    for ($i = 1; $i <= 10; $i++) {
        echo $i;
    }
    
    for ($i = 10; $i >= 1; $i--) {
        echo $i;
    }

    for ($i = 1; $i <=10; $i++) {
    if ($i > 3) {
        break;
    }else{
        echo $i;
    }
    }

    for ($i = 1; ; $i++) { //Que la segunda expresión esté vacía significa que el bucle debería ser corrido indefinidamente (PHP implícitamente lo considera como true)
    if ($i > 10) {
        break;
    }
    echo $i;
    }
    
    //Recorrido de array
    $array = array(1, 2, 3, 4);
    for ($i = 1; $i < 4; $i++) {
        echo $array[$i];
    }
    
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i];
    }
    
```
## Foreach
Permite una forma fácil de iterar sobre arrays u objetos. Cuando foreach inicia su ejecución, se apunta directamente al primer elemento del array.

Sintaxis:

```php

    foreach (array as valor) {
        //Código aquí
    }
    
```

```php

    $array = array(1, 2, 3, 4);
    foreach ($array as $valor) {
        $resultado = $valor * 2;
        echo $resultado;
    }
    
    $alumnos = array("Jose","Rut", "Daniel", "Alejandro");
    foreach ($alumnos as $alumno) {
        echo $alumno;
    }

```

## While 
```php

    $i = 1;
    while ($i <= 10):
        echo $i;
        $i++;
    endwhile;

    $n = 9;
    while ($n > 3):
        $n--;
        echo $n;
    endwhile;

```

## Do-while 
```php

    $i = 0;
    do {
        echo $i;
    } while ($i > 0);
```

### Ejercicios: 

1. La función date() con el parametro 'D' nos devuelve las tres primeras letras del día de la semana en inglés: Mon, Tue, Wed, Thu, Fri, Sat, Sun.
Con este pequeño código $dia_ingles = date('D'); tendremos el día en la variable $dia_ingles.
Mostrar el día en español por pantalla. 
    - Primero usando IF-ELSE. 
    - Después usando SWITCH.

2. Una tienda online quiere realizar una mejora en el código de su web. Necesita que la web, según el importe de la cesta, muestre un mensaje u otro al usuario. En concreto quiere que:
    - Si la compra es inferior a 30 euros se le muestre un mensaje en negrita diciendo: 'Compra más o te cobraremos los abusivos 30 euros de gastos de envío'.
    - Si la compra es superior a 30 euros pero inferior a 90 deberemos mostrar un número indicando cuanto le falta para llegar a 90 euros y tener gastos de envío gratuitos. Ejemplo: '¡¡¡Con solo 33.50€ más podrás tener gastos de envío gratis!!!'
    - Si la compra alcanza los 90€ indicaremos un mensaje en negrita: 'Gastos de envío incluidos'.

3. Una tienda online nos ha pedido una mejora para su web. Necesita un tratamiento de la información de la cesta de los clientes que cumpla los siguientes requisitos:
- Si la compra del cliente es inferior a 19 euros podrán requerir 2 cosas:
- Si los productos son de mascotas se mostrará un mensaje: "No se puede realizar el envío".
- Si los productos son de ropa se le mostrará el siguiente mensaje: "Los gastos de envío son 9 euros".
- Si la compra tiene un importe entre 19 y 40 euros se le indicará el mensaje: "Los gastos de envío son 9 euros".
- Si la compra supera los 40 euros deberemos indicar un mensaje de que los portes de envío son gratis.
- Si la compra supera los 200 euros deberemos mostrar un mensaje con un código de descuento: CODIGODESC33.

2. Debemos realizar un script que indique cual es el mayor de 4 números, es decir, nos pasan cuatro numeros enteros y debemos mostrar un mensaje con el mayor de los cuatro. Las variables con los cuatro numeros serán $a, $b, $c y $d.


Más ejercicios - de JavaScript a PHP:
1. Una función que devuelva el número de cifras de un entero solicitado al usuario
2. Una función que muestre al usuario una secuencia de * (se debe construir la cadena de uno en uno), la cantidad de * será solicitada al usuario
3. Una función que permita mostrar la secuencia (se debe construir la cadena de uno en uno):
    ```
     *+_*+_*+_*+_
    ```
4. Una función que permita mostrar un triángulo como el siguiente: 
    ```
    *
    **
    ***
    ****
    *****
    ```
5. Una función que devuelva la diferencia en días entre dos fechas del mismo año (sólo tenemos en cuenta dia y mes)
