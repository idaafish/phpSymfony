# Repositorios 
Los repositorios son ficheros que se crean automáticamente al crear una entidad. Van a tener el mismo nombre de la misma seguido de la palabra Repository. Por ejemplo: *ProductRepository.php*.

Ya hemos visto como ejecutar consultas básicas con el Entity Manager en un controlador
```php
    $repository = $entityManager->getRepository(Product::class);
    $product = $repository->find($id);
```
Pero nosotros podríamos necesitar consultas un poco mas complejas, y es ahí donde entran en juego los archivos repositorios.

Por ejemplo, supongamos que desea consultar todos los objetos Producto superiores a un determinado precio. Añada un nuevo método a su repositorio:

```php
// src/Repository/ProductRepository.php

// ...
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    /**
     * @return Product[]
     */
    public function findAllGreaterThanPrice(int $price): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT p
            FROM App\Entity\Product p
            WHERE p.price > :price
            ORDER BY p.price ASC'
        )->setParameter('price', $price);

        // returns an array of Product objects
        return $query->getResult();
    }
}
```

NOTA.- La cadena pasada a createQuery() puede parecer SQL, pero es **Doctrine Query Language**, que permite escribir consultas usando el lenguaje de consulta comúnmente conocido, pero referenciando objetos PHP en su lugar (por ejemplo, en la sentencia FROM).

[MÁS SOBRE DQL](https://www.doctrine-project.org/projects/doctrine-orm/en/2.15/reference/dql-doctrine-query-language.html#doctrine-query-language)

Ahora, puede llamar a este método en el repositorio desde el Controlador:
```php
    // desde el controlador
    $minPrice = 1000;

    $products = $entityManager->getRepository(Product::class)->findAllGreaterThanPrice($minPrice);
```

## Ejercicio
Mirando la documentación de DQL, crea un método personalizado en algun repositorio que se haya creado durante los ejercicios anteriores, Por ejemplo, para los productos, crear un método que buscando por la id únicamente te devuelva al título y la descripción del producto, el precio NO. Luego utiliza ese método en el controlador para ver que funciona correctamente. 
