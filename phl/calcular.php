
<?php



$cidadeOrigem = $_POST["cidadeOrigem"];
$cidadeDestino = $_POST["cidadeDestino"];
$distancia = $_POST["distancia"];
$pedagioQuantidade = $_POST["pedagioQuantidade"];
$pedagioValor = 9.40;
$valorKm = 6;

$valorTotal = ($pedagioQuantidade * $pedagioValor) + ($distancia * $valorKm);

echo "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>A viagem de <?= $cidadeOrigem ?> a <?= $cidadeDestino ?> irá custar o valor total de R$ <?= $valorTotal?>.</h1>
    
</body>
</html>
