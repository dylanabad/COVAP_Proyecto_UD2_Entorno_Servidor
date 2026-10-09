# Proyecto UD2 Desarrollo web en entorno servidor 2026-2027

## 1. Empresa y descripción del proyecto

**Empresa asignada:** COVAP

El proyecto consiste en desarrollar una aplicación web en PHP para realizar pedidos de productos lácteos. El usuario puede seleccionar un producto, indicar la cantidad deseada y consultar el resumen económico del pedido.

La aplicación dispone de tres productos y permite seleccionar entre 1 y 5 unidades. Se aplica un descuento del 5 % cuando se solicitan 4 o 5 unidades.

### Productos disponibles

| Producto                  | Precio unitario |
| ------------------------- | --------------: |
| Leche COVAP               |          2,50 € |
| Yogur natural COVAP       |          1,80 € |
| Batido de chocolate COVAP |          2,20 € |

### Regla comercial

Cuando la cantidad solicitada es de 4 o 5 unidades, se aplica un descuento del 5 % sobre el subtotal.

**Ejemplo:** al solicitar 4 unidades de Leche COVAP, el subtotal es de 10,00 €, el descuento es de 0,50 € y el total del pedido es de 9,50 €.

## 2. Participantes y reparto del trabajo

* **Abad Rivas, Dylan**
* **Rabasco Sarmiento, Ángel**

El proyecto se ha desarrollado de forma colaborativa. Las diferentes responsabilidades reflejan de forma precisa y exacta la división de trabajo.

| Integrante               | Responsabilidades                                                                                   |
| ------------------------ | --------------------------------------------------------------------------------------------------- |
| Abad Rivas, Dylan        | Creación de la estructura del proyecto, propuesta de ideas, codificación y revisión del código.     |
| Rabasco Sarmiento, Ángel | Desarrollo del código, verificación, pruebas (*testing*), mejora del código y propuestas de mejora. |

## 3. Requisitos técnicos

* Lenguaje de programación: PHP.
* Integración de PHP con HTML.
* Uso de formularios HTML mediante el método `POST`.
* Programación procedural mediante funciones.
* Uso de arrays asociativos para almacenar los productos.
* Uso de estructuras condicionales y bucles.
* Validación de los datos recibidos desde el formulario.
* Uso de `htmlspecialchars()` para escapar los datos que se muestran en HTML.
* Organización del código en varios archivos mediante `include` y `__DIR__`.

No se utilizan bases de datos, frameworks, clases, objetos ni JavaScript.

## 4. Archivos principales

| Archivo               | Descripción                                                                                                     |
| --------------------- | --------------------------------------------------------------------------------------------------------------- |
| `index.php`           | Archivo principal. Muestra el formulario, recibe los datos enviados, procesa el pedido y presenta el resultado. |
| `datos.php`           | Contiene el array asociativo con los productos, sus nombres y sus precios.                                      |
| `funciones.php`       | Contiene las funciones para calcular el subtotal, el descuento y el total.                                      |
| `cabecera.php`        | Contiene la estructura HTML inicial y la cabecera común de la página.                                           |
| `README.md`           | Documentación del proyecto, instrucciones, pruebas y evidencias.                                                |
| `retos/preguntas.md`  | Contiene las dos preguntas de examen propuestas por el equipo.                                                  |
| `retos/soluciones.md` | Contiene las soluciones razonadas de las preguntas, con código completo y salida esperada.                      |

## 5. Instrucciones para ejecutar el proyecto

### 5.1. Preparación del entorno

Para ejecutar el proyecto en Windows, es necesario tener instalado **XAMPP**, que incluye el servidor web Apache y permite ejecutar archivos PHP.

1. Abrir la carpeta donde está instalado XAMPP. Normalmente se encuentra en:

   `C:\xampp\`

2. Copiar la carpeta del proyecto `COVAP` dentro del directorio `htdocs`:

   `C:\xampp\htdocs\COVAP\`

3. Comprobar que la carpeta `COVAP` contiene los archivos PHP del proyecto y la carpeta `retos`.

La estructura debe quedar organizada de la siguiente manera:

```text
C:\xampp\htdocs\COVAP\
│
├── index.php
├── datos.php
├── funciones.php
├── cabecera.php
├── README.md
│
└── retos\
    ├── preguntas.md
    └── soluciones.md
