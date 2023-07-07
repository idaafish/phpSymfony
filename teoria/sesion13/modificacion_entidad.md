# Migraciones - Modificación de una entidad
Si modificamos una entidad, por ejemplo porque añadimos un campo nuevo. Si creamos una migración e intentamos aplicar los cambios nos saldrán errores de tablas ya existentes. 

Para actualizar las tablas usando las migraciones debemos seguir los siguientes pasos:

1. Ejecutar el comando *php bin/console doctrine:migrations:diff*. Este comando te crea un nuevo fichero de migración, unicamente con los cambios nuevos a aplicar. 

2. Después debemos ejecutar el comando *php bin/console doctrine:migrations:execute --up 'DoctrineMigrations\VersionYYYYMMDDHHMMSS'*, siendo *VersionYYYYMMDDHHMMSS* el nombre del fichero de migración que se ha creado al ejecutar el comando diff. 
Como sabemos la función *up* del fichero de migraciones se ejecuta para realizar la aplicación de los cambios en las tablas. Con este comando lo que le estamos diciendo es que ejecute esta función del fichero de migración indicado. 
