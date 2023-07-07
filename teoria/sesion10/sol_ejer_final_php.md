# SOLUCIÓN - EJERCICIO FINAL

1. Crea una variable $nombre y asígnale tu nombre. Imprime el contenido de la variable.
```php
    $nombre = "Juan";
    echo $nombre;
```

2. Crea dos variables $num1 y $num2 y asígnales dos números. Realiza la suma, resta, multiplicación y división de estas dos variables e imprime los resultados.
```php
    $num1 = 10;
    $num2 = 5;
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion = $num1 * $num2;
    $division = $num1 / $num2;

    echo $suma;
    echo $resta;
    echo $multiplicacion;
    echo $division;
```

3. Crea una variable numérica precio y asígnale un valor decimal que represente el precio de un producto.
```php
    $precio = 9.99;
    echo $precio;
```

4. Crea una variable de cadena de texto $producto y asígnale el nombre de un producto.
Imprime un mensaje que muestre el nombre del producto y su precio utilizando concatenación de cadenas, siguiendo el siguiente formato: "El producto XYZ tiene un precio de 19.99€".
```php
    $producto = "Camisa de rayas";
    echo "El producto " . $producto ." tiene un precio de 19.99€" 
```

5. Crea una variable $numero y asígnale un número entero. Utilizando una estructura if, verifica si el número es par o impar e imprime un mensaje correspondiente.
```php
    $numero = 7;
    if ($numero % 2 == 0) {
        echo "El número es par";
    } else {
        echo "El número es impar";
    }
```

6. Crea una variable $calificacion y asígnale un número del 1 al 10. Utilizando una estructura switch, imprime un mensaje que indique la calificación correspondiente (por ejemplo, "Aprobado" si la calificación es mayor o igual a 5).
```php
    $calificacion = 8;
    switch ($calificacion) {
        case 10:
            echo "Perfecto";
            break;
        case 9:
            echo "Excelente";
            break;
        case 8:
            echo "Sobresaliente";
            break;
        case 7:
            echo "Bueno";
            break;
        case 6:
            echo "Bien";
            break;
        case 5:
            echo "Aprobado";
            break;
        default:
            echo "Ohh ohh!";
            break;
    }
```

7. Utilizando un bucle for, imprime los números del 1 al 10 en orden ascendente.
```php
    for ($i = 1; $i <= 10; $i++) {
        echo $i . " ";
    }
```

8. Crea una función llamada esPrimo que reciba un número entero como parámetro y devuelva true si es primo y false si no lo es. Prueba la función con varios números.
```php
    function esPrimo($numero) {
        // Caso especial: el número 1 no se considera primo
        if ($numero <= 1) {
            return false;
        }

        // Verificar si el número es divisible por algún número entre 2 y la mitad de su valor
        for ($i = 2; $i <= $numero / 2; $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }

        return true;
    }

    // Pruebas de la función con diferentes números
    $numeros = [7, 12, 23, 30, 37];

    foreach ($numeros as $numero) {
        if (esPrimo($numero)) {
            echo $numero . ' es primo.';
        } else {
            echo $numero . ' no es primo.';
        }
    }
```

9. Crea un array con los nombres de 5 países. Utilizando un bucle foreach, imprime cada uno de los nombres.
```php
    $paises = ["España", "Francia", "Italia", "Alemania", "Reino Unido"];

    foreach ($paises as $pais) {
        echo $pais . "<br>";
    }
```

10. Crea una función llamada invertirArray que reciba un array como parámetro y devuelva un nuevo array con los elementos en orden inverso. Prueba la función con un array de números.
```php
    function invertirArray($array) {
        $invertedArray = [];
        $length = count($array);

        for ($i = $length - 1; $i >= 0; $i--) {
            $invertedArray[] = $array[$i];
        }

        return $invertedArray;
    }

    // Prueba de la función con un array de números
    $numeros = [1, 2, 3, 4, 5];
    $invertedNumeros = invertirArray($numeros);

    // Imprimir el array invertido
    foreach ($invertedNumeros as $numero) {
        echo $numero . ' ';
    }
```

