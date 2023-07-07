<?php

/**
 * La sucesión de Fibonacci es la sucesión de números que, empezando por la unidad, 
 * cada uno de sus términos es la suma de los dos anteriores
 */

function fibonacci($n) {
    // Condición de término: números 0 y 1 en la serie
    if ($n == 0 || $n == 1) {
        return $n; 
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2); // Llamadas recursivas para los números anteriores
    }
}

$number = 7;
$result = fibonacci($number);
echo $result;