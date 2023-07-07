# Rutas 

Las rutas son definiciones que mapean una URL específica a un controlador y una acción en tu aplicación. Las rutas son fundamentales para el enrutamiento de solicitudes y permiten que Symfony determine qué controlador y acción deben manejar una solicitud entrante.

Las rutas en Symfony las podemos configurar en YAML, XML, PHP  o usando atributos. 
Todos los formatos proporcionan las mismas características y rendimiento, así que elige tu favorito. Sin embargo, Symfony recomienda la configuración con atributos porque es ponemos la ruta y el controlador en el mismo lugar. 

# Crear rutas con atributos
Como ya comentamos, los atributos PHP permiten definir rutas junto al código de los controladores asociados a dichas rutas. Los atributos son nativos en PHP 8.

Para utilizarlos primero debemos configurar el fichero *config/routes/attributes.yaml*
```bash
# config/routes/attributes.yaml
controllers:
    resource:
        path: ../../src/Controller/
        namespace: App\Controller
    type: attribute

kernel:
    resource: App\Kernel
    type: attribute
```

Esta configuración le dice a Symfony que busque las rutas definidas como atributos en las clases declaradas en el espacio de nombres *App\Controller* y almacenadas en el directorio *src/Controller/*.

Por ejemplo, quieres definir una ruta para la URL /blog en tu aplicación. Para ello, crea una clase controladora como la siguiente:

```php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'blog_list')]
    public function list(): Response
    {
        // ...
    }
}
```

Esta configuración define una ruta llamada *blog_list* que se ejecuta cuando se llame a */blog*. Cuando se produce la coincidencia, la aplicación ejecuta el método list() de la clase BlogController.

## Crear routas con YAML,XML o PHP.
En vez de definir las rutas en el controladores, podemos hacerlo en utilizando YAML, XML o PHP en un fichero separado.

Vamos a ver como sería la definición de la ruta anterior con YAML: 
```php 
# config/routes.yaml
blog_list:
    path: /blog
    # the controller value has the format 'controller_class::method_name'
    controller: App\Controller\BlogController::list
```
En el fichero *config/routes* añadimos el nombre de la ruta, la path de la misma y el controlador y la función asociada.


## Restricción de métodos
Por defecto, las rutas responden a cualquier verbo HTTP (GET, POST, PUT, etc.). Podemos utilizar la opción methods para restringir los verbos a los que debe responder cada ruta:

En los atributos:
```php
// src/Controller/BlogApiController.php
namespace App\Controller;

// ...

class BlogApiController extends AbstractController
{
    #[Route('/api/posts/{id}', methods: ['GET', 'HEAD'])]
    public function show(int $id): Response
    {
        // ... return a JSON response with the post
    }

    #[Route('/api/posts/{id}', methods: ['PUT'])]
    public function edit(int $id): Response
    {
        // ... edit a post
    }
}
```
Con un fichero YAML:
```php
# config/routes.yaml
api_post_show:
    path:       /api/posts/{id}
    controller: App\Controller\BlogApiController::show
    methods:    GET

api_post_edit:
    path:       /api/posts/{id}
    controller: App\Controller\BlogApiController::edit
    methods:    PUT
```
