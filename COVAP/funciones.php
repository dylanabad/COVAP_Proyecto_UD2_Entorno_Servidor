<?php
// Calcula el subtotal del pedido.
function calcularSubtotal(float $precio, int $cantidad): float
{
    return $precio * $cantidad;
}

// Calcula el descuento del pedido. Se aplica un 5 % de descuento cuando se compran 4 o 5 unidades.
function calcularDescuento(float $subtotal, int $cantidad): float
{
    if ($cantidad >= 4 && $cantidad <= 5)
        return $subtotal * 0.05;
    else
        return 0;
}

// Calcula el precio total después de aplicar el descuento.
function calcularTotal(float $subtotal, float $descuento): float
{
    return $subtotal - $descuento;
}
