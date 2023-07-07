# Patrones de diseño

## DDD: Domain-Driven Design

El **diseño guiado por el dominio** es una paradigma de diseño de software que se centra en comprender y modelar el dominio de un problema en lugar de enfocarse únicamente en los aspectos técnicos de la implementación. 

Es una aproximación al desarrollo de software que se enfoca en entender el negocio y su dominio, y reflejarlo en el diseño del software-

El **dominio** es el espacio del problema, es aquello de lo que trata el negocio y, por tanto, de lo que tratará la aplicación. 

## ¿Cúando usuarlo?
1. **Proyectos complejos:** DDD es especialmente útil en proyectos que involucran un alto grado de complejidad. En estos casos, la comprensión profunda del dominio del negocio puede ayudar a los desarrolladores a entender mejor los requisitos y necesidades del sistema y, por lo tanto, a construir un software más efectivo.
2. E**quipos grandes:** DDD puede ayudar a alinear a los desarrolladores y garantizar que todos tengan una comprensión común del negocio y sus requerimientos. Además, puede ayudar a dividir el sistema en diferentes módulos o componentes que puedan ser desarrollados de manera independiente, lo que puede facilitar el trabajo del equipo.
3. **Sistemas altamente interactivos:** Cuando el software debe interactuar con otros sistemas, DDD puede ayudar a garantizar que las interacciones sean efectivas y precisas.
4. **Proyectos de larga duración:** DDD puede ayudar a mantener el enfoque en el dominio del negocio y evitar la degradación de la calidad del software debido a cambios constantes en los requisitos o la tecnología.

### Componentes 
#### Entities
Son los componentes básicos del modelado del dominio y son el primer lugar donde debemos pensar para comenzar a poner la lógica del dominio.

Las entidades representan elementos del mundo real que son importantes para el negocio y que deben ser persistidos en la base de datos. Son los objetos.

Un ejemplo, podría ser una entidad de Cliente, que tiene una identidad única (el id) y propiedades como el nombre, el email. 

Otro ejemplo, podría ser la entidad Pedido que tiene el id del pedido, y luego campos para los datos del pedido, como la dirección, y los productos que se incluyen en el pedido.

#### Value Objects
Los objetos valor son objetos que no tienen una identidad única, sino que se definen por su estado. Los objetos de valor representan conceptos importantes para el negocio, como fechas, direcciones o cantidades.

Un ejemplo, el objeto dirección que representa la dirección de envío de pedido y que puede tener varios campos como la calle, la localidad, el código postal...

#### Aggregates
Los agregados son grupos de entidades y objetos de valor que se tratan como una unidad en el modelo de dominio. Los agregados se definen por las reglas de negocio y se utilizan para garantizar la consistencia de los datos y la transaccionalidad.

Un agregado tendrá uno de sus objetos componentes como la raíz del agregado.  Debemos elegir una entidad para que sea la raíz de cada agregado y permita que los objetos externos contengan referencias solo a la raíz.

Por ejemplo, una agregado podría ser la entidad de Cliente, que sería la raíz del agregado. Otro agregado podría estar formado por varias entidades y un objeto valor, por ejemplo la entidad de Order, la entidad de OrderItem y el objeto de valor Dirección.

#### Factories
Las factorías son objetos responsables de la creación de nuevas entidades y objetos de valor. Las factorías permiten la encapsulación de la lógica de creación de objetos y facilitan la creación de objetos complejos.

Un ejemplo, una factoría llamada OrderFactory que se encague de crear nuevos pedidos. Incluye la lógica para la creación de pedidos, lavalidación de campos y la generación de ids únicos.

#### Repositories
Un repositorio es un servicio que utiliza una interfaz global para brindar acceso a todas las entidades y objetos de valor que se encuentran dentro de una colección de agregados.

Por ejemplo, un repositorio llamado OrderRepositoy que se encague  de la persistencia de los pedidos en la base de datos.

#### Domain Events
Los eventos de dominio son eventos que se disparan en respuesta a acciones específicas en el modelo de dominio. 

Un ejemplo, tener un evento que se dispara cuando creamos un nuevo pedido.

#### Services
Los servicios son objetos que encapsulan lógica de negocio compleja y que no pertenecen a ninguna entidad o agregado en particular. Los servicios se utilizan para realizar operaciones complejas que no se pueden realizar directamente en una entidad o agregado.

Un ejemplo, un servicio llamado PedidoServicio que actúa como punto de entrada para las operaciones relacionada con los pedidos. Este servicio utilizaría el repositorio y la factoría mencionados anteriormente para realizar operaciones de creación, actualización o cancelación de pedidos.

#### Layered Architecture
Arquitectura en capas, es una arquitectura que separa los diferentes componentes del sistema en capas lógicas y físicas. La arquitectura en capas permite la separación de responsabilidades y la escalabilidad del sistema.

No usar una arquitectura en capas haría que el código fuera difícil de leer, mezclará contextos limitados y también hará que el código no se pueda probar de forma aislada.

Por ejemplo, podríamos organizar nuestra aplicación en capas lógicas, como una capa de presentación, una capa de aplicación, una capa de dominio y una capa de infraestructura. Cada capa tendría su propia responsabilidad y utilizaría los conceptos mencionados anteriormente para cumplir con esa responsabilidad.


## Otros patrones de diseño
1. DTOs - Data Transfer Object
2. Dependency Injection


