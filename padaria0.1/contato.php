<?php 
    setlocale(LC_ALL, "pt-BR");
    require_once('funcoes/funcoes.php');


?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title> padaria- curiosidades </title>
        <link rel="shortcut icon" href="imagens/pao.png">
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
      
        <?php  echo(menu()); ?>
        
        <header> 
            <div id='ImgemContato'>
                <div id='tituloHeader'>contato</div> 
            </div>
        </header>
        
       
       
        <?php echo(rodaPe()); ?>
    </body>
</html>