11. Crea una variable $temperatura y asígnale un valor numérico que represente una temperatura en grados Celsius.
Utilizando una estructura if, comprueba si la temperatura es mayor a 30 grados Celsius. Si es así, imprime "Hace mucho calor". De lo contrario, imprime "La temperatura es agradable".
Crea una variable $llueve y asígnale un valor booleano (true o false) que represente si está lloviendo o no.
Utilizando una estructura if, comprueba si está lloviendo. Si es así, imprime "Lleva un paraguas contigo". De lo contrario, imprime "No olvides tu protector solar".
```php
    $temperatura = 32;
    if ($temperatura > 30) {
        echo "Hace mucho calor";
    } else {
        echo "La temperatura es agradable";
    }

    $llueve = true;
    if ($llueve) {
        echo "Lleva un paraguas contigo";
    } else {
        echo "No olvides tu protector solar";
    }
```

12. Crea un array asociativo llamado $persona que contenga las siguientes claves y valores: "nombre", "edad", "ciudad", "profesión". Asigna valores adecuados para cada clave (por ejemplo, "Juan" para "nombre").
Utilizando un bucle foreach, recorre el array $persona e imprime cada clave y su valor correspondiente.
```php
    $persona = array(
        "nombre" => "Juan",
        "edad" => 30,
        "ciudad" => "Madrid",
        "profesión" => "Programador"
    );

    foreach ($persona as $clave => $valor) {
        echo "<li>$clave: $valor</li>";
    }
```

13. Crea una cadena de caracteres $frase que contenga una frase de tu elección.
Convierte la cadena de caracteres en un array, tomando como separador el espacio en blanco.
Imprime cada palabra del array en una línea separada.
```php
    $frase = "Esta es una frase de ejemplo";

    // Convierte la cadena en un array utilizando el espacio en blanco como separador
    $arrayFrase = explode(" ", $frase);

    // Imprime cada palabra del array en una línea separada
    foreach ($arrayFrase as $palabra) {
        echo $palabra . PHP_EOL;
    }
```

14. Crea un array llamado $alumnos que contenga información de varios alumnos. Cada elemento del array debe ser un array asociativo con las claves "nombre", "edad" y "curso" para representar el nombre, la edad y el curso de cada alumno.
Utilizando un bucle foreach, recorre el array $alumnos y calcula el promedio de edades de los alumnos. Imprime el resultado del promedio de edades.
```php
    $alumnos = [
        ["nombre" => "Juan", "edad" => 20, "curso" => "A"],
        ["nombre" => "María", "edad" => 22, "curso" => "B"],
        ["nombre" => "Pedro", "edad" => 19, "curso" => "A"],
        ["nombre" => "Ana", "edad" => 21, "curso" => "B"],
        ["nombre" => "Luis", "edad" => 18, "curso" => "A"]
    ];

    $totalEdades = 0;
    $cantidadAlumnos = count($alumnos);

    foreach ($alumnos as $alumno) {
        $totalEdades += $alumno["edad"];
    }

    $promedioEdades = $totalEdades / $cantidadAlumnos;

    echo "El promedio de edades de los alumnos es: " . $promedioEdades;
```

15. Crea una función llamada dividir que reciba dos números como parámetros y realice la división del primer número por el segundo número. Dentro de la función, verifica si el segundo número es igual a cero. Si el segundo número es cero, lanza una excepción de tipo Exception con un mensaje indicando que la división por cero no está permitida.
Si el segundo número no es cero, devuelve el resultado de la división.
Fuera de la función, utiliza un bloque try-catch para capturar la excepción en caso de que ocurra y muestra un mensaje de error.
```php
    function dividir($num1, $num2) {
        if ($num2 == 0) {
            throw new Exception("La división por cero no está permitida");
        }
        return $num1 / $num2;
    }

    try {
        $resultado = dividir(10, 0);
        echo "El resultado de la división es: $resultado";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
```