```

### 5.2. Iniciar el servidor Apache

1. Abrir el **Panel de control de XAMPP**.
2. Localizar el módulo **Apache**.
3. Pulsar el botón **Start**.
4. Comprobar que Apache aparece como iniciado.

No es necesario iniciar MySQL, ya que el proyecto no utiliza bases de datos.

Si Apache no se inicia, puede existir un conflicto con otro programa que esté utilizando el puerto 80 o el 443.

### 5.3. Acceder a la aplicación

Una vez iniciado Apache, abrir un navegador web y acceder a la siguiente dirección:

`http://localhost/COVAP/`

También se puede acceder directamente al archivo principal mediante:

`http://localhost/COVAP/index.php`

El archivo `index.php` es el punto de entrada de la aplicación. Los archivos `datos.php`, `funciones.php` y `cabecera.php` se incorporan mediante instrucciones `include`.

### 5.4. Detener el servidor

Cuando se haya terminado de utilizar el proyecto, abrir el Panel de control de XAMPP y pulsar **Stop** en el módulo Apache.


## 6. Aplicación de los contenidos S1–S7

| Sesión                               | Contenidos aplicados                                                                                          | Archivo y bloque                                                                                                                                           |
| ------------------------------------ | ------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **S1. Sintaxis básica**              | Etiquetas PHP, instrucciones, comentarios, variables y combinación de PHP con HTML.                           | `index.php`: bloque inicial de inclusiones, asignación de variables y procesamiento del pedido. `datos.php`: definición de variables y datos.              |
| **S2. Salida**                       | Uso de `echo`, `print`, `printf()` y `sprintf()`. Formato de números y concatenación o generación de cadenas. | `index.php`: bloque del resumen del pedido, donde se muestran los datos y se genera el mensaje con `sprintf()`.                                            |
| **S3. Tipos de datos y operaciones** | Variables de tipo cadena, entero, decimal y booleano; operaciones aritméticas y comparaciones.                | `datos.php`: nombres y precios de los productos. `index.php`: cantidad, precio, subtotal, descuento y total. `funciones.php`: operaciones matemáticas.     |
| **S4. Estructuras de control**       | Condicionales `if` y bucles `foreach`.                                                                        | `index.php`: comprobación del método de envío y recorrido de los productos para generar el selector. `funciones.php`: condición para aplicar el descuento. |
| **S5. Funciones**                    | Declaración de funciones, parámetros, llamadas y valores de retorno.                                          | `funciones.php`: funciones `calcularSubtotal()`, `calcularDescuento()` y `calcularTotal()`. `index.php`: llamadas a estas funciones.                       |
| **S6. Arrays**                       | Arrays asociativos, acceso mediante claves y recorrido con `foreach`.                                         | `datos.php`: array `$productos`. `index.php`: bloque `foreach` que genera las opciones del selector y acceso al producto seleccionado.                     |
| **S7. Formularios**                  | Formulario `POST`, recepción de datos mediante `$_POST`, comprobación de datos y escape de contenido HTML.    | `index.php`: formulario de pedido, bloque de procesamiento de la petición y uso de `htmlspecialchars()`.                                                   |

### Inclusión de archivos

El archivo `index.php` incorpora los archivos necesarios mediante `include` y `__DIR__`:

```php
include __DIR__ . "/datos.php";
include __DIR__ . "/funciones.php";
```

La cabecera HTML se incorpora mediante:

```php
<?php include __DIR__ . "/cabecera.php"; ?>
```

`__DIR__` permite construir las rutas a partir del directorio en el que se encuentra el archivo actual.

**Nota:** la tabla describe la organización prevista del proyecto. Se debe comprobar que cada bloque mencionado esté presente en la versión definitiva del código. La validación completa de S7 debe verificarse antes de darla por terminada.

