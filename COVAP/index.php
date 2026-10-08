<?php

/*
 * Inclusión de los archivos que contienen los datos de los productos
 * y las funciones necesarias para realizar los cálculos del pedido.
 *
 * __DIR__ permite construir la ruta absoluta del directorio actual,
 * evitando problemas de rutas relativas durante la ejecución.
 */
include __DIR__ . "/datos.php";
include __DIR__ . "/funciones.php";

?>

<?php include __DIR__ . "/cabecera.php"; ?>

<main>

    <h2>Realizar pedido</h2>

    <!--
        Formulario principal del pedido.
        Los datos se envían mediante el método POST para que
        puedan ser procesados posteriormente por PHP.
    -->
    <form method="post">

        <label for="producto">Producto:</label>

        <select name="producto" id="producto">

            <?php foreach ($productos as $clave => $producto): ?>

                <!--
                    Las opciones del selector se generan dinámicamente
                    recorriendo el array de productos.
                    
                    htmlspecialchars() evita que los datos recibidos
                    puedan interpretarse como código HTML.
                -->
                <option value="<?= htmlspecialchars($clave) ?>">
                    <?= htmlspecialchars($producto["nombre"]) ?>
                </option>

            <?php endforeach; ?>

        </select>

        <br><br>

        <label for="cantidad">Cantidad:</label>

        <!--
            Campo numérico destinado a introducir la cantidad
            de unidades que se desean adquirir.
            
            Los atributos min y max limitan la cantidad introducida
            desde el propio formulario.
        -->
        <input
            type="number"
            name="cantidad"
            id="cantidad"
            min="1"
            max="5"
            value="1"
        >

        <br><br>

        <button type="submit">Calcular pedido</button>

    </form>

    <?php

    /*
     * Comprobamos si el formulario ha sido enviado mediante POST.
     * Si no se ha enviado, únicamente se muestra el formulario.
     */
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        /*
         * Recuperamos los datos enviados mediante el formulario.
         * La cantidad se convierte explícitamente a entero.
         */
        $productoSeleccionado = $_POST["producto"];
        $cantidad = (int) $_POST["cantidad"];

        /*
         * Obtenemos del array de productos los datos correspondientes
         * al producto seleccionado por el usuario.
         */
        $producto = $productos[$productoSeleccionado];

        /*
         * Extraemos el nombre y el precio del producto para utilizarlos
         * posteriormente en los cálculos y en la presentación del resultado.
         */
        $nombre = $producto["nombre"];
        $precio = $producto["precio"];

        /*
         * Calculamos los diferentes importes del pedido mediante
         * las funciones definidas en funciones.php.
         */
        $subtotal = calcularSubtotal($precio, $cantidad);
        $descuento = calcularDescuento($subtotal, $cantidad);
        $total = calcularTotal($subtotal, $descuento);

        ?>

        <!--
            Sección destinada a mostrar el resultado del pedido
            una vez realizados los cálculos.
        -->
        <section>

            <h2>Resumen del pedido</h2>

            <p>
                Producto:
                <?php echo htmlspecialchars($nombre); ?>
            </p>

            <p>
                Precio unitario:
                <?php printf("%.2f €", $precio); ?>
            </p>

            <p>
                Cantidad:
                <?php print $cantidad; ?>
            </p>

            <p>
                Subtotal:
                <?php printf("%.2f €", $subtotal); ?>
            </p>

            <p>
                Descuento:
                <?php printf("%.2f €", $descuento); ?>
            </p>

            <p>
                <strong>
                    Total:
                    <?php printf("%.2f €", $total); ?>
                </strong>
            </p>

            <?php

            /*
             * sprintf() genera una cadena formateada y la almacena
             * en una variable. A diferencia de printf(), no muestra
             * directamente el resultado por pantalla.
             */
            $resumen = sprintf(
                "Has seleccionado %s y has pedido %d unidades.",
                $nombre,
                $cantidad
            );

            /*
             * Mostramos en pantalla la cadena generada anteriormente.
             */
            echo "<p>$resumen</p>";

            ?>

        </section>

    <?php } ?>

</main>

</body>
</html>