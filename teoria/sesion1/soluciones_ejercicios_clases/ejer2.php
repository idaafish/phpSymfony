<?php
class Rombo {
    //Atributos
    protected $dim1;
    protected $dim2;

    //Constructor
    public function __construct($dim1,$dim2){
        $this->dim1 = $dim1;
        $this->dim2 = $dim2;
    }

    public function dibujar(){
        $tempDim1 = $this->dim1;
        for($i=1;$i<=$this->dim1;$i++){
            echo self::pintarfilas($tempDim1);
            echo "<br>";
            $tempDim1+=2;
        }
        $tempDim1 = $this->dim2;
        for($i = $this->dim1-1;$i >0 ;$i--){
            $tempDim1-=2;
            echo $this->pintarfilas($tempDim1);
            echo "<br>";
        }
    }
        
    private function pintarEspacios($numEspacios){
        $espacios = "";
        for($i=0; $i<$numEspacios;$i++){
            // $espacios .= "+";
            $espacios = $espacios . "_";
        }
        return $espacios;
     }
    
    private function pintarCruces($tempDim1){
        $cruces = "";
        for($i=0; $i<$tempDim1;$i++){
            // $cruces .= "+";
            $cruces = $cruces . "+";
        }
        return $cruces;
    }
        
    private function pintarfilas($tempDim1){
        $numEspacios = ($this->dim2-$tempDim1)/2;
        return $this->pintarEspacios($numEspacios) . $this->pintarCruces($tempDim1) . $this->pintarEspacios($numEspacios);
    } 
}
$rombo= new Rombo(4,10);
$rombo->dibujar();

?>