# Creación de un proyecto Symfony y estructura de directorios

## Creación de un proyecto con Symfony CLI
```bash
    # Para una web tradicional
    symfony new my_project_directory --version="6.3.*" --webapp

    # Para una API o microservicio
    symfony new my_project_directory --version="6.3.*"
```

## Creación de un proyecto con Composer
```bash
    # Para una web tradicional
    composer create-project symfony/skeleton:"6.3.*" my_project_directory
    cd my_project_directory
    composer require webapp

    # Para una API o microservicio
    composer create-project symfony/skeleton:"6.3.*" my_project_directory
```

## Estructura de directorios
La típica estructura de directorios de un proyecto con Symfony sería la siguiente:

**bin:** contiene archivos ejecutables relacionados con el proyecto, como el archivo console que se utiliza para ejecutar comandos de consola.

**config:** aquí se encuentran los archivos de configuración del proyecto, como los archivos de configuración de enrutamiento (routes.yaml o routes.php), configuración de servicios (services.yaml o services.php) y otras configuraciones.

**public:** Es el directorio raíz del servidor web. Contiene el archivo index.php, que es el punto de entrada de la aplicación Symfony. También puede incluir otros archivos estáticos, como hojas de estilo CSS, imágenes, JavaScript, etc.

**src:** Este directorio es el lugar donde se encuentra el código fuente de la aplicación. Aquí se ubican las clases, controladores, modelos y cualquier otro código específico del proyecto.

**templates:** Contiene las plantillas de vistas de la aplicación. Symfony utiliza el motor de plantillas Twig de forma predeterminada, por lo que los archivos de plantilla tienen la extensión .html.twig. Aquí se definen las vistas que se renderizan y presentan al usuario.

**tests:** En este directorio se ubican los archivos de pruebas unitarias y de integración. Puedes utilizar diferentes bibliotecas y herramientas para realizar pruebas en Symfony, como PHPUnit.

**translations:** Si tu aplicación es multilingüe y necesita traducciones, puedes almacenar los archivos de traducción en este directorio.

**var:** Contiene archivos generados automáticamente, como cachés, logs y otros archivos temporales.

**vendor:** Es el directorio donde se instalan las dependencias de tu proyecto Symfony utilizando Composer, el administrador de paquetes de PHP. No se recomienda modificar manualmente los archivos de este directorio.

**.env:** Archivo que contiene las variables de entorno para la configuración del proyecto, como las credenciales de la base de datos o las claves de API.

**composer.json y composer.lock:** Estos archivos son utilizados por Composer para administrar las dependencias del proyecto y sus versiones.

Estos serían los directorios principales que se encuentran en un proyecto Symfony típico. Sin embargo, ten en cuenta que dependiendo de las configuraciones y las necesidades de tu proyecto, es posible que encuentres otros directorios o archivos adicionales.