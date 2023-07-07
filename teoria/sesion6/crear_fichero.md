# Crear un fichero PHP

## Etiquetas de apertura

Cuando PHP analiza un fichero, busca las **etiquetas de apertura y cierre**, que indican dónde empieza y finaliza la interpretación del código. Este mecanismo permite añadir código PHP en otro tipo de documentos (por ejemplo, en HTML), ya que todo lo que esté fuera de las etiquetas de apertura y cierre de PHP será ignorado. 

```php
<?php 

  //Aquí el código
  
 ?>
 ```

 NOTA: Si un fichero contiene solamente código de PHP, es preferible omitir la etiqueta de cierre de PHP al final del mismo. Así se previene la adición de espacios en blanco o nuevas líneas accidentales después de la etiqueta de cierre, lo cual causaría efectos no deseados 

```php
 <?php
echo "Hola mundo";

// ... más código

echo "Última sentencia";

// el script finaliza aquí sin etiqueta de cierre de PHP
```

## Extensión 

Un fichero PHP tendrá la extensión *.php. Por ejemplo: **miFichero.php**.

