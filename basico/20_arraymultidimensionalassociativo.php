<?php
$alunos = [
    [
        'nome'=> 'João',
        'idade'=> 18,
        'cidade'=> 'Marilia',
        'ativo'=> true
    ],
    [
        'nome'=> 'Maria',
        'idade'=> 19,
        'cidade'=> 'Vera Cruz',
        'ativo'=> true
    ],
    [
        'nome'=> 'Antonio',
        'idade'=> 35,
        'cidade'=> 'Pompeia',
        'ativo'=> false
    ]
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
    for ($i = 0; $i < count($alunos); $i++) {
        if ($alunos[$i]['ativo']) {
            echo "Nome: ".$alunos[$i]['nome']. 
                 " Idade: ".$alunos[$i]['idade'].
                 " Cidade: ". $alunos[$i]['cidade'];
            echo "<hr>";
        }
    }
    ?>
</body>

</html>