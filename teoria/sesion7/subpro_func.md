# Sintaxis de funciones
Sintáxis:
```
//Definición de la función
function nombre_de_la_función(parámetro1, parámetro2, …, parámetroN) {
  //Codigo aquí
}

//Llamada de la función
nombre_de_la_funcion(parámetro1, parámetro2, …, parámetroN);

```
NOTA: el nombre de la función debe empezar por una letra o un guión bajo (_).

¿Qué son los parámetros de un función?
Son los datos que necesitamos en la función para resolver la tarea. 

###Ejemplos
 ```php
    <?php
    
    function cuadrado($num)
    {
        return $num * $num;
    }
    echo cuadrado(4);   // imprime '16'.


    function mostrarTexto($texto) {

    echo "<strong>El texto a mostrar es el siguiente: </strong><br>";

    echo $texto;

    }

    mostrarTexto("Me gusta mucho la programación web");

    function holaMundo(){
        return "Hola Mundo!"."<br>";
    }
    
    //Llamada a la función
    $mensaje = holaMundo();
    echo $mensaje;
    
    function saludo($nombre){
      echo "Hola $nombre <br>";
    }
    //Llamadas a la función
    saludo("Elena");
    saludo("Pedro");
    saludo("Alberto");
    $nombre= "Pepe";
    saludo($nombre);
    

    ?>

 ```
NOTA: Los nombres de las funciones siguen las mismas reglas que las demás etiquetas de PHP.
