# Entidades

Una entidad es una clase que representa una tabla en la base de datos y proporciona métodos para interactuar con los datos en esa tabla. 

Symfony utiliza el Object-Relational Mapping (ORM) para mapear las entidades a la base de datos.

Para crear una entidad en Symfony, se utiliza la anotación @ORM\Entity en la clase y se definen las propiedades de la entidad como variables de clase con sus respectivas anotaciones de mapeo. Estas anotaciones permiten especificar detalles como el nombre de la tabla, las columnas, las relaciones con otras entidades, etc.

```php
    <?php
    namespace App\Entity;

    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity
     * @ORM\Table(name="usuarios")
     */
    class Usuario
    {
        /**
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         * @ORM\Column(type="integer")
         */
        private $id;

        /**
         * @ORM\Column(type="string", length=255)
         */
        private $nombre;

        // Otros campos y métodos de la entidad...
    }
```

## ¿Cómo podemos crear una entidad?
Podríamos crear manualmente el fichero, escribiendo atributo a atributo y método a método. Sin embargo, como ya habíamos visto, Symfony nos proporcionaba un generador de código. 

Para generar una entidad, ejecuta el siguiente comando en la terminal:

```bash 
    php bin/console make:entity Task
```

Para modificar una entidad simplemente debemos ejecutar el mismo comando y seguir los pasos que nos indica el generador de código. 

## Creación de la entidad Usuario
El generador de código de Symfony tiene un comando especial para la creación de la entidad usuarios: 

```bash 
    php bin/console make:user
```

Cuando utilizamos este comando, Symfony sabe que la entidad usuario suele ser para el inicio de sesión. Es por ello que diferenciaron la entidad de usuario con el resto de entidades con este comando. 

# Ejercicio
Crea las entidades necesarias con el generador de código de Symfony utilizando las tablas de la base de datos de la tienda que creamos ayer para ver el funcionamiento básico de phpMyAdmin. 