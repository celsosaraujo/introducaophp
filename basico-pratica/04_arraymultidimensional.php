<?php
// Array Multidimensional associativo
//  $Estados = [
//      ['SP' => 'São Paulo'],
//      ['RJ' => 'Rio de Janeiro'],
//      ['MG' => 'Minas Gerais']
//  ];

    //array multidimensional por posição
    $estadoUmDimensao = ["são PAULO", "rIO DE JANEIRO", "mINAS gERAIS"];

    $estados = [
        ['AM','Amazonas'],
        ['MG','Minas Gerais'],
        ['PA','Pará'],
        ['RJ','Rio de Janeiro'],
        ['SP','São Paulo']
    ];
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Array Multidimensional</title>
    </head>
    <body>
        <?php
        // foreach ($Estados as $estado) {
        // foreach ($estado as $uf => $nome) {
        // echo "UF: $uf - Estado: $nome <br>";
        //     }
        // }
            for($i = 0; $i < count($estados); $i++){
                echo "UF: {$estados[$i][0]} - Estado: {$estados[$i][1]} <br>";
            }
        ?>
        
    </body>

</html>