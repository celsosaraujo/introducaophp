<!DOCTYPE html>
 <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP</title>
    </head>
    <body>
        <!-- Comentário de HTML (CTRL + ;)-->
        <p>
            Olá, hoje é dia  <?php 
                // date_default_timezone_set('America/Sao_Paulo');
                echo date('d/m/Y');  

                /*Aspas Simples, utilizado apenas para textos simples*/
                $teste = 1;
                echo '<p>A caixa d\'água está vazia.\\ $teste';                
                echo '<p>A caixa d\'água está vazia.\\ '.$teste; //Concatenação
                
                $teste = 'um';
                echo '<p>A caixa d\'água está vazia.\\ '.$teste; //Concatenação

                /* Aspas Dupla, são processadas. Por isso permite mais recursos*/
                $litros = '1000L';
                echo "<br>A caixa d'água é de $litros";


            ?>
        </p>
    </body>

 </html>