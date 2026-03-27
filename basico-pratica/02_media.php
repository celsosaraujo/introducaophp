<?php 
    $nota1 = 10.0;
    $nota2 = 7.0;
    $nota3 = 3.0;

    $media = ($nota1 + $nota2 + $nota3) / 3.0;
    $mediaFormatada = number_format(  $media,2 );

    if($media >= 7.0){
      $Situacao = "Aprovado";
    }elseif ($media >= 5.0){
       $Situacao = "Em Recuperação";
    }else{
        $Situacao = "Reprovado";
    }
    
    
?>

<!DOCTYPE html>
 <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Cálculo da Média</title>
    </head>
    <body>
        <?php
            // echo "Hanna está $Situacao. Média: ". number_format(  $media,2 );
            echo "Hanna está $Situacao. Média: $mediaFormatada";
        ?> 
    </body>

 </html>