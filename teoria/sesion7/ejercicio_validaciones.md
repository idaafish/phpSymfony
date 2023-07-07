# Ejercicio conjunto
Se necesitan crear las validaciones de los campos de registro de una aplicación bancaria.

Sabemos que los campos de ese regitro son:
- nombre
- apellidos
- dirección (con CP)
- email y campo de confirmación
- dni
- contraseña

Los campos requieren las siguientes comprobaciones:
- nombre: todos los nombres deben empezar por mayúscula y el campo no admite número o símbolos, únicamente letra.
- apellidos: todos los apellidos deben empezar por mayúsculas y el campo no admite números o símbolos.
- dirección (con CP): el formato es tipo vía/nombre vía, número, resto de datos, código postal, población y país (se parados por comas).
- email y campo de confirmación: el email y la confirmación de email deben contener los mismos caracteres. 
- dni: debe ser un DNI válido
- contraseña:  Mínimo 8 caracteres y máximo 20, debe contener al menos una mayúscula, al menos una minúscula, al menos dos números y al menos un símbolo. 

Todos los campos son obligatorios, por tanto debería proporcionar un mensaje de error en el caso de que cualquiera de los campos esté vacío. 

PISTAS:
- Ya existe un algoritmo para saber si un DNI es válido.
- La función predefinida ord devuelve el valor ASCII de una caracter. 
- Las funciones count o sizeof te devuelven la longitud de un array.
- La función strlen te devuelve la longitud de una cadena de caracteres.

El ejercicio se hará en grupos de 4:

 **GRUPO 1**:
 - Adria
 - Ignacio
 - Mª Victoria
 - Yolanda

  **GRUPO 2**:
 - Imanol
 - Sara
 - Jorge 
 - Ana María

  **GRUPO 3**:
 - Delia
 - Sergio
 - Milagros
 - Mª del Mar

  **GRUPO 4**:
 - Marina
 - Esther
 - Gema
