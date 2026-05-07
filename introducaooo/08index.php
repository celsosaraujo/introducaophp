
 <?php
 
    require_once("08conta.php");
    require_once("08poupanca.php");
    require_once("08especial.php");
    require_once("08itemExtrato.php");

    // Verifica se veio via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $tipoConta = $_POST["tipoConta"];
        $agencia = $_POST["agencia"];
        $conta = $_POST["conta"];
        $saldoInicial = (float) $_POST["saldoInicial"];       

        // Instancia conforme o tipo
        if ($tipoConta == "poupanca") {

            $reajuste = (float) $_POST["reajuste"];

            $contaObj = new Poupanca($agencia, $conta, $saldoInicial, $reajuste);
        } elseif ($tipoConta == "especial") {

            $limiteEspecial = (float) $_POST["limiteEspecial"];

            $contaObj = new Especial($agencia, $conta, $saldoInicial, $limiteEspecial);
        } else {
            echo "Tipo de conta inválido!";
            exit;
        }

        echo "<h3>Extrato da Conta</h3>";               
        $contaObj->imprimeExtrato();      

    }
?>

 