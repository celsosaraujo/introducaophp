<?php
    $cidades = ['ITÚ','BORÁ','JAÚ','POÁ','URU'];
?>

<!DOCTYPE html>
 <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP</title>
    </head>
    <body>        
        <?php 
            foreach($cidades as $cidade ){
                echo "$cidade<br>";
            }            
            echo "<hr>";
            for($i=0; $i < count($cidades); $i++ ){
                echo "$cidades[$i]<br>";                    
            }
        ?>        
    </body>
 </html>