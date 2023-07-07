<?php

class Persona{
    public $nombre;
    public $apellido;
    public $edad;

    public function mayorEdad(){
        if($this->edad >18){
            echo "es mayor de edad";
        }else{
            echo "no es mayor de edad";
        }
    }

    public function nombreCompleto(){
        return $this->nombre . " " . $this->apellido . " ";
    }

}

$persona = new Persona();
$persona->nombre = "Javier";
$persona->apellido = "Pérez";
$persona->edad = 32;

echo $persona->nombreCompleto();
$persona->mayorEdad();

