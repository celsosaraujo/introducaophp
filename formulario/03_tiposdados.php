<?php

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        
        $nome = $_POST["nome"] ?? "";
        $senha = $_POST["senha"] ?? "";
        $email = $_POST["email"] ?? "";
        $telefone = $_POST["telefone"] ?? "";
        $trailer = $_POST["trailer"] ?? "";
        $busca = $_POST["busca"] ?? "";

        
        $duracao = $_POST["duracao"] ?? "";
        $classificacao = $_POST["classificacao"] ?? "";

        $data_lancamento = $_POST["data_lancamento"] ?? "";
        $hora = $_POST["hora"] ?? "";
        $data_hora = $_POST["data_hora"] ?? "";
        $mes = $_POST["mes"] ?? "";
        $semana = $_POST["semana"] ?? "";
        
        $cor = $_POST["cor"] ?? "";
        $tipo = $_POST["tipo"] ?? "";
        $faixa_etaria = $_POST["faixa_etaria"] ?? "";
        $sinopse = $_POST["sinopse"] ?? "";
        $id_filme = $_POST["id_filme"] ?? "";

        // CHECKBOX (array)
        $generos = $_POST["generos"] ?? [];

        // FILE
        $nome_arquivo = $_FILES["capa"]["name"] ?? "";

        echo "<h2>Dados Recebidos</h2>";

        echo "Nome: $nome <br>";
        echo "Senha: $senha <br>";
        echo "Email: $email <br>";
        echo "Telefone: $telefone <br>";
        echo "Trailer: $trailer <br>";
        echo "Busca: $busca <br><br>";

        echo "Duração: $duracao minutos <br>";
        echo "Classificação: $classificacao <br><br>";

        echo "Data Lançamento: $data_lancamento <br>";
        echo "Hora: $hora <br>";
        echo "Data e Hora: $data_hora <br>";
        echo "Mês: $mes <br>";
        echo "Semana: $semana <br><br>";

        echo "Cor Tema: $cor <br>";
        echo "Tipo: $tipo <br>";
        echo "Faixa Etária: $faixa_etaria <br>";
        echo "ID Filme (hidden): $id_filme <br><br>";

        // Exibir checkbox
        echo "Gêneros: ";
        if (!empty($generos)) {
            foreach ($generos as $g) {
                echo $g . " ";
            }
        } else {
            echo "Nenhum selecionado";
        }

        echo "<br><br>";

        echo "Sinopse: $sinopse <br><br>";

        // Arquivo
        echo "Imagem enviada: $nome_arquivo <br>";

    } else {
        echo "Acesse o formulário primeiro!";
    }

?>