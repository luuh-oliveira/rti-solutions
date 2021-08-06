
<?php

$cidadeOrigem = $_POST["cidadeOrigem"];
$cidadeDestino = $_POST["cidadeDestino"];
$distancia = $_POST["distancia"];
$pedagioQuantidade = $_POST["pedagioQuantidade"];
$pedagioValor = 9.40;
$valorKm = 6;

$valorTotal = ($pedagioQuantidade * $pedagioValor) + ($distancia * $valorKm);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <h1>A viagem entre <?= $cidadeOrigem ?> e <?= $cidadeDestino ?> irá custar o valor total de R$ <span><?= number_format($valorTotal, 2) ?></span>.</h1>
    
</body>
</html>
