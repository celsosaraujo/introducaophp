<?php

    $consulta = [
        "CEP" => "12345-678",
        "Rua" => "Av. Independência",
        "Número" => 82,
        "Bairro" => "Palmital",
        "Cidade" => "Marília",
        "UF" => "SP"
    ];

    // foreach($consulta as $chave => $valor)
    // {
    //     echo $chave . ": " . $valor . "<br>";
    // }

?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Array Multidimensional</title>
    </head>
    <body>
        <?php
            foreach($consulta as $chave => $valor)
            {
                echo $chave . ": " . $valor . "<br>";
            }
        ?>        
    </body>
</html>    