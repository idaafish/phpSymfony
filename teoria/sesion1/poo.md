# Programación Orientada a Objetos

Es un paradigma de programación que usa  objetos que representan elementos (objetos) del problema a resolver. Se basa en la idea de la interacción del ser humano con los objetos en su día a día. Ayuda a tener el código organizado y a la reutilización del mismo.

¿Qué es un paradigma de programación?
Un paradigma de programación es una manera o estilo de programación de software. Es la forma en la que tenemos para enfrentarnos a un problema.

La POO permite agrupar tareas similares que ayuda a mantener y no repetir código. 

Dos conceptos muy importantes son:
- Clases 
- Objetos

## Clases y Objetos

### Clases
Una clase en POO se define como una plantilla o definición de lo que van a ser los futuros objetos.

Para definir una clase se utiliza la palabra reservada **class**, seguido del nombre de la propia clase y dos llaves ({}), en donde se añadirá el código que define ese clase. 

Sintaxis:
```php
    class NombreClase{
        //codigo
    }
```

Las clases se componen de:
- Atributos
- Métodos

Describiremos estos conceptos más adelante.

#### Ejemplos:
- En una aplicación sobre el personal de una obra, tendríamos la clase “Empleado”.
- En una aplicación sobre geometríca, tendríamos la clase "Cuadrado".

### Instancias de una clase
Una instancia de una clase es una representación concreta y específica de una clase y que reside en la memoria del ordenador, es decir, la clase instanciada es un objeto.

Cuando se crea un objeto se dice que se ha instanciado una clase.

Son objetos concretos que tienen su propio estado (los valores de sus atributos) y su propio comportamiento (los métodos que pueden ejecutar).

Para crear una instacia de una clase se utiliza la palabra reservada **new**.

Sintaxis:
```php
    $objeto = new NombreClase();
```

NOTA.- Antes de instanciar una clase debe estar previamente definida.

### Objetos
Los objetos son una instacia de una clase. La idea es que haya una clase y tantos objetos como nos haga falta.

#### Ejemplos:
En una aplicación sobre el personal de una empresa, tendríamos la clase “Empleado” y un objeto sería un empleado concreto, con nombre, apellidos y dni.

```php

<?php

class Empleado  {
    //Atributos de una clase
    public $nombre;
    public $apellido;
    public $dni;
}

$empleado = new Empleado();
$empleado2 = new Empleado();

var_dump($empleado);
echo "<br>";
var_dump($empleado2);
echo "<br>";

$empleado->nombre = "Jorge";
$empleado->apellido = "Rodríguez";
$empleado->dni = "87585351N";

var_dump($empleado);

?>

```

NOTA: La primera letra siempre va en mayúsculas.

## Atributos 
Se trata de una parte fundamental de una clase y define las “partes” o características que van a tener los futuros objetos de una clase.

Nos definen cómo son los objetos.

#### Ejemplos:

- Si estuviéramos programando la clase “Vehículo”, serían atributos el color o el número de ruedas.
- Si estuviéramos programando la clase “Persona”, serían atributos el dni o el nombre.

La pregunta que debemos hacernos es ¿qué partes o características componen a los objetos?

## Métodos

Conjunto de intrucciones definidas que representan las funcionalidades o tareas de los futuros objetos.

Para usarlo únicamente hay que invocarlos (llamar al método).

```php

<?php

class Empleado  {
    //Atributos de una clase
    public $nombre;
    public $apellido;
    public $dni;

    //Métodos de una clase
    public function trabajar(){
        echo "Estoy trabajando <br>";
    }

    public function descansar(){
        echo "Estoy descansando <br>";
    }
}


$empleado = new Empleado();
$empleado->trabajar(); //Llamada al método trabajar
$empleado->descansar(); //Llamada al método descansar

?>

```

## $this
POO permite que los objetos se referencien a sí mismos usando $this. Cuando se trabaja dentro de un método, usa $this de la misma forma que utilizarías el nombre del objeto fuera de la clase. 
```php
    
<?php

class Empleado  {
    //Atributos de una clase
    public $nombre;
    public $apellido;
    public $dni;

    //Métodos de una clase
    public function queHace($actividad){
        if($actividad == "descansando"){
            $this->descansar();
        }else{
            $this->trabajar();
        }
    }

    private function descansar(){
        echo $this->nombre . " está descansando <br>";
    }
    private function trabajar(){
        echo $this->nombre . " está trabajando <br>";
    }

}

$empleado = new Empleado();
$empleado->nombre = "Fulanito";
$empleado->queHace("trabajando"); //Llamada al método trabajar

?>
```

## Constructor 
Método especial que permite inicializar los atributos de una objeto después de crearlo, sin necesidad de agregar varias líneas para llamar a los atributos de la clase como muestra el ejemplo anterior.


Se ejecuta automáticamente al crear el objeto, así que también puede hacer cualquier otra tarea de inicialización que sea necesaria.

