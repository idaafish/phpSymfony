<?php

function contarDigitos($n) {
    if ($n < 10 && $n > -10) {
        return 1; // Condición de término: número tiene un dígito
    } else {
        $n = abs($n); // Tomar el valor absoluto del número para evitar problemas con números negativos
        return 1 + contarDigitos($n / 10); // Llamada recursiva: se divide el número por 10 y se incrementa el contador
    }
}

// Ejemplo de uso
$number = -12345;
$result = contarDigitos($number);
echo "El número $number tiene $result dígitos";