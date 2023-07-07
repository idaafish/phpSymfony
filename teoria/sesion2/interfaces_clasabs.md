# POO: Interfaces, Clases Abstractas y Polimorfismo

## Interfaces
Cuando necesitamos definir unas pautas generales, por ejemplo porque tenemos que trabajar en equipo y el desarrollo consiste en programar varios objetos una posible solución sería crear una pequeña plantilla con los métodos que los objetos deben tener.
A esta plantilla se le conoce como **interfaz**. Las interfaces permiten establecer clases con funciones definidas, pero sin desarrollarlas. 

Para definir una interfaz utilizaremos la palabra reservada **interface*** seguido del nombre que le queramos dar a esa interfaz. 

```php
  interface nameTemplate{
    public function setVariable($name);
    public function getHtml();
  }
  
  class nameClass implements nameTemplate{
    public function setVariable($name){
       //Codigo
    }
    
    public function getHtml(){
      //Codigo
    }
  }
```

En las interfaces también existe el concepto de herencia:

```php
  interface a{
    public prueba1();
  }
  
  interface b extends a{
     public prueba2();
  }
  
  class c implements b{
    public prueba1(){
      //Codigo
    }
    public prueba2(){
      //Codigo
    }
    
    public prueba3(){
      //Codigo
    }
  }
```

Las interfaces obligan a que por lo menos existan en la definición de la clase nos métodos declarados en las interfaz, pero nosotros podemos además añadir métodos nuevos como es *prueba3()*.

**IMPORTANTE!** Todos los métodos de una interfaz deben ser **públicos**.

## Clases Abstractas
Se comportan de una manera similar a las interfaces pero nos permiten definir los métodos como protegidos o nos permite poder heredar en la funcionalidad de algún método. Veamos un ejemplo:

```php
  abstract class ClaseAbstract{
    // Todas las clases que hereden deben definir esta función
    abstract protected function getValor();
    abstract protected function setValor($valor);
    
  }
  
  class nuevaClase extends ClaseAbstract{
    protected function getValor(){
      //Código
    }
    
    protected function setValor($valor){
      //Código
    }
    
       public function imprimir(){
      echo $this->getValor();
    }
  }
```

**IMPORTANTE!** Las clases abstractas no se pueden instanciar.

En una clase abstracta, a parte de los métodos, se pueden definir atributos, con su visibilidad, y constantes. Sin embargo, en una interfaz, aparte de los métodos, únicamente se puede definir constantes.

## Diferencias entre Interfaces y Clases Abstractas

- Las clase abstractas deben contener como mínimo un método abstracto (abstract), el cual solo solo se especifica el nombre y no se implementa. Los demás métodos pueden estar completamente implementados. En una interfaz no es posible implementar métodos sino solo definir su nombre.

- En las clases abstractas un método abstract se puede definir public, protected o private. Las subclases que heredan de la clase padre tienen que implementar estos métodos con la misma visibilidad o una con menor restricción. En una interfaz todos los métodos son públicos.

- En una clase abstracta, a parte de los métodos, se pueden definir atributos, con su visibilidad, y constantes. En una interfaz, aparte de los métodos, únicamente se puede definir constantes.

- Una clase puede heredar solo de una clase padre. Una clase puede implementar más de una interfaz.

- Usando clases abstractas, una clase hija puede sobreescribir o no un método definido en la clase padre. Evidentemente si el método es abstracto si que está obligada a implementarlo y por lo tanto sobreescribirlo. 
Una clase que implementa una interfaz esta obligada a sobreescribir todos los métodos. Ya que como se ha dicho, una interfaz solo los define pero no los implementa.

- A grandes rasgos, las clases abstractas se utilizan para compartir funciones. Mientras que las interfaces se utilizan para compartir como se tiene que hacer algo y que tiene que tener como mínimo.

NOTA: Si una clase abstracta únicamente tiene métodos abstractos quiere decir que se está usando con la funcionalidad de una interfaz.

## Polimorfismo
Polimorfismo significa **muchas formas**. En POO, este concepto está relacionado con la herencia, ya que permite que los objetos de clases distintas respondan de manera diferente según el mismo mensaje. 

El polimorfismo ayuda a la reutilización de código.

En PHP podemos usar clases abstractas o interfaces para ver este concepto. 

Veamos un ejemplo una clase abstracta:

```php
  //Clase abstracta Persona con método abstracto saluda();
  abstract class Persona
  {
    abstract public function saludar();
  }
  
 //Clases Ingles, Aleman y Frances que heredan de Persona
  ¡//El método saludar en cada clase devuelve un mensaje distinto.
 class Ingles extends Persona
 {
    public function saludar()
    {
      return 'Hello!';
    }
 }

class Aleman extends Persona
{
	public function saludar()
	{
		return 'Hallo!';
	}
}

class Frances extends Persona
{
	public function saludar()
	{
		return 'Bonjour!';
	}
}


//Función saludo que acepta una array de objetos.
function saludando($personas){
  	foreach ($personas as $persona) {
		echo $persona->saludar();
	}
}


//Llamada a la función
$personas = [new Ingles(), new Aleman(), new Frances()];
saludando($personas);
```

¿Qué es lo que ocurre al llamar a la función saludando? En cada clase, estos objetos devuelven diferentes mensajes de saludo. 

Resumen: el polimorfismo permite que objetos de diferentes clases respondan de manera diferente al mismo mensaje usando la sobreescritura.

## Ejercicio
1. Modificar el ejemplo para usar interfaces en vez de clases abstractas. 
2. Crea una clase abstracta animal con el método abstracto hablar. Luego tendremos la clase, cerdo, vaca y gallina cuyo método animal deberá de devolver el sonido que hace cada animal. Crea instancia de cada clase animal para ver el comportamiento del método. Añade por lo menos dos atributos y algún métodos no heredado. Crea los getters y los setters de cada atributo.




