<?php

class Password{
    private $long = 8;
    private $pass;

    /**
     * Set the value of long
     *
     * @return  self
     */ 
    public function setLong($long)
    {
        $this->long = $long;

        return $this;
    }

    /**
     * Get the value of pass
     */ 
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     *
     * @return  self
     */ 
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    public function esFuerte(){
        //código que comprueba que es fuerte la contraseña
        //Devolverá un booleano dependiendo de si es fuerte o no
        //Lo veremos más adelante con la sintáxis de PHP
        return true; 
    }

    public function generaPassword(){
        //código que genera caracteres aleatorios para crear la contraseña
        //Lo veremos más adelante con la sintáxis de PHP
        return "12345";
    }
}

$passwords = [];
$longPass = [8,9,10,11];

for($i = 0; $i<count($longPass);$i++){
    $pass = new Password();
    $pass->setLong($longPass[$i]);
    $pass->setPass($pass->generaPassword());
    array_push($passwords,$pass);
}

$strongPasswords = [];
for($i = 0; $i<count($passwords);$i++){
    array_push($strongPasswords,$passwords[$i]->esFuerte());
}

var_dump($passwords);
var_dump($strongPasswords);

