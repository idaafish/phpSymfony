# Entornos de desarrollo 
Podemos encontrar diferentes entornos de desarrollo en Symfony. 

Estos diferentes entornos nos permiten separar y configurar de manera específica las diferentes etapas de desarrollo de una aplicación. Por ejemplo:

- **dev (desarrollo):** entorno de desarrollo predeterminado. Está diseñado para facilitar el desarrollo activo de la aplicación, proporcionando información detallada de depuración, mensajes de error claros y desactivando la caché para facilitar la iteración rápida durante el desarrollo. Además, habilita herramientas de depuración y profiling.

- **prod (producción):** es el entorno de producción destinado a su uso en el servidor de producción. En este entorno, la aplicación está optimizada para el rendimiento y se desactivan las herramientas de depuración y mensajes de error detallados. La caché está habilitada para mejorar la velocidad de respuesta.

- **test (pruebas):** se utiliza para ejecutar pruebas automatizadas, como pruebas unitarias e integradas. En este entorno, la aplicación se configura específicamente para ejecutar pruebas y proporcionar informes detallados sobre los resultados de las pruebas.