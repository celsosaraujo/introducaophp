<?php

require_once("08conta.php");
require_once("08poupanca.php");
require_once("08especial.php");
require_once("08itemExtrato.php");

session_start();

$ultimaConta = null;

if (isset($_COOKIE["ultimaConta"])) {

    $ultimaConta = (int) $_COOKIE["ultimaConta"];
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Transferência</title>
</head>

<body>

    <h2>Transferência entre Contas</h2>

    <?php

    if (
        !isset($_SESSION["contas"]) ||
        count($_SESSION["contas"]) < 2
    ) {

        echo "É necessário possuir pelo menos duas contas cadastradas!";
    } else {

    ?>

        <form action="08transferencia.php" method="post">

            <label>Conta de Origem:</label>
            <br><br>

            <select name="contaOrigem" required>

                <?php

                foreach ($_SESSION["contas"] as $indice => $conta) {

                    $selected = "";

                    if (
                        $ultimaConta !== null &&
                        $ultimaConta == $indice
                    ) {

                        $selected = "selected";
                    }

                    echo '
                    <option value="' . $indice . '" ' . $selected . '>
                        ' . $conta->contaFormatada() . '
                    </option>';
                }

                ?>

            </select>

            <br><br>

            <label>Conta de Destino:</label>
            <br><br>

            <select name="contaDestino" required>

                <?php

                foreach ($_SESSION["contas"] as $indice => $conta) {

                    echo '
                    <option value="' . $indice . '">
                        ' . $conta->contaFormatada() . '
                    </option>';
                }

                ?>

            </select>

            <br><br>

            <label>Valor da Transferência:</label>
            <br><br>

            <input
                type="number"
                name="valor"
                step="0.01"
                required>

            <br><br>

            <button type="submit">
                Transferir
            </button>

        </form>

    <?php
    }
    ?>

    <br><br>

    <a href="08menu.html">
        <button>Voltar ao Menu</button>
    </a>

</body>

</html>