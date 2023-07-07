# AJAX

## ¿Qué es AJAX?

Significa **A**synchronous **JA**vaScript  + **X**ML (JavaScript asíncrono + XML).

AJAX no es un lenguaje de programación, es un conjunto de tecnologías que permite que las páginas web obtengan respuestas de un servidor sin necesidad de que recargue la página completa. Al combinar estas tecnologías, las páginas web parece que son más receptivas puesto que los paquetes pequeños de datos se intercambian con el servidor y las páginas web no se vuelven a cargar cada vez que un usuario realiza un cambio de entrada.

Por ejemplo, pinchar en un botón y que eso provoque una petición al servidor, por ejemplo el botón de "like" de Facebook o Youtube. Cuando pulsas ese botón la página no se recarga por completo, sino que simplemente se actualiza una parte de la página para que veas que el like se ha realizado, subiendo un contador de likes.

Otro ejemplo, si tienes una cuenta de Gmail, probablemente ya lo hayas experimentado. Cuando usas Gmail y abres mensajes, creas correos y los mandas, etc. La página no se recarga continuamente, con cada acción que solicitas al servidor. En cambio la página se va actualizando por partes, de una manera ágil y dinámica, mostrando lo que va ocurriendo a medida que el usuario hace uso de su casilla de correo. Todo eso ocurre mediante Ajax.

### ¿Qué es eso de asincrono?
Asíncrono es todo proceso que tarda un tiempo en realizarse y que, durante ese tiempo, el motor de Javascript puede estar desocupado o realizando otras tareas. Cuando el proceso termina, entonces el motor de Javascript recibe una señal de recuperación y posiblemente un dato como respuesta, pudiendo seguir con la ejecución de código, así como realizar el tratamiento que corresponda sobre el dato recibido como respuesta.

### Fetch
Es la nueva manera de realizar Ajax, implementado mediante promesas.

**¿Qué son las promesas?**
Es un objeto que representa la terminación o el fracaso de una operación asíncrona.Una promesa representa un valor que puede estar disponible ahora, en el futuro, o nunca.

Es algo que como su nombre indica, en principio pensamos que se cumplirá pero pueden ocurrir:
 - que se cumpla,
 - que no se cumpla
 - o que se quede en un estado incierto indefinidamente 

Por tanto puede tener los siguientes estados:
- pendiente (pending): estado inicial, no cumplida o rechazada.
- cumplida (fulfilled): significa que la operación se completó satisfactoriamente.
- establecida (settled): se ha cumplido o se ha rechazado ("en ello").
- rechazada (rejected): significa que la operación falló.

Como comentamos, las promesas son objetos y por ello pueden tener los siguientes métodos:

- .then(resolve) -> ejecuta la función resolve cuando la promesa se cumple.
- .catch(reject) -> ejecuta la función rejecte cuando la promesa se rechaza
- .then(resolve,reject) -> ejecuta resolve cuando se cumpla y reject cuando se rechaza.

## ¿Cómo consumir una promesa? 
La forma general es utilizando .then() con un único parámetro ya que lo único que nos interesa es realizar la acción que sea si se cumple la promesa.

```javascript
  fetch("ejemplo.json").then(function(response){
    // código
  })
```

Utilizando funciones fecha la legibilidad del código es mejor:

```javascript

    fetch('https://api.github.com/users/emeder0s')
            .then(res=>res.json())
            .then(json=>console.log(json));
```

La función **fetch()** consume una API y devuelve una promesa. 

### Funciones asíncronas
La declaración de la función **async** declara una función asíncrona.

Una función asíncrona puede contener la expresión **await** que lo que hace es pausar la ejecución, espera la resolución de la promesa y devuelve un valor.

**Ejemplo:**
```javascript
async function postJSON(data) {
  try {
    const response = await fetch("https://example.com/profile", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    });

    const result = await response.json();
    console.log("Success:", result);
  } catch (error) {
    console.error("Error:", error);
  }
}

const data = { username: "example" };
postJSON(data);
```

## Ejercicio
- ¿Quieres saber mi información? Aquí la tienes.
Para este ejercicio vamos a utilizar la API de usuarios de GitHub, la cual tiene esta URL: https://api.github.com/users/{username}. {username} es el nombre del usuario en GitHub, por lo que si quieres buscar a cualquier usuario, solo tienes que ponerlo en la url. Por ejemplo, https://api.github.com/users/emeder0s. Si ponéis esta URL en una nueva pestaña del navegador podréis observar qué datos nos devuelve el API.

Lo primero que haremos será crear un input de tipo texto y un botón para buscar. El usuario escribirá en el input el nombre de usuario de GitHub que quiera buscar. Después crearemos una función que se ejecute cuando se pulse el botón buscar y que contenga una petición a la API para obtener información de ese usuario y así mostrarla en nuestra página:

Lo que queremos que se imprima por consola será:

- nombre
- número de repositorios
- avatar (imagen)

Si ya has obtenido toda la información, utiliza las herramientas del arbol DOM para que esta información aparezca en la pantalla.


## SOLUCIÓN:
[FICHERO JS](./sol_ajax/script.js)

[FICHERO HTML](./sol_ajax/index.html)



