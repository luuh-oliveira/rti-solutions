<?php

$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$consumo = $_POST["consumo"];

if ($consumo > 120) {
    $valorTotal = $consumo * 0.42;
    $textoConsumo = "Consumo: $consumo kWh";
    $texto = "";
} else {
    $valorTotal = $consumo * 0.32;
    $textoConsumo = "Consumo: $consumo kWh";
    $texto = "Obrigado por economizar!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Conta de luz de <?= $nome ?></h1>
    <h3><?= $endereco ?></h3>
    <h3><?= $textoConsumo ?></h3>
    <h3>Valor a pagar: R$<?= number_format($valorTotal, 2) ?></h3>
    <h3><?= $texto ?></h3>
</body>
</html>