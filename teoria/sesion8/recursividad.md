# Recursividad

La recursividad es un concepto en programación que implica que una función se llame a sí misma durante su ejecución. En lugar de utilizar un enfoque lineal y repetitivo, la recursividad permite resolver problemas al dividirlos en subproblemas más pequeños y abordarlos de manera recursiva.

 Al dividir un problema en subproblemas más simples, se puede reducir la complejidad y hacer que la solución sea más manejable. 
 
 Además, la recursividad a menudo lleva a la escritura de código más limpio y legible, lo que facilita el mantenimiento y la comprensión del programa.

Algunos algoritmos y estructuras de datos se benefician enormemente del uso de la recursividad. Por ejemplo, la recursividad es esencial en la manipulación de estructuras de datos como árboles y listas enlazadas. También es muy útil en algoritmos de búsqueda y ordenamiento, así como en la resolución de problemas matemáticos y combinatorios.

Sin embargo, es importante tener cuidado al utilizar la recursividad, ya que una implementación incorrecta puede llevar a llamadas recursivas infinitas y causar un desbordamiento de la pila (stack overflow, error de programación en el que falla un intento de escribir datos en un bloque de memoria en particular porque no queda espacio). Por lo tanto, es fundamental establecer una condición de término adecuada que garantice que la función recursiva se detenga en algún punto.

En resumen, la recursividad es un poderoso concepto en programación que permite resolver problemas de manera más eficiente, modular y elegante. Su comprensión y uso adecuado pueden ayudar a los programadores a desarrollar soluciones más robustas y eficaces.

Veamos un ejemplo usando la estructura de árbol (que ya conocemos un poco gracias al árbol DO):

```php
    class Node {
        public $value;
        public $left;
        public $right;

        public function __construct($value) {
            $this->value = $value;
            $this->left = null;
            $this->right = null;
        }
    }

    function searchInTree($node, $target) {
        if ($node === null || $node->value === $target) {
            return $node;
        }

        if ($target < $node->value) {
            return searchInTree($node->left, $target);
        } else {
            return searchInTree($node->right, $target);
        }
    }

    // Ejemplo de uso
    // Creamos un árbol binario simple
    $root = new Node(10);
    $root->left = new Node(5);
    $root->right = new Node(15);
    $root->left->left = new Node(2);
    $root->left->right = new Node(7);
    $root->right->left = new Node(12);
    $root->right->right = new Node(20);

    $targetValue = 7;
    $result = searchInTree($root, $targetValue);

    if ($result !== null) {
        echo "El valor $targetValue fue encontrado en el árbol.";
    } else {
        echo "El valor $targetValue no fue encontrado en el árbol.";
    }
```

Tenemos la clase **Node**, que representa un nodo en el árbol binario. Cada nodo tiene un valor y referencias a sus nodos hijo izquierdo (**left**) y derecho (**right**).

La función **searchInTree** implementa la búsqueda recursiva en el árbol. Comienza verificando si el nodo actual es nulo o si su valor es igual al objetivo de búsqueda. Si alguna de estas condiciones se cumple, se devuelve el nodo actual.

Si el objetivo de búsqueda es menor que el valor del nodo actual, la función se llama a sí misma con el nodo hijo izquierdo. De lo contrario, se llama a sí misma con el nodo hijo derecho. Esto se repite recursivamente hasta que se encuentre el objetivo de búsqueda o hasta que se alcance un nodo nulo.

Al finalizar la búsqueda, el resultado puede ser el nodo que contiene el valor buscado o null si el valor no se encuentra en el árbol. El ejemplo muestra un mensaje en consecuencia.

## ¿Cómo se define una función recursiva?
En PHP, una función recursiva se define de manera similar a cualquier otra función, con la diferencia de que se llama a sí misma dentro de su propia definición.

```php 
    function factorial($n) {
        // Condición de término: si el número es 0 o 1, se devuelve 1
        if ($n === 0 || $n === 1) {
            return 1;
        } else {
            // Llamada recursiva: se multiplica $n por el factorial del número anterior ($n - 1)
            return $n * factorial($n - 1);
        }
    }

    // Ejemplo de uso
    $number = 5;
    $result = factorial($number);
    echo "El factorial de $number es: $result";
```
Veamos el ejemplo del factorial de un número (el producto de todos los números naturales anteriores o iguales a él).

IMPORTANTE. Toda función recursiva debe tener una condición término o caso base.

En la función factorial se establece como condición término si el número es 0 o 1, y entonces se devuelve, ya que el factorial de 0 y 1 siempre es 1.

Si el número no es 0 ni 1, se realiza la llamada recursiva a la función multiplicando el número actual ($n, el número que pasamos como parámetro) por el factorial del número anterior (n$-1).

## Eficiencia de la memoria y rendimiento de la aplicación
El uso eficiente de la memoria es una consideración importante al utilizar recursividad en la programación. La recursividad puede afectar el rendimiento de una aplicación debido a la forma en que se almacenan y gestionan los datos en la memoria.

1. Pila de llamadas (call stack):
- Cuando una función se llama a sí misma de manera recursiva, se crean múltiples instancias de la función en la pila de llamadas.
- Cada llamada recursiva se coloca en la parte superior de la pila, y las llamadas anteriores permanecen en espera hasta que se resuelvan las llamadas recursivas más nuevas.
- Cada instancia de la función en la pila de llamadas ocupa espacio en la memoria, lo que puede aumentar el consumo de memoria a medida que se realizan más llamadas recursivas.

2. Profundidad de la recursión:
- La profundidad de la recursión se refiere al número de llamadas recursivas anidadas que se producen antes de alcanzar la condición de término.
- Si la profundidad de la recursión es muy alta, puede haber un gran número de instancias de función en la pila de llamadas, lo que puede agotar la memoria disponible.
- En casos extremos, una recursión muy profunda puede provocar un desbordamiento de la pila (stack overflow), donde la pila de llamadas excede su capacidad máxima y la aplicación se bloquea o se cierra abruptamente.

3.Consumo de memoria adicional:
- Además de la pila de llamadas, la recursividad también puede requerir almacenamiento adicional para los datos utilizados en cada llamada recursiva.
- Cada llamada recursiva puede tener sus propias variables locales y estructuras de datos, lo que puede resultar en un consumo significativo de memoria adicional a medida que aumenta la profundidad de la recursión.

## Ejercicios
1. Cálculo de la suma de los elementos de un array:
- Define una función recursiva que tome como argumento un array de números.
- La función debe sumar los elementos del array utilizando recursividad.
- Cada llamada recursiva debe reducir el tamaño del array, sumando el elemento actual con la suma del resto del array.

2. Generación de la serie de Fibonacci:
- Define una función recursiva que tome como argumento un número entero n.
- La función debe calcular el n-ésimo número de la serie de Fibonacci utilizando recursividad.
- Cada llamada recursiva debe calcular la suma de los dos números anteriores en la serie.

3. Conteo de dígitos en un número entero:
- Escribe una función recursiva llamada contarDigitos que tome un número entero como argumento y cuente la cantidad de dígitos que tiene. Implementa la función utilizando recursividad y muestra el número de dígitos de un número ingresado por el usuario.

4. Revertir una cadena de texto:
- Define una función recursiva que tome como argumento una cadena de texto.
- La función debe revertir la cadena utilizando recursividad.
- Cada llamada recursiva debe reducir la cadena, tomando el último carácter y concatenándolo con la cadena revertida.


