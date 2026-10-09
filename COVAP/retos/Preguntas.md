### Pregunta 1 — Cálculo y formato del subtotal

**Enunciado:**
En COVAP, el usuario selecciona un producto y una cantidad. Para obtener el importe antes del descuento, se multiplica el precio del producto por las unidades solicitadas. Si se seleccionan 4 unidades de un producto cuyo precio es 2,50 €, el subtotal debe mostrarse como `10.00 €`.

**Fragmento:**

```php
$precio = 2.50;
$cantidad = 4;

$subtotal = $precio * $cantidad;
printf("Subtotal: ___ €", $subtotal);
```

¿Qué expresión debe sustituir a `___` para mostrar el subtotal con dos decimales?

**A)** `%d`
**B)** `%.2f`
**C)** `%s`
**D)** `%.2d`

### Pregunta 2 — sprintf() y resumen del pedido

**Enunciado:**
En COVAP se quiere crear un mensaje con el nombre del producto y la cantidad solicitada para almacenarlo en `$resumen` y mostrarlo posteriormente mediante `echo`. Para un pedido de 4 unidades de Leche COVAP, el resultado esperado es `Has seleccionado Leche COVAP y has pedido 4 unidades.`

**Fragmento:**

```php
$nombre = "Leche COVAP";
$cantidad = 4;

$resumen = ___(
    "Has seleccionado %s y has pedido %d unidades.",
    $nombre,
    $cantidad
);
echo $resumen;
```

¿Qué función debe sustituir a `___`?

**A)** `printf`
**B)** `sprintf`
**C)** `print`
**D)** `echo`
