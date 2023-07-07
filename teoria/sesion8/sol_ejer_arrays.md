# Soluciones

- Modificar un elemento del array utilizando su índice.
```php
    $frutas = array("manzana", "banana", "naranja");
    $frutas[1] = "kiwi";
    print_r($frutas);
```

- Eliminar un elemento del array, no necesariamente el último.
```php
    $frutas = array("manzana", "banana", "naranja");
    unset($frutas[1]);
    print_r($frutas);
```

- Recorrer un array con un foreach.
```php
    $frutas = array("manzana", "banana", "naranja");
    foreach ($frutas as $fruta) {
        echo $fruta . ", ";
    }
```

- Obtener la longitud de un array.
```php
    $frutas = array("manzana", "banana", "naranja");
    $longitud = count($frutas);
    echo $longitud;
```

- Encontrar el máximo de un array de números.
```php
    $números = array(5, 8, 2, 10, 3);
    $max = max($números);
    echo "Valor máximo: " . $max;
```
- Encontrar el mínimo de un array de números. 
```php
    $números = array(5, 8, 2, 10, 3);
    $min = min($números);
    echo "Valor mínimo: " . $min; 
```
- Obtener la suma y el promedio de un array.
```php
    $números = array(5, 8, 2, 10, 3);
    $suma = array_sum($números);
    $promedio = $suma / count($números);
    echo "Suma: " . $suma;
    echo "Promedio: " . $promedio; 
```

- Fusionar dos array en uno.
```php
    $frutas = array("manzana", "banana", "naranja");
    $verduras = array("zanahoria", "lechuga", "tomate");
    $nuevoArray = array_merge($frutas, $verduras);
    print_r($nuevoArray);
```

- Comprobar si un elemento existe en un array.
```php
    $frutas = array("manzana", "banana", "naranja");
    if (in_array("banana", $frutas)) {
        echo "La fruta está en el array";
    } else {
        echo "La fruta no está en el array";
    }
```

- Ordenar un array de forma ascendente.
```php
    $números = array(5, 8, 2, 10, 3);
    sort($números);
    print_r($números);
```

- Ordenar un array de forma descendente.
```php
    $números = array(5, 8, 2, 10, 3);
    rsort($números);
    print_r($números);
```




