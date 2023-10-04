<?php
if (isset($_POST["calcular"])) {
    $importe_total = floatval($_POST["importe_total"]);
    $cantidad_hijos = intval($_POST["cantidad_hijos"]);

    $sueldo_basico = 600;
    $comision = $importe_total * 0.075;
    $bonificacion = $cantidad_hijos * 50;
    $sueldo_bruto = $sueldo_basico + $comision + $bonificacion;
    $descuento = $sueldo_bruto * 0.11;
    $sueldo_neto = $sueldo_bruto - $descuento;

    echo "Comisión: S/. " . $comision . "<br />";
    echo "Bonificación: S/. " . $bonificacion . "<br />";
    echo "Sueldo Bruto: S/. " . $sueldo_bruto . "<br />";
    echo "Descuento: S/. " . $descuento . "<br />";
    echo "Sueldo Neto: S/. " . $sueldo_neto;
}
?>
