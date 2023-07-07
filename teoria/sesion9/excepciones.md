# Excepciones
## ¿Qué son las excepciones?
Las excepciones son objetos que representan condiciones excepcionales o errores que ocurren durante la ejecución de un programa. 

En lugar de detener abruptamente la ejecución, las excepciones permiten capturar y manejar los errores de manera estructurada. Las excepciones se utilizan para controlar situaciones inesperadas y ofrecer una forma elegante de manejarlas.

```php
    function dividir($numero1, $numero2) {
        if ($numero2 == 0) {
            //Lanzamos una excepción utilizando la palabra clave throw y creamos un nuevo
            //objeto de la clase Exception con un mensaje de error específico.
            throw new Exception("Error: División por cero no permitida.");
        }
        
        return $numero1 / $numero2;
    }

    try {
        $resultado = dividir(10, 0);
        echo "El resultado de la división es: " . $resultado;
    } catch (Exception $e) {
        echo "Se produjo una excepción: " . $e->getMessage();
    }
```

NOTA.- En el ejemplo del try y el catch, si se produce una excepción dentro de la función, el flujo del programa se desvía al bloque catch, donde capturamos la excepción utilizando catch (Exception $e). Dentro del bloque catch, podemos acceder al mensaje de la excepción a través de $e->getMessage() y mostrarlo en pantalla.

## Uso de bloques try-catch
Para capturar y manejar excepciones en PHP, se utiliza el bloque try-catch. El bloque try contiene el código donde se puede producir una excepción, y el bloque catch maneja la excepción capturada. Dentro del bloque catch, se puede especificar el tipo de excepción que se desea capturar para un manejo más específico. De esta manera, se pueden tomar acciones adecuadas según el tipo de excepción que ocurra.

```php
    try {
        // Código que puede lanzar una excepción
    } catch (Exception $e) {
        // Manejo de la excepción
    }
```

## Bloque finally y declaración de excepciones 
Además del bloque try-catch, PHP proporciona el bloque finally, que se utiliza para ejecutar código que siempre debe ejecutarse, independientemente de si se produce una excepción o no. Esto es útil para liberar recursos o realizar tareas de limpieza necesarias. Además, PHP permite declarar excepciones en la firma de un método utilizando la palabra clave throws. Esto permite indicar qué tipo de excepciones pueden ocurrir en un método y ayuda a los desarrolladores a comprender cómo manejar adecuadamente esas excepciones.

```php
    try {
        // Código que puede lanzar una excepción
        echo "Ejecutando código dentro del bloque try.<br>";
        throw new Exception("Excepción lanzada dentro del bloque try.");
    } catch (Exception $e) {
        echo "Capturando excepción: " . $e->getMessage() . "<br>";
    } finally {
        echo "Ejecutando código dentro del bloque finally.<br>";
    }
```

## Lanzamiento de excepciones 
En PHP, es posible lanzar manualmente excepciones utilizando la palabra clave throw. Esto permite al programador indicar explícitamente que se ha producido una condición excepcional y detener el flujo normal del programa. Al lanzar una excepción, se puede proporcionar un objeto que herede de la clase Exception o alguna de sus subclases, lo cual permite agregar información adicional sobre la excepción.

```php
    function validarEdad($edad) {
        if ($edad < 18) {
            throw new Exception("Debes ser mayor de edad para acceder.");
        }
        
        echo "Bienvenido, puedes acceder al contenido restringido.";
    }

    try {
        $edadUsuario = 16;
        validarEdad($edadUsuario);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
```


## Tipos de excepciones en PHP
En PHP, existen diferentes tipos de excepciones que se pueden utilizar para manejar errores de manera más específica. A continuación, se mencionan algunos de los tipos de excepciones más comunes:

### Excepciones internas:
- **Exception:** Es la clase base para todas las excepciones en PHP. Puede ser utilizada directamente o se pueden crear subclases para casos más específicos.

- **ErrorException:** Se utiliza para representar errores generados por el intérprete de PHP, como advertencias, avisos, etc.

-**TypeError:** Se lanza cuando ocurre un error de tipo, como pasar un tipo de dato incorrecto a una función o método.

### Excepciones de división por cero:
- **DivisionByZeroError:** Se lanza cuando se intenta dividir un número por cero. Es una subclase de ArithmeticError.

```php
    try {
        $resultado = 10 / 0;
        echo "El resultado es: " . $resultado;
    } catch (DivisionByZeroError $e) {
        echo "Error: División por cero no permitida.";
    }
```

