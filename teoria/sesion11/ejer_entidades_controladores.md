# Ejercicios

1. Crea una entidad tarea, que tenga los siguientes atributos:
- titulo: el título de la tarea
- descripcion: la descripción de la misma
- estado: si está hecha o no.

2. Crea un controlador que gestione la entidad tarea, que tenga los siguientes métodos:
- uno para mostrar el listado de tareas.
- uno para crear una nueva tarea.
- uno para eliminar una tarea.
- uno para modificar una tarea.
- uno para mostrar una tarea. 

NOTA.- Ten en cuenta que todavía no hemos visto como realizar consultas,inserciones y demás acciones en la base de datos, podemos simplemente poner un comentario en donde creeriamos que fuese a estar el código. 

3. Crea un controlador para realizar una calculadora polaca y revizando los ejemplos anteriores, intentar mostrar en una vista el resultado. 

¿Qué es la calculadora polaca?
La calculadora polaca inversa es un tipo de notación matemática en la que los operadores se colocan después de los operandos en lugar de entre ellos. Por ejemplo, la expresión "2 + 3" se escribiría como "2 3 +" en notación polaca inversa.

Debes implementar una función rpnCalculator que tome una cadena con una expresión en notación polaca inversa y devuelva el resultado de la operación.

Instrucciones:
- La cadena de entrada estará compuesta por operandos (números) separados por espacios y operadores (+, -, *, /) también separados por espacios.
- La calculadora debe admitir operaciones de suma, resta, multiplicación y división.
- Puedes asumir que la expresión en notación polaca inversa será válida y estará correctamente formateada.
- Puedes utilizar funciones y estructuras de control de PHP según sea necesario.
Aquí tienes un ejemplo de cómo debería funcionar la calculadora:

```php
rpnCalculator("5 2 + 4 * 7 -"); // Resultado: 25

// Explicación:
// 5 + 2 = 7
// 7 * 4 = 28
// 28 - 7 = 21
