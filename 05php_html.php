<?php
//05php_html.php
date_default_timezone_set("America/Sao_Paulo");

$hora = date("H");
$data = date("d/m/Y");
$horaAtual = date("H:i");

if ($hora < 12) {
    $mensagem = "Bom dia!";
} elseif ($hora < 18) {
    $mensagem = "Boa tarde!";
} else {
    $mensagem = "Boa noite!";
}
?>

<h1><?php echo $mensagem; ?></h1>
<p>Hoje é <?php echo $data; ?></p>
<p>Agora são <?php echo $horaAtual; ?></p>