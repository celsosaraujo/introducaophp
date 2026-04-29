<?php
    $a = 10;
    $b = 5;
    $soma = $a + $b;
    $sub = $a - $b;
    $mult = $a * $b;
    $div = $a / $b;
    $resto = $a % $b;
?>

<!DOCTYPE html>
 <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Operadores Aritméticos</title>
    </head>
    <body>
        
        <?php
            echo "Soma: $soma <br>";
            echo "Subtração: $sub <br>";
            echo "Multiplicação: $mult <br>";
            echo "Divisão: $div <br>";
            echo "Módulo (Resto da Divisão): $resto ";
        ?>
        
    </body>

 </html>