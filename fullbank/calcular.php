<?php

    $nome = $_POST["nome"];
    $salarioAtual = $_POST["salarioAtual"];
    $genero = $_POST["genero"];
    $cargo = $_POST["cargo"];

    if ($salarioAtual > 5000) {
        $novoSalario = $salarioAtual + (10/100 * $salarioAtual);
    } else {
        $novoSalario = $salarioAtual + (20/100 * $salarioAtual);
    }

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor do Salário Atualizado</title>
</head>
<body>
    <h1><?= $nome ?> passará a receber R$<?= $novoSalario ?>, no cargo de <?= $cargo ?>.</h1>
</body>
</html>