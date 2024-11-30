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

$precioTotal = $precioUnitario * $unidades;
$valorDescuento = $precioTotal * $descuento;
$totalFinal = $precioTotal - $valorDescuento;

$claseCategoria = strtolower("categoria-$categoria");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Resultado</h1>
    <div class="resultado <?= $claseCategoria ?>">
        <p><span>Producto:</span> <?= htmlspecialchars($producto) ?></p>
        <p><span>Categoría:</span> <?= htmlspecialchars($categoria) ?></p>
        <p><span>Unidades:</span> <?= $unidades ?></p>
        <p><span>Precio unitario:</span> $<?= number_format($precioUnitario, 2) ?></p>
        <p><span>Precio total:</span> $<?= number_format($precioTotal, 2) ?></p>
        <p><span>Descuento (%):</span> <?= $descuento * 100 ?>%</p>
        <p><span>Valor del descuento:</span> $<?= number_format($valorDescuento, 2) ?></p>
        <p><span>Total a pagar:</span> $<?= number_format($totalFinal, 2) ?></p>
    </div>
    <a href="index.html">Volver</a>
</body>
</html>
