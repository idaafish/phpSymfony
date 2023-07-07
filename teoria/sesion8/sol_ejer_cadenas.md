# Soluciones

- Obtener la longitud de una cadena.
```php
    $cadena = "Hola, mundo!";
    $longitud = strlen($cadena);
```

- Convertir una cadena a minúsculas o mayusculas dependiendo de lo que se elija. 
```php
    $cadena = "Hola, mundo!";
    $mayusculas = true;
    if($mayusculas){
        $cadenaM = strtoupper($cadena);
    }else{
        $cadenaM = strtolower($cadena);
    }
    echo $cadenaM; 
``` 

- Reemplazar parte de una cadena.
```php
    $cadena = "Hola, amigo!";
    $nuevaCadena = str_replace("amigo", "amiga", $cadena);
    echo $nuevaCadena;
```

- Obtener una parte específica de una cadena.
```php
    $cadena = "Hola, mundo!";
    $subcadena = substr($cadena, 5, 5);
    echo $subcadena; 
```

- Buscar la posición de una subcadena en una cadena.
```php
    $cadena = "Hola, mundo!";
    $posicion = strpos($cadena, "mundo");
    echo $posicion; 
```
- Dividir una cadena por los espacios.
```php
    $cadena = "Hola amigo, bienvenido";
    $elementos = explode(" ", $cadena);
    print_r($elementos);
```

- Eliminar los espacios en blanco del inicio y el final de una cadena.
```php
    $cadena = "   Hola, mundo!   ";
    $cadenaSinEspacios = trim($cadena);
    echo $cadenaSinEspacios; 
```

- Convertir una cadena en un array.
```php
    $cadena = "Hola";
    $caracteres = str_split($cadena);
    print_r($caracteres);
```

- Reemplazar múltiples partes de una cadena.
```php
    $cadena = "Hola, amigo!";
    $buscar = array("Hola", "amigo");
    $reemplazar = array("Adiós", "compañero");
    $nuevaCadena = str_replace($buscar, $reemplazar, $cadena);
    echo $nuevaCadena; 
```