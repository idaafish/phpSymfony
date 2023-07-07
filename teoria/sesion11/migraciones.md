# Migraciones

Los archivos de migración son archivos generados automáticamente que contienen instrucciones SQL y código PHP que representan los cambios en la estructura de la base de datos. 

Cada archivo representa un conjunto de cambios específicos que se deben aplicar a la base de datos. 

Estos archivos los vamos a encontrar en el directorio *migrations*.

Los nombres de los archivos de migración suelen seguir una convención basada en marcas de tiempo para garantizar un orden cronológico. Por ejemplo, un archivo de migración puede tener un nombre como Version20210623120000.php, donde la marca de tiempo 20210623120000 indica que se generó el 23 de junio de 2021 a las 12:00:00.

Dentro de cada archivo de migración, encontrarás métodos que contienen instrucciones SQL o código PHP para realizar los cambios necesarios en la base de datos. 

Los métodos up() y down() suelen utilizarse para representar las instrucciones de migración hacia arriba (aplicar los cambios) y hacia abajo (revertir los cambios) respectivamente.
```php
<?php

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210623120000 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // Instrucciones SQL para aplicar los cambios en la base de datos
    }

    public function down(Schema $schema): void
    {
        // Instrucciones SQL para revertir los cambios en la base de datos
    }
}
```

**IMPORTANTE!** Los archivos de migración son generados automáticamente, por tanto, no se recomienda modificarlos manualmente, ya que cualquier cambio manual puede afectar la consistencia y la capacidad de reversión de las migraciones.

## Componente Doctrine Migrations
Los archivos de migraciones son utilizados por el componente Doctrine Migrations para aplicar y revertir los cambios en la base de datos de **manera controlada**.

Proporciona una forma fácil y automatizada de aplicar y revertir cambios en la base de datos, lo que facilita el proceso de migración en diferentes entornos.

Para poder utilizar este componente debemos asegurarnos de que tenemos Doctrine ORN instalado y configurado, y además, asegurarnos de que la conexión a la base de datos se realiza correctamente.

## Generación de migraciones
Una vez creadas las entidades en el proyecto, debemos ejecutar el siguiente comando:
```bash
    php bin/console make:migration
```

Con este fichero creamos el fichero de migraciones con las tablas a crear en nuestra base de datos. Para aplicar estas migraciones debemos ejecutar:
```bash
    php bin/console doctrine:migrations:migrate
```

## Revertir migraciones
Para deshacer los cambios realizados por la última migración y restauran la base de datos al estado anterior debemos ejecutar: 
```bash
    php bin/console doctrine:migrations:migrate prev
```

## Estado de las migraciones
Para ver el estado actual de las migraciones aplicadas y pendientes debemos ejecutar el comando:
```bash
    php bin/console  doctrine:migrations:status
```
Esto te permite obtener información sobre qué migraciones ya se han aplicado y cuáles están pendientes de aplicación.