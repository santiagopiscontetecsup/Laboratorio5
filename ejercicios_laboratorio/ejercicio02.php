<?php
if (isset($_POST["calcular"])) {
    $precio_gaseosa = floatval($_POST["precio_gaseosa"]);
    $cantidad_unidades = intval($_POST["cantidad_unidades"]);

    $descuento_precio = $precio_gaseosa * 0.05;
    $importe_compra = ($precio_gaseosa - $descuento_precio) * $cantidad_unidades;
    $descuento_total = $importe_compra * 0.07;
    $importe_pagar = $importe_compra - $descuento_total;
    $obsequio = $cantidad_unidades * 2;

    echo "Nuevo Precio de la Gaseosa: S/. " . ($precio_gaseosa - $descuento_precio) . "<br />";
    echo "Importe de la Compra: S/. " . $importe_compra . "<br />";
    echo "Importe del Descuento: S/. " . $descuento_total . "<br />";
    echo "Importe a Pagar: S/. " . $importe_pagar . "<br />";
    echo "Obsequio: " . $obsequio . " caramelos";
}
?>
