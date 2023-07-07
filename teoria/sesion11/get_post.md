# Métodos de envio - POST y GET

## GET
Con el método GET, los datos que se envían al servidor se escriben en la misma dirección URL. En la ventana del navegador, lo encontrarás así:

```
www.ejemplo.com/registrarse.php?nombre=pedro&apellido=perez&edad=55&genero=hombre

```
El símbolo ? indica dónde empiezan los parámetros que se reciben desde el formulario que ha enviado los datos a la página.

Después del símbolo ? aparecen parejas de datos con su nombre y valor separadas por el símbolo &. Las parejas dato1=valor1, dato2=valor2, dato3=valor3… reflejan el nombre y el valor de los campos enviados por el formulario.

## POST
El método POST introduce los parámetros en la solicitud HTTP para el servidor. Por ello, no quedan visibles para el usuario. Además, la capacidad del método POST es ilimitada.

Los datos no se muestran en el caché ni tampoco en el historial de navegación. La flexibilidad del método POST también resulta muy útil: no solo se pueden enviar textos cortos, sino también otros tipos de información, como fotos o vídeos.

## Comparación entre GET y POST

|	|GET|POST|
| ------------ | ------------ | ------------ |
| Visibilidad |	Visible en la barra de direcciones para el usuario|	Invisible para el usuario |
| Marcadores e historiales de navegación |	Los parámetros URL se guardan junto al URL	| Los parámetros URL no se guardan junto al URL |
| Caché y registro del servidor |	Los parámetros URL se guardan sin cifrar. |	Los parámetros URL no se guardan automáticamente|
| Comportamiento al actualizar el navegador o retroceder	| Los parámetros URL no se envían de nuevo | El navegador advierte de que los datos del formulario se enviarán de nuevo|
| Tipo de datos |	Solo caracteres ASCII |	Caracteres ASCII y datos binarios|
| Longitud de datos |	Limitado al máximo del URL (2048 caracteres)|	Ilimitado|

## Ejemplos

### POST

[ejemplo_post.html](./ejemplo_methods/ejemplo_post.html)

[script_post.php](./ejemplo_methods/script_post.php)

### GET

[ejemplo_get.html](./ejemplo_methods/ejemplo_get.html)

[script_get.php](./ejemplo_methods/script_get.php)

