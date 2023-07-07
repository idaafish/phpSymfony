# Espacio de nombres

Un namespace es un directorio, una ubicación de clases, funciones y constantes. Se crean utilizando la palabra reservada namespace al principio del archivo.

Nos permiten crear aplicaciones complejas con mayor flexibilidad evitando problemas de conflictos entre nombres.

```php
    // Directorio: Proyecto/Prueba/MiClase.php
    namespace Proyecto\Prueba;

    class MiClase {
    //...
    }
```
Para usar esa clase en otro fichero lo que haremos será: 
```php
    include 'Proyecto/Prueba/MiClase.php';

    use Proyecto\Prueba\MiClase;

    $miClase = new MiClase;
```