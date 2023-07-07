<?php
class Producto
{
    //Atributos de la clase padre
    private $id;
    private $titulo;
    private $descripcion;
    private $precio_sin_IVA;
    private $stock;

    public function __construct($id, $titulo, $descripcion, $precio_sin_IVA, $stock)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->precio_sin_IVA = $precio_sin_IVA;
        $this->stock = $stock;
    }

    public function getId()
{
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }


    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getPrecioSinIVA()
    {
        return $this->precio_sin_IVA;
    }

    public function setPrecioSinIVA($precio_sin_IVA)
    {
        $this->precio_sin_IVA = $precio_sin_IVA;

        return $this;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    public function get_precio_con_iva($iva){
        return $this->precio_sin_IVA * (1 + $iva / 100);
    }
}

class Ropa extends Producto
{
    private $talla;

    public function __construct($id, $titulo, $descripcion, $precio_sin_IVA, $stock, $talla)
    {
        parent::__construct($id, $titulo, $descripcion, $precio_sin_IVA, $stock);
        $this->talla = $talla;
    }

    public function mostrarGuiaTallas()
    {
        echo "Guía de Tallas:<br>";
        echo "Europa: S, M, L<br>";
        echo "México: S, M, L<br>";
   
    }


    public function getTalla()
    {
        return $this->talla;
    }

    public function setTalla($talla)
    {
        $this->talla = $talla;

        return $this;
    }
}

class Comida extends Producto
{
    private $caducidad;
    private $gramos;

    public function __construct($id, $titulo, $descripcion, $precio_sin_IVA, $stock, $caducidad, $gramos)
    {
        parent::__construct($id, $titulo, $descripcion, $precio_sin_IVA, $stock);
        $this->caducidad = $caducidad;
        $this->gramos = $gramos;
    }

    public function getCaducidad()
    {
        return $this->caducidad;
    }

    public function setCaducidad($caducidad)
    {
        $this->caducidad = $caducidad;

        return $this;
    }

    public function getGramos()
    {
        return $this->gramos;
    }

    public function setGramos($gramos)
    {
        $this->gramos = $gramos;

        return $this;
    }
}

class Artesania extends Producto
{
    private $autor;

    public function __construct($id, $titulo, $descripcion, $precio_sin_IVA, $stock, $autor)
    {
        parent::__construct($id, $titulo, $descripcion, $precio_sin_IVA, $stock);
        $this->autor = $autor;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }
}

$ropa = new Ropa(1, "Pantalón de lino", "Pantalón de lino ecológico ", 29, 10, "M");
$comida = new Comida(2, "Chocolate negro 70%", "Chocolate negro de Costa de Márfil", 4, 10, "2024-06-24", 250);
$artesania = new Artesania(3, "Jarrón de Cerámica", "Pintado a mano. Capacidad de 1L", 70, 2, "Manuela Bonito");
