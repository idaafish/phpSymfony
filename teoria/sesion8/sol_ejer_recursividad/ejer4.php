<?php
function reverseString($str) {
    if (strlen($str) <= 1) {
        return $str; // Condición de término: cadena vacía o de longitud 1
    } else {
        $lastChar = substr($str, -1); // Obtener el último carácter de la cadena
        $restOfString = substr($str, 0, -1); // Obtener el resto de la cadena
        return $lastChar . reverseString($restOfString); // Llamada recursiva con el resto de la cadena
    }
}

$text = "Hola, mundo!";
$result = reverseString($text);
echo "La cadena revertida es: $result";