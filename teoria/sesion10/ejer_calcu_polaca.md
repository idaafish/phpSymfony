# Más ejercicios

Calculadora polaca inversa (RPN)
La calculadora polaca inversa es un tipo de notación matemática en la que los operadores se colocan después de los operandos en lugar de entre ellos. Por ejemplo, la expresión "2 + 3" se escribiría como "2 3 +" en notación polaca inversa.

Tu objetivo es crear una calculadora polaca inversa utilizando PHP. Debes implementar una función rpnCalculator que tome una cadena con una expresión en notación polaca inversa y devuelva el resultado de la operación.

Instrucciones:
La cadena de entrada estará compuesta por operandos (números) separados por espacios y operadores (+, -, *, /) también separados por espacios.
La calculadora debe admitir operaciones de suma, resta, multiplicación y división.
Puedes asumir que la expresión en notación polaca inversa será válida y estará correctamente formateada.
Puedes utilizar funciones y estructuras de control de PHP según sea necesario.
Aquí tienes un ejemplo de cómo debería funcionar la calculadora:

```php
echo rpnCalculator("5 2 + 4 * 7 -"); // Resultado: 25

// Explicación:
// 5 + 2 = 7
// 7 * 4 = 28
// 28 - 7 = 21