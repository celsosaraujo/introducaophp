<?php
    $nome = 'thiago';
    $dataNascimento = new DateTime("2007-07-08");
    $dataAtual = new DateTime();
    $curso = 'Desenvolvimento de sistemas';

    $idade = $dataAtual->diff($dataNascimento);
?>

<!DOCTYPE html>
 <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Cálculo da Idade</title>
    </head>
    <body>
        <?php
            echo "Nome: $nome <br>";
            echo "Idade: $idade->y anos, $idade->m meses e $idade->d dias <br>";
            echo "Curso: $curso";
        ?> 
    </body>

 </html>