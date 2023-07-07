# Controladores

Un controlador es una clase que contiene métodos que se llaman acciones. Cada acción se asocia a una ruta específica en la aplicación y se ejecuta cuando se realiza una solicitud HTTP a esa ruta.

Son componentes clave utilizados para manejar las solicitudes web y generar respuestas. 

Como ya vimos con el Modelo-Vista-Controlador, el controlador es responsable de recibir la solicitud, procesarla y generar una respuesta. Puede interactuar con los modelos de datos, llamar a servicios, realizar cálculos y tomar decisiones sobre cómo responder a la solicitud.

Cada controlador se asigna a una ruta utilizando atributos, YAML, XML o archivos de configuración PHP. 

Symfony proporciona una serie de características y utilidades para facilitar el desarrollo de controladores, como la inyección de dependencias, el manejo de formularios, la validación de datos y la generación de respuestas en diferentes formatos (HTML, JSON, XML, etc.). Además, los controladores pueden aprovechar los componentes de Symfony para acceder a la base de datos, trabajar con sesiones, realizar operaciones de autenticación y autorización, y mucho más.

## Características de los controladores
- **Acciones y rutas**: Cada método en un controlador se llama acción y se asocia a una ruta dentro de la aplicación.

- **Parámetros de acción**: Los controladores pueden recibir parámetros en sus acciones. Estos parámetros pueden ser proporcionados por la URL, como parte de la ruta, o enviados a través de la solicitud HTTP, como parámetros de consulta o datos enviados en el cuerpo de la solicitud.

- **Inyección de dependencias**: permite la inyección de dependencias en los controladores. Esto significa que puedes solicitar que se te entreguen automáticamente servicios u otros objetos necesarios en el constructor o en los métodos de acción, en lugar de tener que instanciarlos manualmente.

- **Servicios y lógica de negocio**: Los controladores son responsables de orquestar la lógica de negocio de tu aplicación. Esto puede implicar interactuar con servicios que encapsulan la lógica, acceder a la base de datos a través de entidades o repositorios, realizar operaciones de validación, manejar la autenticación y autorización, y mucho más.

- **Generación de respuestas**: Después de procesar la solicitud, los controladores generan una respuesta que se envía de vuelta al cliente. Symfony proporciona diversas utilidades y métodos para generar respuestas en diferentes formatos, como HTML, JSON, XML o incluso respuestas binarias.

- **Eventos y filtros**: Symfony permite agregar lógica adicional antes y después de que se ejecute una acción en un controlador, utilizando eventos y filtros. Esto puede ser útil para la manipulación de la solicitud o respuesta, la ejecución de acciones previas o posteriores a la acción principal, la gestión de errores, entre otras cosas.

Veamos un ejemplo, supongamos que necesitamos desarrollar una aplicación para administrar una lista de tareas. Queremos crear un controlador que maneje las acciones relacionadas con las tareas, como mostrar la lista de tareas, agregar una nueva tarea, marcar una tarea como completada, etc.

```php
// src/Controller/TaskController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    #[Route('/tasks', name: 'task_list')]
    public function listTasks(): Response
    {
        // Obtener la lista de tareas desde la base de datos o cualquier otra fuente de datos
        $tasks = ...;

        // Renderizar la plantilla 'list_tasks.html.twig' y pasarle los datos de las tareas
        return $this->render('task/list_tasks.html.twig', [
            'tasks' => $tasks,
        ]);
    }

    #[Route('/tasks/create', name: 'task_create')]
    public function createTask(Request $request): Response
    {
        // Procesar el formulario de creación de tarea enviado por el usuario
            $request->toArray();
            // Guardar la nueva tarea en la base de datos o cualquier otra acción necesaria

            // Redirigir a la página de lista de tareas después de crear una nueva tarea
            return $this->redirectToRoute('task_list');

        // Renderizar el formulario de creación de tarea
        return $this->render('task/create_task.html.twig');
    }

    /**
     * @Route("/tasks/{id}/complete", name="task_complete")
     */
    #[Route('tasks/{id}/complete', name: 'task_complete')]
    public function completeTask($id): Response
    {
        // Marcar la tarea con el ID proporcionado como completada en la base de datos

        // Redirigir a la página de lista de tareas después de marcar una tarea como completada
        return $this->redirectToRoute('task_list');
    }
}
```

En este ejemplo, hemos creado un controlador llamado TaskController con tres acciones:

listTasks(): Esta acción se asocia a la ruta /tasks y muestra la lista de tareas en una plantilla Twig.

createTask(): Esta acción se asocia a la ruta /tasks/create y maneja la creación de una nueva tarea. Renderiza un formulario de creación y procesa los datos enviados por el usuario.

completeTask($id): Esta acción se asocia a la ruta /tasks/{id}/complete y marca una tarea específica como completada en la base de datos.

Cada acción tiene su propia lógica de programación dependiendo de la tarea que realiza. 

## ¿Cómo crear un controlador?
Para crear un controlador con el generador de código debemos ejecutar el siguiente:
```bash
    php bin/console make:controller
```

El comando te preguntará el nombre que le quieres dar a tu controlador . Después de responder,se creará el controlador que incluirá un esqueleto básico con el método index. Así como una vista con la que podrás comprobar que el controlador, la ruta y la vista están configurados correctamente. 

 Luego necesitarás personalizar y agregar la lógica específica que requiere tu aplicación, así como el resto de métodos que necesites

 ## EJEMPLO

[Ejemplo Task Controller](./TaskController.php)

 # Ejercicio 
Crea un controlador por cada entidad creada en el ejercicio anterior (producto y usuario). Comprueba que la vista creada y la ruta asociada funcionan.  

