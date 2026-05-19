<?php

    require_once("08conta.php");
    require_once("08poupanca.php");
    require_once("08especial.php");
    require_once("08itemExtrato.php");

    session_start();

    if (
        !isset($_SESSION["contas"]) ||
        count($_SESSION["contas"]) == 0
    ) {

        echo "Nenhuma conta cadastrada!";
        exit;
    }

    // Recupera dados do formulário
    $contaOrigem = (int) $_POST["contaOrigem"];
    $contaDestino = (int) $_POST["contaDestino"];
    $valor = (float) $_POST["valor"];

    // Verifica se as contas são diferentes
    if ($contaOrigem == $contaDestino) {

        echo "<h2>Não é possível transferir para a mesma conta!</h2>";

        echo '
        <br><br>

        <a href="08menu.html">
            <button>Voltar ao Menu</button>
        </a>';

        exit;
    }

    // Recupera objetos
    $origem = $_SESSION["contas"][$contaOrigem];
    $destino = $_SESSION["contas"][$contaDestino];

    // Realiza transferência
    $origem->saque($valor);

    $destino->deposito($valor);

    // Atualiza sessão
    $_SESSION["contas"][$contaOrigem] = $origem;
    $_SESSION["contas"][$contaDestino] = $destino;

    // Atualiza cookie
    setcookie(
        "ultimaConta",
        $contaDestino,
        time() + 3600
    );

    echo "<h2>Transferência realizada com sucesso!</h2>";

?>        

<br><br>
<a href="08menu.html">
    <button>Voltar ao Menu</button>
</a>
