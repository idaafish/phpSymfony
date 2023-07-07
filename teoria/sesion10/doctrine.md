# Doctrine
Doctrine es una biblioteca de mapeo objeto-relacional (ORM) para PHP que proporciona un conjunto de herramientas y funcionalidades para trabajar con bases de datos relacionales en aplicaciones PHP. Está diseñada para facilitar el acceso y la manipulación de datos, evitando la necesidad de escribir consultas SQL manualmente y permitiendo trabajar con objetos y entidades en su lugar.

## ¿Qué es un ORM?
Un ORM (Object-Relational Mapping) es una técnica de programación que permite mapear y relacionar objetos en un lenguaje de programación orientado a objetos con tablas en una base de datos relacional.

En lugar de escribir consultas SQL manualmente para interactuar con la base de datos, un ORM permite utilizar objetos y métodos de programación para realizar operaciones de lectura, escritura, actualización y eliminación de datos.

Esto significa que puedes trabajar con objetos en tu código PHP y Doctrine se encargará de manejar la persistencia y la sincronización de esos objetos con la base de datos.

La combinación de entidades y Doctrine en Symfony facilita la manipulación de datos en la base de datos a través de objetos y proporciona un enfoque orientado a objetos para trabajar con bases de datos relacionales en PHP.


## Características

- **Entidades:** En Doctrine, las entidades son clases PHP que representan objetos o tablas en la base de datos. Cada entidad se mapea a una tabla en la base de datos y cada propiedad de la entidad se mapea a una columna en la tabla.

- **Repositories:** proporciona repositories que se utilizan para acceder a las entidades y realizar operaciones de lectura/escritura en la base de datos.

- **Lenguaje de consultas (DQL):** incluye su propio lenguaje de consultas llamado DQL (Doctrine Query Language), que permite realizar consultas orientadas a objetos en lugar de consultas SQL directas. DQL es un lenguaje similar a SQL pero se centra en trabajar con entidades y objetos en lugar de tablas y filas.

-**Relaciones:**  permite definir y trabajar con relaciones entre entidades, como relaciones uno a uno, uno a muchos y muchos a muchos.

- **Migraciones de bases de datos:**  proporciona una herramienta de migraciones que te permite gestionar los cambios en el esquema de la base de datos de manera controlada. Puedes generar y ejecutar migraciones para crear, modificar o eliminar tablas y columnas en la base de datos sin perder datos existentes.