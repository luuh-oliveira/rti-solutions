<?php

if (
    isset($_POST["nome"]) && isset($_POST["salarioAtual"]) &&
    isset($_POST["genero"]) && isset($_POST["cargo"])
) {
    $nome = $_POST["nome"];
    $salarioAtual = $_POST["salarioAtual"];
    $genero = $_POST["genero"];
    $cargo = $_POST["cargo"];

    // if ($salarioAtual > 5000) {
    //     $novoSalario = $salarioAtual * 1.1;
    // } else {
    //     $novoSalario = $salarioAtual * 1.2;
    // }

    //expressão ternária (pergunta e resposta [sim/não])
    $novoSalario = $salarioAtual > 5000 ? $salarioAtual * 1.1 : $salarioAtual * 1.2;

} else {
    die("<main>Você não enviou os dados</main>");
}


?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Valor do Salário Atualizado</title>
</head>

<body>
    <main>
        <h1> 
            <?= $genero === "m" ? "O" : ($genero === "f" ? "A" : "") ?>
            <?= $nome ?> passará a receber R$<?= number_format($novoSalario, 2, ",", ".") ?>, no cargo de <?= $cargo ?>.</h1>
    </main>
</body>

</html>