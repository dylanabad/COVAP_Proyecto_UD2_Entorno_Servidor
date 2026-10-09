# Soluciones

## Pregunta 1 — Cálculo y formato del subtotal

### Respuesta correcta

**B) `%.2f`**

### Código completo

```php
<?php

$precio = 2.50;
$cantidad = 4;

$subtotal = $precio * $cantidad;

printf("Subtotal: %.2f €", $subtotal);
```

### Salida esperada

```text
Subtotal: 10.00 €
```

### Explicación

* **A) `%d` — Incorrecta:** `%d` está destinado a valores enteros. El subtotal es un número decimal (`float`) y necesitamos mostrar sus dos posiciones decimales.

* **B) `%.2f` — Correcta:** `%f` permite mostrar un número decimal y `.2` indica que debe mostrarse con exactamente dos decimales.

* **C) `%s` — Incorrecta:** `%s` se utiliza para cadenas de texto, por lo que no es el especificador adecuado para representar numéricamente el subtotal.

* **D) `%.2d` — Incorrecta:** `d` representa un entero decimal, por lo que no permite representar correctamente el valor decimal del subtotal.

---

## Pregunta 2 — `sprintf()` y resumen del pedido

### Respuesta correcta

**B) `sprintf`**

### Código completo

```php
<?php

$nombre = "Leche COVAP";
$cantidad = 4;

$resumen = sprintf(
    "Has seleccionado %s y has pedido %d unidades.",
    $nombre,
    $cantidad
);

echo $resumen;
```

### Salida esperada

```text
Has seleccionado Leche COVAP y has pedido 4 unidades.
```

### Explicación

* **A) `printf` — Incorrecta:** `printf()` muestra directamente la cadena formateada. En este caso necesitamos obtener la cadena y almacenarla en `$resumen` para mostrarla posteriormente mediante `echo`.

* **B) `sprintf` — Correcta:** `sprintf()` devuelve una cadena formateada, por lo que podemos almacenarla en `$resumen` y utilizarla posteriormente.

* **C) `print` — Incorrecta:** `print` muestra directamente una cadena y no permite construir este formato utilizando los especificadores `%s` y `%d` de esta manera.

* **D) `echo` — Incorrecta:** `echo` sirve para mostrar contenido directamente, pero no genera una cadena formateada mediante los especificadores `%s` y `%d`.
