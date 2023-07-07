<?php

class Cuenta {
    private $titular;
    private $cantidad;

    /**
     * Get the value of titular
     */ 
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * Set the value of titular
     *
     * @return  self
     */ 
    public function setTitular($titular)
    {
        $this->titular = $titular;

        return $this;
    }

    /**
     * Get the value of cantidad
     */ 
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set the value of cantidad
     *
     * @return  self
     */ 
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function ingresar($dinero){
        if($dinero > 0 ){
            $this->cantidad += $dinero;
        }
    }

    public function retirar($dinero){
        if($this->cantidad - $dinero < 0){
            $this->cantidad = 0;
        }else{
            $this->cantidad -= $dinero;
        }
    }
}

$cuenta = new Cuenta();

$cuenta->setTitular("Pedro");
$cuenta->setCantidad(1000);

$cuenta->ingresar(1000);
$cuenta->retirar(1900);
