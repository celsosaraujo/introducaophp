<?php

require_once("08conta.php");
require_once("08poupanca.php");
require_once("08especial.php");
require_once("08itemExtrato.php");

session_start();

echo "<h2>Extrato das Contas</h2>";

if (isset($_SESSION["contas"])) {

    foreach ($_SESSION["contas"] as $conta) {

        $conta->imprimeExtrato();
        echo "<br><br>";
    }
} else {

    echo "Nenhuma conta cadastrada!";
}

echo '<br>
<a href="08menu.html">
    <button>Voltar ao Menu</button>
</a>';

?>
