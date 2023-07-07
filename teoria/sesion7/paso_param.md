# Tipo de paso de parámetros a una función
Los parámetros se puede pasar a una función:
- por valor
- por referencia
- por defecto

## Parámetros por valor
En PHP, por defecto, los parámetros se pasan por valor. Cómo su nombre indica, lo que se pasa es el valor de la variable. 
Es por ello que si el valor la de variable sufre alguna modificación dentro de la función, no afectará al valor inicial de la variable. 

### Ejemplo:
```php

    <?php
        $original = "valor fuera de la función";
        function editar($origin){
            $origin = "valor dentro de la función";
            echo $origin . "<br>";
        }

        echo "Fuera de la función la variable es";
        echo $original . "<br>";

        echo "Dentro de la función la variable es";
        editar($original);

        echo "Fuera de la función la variable sigue valiendo";
        echo $original . "<br>";
    ?>

```

## Parámetros  por referencia
Cuando se pasan los parámetros por referencia, no se pasa el valor de la variable, si no la dirección de memoria en la que está dicha variable. Es por ello, que autorizamos a la función a cambiar el valor original de la variable.

Como en PHP, se pasan por defecto los parámetros por valor, así que para indicar que se pasen por referencia basta con anteponer el caracter ampersand (&) al nombre del parámetro.

### Ejemplo:
```php

    <?php

        $original = "valor fuera de la función";
        function editar(&$original){
            $original = "valor dentro de la función";
            echo $original . "<br>";
        }

        echo "Fuera de la función la variable es";
        echo $original . "<br>";

        echo "Dentro de la función la variable es";
        editar($original);

        echo "Fuera de la función la variable sigue valiendo";
        echo $original . "<br>";

    ?>

```

## Parámetros por defecto
Los parámetros por defecto son constantes y no variables que se pasan a la función. 

NOTA: Los parámetros por defecto deben ser declarados a la derecha de cualquier parámetro que se pasa a la función y que  no sea por defecto.

### Ejemplo:
```php

    <?php
        function por_defecto($autor, $libro="Cien años de soledad"){
            return "El libro es $libro y su autor es $autor";
        }
        
        echo por_defecto("Gabriel García Márquez");
        
        function calcula_carrito($carrito, $gastosEnvio= 20){
            return $carrito + $gastosEnvio;
        }
        
        echo calcula_carrito(30);
        echo calcula_carrito(25);
        echo calcula_carrito(80);
        echo calcula_carrito(15);
    ?>

```
