<?php 
    $horadeentrada = new DateTime('08:40');
    $horadesaida = new DateTime('11:50');
    // $horasTrabalhadas = $horadesaida->diff($horadeentrada)->h + ($horadesaida->diff($horadeentrada)->i /100 );    
    $duracao = $horadesaida->diff($horadeentrada);
?>

<!DOCTYPE html>
 <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Cálculo da Horas</title>
    </head>
    <body>
        <?php
            // echo "Horas trabalhadas: " . number_format($horasTrabalhadas, 2);        
            echo "Horas trabalhadas: $duracao->h:$duracao->i" ;
        ?>

    </body>

 </html>
