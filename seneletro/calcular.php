<?php


$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$consumo = $_POST["consumo"];

if ($consumo > 120) {
    $valorTotal = $consumo * 0.42;
    $class = "vermelho";
    $textoConsumo = "Consumo: $consumo kWh";
    $textoAgradecimento = "";
} else {
    $valorTotal = $consumo * 0.32;
    $class = "verde";
    $textoConsumo = "Consumo: $consumo kWh";
    $textoAgradecimento = "Obrigado por economizar!";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body class = "<?= $class ?>">
    <h1>Conta de luz de <?= $nome ?></h1>
    <h3><?= $endereco ?></h3>
    <h3 class = "textoConsumo"><?= $textoConsumo ?></h3>
    <h3>Valor a pagar: <h2> R$<?= number_format($valorTotal, 2, ",", ".") ?></h2></h3>
    <h3 class = "textoAgradecimento"><?= $textoAgradecimento ?></h3>
</body>
</html>