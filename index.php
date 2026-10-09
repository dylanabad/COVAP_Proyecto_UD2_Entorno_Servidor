<?php
// Inclusión de los archivos que contienen los datos de los productos y las funciones necesarias para realizar los cálculos del pedido.
include __DIR__ . "/datos.php";
include __DIR__ . "/funciones.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido COVAP</title>
</head>

<body>
    <h1>Pedido de productos COVAP</h1>
    <p>Selecciona un producto y la cantidad que deseas comprar.</p>

    <h2>Realizar pedido</h2>
    <!-- Formulario del pedido. Los datos se envían mediante el método POST. -->
    <form method="post">
        <label for="producto">Producto:</label>
        <select name="producto" id="producto">
            <?php foreach ($productos as $clave => $producto): ?>
                <!-- Las opciones del selector se generan dinámicamente recorriendo el array de productos. -->
                <option value="<?= $clave ?>"><?= $producto["nombre"] ?></option>
            <?php endforeach; ?>
        </select>

        <br><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad" min="1" max="5" value="1">

        <br><br>

        <button type="submit">Calcular pedido</button>
    </form>

    <?php
    // Comprobamos si el formulario ha sido enviado mediante POST.
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Recuperamos los datos enviados mediante el formulario.
        $productoSeleccionado = $_POST["producto"];
        $cantidad = (int) $_POST["cantidad"];

        // Obtenemos del array de productos los datos del producto seleccionado por el usuario.
        $producto = $productos[$productoSeleccionado];

        // Obtenemos el nombre y el precio del product.
        $nombre = $producto["nombre"];
        $precio = $producto["precio"];


        // Calculamos los diferentes importes del pedido.
        $subtotal = calcularSubtotal($precio, $cantidad);
        $descuento = calcularDescuento($subtotal, $cantidad);
        $total = calcularTotal($subtotal, $descuento);
    ?>

        <!-- Sección destinada a mostrar el resultado del pedido una vez realizados los cálculos. -->
        <section>
            <h2>Resumen del pedido</h2>
            <p>Producto: <?php echo htmlspecialchars($nombre); ?></p>
            <p>Precio unitario: <?php printf("%.2f €", $precio); ?></p>
            <p>Cantidad: <?php print $cantidad; ?> </p>
            <p>Subtotal: <?php printf("%.2f €", $subtotal); ?> </p>
            <p>Descuento: <?php printf("%.2f €", $descuento); ?></p>
            <p><strong>Total: <?php printf("%.2f €", $total); ?></strong></p>

            <?php
            // sprintf() genera una cadena formateada y la almacena en una variable.
            $resumen = sprintf("Has seleccionado %s y has pedido %d unidades.", $nombre, $cantidad);
            echo "<p>$resumen</p>";
            ?>

        </section>

    <?php } ?>
</body>

</html>