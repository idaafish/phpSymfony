<?php

function sumArray($array) {
    //Condición de término: si el array está vacio, sin elementos
    if (count($array) == 0) {
        return 0; 
    } else {
        $current = array_shift($array); // Obtenemosel primer elemento del array
        return $current + sumArray($array); // Llamada recursiva con el resto del array
    }
}

$array = [1, 2, 3, 4, 5];
$result = sumArray($array);
echo "La suma de los elementos del arreglo es: $result";
