<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Formulário Básico</title>
</head>

<body>

    <form method="POST">

        Nome: <input type="text" name="nome"><br><br>
        Idade: <input type="number" name="idade"><br><br>

        <input type="submit" value="Enviar">
        
        <!-- Botão limpar -->
        <button type="button" onclick="window.location.href=window.location.pathname;">            
            Limpar
        </button>
        
    </form>
   
    <?php    
        //isset: verifica se a variável existe e se ela é diferente de null
        //$_POST: recupera o valor de uma variável do formulário
        if (isset($_POST["nome"])) {

            $nome = $_POST["nome"];
            $idade = $_POST["idade"];

            echo "<h2>Dados Recebidos</h2>";
            echo "Nome: " . $nome . "<br>";
            echo "Idade: " . $idade . "<br><br>";
        }
            
    ?>

</body>

</html>








 

    