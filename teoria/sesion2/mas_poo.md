# Más POO: herencia, encapsulamiento, sobreescritura y sobrecarga

## Herencia
Característica de los lenguajes orientados a objetos que permite a una clase (llamada la sublclase o la clase hijo) heredar de otra (llamada la superclase o la clase padre) sus métodos o atributos utilizando la palabra *extends*. 

```php

class Persona
{
    public $nombre = "Virginia";
    public $apellido ="García";
    public function mensaje(){
        print "Hola " . $this->nombre;
    }
}
class Alumno extends Persona {
    public $curso = "PHP y Laravel";
}

$alumno = new Alumno();
var_dump($alumno);

```
PHP únicamente soporta herencia simple. Aunque es posible simular la herencia múltiple (una clase hereda de varias clases) mediante el uso de interfaces (las veremos más adelante).

## Abstracción

La abstracción consiste en encontrar características y comportamientos esenciales de un objeto.
Vamos a pensar en los automóviles:
- Podríamos pensar que características similares tienen todos los automóviles.  Todos tendrán una marca, un modelo, número de bastidor, peso, llantas, puertas, ventanas, etc.
- Y en cuanto a su comportamiento todos los automóviles podrán frenar, acelerar, ir marcha atrás, derrapar, etc.

Pero, ¿Qué tiene que ver esto con las clases introducidas en este tutorial?. Pues todo, de hecho el concepto de clase es la representación y el mecanismo por el cual se gestionan las abstracciones. Por lo tanto el objetivo de la programación orientada a objetos es conseguir abstraer entidades del mundo real en clases. Y de esta manera obtener objetos que interaccionarán entre sí para crear aplicaciones.

## Encapsulamiento
El encapsulamiento (en POO) es cuando limitamos el acceso o damos un acceso restringido a los elementos de una clase, donde se puede restringir el acceso de los métodos y los atributos. 

El encapsulamiento garantiza la integridad de la información que se encuentra dentro de un objeto porque usando los diferentes niveles de acceso, permite acceso y modificación sólo a quién esté "autorizado”.

- Public: la propiedad o método podrá usarse en cualquier parte del script
- Private: la propiedad o método sólo podrá usarse en la clase a la que pertenece
- Protected: la propiedad o método se podrá usar por la clase a la que pertenece y por sus descendientes.
- Final: la clase o método no puede ser sobreescrito en clases descendientes.
- Abstract: la clase o método no puede ser usado directamente, ha de ser heredado primero para usarse. No puede instanciarse

**Ejemplo de herencia y métodos protegidos**
```php
    <?php
class Persona  {
    //Atributos de una clase
    public $nombre;
    public $apellido;
    public $dni;

    protected function descansar(){
        echo $this->nombre . " está descansando <br>";
    }
    protected function trabajar(){
        echo $this->nombre . " está trabajando <br>";
    }
}

class Alumno extends Persona{
    //Métodos de una clase
    public function queHace($actividad){
        if($actividad == "descansando"){
            $this->descansar();
        }else{
            $this->trabajar();
        }
    }
}

$alumno = new Alumno();
$alumno->queHace("descansando");
```

## Sobreescritura
Los métodos y propiedades heredados pueden ser sobreescritos (dependiendo del nivel de acceso que tengan) declarándolos de nuevo con el mismo nombre que tienen en la clase padre:

```php
  class Persona
  {
      public $nombre = "Virginia";
      public $apellido ="García";
      public function mensaje(){
          print "Hola " . $this->nombre;
      }
  }
  class Alumno extends Persona {
      public $curso = "PHP y Laravel";
      public function mensaje(){
          print "Estas matriculado " . $this->nombre;
      }
  }
```

## Sobrecarga
Es la posibilidad de tener dos o más métodos con el mismo nombre pero distinta funcionalidad. Los métodos se distinguen por su signatura, y la signatura está formada tanto por el nombre como por el número y tipo de los argumentos que recibe el método.

NOTA.- Recuerda que el tipo de retorno de un método no forma parte de su signatura, y por lo tanto no sirve para diferenciar métodos.

La sobrecarga nos permite seleccionar el método adecuado.

No confundas la sobrecarga con la sobrescritura:
    - Sobrecargar significa definir nuevos métodos.
    - Sobrescribir significa ocultar un método con una nueva definición de ese mismo método.

### Ejercicio
1. Crear una clase padre y una clase que herede, y prueba los diferentes modificadores para comprobar en qué casos un método puede ser sobreescrito.

2. Crear una clase llamada SimpleCar:
  - Tendrá 3 variables privadas:
    - marca
    - modelo
    - numSerie
  - Crear constructor y los métodos getters y setters necesarios.
  
  Crear una clase Coche que hereda de SimpleCar y que tenga las siguiente variables privadas:
  - añoLanz
  - color
  - claxon
  - Método sonarClaxon, que imprime por pantalla el sonido del claxon.
  
  Para realizar pruebas:
  - Crear un Renault Koleos, del año 2015, blanco.
  - Pintar el coche de negro- Hacer sonar el claxon(Opcional): 
  
  Crear una clase CochePolicia que hereda de Coche
  - Nueva variable sirena, con el sonido de la sirena.
  - El coche de policía sólo puede ser blanco
  - Implementar la función sirena.

  Crear un coche de policía hacer sonar el claxon y la sirena.
  
  [SOLUCION EJERCICIO 2](./soluciones_ejercicios_herencia/ejer2.php)

3. Crear una clase Multimedia (para almacenar películas, discos, mp3, etc)
- Variables titulo, autor y formato de tipo String, duración de tipo int.
- Constructor para todos los parámetros. 
- Métodos getters y setters
- Método para imprimir toda la información Multimedia por pantalla.
- Método esIgual() que recibe un objeto Multimedia y devuelve true en caso de que el título y el autor sean iguales y false en caso contrario.

Escribe una clase Película que herede de la clase Multimedia anterior.
- La clase Película tiene, además de los atributos heredados, un actor principal y una actriz principal.
- Crear constructores para todos los parámetros. Hay que tener en cuenta que uno de los dos actores puede ser nulo, pero no los dos. Tener ésto en cuenta para crear distintos constructores para ello.
- Sobreescribir el método imprimir de la clase padre para imprimir la nuevainformación.

Escribe una clase ListaMultimedia para almacenar objetos de tipo Multimedia.
- La clase tendrá como atributos un array de objetos Multimedia, y un contador para saber cuantos objetos pueden almacenarse almacenados.
- Método dameTamaño() que devuelve el número de objetos que tenemos almacenados.
- Método boolean addObjeto, que recibe como parámetro un objeto Multimedia y lo añade al final de la lista. Devuelve true, si la lista está llena después de meter el nuevo objeto, o false en caso contrario. También debe comprobar si la lista está llena, si es así no se podría añadir el objeto. 
- Método Multimedia getObjeto, devuelve el objeto situado en la posición especificada.
- Método imprimirLista() que imprima todos los objetos que hay en la lista.

Crea un index.php donde:
- Se cree un objeto de tipo ListaMultimedia de tamaño 10.
- Se creen tres películas y se añadan a la lista.
Imprimir la lista por pantalla.

[SOLUCION EJERCICIO 3](./soluciones_ejercicios_herencia/ejer3.php)


