<?php
/**
 *@author: Marina González Suárez
 */
class Multimedia
{
    protected $titulo;
    protected $autor;
    protected $formato;
    protected $duracion;

    public function __construct($titulo, $autor, $formato, $duracion)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->formato = $formato;
        $this->duracion = $duracion;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getFormato()
    {
        return $this->formato;
    }

    public function setFormato($formato)
    {
        $this->formato = $formato;
    }

    public function getDuracion()
    {
        return $this->duracion;
    }

    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
    }

    public function imprimirInformacion()
    {
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Formato: " . $this->formato . "<br>";
        echo "Duración: " . $this->duracion . " minutos<br>";
    }

    public function esIgual($multimedia)
    {
        return ($this->titulo === $multimedia->getTitulo() && $this->autor === $multimedia->getAutor());
    }
}

class Pelicula extends Multimedia
{
    protected $actorPrincipal;
    protected $actrizPrincipal;

    public function __construct($titulo, $autor, $formato, $duracion, $actorPrincipal, $actrizPrincipal)
    {
        parent::__construct($titulo, $autor, $formato, $duracion);
        $this->actorPrincipal = $actorPrincipal;
        $this->actrizPrincipal = $actrizPrincipal;

        if ($actorPrincipal === null && $actrizPrincipal === null) {
            throw new Exception("Debe proporcionarse al menos un actor o actriz principal.");
        }
    }

    public function getActorPrincipal()
    {
        return $this->actorPrincipal;
    }

    public function setActorPrincipal($actorPrincipal)
    {
        $this->actorPrincipal = $actorPrincipal;
    }

    public function getActrizPrincipal()
    {
        return $this->actrizPrincipal;
    }

    public function setActrizPrincipal($actrizPrincipal)
    {
        $this->actrizPrincipal = $actrizPrincipal;
    }

    public function imprimirInformacion()
    {
        parent::imprimirInformacion();
        echo "Actor principal: " . $this->actorPrincipal . "<br>";
        echo "Actriz principal: " . $this->actrizPrincipal . "<br>";
    }
}

class ListaMultimedia
{
    private $objetosMultimedia;
    private $contadorListaObjetos;
    private $objetosMaximos;

    public function __construct($objetosMaximos)
    {
        $this->objetosMultimedia = array();
        $this->contadorListaObjetos = 0;
        $this->objetosMaximos = $objetosMaximos;
    }

    public function dameobjetosMaximos()
    {
        return $this->contadorListaObjetos;
    }

    public function addObjeto($objeto)
    {
        if ($this->contadorListaObjetos < $this->objetosMaximos) {
            $this->objetosMultimedia[] = $objeto;
            $this->contadorListaObjetos++;
            if ($this->contadorListaObjetos === $this->objetosMaximos) {
                return true;
            }
        }
        return false;
    }

    public function getObjeto($posicion)
    {
        if ($posicion >= 0 && $posicion < $this->contadorListaObjetos) {
            return $this->objetosMultimedia[$posicion];
        }
        return null;
    }

    public function imprimirLista()
    {
        foreach ($this->objetosMultimedia as $objeto) {
            $objeto->imprimirInformacion();
            echo "<br>";
        }
    }
}

// Crear un objeto de tipo ListaMultimedia que contiene 10 objetos máximo.
$listaMultimedia = new ListaMultimedia(10);

// Crear tres películas y añadirlas a la lista
$pelicula1 = new Pelicula("Pelicula 1", "Autor 1", "Formato 1", 120, "Actor 1", "Actriz 1");
$pelicula2 = new Pelicula("Pelicula 2", "Autor 2", "Formato 2", 90, "Actor 2", "Actriz 2");
$pelicula3 = new Pelicula("Pelicula 3", "Autor 3", "Formato 3", 105, "Actor 3", "Actriz 3");

$listaMultimedia->addObjeto($pelicula1);
$listaMultimedia->addObjeto($pelicula2);
$listaMultimedia->addObjeto($pelicula3);

// Imprimir la lista por pantalla
$listaMultimedia->imprimirLista();
