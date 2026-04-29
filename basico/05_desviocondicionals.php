<?php
    
    $idade = 18;
    /*
    if ($idade >= 18) {
        $msg = "Maior de idade";	
    } else {
        $msg = "Menor de idade";	
    }
    */
    $msg = ($idade >= 18)?"Maior de idade":"Menor de idade";	
?>

<!DOCTYPE html>
 <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Desvio Condicional</title>
    </head>
    <body>
        
        <?php
            echo $msg;
        /*
            if ($idade >= 18) {
                echo "Maior de idade";	
            } else {
                echo "Menor de idade";	
            }
                */
        ?>
        
    </body>

 </html>