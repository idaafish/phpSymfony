# Creación de un dominio local

1. Abrir el Blog de Notas como Administrador. 

2. Abrir el archivo *C:\Windows\System32\drivers\etc\hosts*. 

   NOTA.- Si no te aparecen ficheros en el selector de la derecha elige la opción "Todos los archivos". 

3. Añadir la siguiente línea y guardar: *127.0.0.1 miproyecto.test*.

4. Abrir otro fichero: *C:\xampp\apache\conf\extra\httpd-vhosts.conf* y añadir el siguiente código:

    ESTE BLOQUE DE CÓDIGO SÓLO ES NECESARIO AÑADIRLO UNA VEZ
    ```
    NameVirtualHost *
    <VirtualHost *>
      DocumentRoot "C:\xampp\htdocs"
      ServerName localhost
    </VirtualHost>
    ```

    ESTE BLOQUE DE CÓDIGO SE DEBERÁ AÑADIR POR CADA PROYECTO CREADO
    ```
    <VirtualHost *>
      DocumentRoot "C:\xampp\htdocs\prueba\public"
      ServerName miproyecto.test
      <Directory "C:\xampp\htdocs\prueba\public">
        Require all granted
      </Directory>
    </VirtualHost>
    ```

