<?php
    
    $dia = 2;     

    /**/
    switch($dia){
        case 1: $msg = "Domingo"; break;
        case 2: $msg =  "Segunda"; break;
        case 3: $msg =  "Terça"; break;
        default: $msg =  "Dia inválido";	
    }
    /**/
?>

<!DOCTYPE html>
 <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Desvio Condicional</title>
    </head>
    <body>
        
        <?php
            // switch($dia){
            //     case 1: echo "Domingo"; break;
            //     case 2: echo "Segunda"; break;
            //     case 3: echo "Terça"; break;
            //     default: echo "Dia inválido";	
            //     }
            echo $msg;
        ?>
        
    </body>

 </html>