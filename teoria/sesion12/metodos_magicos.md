# Metodos Mágicos
Estos métodos son métodos de consultas a la base de datos que vienen por defecto con Symfony y Doctrine. 

Veamos unos ejemplos:
```php
    // src/Controller/ProductController.php
    namespace App\Controller;

    use App\Entity\Product;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class ProductController extends AbstractController
    {
        #[Route('/show-product/{id}', name: 'show_product')]
        public function show(Producto $product): Response
        {
            var_dump($product);

            return new Response('Saved new product with id '.$product->getId());
        }
    }
```

Otra forma de buscar un producto puede ser usando la clase EntityManager.

**¿Qué es el EntityManager?**
Es el objeto que permite realizar las operaciones relacionadas con la alteración de los datos, como las de tipo INSERT, UPDATE, DELETE y para consultas de datos. 

```php
    namespace App\Controller;

    use App\Entity\Product;
    use Doctrine\ORM\EntityManagerInterface;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class ProductController extends AbstractController
    {
        //Atributo $em (representará al Entity Manage)
        private $em;

        //Constructor
        public function __construct(EntityManagerInterface $em)
        {
            $this->em = $em;
        }

        #[Route('/product', name: 'create_product')]
        public function new(): Response
        {
            $product = new Product();
            $product->setName('Keyboard');
            $product->setPrice(1999);
            $product->setDescription('Ergonomic and stylish!');

            //Aquí le estamos diciendo a Doctrine que queremos guardar el nuevo Producto (sin hacer la query todavía)
            $this->em->persist($product);

            // ejecutamos la query, por ejemplo, el insertar. 
            $this->em->flush();

            return new Response('Saved new product with id '.$product->getId());
        }

        #[Route('/show-product/{id}', name: 'show_product')]
        public function show($id): Response
        {
            $product=$this->em->getRepository(Product::class)->findById($id);

            return new Response('Saved new product with id '.$product->getId());
        }

        #[Route('products', name: 'all_products')]
        public function index(): Response
        {
            $products=$this->em->getRepository(Product::class)->findAll();

            return new JsonResponse(["products"=>$products]);
        }
    }
```