### Ejemplo:
```php

<?php

class Empleado  {
    //Atributos de una clase
    public $nombre;
    public $apellido;
    public $dni;

    //Constructor
    public function __construct(){
        echo "Se ejecuta el constructor";
    }
}

$empleado = new Empleado();


class Persona  {
    //Atributos de una clase
    public $nombre;
    public $apellido;

    //Constructor
    public function __construct($nombre,$apellido){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        
    }
}


$persona = new Persona("Elena","Mederos");
var_dump($persona);

//PHP8 nos permite definir los atributos junto con la definición del constructor
class Persona  {
    //Constructor
    public function __construct(public $nombre,public $apellido){}
}

$persona = new Persona("Elena","Mederos");
var_dump($persona);

?>

```

### Ejemplo:
```php

<?php

class Persona  {
    //Atributos de una clase
    public $nombre;
    public $apellido;

    //Constructor
    public function __construct($nombre,$apellido,){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        
    }
}


$persona = new Persona("Elena","Mederos");
echo $persona->$nombre; // Acceso desde el objeto (acceso público)

?>

```

## Destructor
Al igual que los constructores realizan tareas cuando el objeto se crea, los destructores las realizan cuando el objeto se destruye. 

Cuando un objeto ya no está referenciado por ninguna variable y deja de tener sentido que esté almacenado en la memoria, este se debe destruir para liberar su espacio. En el momento de su destrucción se llama a la función destructor: **__destruct()**.

```php
    class cliente{ 
        var $nombre; 
        var $numero; 

        function __construct($nombre,$numero){ 
            $this->nombre=$nombre; 
            $this->numero=$numero; 
        } 

        function __destruct(){ 
            echo "<br>destruido: " . $this->nombre; 
        } 

    } 

    //instanciamos un par de objetos cliente 
    $cliente1 = new cliente("Pepe", 1); 
    $cliente2 = new cliente("Roberto", 564); 
```

La creación del destructor es opcional. Sólo debemos crearlo si deseamos hacer alguna cosa cuando un objeto se elimine de la memoria.

## Getters y Setters
Estos métodos permiten acceder desde la clase a atributos calculados.

- GET: Método para obtener un valor.
- SET: Método para modificar un valor.

### Ejemplo:
```php

<?php
// Atributos protegidos - sólo se puede acceder desde la clase
class Persona2  {
    //Atributos de una clase 
    protected $nombre;
    protected $apellido;

    //Constructor
    public function __construct($nombre,$apellido){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    // getters - Nombre por convconvención: get + nombre del atributo. 
    public function getNombre(){
        return $this->nombre;

    }

    public function getApellido(){
        return $this->apellido;
    }
    //setters - Nombre por convconvención: set + nombre del 
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

}

$persona2 = new Persona2("Elena","Mederos");
echo $persona2->getNombre();
echo " ";
echo $persona2->getApellido();
echo "<br>";
$persona2->setNombre("Ana");
$persona2->setApellido("Martín");
echo $persona2->getNombre();
echo " ";
echo $persona2->getApellido();

?>

```

### Ejercicio
1. Crea una clase Persona con los siguientes atributos: nombre, apellidos y edad.
Crea su constructor y sus getters y sus setters para cada atributo.
Crear las siguientes funciones:
   
    – mayorEdad: indica si es o no mayor de edad.
    
    – nombreCompleto: devuelve el nombre mas apellidos.
    
    [SOLUCIÓN EJERCICIO 1](./soluciones_ejercicios_clases/ejer1.php)

2. Realiza con POO un programa que permita pintar en un echo lo siguiente: 

```
Dimensión 1: 4
Dimensión 2: 10

    ++++
   ++++++
  ++++++++
 ++++++++++
  ++++++++
   ++++++
    ++++
    
```

[SOLUCIÓN EJERCICIO 2](./soluciones_ejercicios_clases/ejer2.php)

3. Crea una clase llamada Cuenta que tendrá los siguientes atributos: titular y cantidad (puede tener decimales).
Crea sus métodos gettera y  setters para cada atributo y los siguiente métodos: 
    - ingresar: se ingresa una cantidad a la cuenta. Si la cantidad introducida es negativa, no se hará nada.
    - retirar: se retira una cantidad a la cuenta. Si restando la cantidad actual a la que nos pasan es negativa, la cantidad de la cuenta pasa a ser 0.
    
 [SOLUCIÓN EJERCICIO 3](./soluciones_ejercicios_clases/ejer3.php)   
    
4. Crea una clase llamada Password que siga las siguientes condiciones:
    - Que tenga los atributos longitud y contraseña . Por defecto, la longitud sera de 8.
    - Los métodos que implementa serán:
        - esFuerte(): devuelve un booleano si es fuerte o no, para que sea fuerte debe tener mas de 2 mayúsculas, mas de 1 minúscula y mas de 5 números.
        - generarPassword():  genera la contraseña del objeto con la longitud que tenga.
        - Método get para contraseña y longitud.
        - Método set para longitud.
        
    Después:
    - Crea un array de Passwords con el tamaño que tu le indiques por teclado.
    - Crea un bucle que cree un objeto para cada contraseña del array y su longitud.
    - Crea otro array de booleanos donde se almacene si el password del array de Password es o no fuerte.

[SOLUCIÓN EJERCICIO 4](./soluciones_ejercicios_clases/ejer4.php) 
