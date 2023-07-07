# Combinación de selectores

CSS permite la combinación de uno o más tipos de selectores para restringir el alcance de las
reglas CSS. 

A continuación se muestran algunos ejemplos habituales de combinación de selectores.

```
    .aviso .especial { ... }

```

El anterior selector solamente selecciona aquellos elementos con un class="especial" que se
encuentren dentro de cualquier elemento con un class="aviso".

Si se modifica el anterior selector:

```
    div.aviso span.especial { ... }

```
Ahora, el selector solamente selecciona aquellos elementos de tipo **span** con un atributo class="especial" que estén dentro de cualquier elemento de tipo **div** que tenga un atributo class="aviso".

La combinación de selectores puede llegar a ser todo lo compleja que sea necesario:

```
    
    ul#menuPrincipal li.destacado a#inicio { ... }

```