### Excepciones de acceso a memoria:
-**OutOfMemoryError:** Se produce cuando no hay suficiente memoria disponible para completar una operación. Es una subclase de Error.
```php
    try {
        $array = [];
        for ($i = 0; ; $i++) {
            $array[] = $i;
        }
    } catch (OutOfMemoryError $e) {
        echo "Error: No hay suficiente memoria disponible.";
    }
```

### Excepciones de archivo y directorio:
-**FileNotFoundException:** Se lanza cuando se intenta acceder a un archivo que no existe.

-**DirectoryNotFoundException:** Se produce cuando se intenta acceder a un directorio que no existe.

-**FilesystemException:** Clase base para excepciones relacionadas con operaciones de archivos y directorios.

```php
    try {
        $file = fopen("archivo.txt", "r");
        // Realizar operaciones en el archivo
        fclose($file);
    } catch (FileNotFoundException $e) {
        echo "Error: El archivo no existe.";
    } catch (DirectoryNotFoundException $e) {
        echo "Error: El directorio no existe.";
    } catch (FilesystemException $e) {
        echo "Error: Ocurrió un error en la operación de archivos.";
    }
```

### Excepciones de base de datos:
-**PDOException:** Se utiliza para representar excepciones relacionadas con errores en la conexión y consulta a bases de datos a través de la extensión PDO (PHP Data Objects).

-**Excepciones específicas del controlador de base de datos:** Algunos controladores de bases de datos pueden proporcionar sus propias excepciones para manejar errores específicos del motor de base de datos.

```php
    try {
        $dsn = "mysql:host=localhost;dbname=mi_base_de_datos";
        $username = "usuario";
        $password = "contraseña";
        $dbh = new PDO($dsn, $username, $password);
        // Realizar consultas a la base de datos
    } catch (PDOException $e) {
        echo "Error de conexión a la base de datos: " . $e->getMessage();
    }
```
### Excepciones personalizadas:
Los programadores pueden crear sus propias excepciones personalizadas extendiendo la clase Exception o alguna de sus subclases. Esto permite manejar errores específicos de la aplicación de manera más precisa y agregar información adicional sobre la excepción.
Es importante destacar que los tipos de excepciones mencionados son solo ejemplos y que PHP ofrece una amplia variedad de clases de excepciones para diferentes situaciones. Al utilizar tipos de excepciones más específicos, se puede capturar y manejar los errores de manera más adecuada, permitiendo un mayor control sobre el flujo del programa y facilitando la depuración y resolución de problemas.

```php
    class MiExcepcion extends Exception {
        // Propiedades y métodos personalizados
    }

    try {
        // Código que puede lanzar la excepción personalizada
        throw new MiExcepcion("Ocurrió un error personalizado.");
    } catch (MiExcepcion $e) {
        echo "Error personalizado: " . $e->getMessage();
    }
```

## Buenas prácticas y recomendaciones
Al trabajar con excepciones en PHP, es importante seguir algunas buenas prácticas:

1.Capturar excepciones de manera específica en lugar de genérica, lo cual ayuda a identificar y manejar correctamente cada tipo de excepción.

En lugar de capturar todas las excepciones con una sola cláusula catch (Exception $e), es recomendable capturar excepciones específicas y manejarlas de manera adecuada. Esto permite un manejo más preciso de los errores y facilita la depuración.
```php
    try {
        // Código que puede lanzar excepciones
    } catch (FileNotFoundException $e) {
        // Manejo específico para la excepción de archivo no encontrado
    } catch (DatabaseException $e) {
        // Manejo específico para la excepción de base de datos
    } catch (Exception $e) {
        // Manejo genérico para otras excepciones
    } 
```
2. Lanzar excepciones descriptivas: Cuando lances una excepción, asegúrate de proporcionar un mensaje descriptivo que explique claramente el error. Esto facilitará la comprensión del problema y ayudará en la depuración.
```php
    if ($valor < 0) {
        throw new InvalidArgumentException("El valor no puede ser negativo.");
    }
```

3. Utilizar bloques finally para liberar recursos: Siempre que sea posible, utiliza bloques finally para liberar recursos, como cerrar conexiones de base de datos o archivos, independientemente de si se produjo una excepción o no. Esto garantiza que los recursos se manejen adecuadamente y evita posibles fugas de memoria.
```php
    $file = fopen("archivo.txt", "r");
    try {
        // Código que trabaja con el archivo
    } finally {
        fclose($file);
    }
```

4. Se recomienda registrar excepciones para su posterior análisis y resolución de problemas. Sin embargo, es importante tener en cuenta que el uso excesivo de excepciones puede afectar el rendimiento de la aplicación, por lo que es recomendable evaluar si una estructura de control tradicional sería más eficiente en algunas situaciones. Además, se sugiere documentar claramente las excepciones lanzadas.