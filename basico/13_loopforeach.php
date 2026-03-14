<?php
    $nomes = ['Ana','Carlos','Maria'];
?>

<!DOCTYPE html>
 <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP</title>
    </head>
    <body>        
        <?php 
            foreach($nomes as $nome ){
                echo "$nome<br>";
            }            

            for($i=0; $i < count($nomes); $i++ ){
                echo "$nomes[$i]<br>";                    
            }
        ?>        
    </body>
 </html>