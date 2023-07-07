# Configuración de la base de datos en el fichero *.env*

Para ello, tenemos que seguir los siguientes pasos:

1. Abrir el archivo .env ubicado en la raíz de tu proyecto Symfony.

2. Busca las líneas que comienzan con *DATABASE_URL=*.

3. Modifica la cadena de conexión según tus necesidades. La cadena de conexión sigue el siguiente formato:

```bash
    DATABASE_URL=driver://user:password@host:port/database_name
```
- **driver:** Especifica el controlador de la base de datos que se utilizará. Por ejemplo, mysql para MySQL, pgsql para PostgreSQL, sqlite para SQLite, etc.

- **user:** El nombre de usuario para acceder a la base de datos.

- **password:** La contraseña del usuario para acceder a la base de datos.

- **host**: La dirección IP o el nombre de host del servidor de la base de datos.

- **port:** El puerto en el que se encuentra el servidor de la base de datos. Por defecto, se usa el puerto estándar para cada tipo de base de datos (por ejemplo, 3306 para MySQL).

- **database_name:** El nombre de la base de datos a la que deseas conectarte.

Por ejemplo, si estás utilizando MySQL y tienes un usuario llamado "myuser" con contraseña "mypassword", alojado en "localhost" en el puerto estándar (3307) y deseas conectarte a una base de datos llamada "mydatabase", la cadena de conexión sería:

```bash
    DATABASE_URL="mysql://root:@127.0.0.1:3307/prueba?serverVersion=mariadb-10.5.8"
```

Si ya tenemos la base de datos creada y tablas en ella con esta configuración ya podríamos hacer accesos a las mismas. 

## Otra forma de crear la base de datos
Si no tenemos la base de datos creada, podemos modificar el fichero .env (como vimos en la sección de arriba) y en el nombre de la base de datos indicar como queremos que se llame la misma. Después debemos ejecutar el siguiente comando para crearla:

```bash
    php bin/console doctrine:database:create
```

## Ejercicio
1. Crea un proyecto nuevo de Symfony
2. Modifica el fichero .env para configurar una base de datos (que aún no esté creada). Por ejemplo:
   ```bash
       DATABASE_URL="mysql://root:@127.0.0.1:3307/prueba?serverVersion=mariadb-10.5.8"
   ```
4. Ejecuta el comando para la creación de base de datos
    ```bash
        php bin/console doctrine:database:create
    ```
5. Comprueba que se ha creado correctamente en el gestor de bases de datos.
   
NOTA.- Recuerda que debes tener el MySQL del XAMPP levantado. 
