<?php
    $produto = [
        'nome' => 'Pc Full Gamer Amd Ryzen 9 9950x3d 96gb Ram Ssd 4tb Rtx 5090 4 Tb 96 Gb Rtx 5090',
        'preco' => 129900.99,
        'estoque' => 55
    ];
?>

<!DOCTYPE html>
 <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP</title>
    </head>
    <body>        
        <?php 
            $precoFormatado = number_format($produto['preco'], 2, ',', '.');
            echo "Nome: $produto[nome] Valor: $precoFormatado Quantidade: $produto[estoque]";            
        ?>        
    </body>
 </html>