# Inclusión de ficheros PHP

Para incluir un archivo PHP en otro archivo PHP, puedes utilizar las funciones
- **include**
- **require**

La diferencia principal entre **include** y **require** es que si el archivo incluido no se encuentra, **include** mostrará una advertencia y continuará la ejecución del programa, mientras que **require** mostrará un error fatal y detendrá la ejecución del programa.

Aquí tienes un ejemplo de cómo usar la función **include**:

```php
    <?php
    include 'archivo.php';
    ?>
```
En este caso, el archivo archivo.php se incluirá en el punto donde se encuentra la función include. Si el archivo no se encuentra, se mostrará una advertencia pero el programa seguirá ejecutándose.

Si prefieres utilizar require en su lugar, el código sería similar:
```php
    <?php
    require 'archivo.php';
    ?>
```
En este caso, si el archivo archivo.php no se encuentra, se mostrará un error fatal y el programa se detendrá.

También puedes utilizar rutas absolutas o relativas para especificar la ubicación del archivo que deseas incluir. Por ejemplo:

```php
    <?php
    include '/ruta/absoluta/archivo.php';
    ?>
```

También se puede usar las funciones:
- **require_once**
- **include_once**


La función **require_once** en PHP se utiliza para incluir un archivo PHP en otro, de manera similar a require. Sin embargo, la diferencia principal es que **require_once** verifica si el archivo ya ha sido incluido previamente en el script actual o en otros archivos incluidos. Si el archivo ya se ha incluido, no se volverá a incluir, evitando así la posibilidad de errores debido a la inclusión múltiple del mismo archivo.

```php
    <?php
    require_once 'archivo.php';
    ?>
```
En este caso, el archivo archivo.php se incluirá en el punto donde se encuentra la función **require_once**, pero solo se incluirá una vez aunque esta línea de código se ejecute varias veces.

La función **require_once** es especialmente útil cuando estás trabajando con múltiples archivos PHP que dependen unos de otros y quieres asegurarte de que un archivo se incluya solo una vez, incluso si hay llamadas repetidas al mismo.

Es recomendable utilizar require_once en lugar de require cuando se trata de archivos que contienen definiciones de clases, funciones o constantes, ya que evita errores de redefinición de elementos.

Recuerda que **require_once** aún muestra un error fatal y detiene la ejecución si el archivo no se encuentra, al igual que require.

La función **include_once** verifica si el archivo ya ha sido incluido previamente en el script actual o en otros archivos incluidos. Si el archivo ya se ha incluido, no se volverá a incluir, evitando así la posibilidad de errores debido a la inclusión múltiple del mismo archivo.

```php
    <?php
    include_once 'archivo.php';
    ?>
```
El fichero archivo.php solo se incluirá una vez aunque esta línea de código se ejecute varias veces y asegurarte de que se incluyan solo una vez.

A diferencia de require_once, si el archivo no se encuentra, **include_once** mostrará una advertencia y continuará la ejecución del programa en lugar de mostrar un error fatal y detener la ejecución.

## Ejemplo completo
Supongamos que tienes dos archivos: clase.php y index.php.

Archivo clase.php:
```php
    <?php
    class MiClase {
        public function saludar() {
            echo "¡Hola desde MiClase!";
        }
    }
    ?>
```

Archivo index.php:
```php
    <?php
    include 'clase.php';

    $miObjeto = new MiClase();
    $miObjeto->saludar();
    ?>
```

## Ejercicio
Crea dos ficheros, en uno define una clase, con sus atributos (protegidos), constructor, getters and setter y algun método. En el otro instancia la clase, inicializa el objeto, utiliza sus métodos, modifica sus atributos y muestra el valor de los mismo por pantalla. 






