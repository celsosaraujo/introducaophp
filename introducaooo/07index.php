<?php

    require("07pessoa.php");
    require("07pessoafisica.php");

    $pessoaFisica = new PessoaFisica("123.456.789-01", 30, 125.25);
    $pessoaFisica-> imprime();

?>