<?php

    if (isset($_POST["nome"])) {

        $nome = $_POST["nome"];
        $idade = $_POST["idade"];

        echo "<h2>Dados Recebidos</h2>";
        echo "Nome: " . $nome . "<br>";
        echo "Idade: " . $idade . "<br><br>";

        //Incluir o link voltar
        echo '<a href="02_form.html">Voltar</a>';
    } else {
        //incluir o Else, caso a variável nome não exista ou esteja nula
        echo "Acesso inválido.";
    }

?>