## 7. Pruebas de funcionamiento

Se realizarán dos pruebas válidas y una prueba incorrecta. La columna de resultado obtenido debe completarse después de ejecutar cada caso en la versión definitiva de la aplicación.

### Prueba 1. Pedido válido sin descuento

| Campo              | Valor                                                                        |
| ------------------ | ---------------------------------------------------------------------------- |
| Entrada            | Producto: Leche COVAP. Cantidad: 3.                                          |
| Resultado esperado | Precio unitario: 2,50 €. Subtotal: 7,50 €. Descuento: 0,00 €. Total: 7,50 €. |
| Resultado obtenido | Pendiente de ejecutar y comprobar.                                           |
| Estado             | Pendiente de verificación.                                                   |

### Prueba 2. Pedido válido con descuento

| Campo              | Valor                                                                         |
| ------------------ | ----------------------------------------------------------------------------- |
| Entrada            | Producto: Leche COVAP. Cantidad: 4.                                           |
| Resultado esperado | Precio unitario: 2,50 €. Subtotal: 10,00 €. Descuento: 0,50 €. Total: 9,50 €. |
| Resultado obtenido | Pendiente de ejecutar y comprobar.                                            |
| Estado             | Pendiente de verificación.                                                    |

### Prueba 3. Pedido incorrecto

| Campo              | Valor                                                                                                              |
| ------------------ | ------------------------------------------------------------------------------------------------------------------ |
| Entrada            | Cantidad: 6 unidades.                                                                                              |
| Resultado esperado | La aplicación debe rechazar la cantidad y mostrar un mensaje de error, sin calcular ni presentar un pedido válido. |
| Resultado obtenido | Pendiente de ejecutar y comprobar.                                                                                 |
| Estado             | Pendiente de verificación.                                                                                         |

**Importante:** para que la tercera prueba sea satisfactoria, el servidor debe validar la cantidad recibida. Los atributos `min` y `max` del formulario HTML no sustituyen la validación PHP. Si la versión actual no rechaza la cantidad 6, habrá que corregir el código antes de marcar la prueba como superada.

## 8. Revisión con inteligencia artificial

Se ha utilizado inteligencia artificial como herramienta de apoyo durante el desarrollo, para revisar la organización del código, documentar las instrucciones PHP y preparar preguntas de examen relacionadas con los contenidos de la unidad.

La revisión debe contrastarse con el código ejecutado y las pruebas reales. La utilización de IA no sustituye la comprobación manual del funcionamiento de la aplicación.

## 9. Preguntas de examen y soluciones

Las dos preguntas propuestas por el equipo COVAP se encuentran separadas de sus soluciones.

| Documento  | Ubicación             | Contenido                                                                                                                           |
| ---------- | --------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| Preguntas  | `retos/preguntas.md`  | Dos preguntas tipo examen basadas en el código del proyecto, con enunciado, fragmento, opciones A–D y una única respuesta correcta. |
| Soluciones | `retos/soluciones.md` | Letra correcta, código completo, salida esperada y explicación de los tres distractores de cada pregunta.                           |

Las preguntas se proyectarán durante la exposición sin indicar la respuesta correcta. El equipo destinatario deberá resolverlas oralmente sin utilizar inteligencia artificial.

Antes de entregar, se comprobará que los fragmentos proceden del código definitivo, que las alternativas se han analizado y que solo existe una respuesta válida en cada pregunta.

## 10. Reflexión individual

### Abad Rivas, Dylan

El desarrollo de este proyecto me ha resultado muy útil principalmente para aplicar prácticas de trabajo colaborativo y repasar los diferentes apartados asignados del temario que estamos repasando actualmente.

### Rabasco Sarmiento, Ángel

Este proyecto ha sido útil para realizar diferentes técnicas de testing del código, revisar minuciosamente cada detalle para comprobar el correcto funcionamiento y además optimizar el código haciendolo más eficiente.

