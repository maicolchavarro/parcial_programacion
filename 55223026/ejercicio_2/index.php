<?php
$producto = $_POST['producto'];
$categoria = $_POST['categoria'];
$precioUnitario = (float) $_POST['precio'];
$unidades = (int) $_POST['unidades'];

$descuento = 0;
if ($categoria === 'A') {
    if ($unidades <= 10) $descuento = 0.01;
    elseif ($unidades <= 20) $descuento = 0.015;
    else $descuento = 0.02;
} elseif ($categoria === 'B') {
    if ($unidades <= 10) $descuento = 0.012;
    elseif ($unidades <= 20) $descuento = 0.02;
    else $descuento = 0.03;
} elseif ($categoria === 'C') {
    if ($unidades <= 10) $descuento = 0.0;
    elseif ($unidades <= 20) $descuento = 0.005;
    else $descuento = 0.01;
}
