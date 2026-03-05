<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Minha Página</title>
</head>

<body>

    <?php

    // Dados pessoais
    $nome = "Celso Serrano Araujo";
    $idade = 48;
    $cidade = "Marília";

    // Operação matemática
    $numero1 = 10;
    $numero2 = 5;
    $resultado = $numero1 + $numero2;

    echo "<h1>Minha Página Pessoal</h1>";

    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Idade:</strong> $idade anos</p>";
    echo "<p><strong>Cidade:</strong> $cidade</p>";

    echo "<h2>Operação Matemática</h2>";
    echo "<p>$numero1 + $numero2 = $resultado</p>";

    ?>

</body>

</html>