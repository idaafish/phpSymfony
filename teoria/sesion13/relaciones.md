# Relaciones
Las relaciones describen una interacción entre los datos de entidades. Lo normal es que haya relación entre dos o más entidades. 

**Ejemplos:** 
- Un cliente compra productos, siendo clientes y productos dos entidades.
- Un autor escribe un libro, siendo autores y libros dos entidades.

## Clave primaria
Una clave primaria, es un atributo que permite identificar de forma única a un elemento de una entidad para poder localizar dicho elemento sin confusión; se podría usar como clave primaria en una entidad de empleados, el DNI de cada empleado, aunque esto no es lo más recomendable como veremos, para localizar a cada uno sin lugar a dudas. Cabe resaltar que debe ser un dato único, que no tenga repetidos. 

## Clave Foránea
Se trata de un atributo de una entidad, que nos permitirá identificar de forma única a un elemento de otra entidad, ya que apunta a la clave primaria de otra entidad.

**Ejemplo:** 
Si queremos saber cuál es la contraseña de un usuario concreto, colocaremos en la entidad usuario un atributo que sea el id de la contraseña y así podemos buscar la contraseña concreta, que le pertenece a ese usuario.

### Cardinalidades
Se define como la cantidad de elementos de una entidad, que se relacionan con cada elemento de la otra entidad y viceversa, por tanto tenemos que hablar de cardinalidades de las relaciones. 

Se trata de uno de los conceptos más complicados de comprender, pero es uno de los más importantes, ya que nos indica restricciones muy importantes para la corrección e integridad de la información que vayamos a tratar, ya que indica los elementos a bajo nivel, usando como herramientas las claves foráneas ya mencionadas.

**Ejemplos:** 
- Un cliente tiene una tarjeta y cada tarjeta es de un único clientes, siendo clientes y tarjetas entidades.
- Un cliente puede compara varios productos, pero cada producto sólo lo puede comprar un cliente, siendo clientes y productos entidades.
- Un proveedor provee muchos productos y cada producto lo proveen varios proveedores, siendo productos y proveedores entidades.

### OneToOne - Relación uno a uno
Un elemento perteneciente a la entidad A se relaciona con sólo un elemento de la entidad B y viceversa.

Por ejemplo, un usuario tiene una contraseña y cada contraseña pertenece a un único usuario, siendo usuarios y contraseñas entidades.

### OneToMany - Relación uno a muchos
Un elemento perteneciente a la entidad A se relaciona con varios elementos de la entidad B y cada elemento de la entidad B se relaciona con un sólo elemento de la entidad A.

Por ejemplo:
- Un obrero coloca varios ladrillos, pero cada ladrillo es colocado por un único obrero, siendo obreros y ladrillos entidades.
- Un jefe de obra autoriza la compra de varios materiales, pero cada material sólo ha autorizado su compra un jefe de obra, siendo jefes de obra y materiales entidades.

### ManyToMany - Relación uno a muchos
Un elemento perteneciente a la entidad A se relaciona con varios elementos de la entidad B y cada elemento de la entidad B se relaciona varios de la entidad A.

Por ejemplo:
- En una obra se usan muchos tipos de materiales y cada tipo de material se usa en muchas obras, siendo obras y materiales entidades.
- En una piscina se colocan muchos tipos de productos y cada producto se usa en muchas piscinas, siendo piscinas y productos entidades.
- Un proveedor provee muchos productos y cada producto lo proveen varios proveedores, siendo proveedores y productos entidades.


## Ejemplo el controlador...

Una producto pertenece a una categoría, pero varias caterias pueden pertenecer a varios producto

```php
// src/Controller/ProductController.php
namespace App\Controller;

// ...
use App\Entity\Category;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'product')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $category = new Category();
        $category->setName('Computer Peripherals');

        $product = new Product();
        $product->setName('Keyboard');
        $product->setPrice(19.99);
        $product->setDescription('Ergonomic and stylish!');

        // relates this product to the category
        $product->setCategory($category);

        $entityManager->persist($category);
        $entityManager->persist($product);
        $entityManager->flush();

        return new Response(
            'Saved new product with id: '.$product->getId()
            .' and new category with id: '.$category->getId()
        );
    }
}
```

[EJEMPLO DE RELACION MANY TO MANY](https://symfonycasts.com/screencast/doctrine-relations/many-to-many)
