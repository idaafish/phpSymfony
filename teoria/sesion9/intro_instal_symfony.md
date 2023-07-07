# Introducción a Symfony
Symfony es un framework de desarrollo de aplicaciones web basado en PHP. Fue lanzado en 2005 y se ha convertido, junto con Laravel, en uno de los frameworks más populares y ampliamente utilizados en la comunidad de desarrollo PHP.

#### ¿Qué es un framework?
Un framework es un conjunto de herramientas, bibliotecas y pautas que proporcionan una estructura predefinida para el desarrollo de software. Se trata de una base sobre la cual los desarrolladores pueden construir aplicaciones de manera más eficiente y consistente, ya que muchas de las tareas comunes y repetitivas ya están implementadas en el framework (enrutamiento, gestión de bases de datos, manejo de sesiones...)

Algunas características de Symfony:

- **Estructura MVC:** sigue el patrón Modelo-Vista-Controlador (MVC) para organizar el código de la aplicación. 

- **Componentes reutilizables** se basa en un conjunto de componentes independientes y reutilizables que abordan tareas comunes en el desarrollo web, como enrutamiento, validación de formularios, gestión de sesiones, acceso a bases de datos, autenticación y más. Estos componentes pueden ser utilizados de forma modular en diferentes proyectos. Algunos de ellos son: 

    - **HTTP Foundation:** Proporciona una abstracción orientada a objetos de las solicitudes y respuestas HTTP. Permite manipular y gestionar parámetros de solicitud, cookies, sesiones y otros elementos relacionados con HTTP.

    - **Routing:** Se encarga de la gestión de las rutas de la aplicación. Permite definir y manejar las URL de la aplicación, asignar controladores a rutas específicas y generar URL inversas.

    - **Security:** Proporciona un conjunto de herramientas para implementar la autenticación, autorización y gestión de roles en una aplicación. Permite controlar el acceso a determinadas áreas o recursos basándose en reglas de seguridad.

    - **Doctrine DBAL:** Proporciona una capa de abstracción para interactuar con bases de datos. Ofrece una API simplificada para realizar consultas y operaciones en la base de datos y soporta múltiples gestores de bases de datos.

    - **Form:** Proporciona herramientas para crear, procesar y validar formularios de manera sencilla. Permite la gestión de campos de formulario, validaciones, presentación de errores y más.

    - **Validator:** Proporciona un conjunto de reglas y herramientas para validar datos y asegurar que cumplan con ciertas condiciones. Incluye validaciones predefinidas y la capacidad de definir validaciones personalizadas.

- **Arquitectura basada en eventos:** utiliza un sistema de eventos y escuchadores para permitir la interacción entre los diferentes componentes de la aplicación. Por ejemplo, el *kernel.request:* que se dispara cuando se recibe una solicitud HTTP antes de que se ejecute el controlador correspondiente. Puedes utilizar este evento para realizar acciones como la validación de la solicitud, la configuración de parámetros adicionales o la ejecución de lógica previa al controlador.

- **Consola de comandos:** proporciona una consola de comandos que facilita la ejecución de tareas comunes de desarrollo, como la generación de código, la ejecución de migraciones de bases de datos y la ejecución de pruebas.

- **Generador de código:** cuenta con un generador de código que simplifica la creación de controladores, entidades, formularios y otros elementos comunes de una aplicación. Esto acelera el proceso de desarrollo y reduce la cantidad de código repetitivo que los desarrolladores deben escribir manualmente.

- **Testing integrado:** tiene un sólido soporte para pruebas unitarias y funcionales. Proporciona herramientas y bibliotecas para escribir pruebas automatizadas y realizar pruebas de forma sencilla, lo que facilita la implementación de pruebas de calidad en las aplicaciones desarrolladas con Symfony.

- **Bundles y comunidad activa:** cuenta con un sistema de bundles, que son paquetes de código que encapsulan funcionalidades específicas. La comunidad de Symfony ha desarrollado una amplia gama de bundles que cubren diversas áreas, lo que permite agregar características adicionales a una aplicación de Symfony de manera modular y reutilizable.

- **Documentación y comunidad:**  cuenta con una documentación extensa y detallada, así como una comunidad activa de desarrolladores. Esto proporciona soporte y recursos valiosos para los desarrolladores que trabajan con Symfony, como foros, grupos de discusión, tutoriales y eventos de la comunidad.

    [DOCUMENTACIÓN](https://symfony.com/doc/current/index.html)

## Instalación
Para instalar Symfony necesitamos tener instalado:
1. PHP (se nos ha instalado con el XAMPP).
2. Composer
3. Symfony CLI - Interfaz de línea de comandos de Symfony(Este paso es OPCIONAL, pero recomendable)

### ¿Que és Symfony CLI?
Es la herramienta de línea de comando proporcionada por el framework que facilita la ejecución de tareas. 

Debemos instalarla como una herramienta independiente y proporciona comandos específicos para simplificar el desarrollo y administración de los proyectos. Por ejemplo:

- **Creación de proyectos:** proporciona un comando para crear rápidamente una estructura básica de un proyecto Symfony. Esto incluye la configuración inicial, la instalación de las dependencias y la generación de archivos y directorios necesarios.

- **Servidor web local:** permite ejecutar un servidor web local directamente desde la línea de comandos. Esto facilita la ejecución y prueba de la aplicación Symfony en un entorno de desarrollo local sin necesidad de configurar servidores web externos.

- **Consola de comandos:** incluye una consola de comandos interactiva que permite ejecutar comandos específicos de Symfony y tareas personalizadas definidas en la aplicación. Esta consola proporciona una interfaz más fácil de usar para ejecutar comandos y realizar tareas comunes.

- **Generación de código:** incluye comandos para generar automáticamente diferentes elementos de código, como controladores, entidades, formularios, migraciones de bases de datos y más. Esto acelera el proceso de desarrollo al evitar la necesidad de escribir código repetitivo manualmente.

- **Ejecución de pruebas:** facilita la ejecución de pruebas unitarias y funcionales en la aplicación Symfony. Proporciona comandos para ejecutar pruebas y generar informes detallados sobre los resultados de las pruebas.

- **Actualización de dependencias:** ofrece comandos para administrar las dependencias de la aplicación Symfony. Permite instalar, actualizar y eliminar paquetes de terceros utilizando Composer, el gestor de paquetes de PHP.


### Instalación de Symfony CLI
Para instalar la línea de comando de Symfony primero tendremos que instalar Scoop, que es un administrador de paquetes que se ejecuta desde el terminal. 

Para instalar Scoop:
1.  Abrir la PowerShell y ejecutar el siguiente comando:
```
Set-ExecutionPolicy RemoteSigned -scope CurrentUser
```

2. Debemos aceptar este cambio que nos permitirá cambilar la política de PowerShell sobre la ejecución de scripts que vengan de internet y firmados con editor de confianza (RemoteSigne). Este cambio sólo se apalica para el usuario actual "CurrentUser".

3. Ejecutar el comando para la instalación de Scoop:
```
Invoke-Expression (New-Object System.Net.WebClient).DownloadString('https://get.scoop.sh')
```

Una vez instalado Scoop, ejecutar el siguiente comando para instalar Symfony CLI: 
```
scoop install symfony-cli
```

**IMPORTANTE!** Si no detecta el comando scoop o el comando symfony una vez instalados debemos **reiniciar el ordenador**. 
