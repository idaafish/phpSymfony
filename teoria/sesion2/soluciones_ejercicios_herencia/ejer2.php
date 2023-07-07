<?php
/**
 *@author: Mª Victoria Yepes Armada
 */
class  SimpleCar
{
    //Atributos de una clase 
    protected $marca;
    protected $modelo;
    protected $numSerie;

    //Constructor
    public function __construct($marca, $modelo, $numSerie)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->numSerie = $numSerie;
    }

    // getters - Nombre por conconvención: get + marca del atributo. 
    public function getMarca()
    {
        return $this->marca;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function getNumSerie()
    {
        return $this->numSerie;
    }
    //setters - Nombre por convconvención: set + nombre del 
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function setNunSerie($numSerie)
    {
       $this->numSerie = $numSerie;
    }
}

class Coche extends SimpleCar
{
    //Atributos de una clase 
    protected $anoLuz;
    protected $color;
    protected $claxon;
    public function sonarClaxon()
    {
        echo "el claxon suena asi: " . $this->claxon;
    }
    //Constructor
    public function __construct($marca, $modelo, $numSerie, $anoLuz, $color, $claxon)
    {
        parent::__construct($marca, $modelo, $numSerie);
        $this->anoLuz = $anoLuz;
        $this->color = $color;
        $this->claxon = $claxon;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getClaxon()
    {
        return $this->claxon;
    }
    public function setClaxon($claxon)
    {
        $this->claxon = $claxon;
    }
}

class CochePolicia extends Coche {   
    private $sirena; 
    public function sonarSirena()
    {
        echo "la sirena suena asi: ".$this-> sirena ;
    }
    public function __construct($marca,$modelo,$numSerie,$anoLuz,$color,$claxon,$sirena)
    {
    parent:: __construct($marca,$modelo,$numSerie,$anoLuz,$color,$claxon);
    $this->sirena = $sirena;
    }
    public function getSirena(){
        return $this->sirena;            
    } 
    public function setSirena($sirena){
         $this->sirena;            
    } 
}
$coche_koleo = new Coche("Renault","Koleos","1234",2015,"blanco","MOOOOOOOOOC");
    echo "El coche es: ". $coche_koleo->getMarca();
    echo"<br>";
    echo "El color es: ". $coche_koleo->getColor();
    echo"<br>";
    $coche_koleo->setColor("negro");
    echo"<br>";
    echo "Ahora el color es: ".$coche_koleo->getColor()."<br>";
    $coche_koleo->sonarClaxon();
    echo "<br>";
    $coche_policia = new CochePolicia("FORD","ORION","4563",2020,"blanco","","FIUUUUUUU");
    echo "El color del coche policia: ". $coche_policia->getColor()."<br>";
    $coche_policia->sonarSirena();
