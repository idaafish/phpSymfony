# Composer y Symfony

Componser es un gestor de dependencias/paquetes. 

Nos permite descagar código de terceros e incorporarlo en nuestro proyecto. Por ejemplo, si necesitamos un sistema de inicio de sesión, podríamos generar manualmente todo lo que corresponde al inicio de sesión: los controladores, configuración de seguridad, los formularios, o podríamos utilizar código que ya esté programado e incorporlo en nuestro proyecto.

Al crear nuestro proyecto Symfony podemos ver que tenemos dos ficheros: 

- **composer.json**: Es el fichero que incluye los paquetes que tenemos instalados en nuestro proyecto. Podemos ver qué paquetes necesitamos tener instalados en la sección de *require*. La ubicación de estos paquetes es la carpeta *vendor*.

- **composer.lock**: contiene las versiones exactas del paquete que hemos instalado. Este fichero se crea cuando ejecutamos el comando *composer install*. 

Debemos entender de forma general como funciona: 

El comando *composer install*, lee el archivo composer.json (si no hay un composer.lock creado), va a la sección de *require* e instala cada uno de los paquetes que esten en dicha sección.
Si el composer.lock ya está creado, lo que hará es instalar la versión exacta que indique este fichero. 

Esto es útil por si queremos descargar un repositorio con un proyecto Symfony. La carpeta vendor ocupa mucho espacio por lo que no se debe subir al repositorio. Así que teniendo el fichero composer.json o/y el fichero composer.lock una vez descargado el código podemos instalar las dependencias con las mismas versiones que necesitamos en el proyecto: 

```
    git clone path_repo
    cd my-project/
    composer install
```

**IMPORTANTE!** El fichero .env tampoco se debe subir al repositorio, ya que contiene datos de configuración como puertos, usuarios y contraseñas del gestor de bases de datos....

## Instalación de Componentes de Symfony
Tambien podemos usar Composer para instalar los componentes de Symfony que queremos:
```
    command require symfony/nombre_componente
```

Por ejemplo:
```
    command require symfony/console
```

## Ejercicio:
1. Vamos a crear un repositorio. 
2. Crear un proyecto de Symfony. 
3. Subir el proyecto al repositorio ignorando la carpeta vendor y el fichero .env (Esto lo podemos hacer añadiendo la ruta en el fichero *.gitignore*).
4. Intercambiemos la url de nuestro repositorio con la de otro compañero.
5. Clonemos el repositorio e instalemos las dependencias necesarias con el comando *composer install*. 


