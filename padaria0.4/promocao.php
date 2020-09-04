<?php 
    setlocale(LC_ALL, "pt-BR");
    require_once('funcoes/funcoes.php');


?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title> padaria-promocao </title>
        <link rel="shortcut icon" href="imagens/pao.png">
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <style>
     
        </style>
    </head>
    <body>
      
        <?php  echo(menu()); ?>
        
        <header> 
            <div id='promocao'>
                <div id='tituloHeader'>Promocao</div> 
            </div>
        </header>
        
        <section>
            <div class="container">
                <div id="containerDestaque">
                    <div id="imgDestaque"></div>
                    <div id="containerSubDestaque">
                        <div id="subDestaque1"></div>
                        <div id="subDestaque1"></div>
                    </div>
                </div>
            </div>
        </section>
        
        <?php 
                $texto = (string) "Produtos da semana"; 
                echo(titulo($texto)); 
            ?>
       
       <section>
           <div class="container">
               <div id="containerPromocao">
                   <div class="produto"></div>
               </div>
           </div>
       </section>
       
       
        <?php echo(rodaPe()); ?>
    </body>
</html>