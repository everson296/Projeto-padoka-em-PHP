<?php 
    setlocale(LC_ALL, "pt-BR");
    require_once('funcoes/funcoes.php');


?>

<!doctype html>
<html lang="pt-br">
    <head>
       
        <title> padaria-produto do mês </title>

        
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/promocaoMes.css">
        
        <script src="javascript/jquery.js"></script>
        
        <script>
            $(document).ready(function(){

                $('#containerMenuMobile').click(function(){
                    $('#menuMobile').fadeToggle(1000);
                });

                $('.itensMenuMobile').click(function(){
                    $('#iconeMenu').fadeToggle();
                });

            });
        
        </script>
    </head>
    <body>
      
        <?php  echo(menu()); ?>
        
        <figure>
            <div class="container">
                <div id="containerPodioProdutos">
                    <div id="primeiroLugar"></div>
                    <div id="segundoLugar"></div>
                    <div id="terceiroLugar"></div>
                    
                </div>
            </div>
        </figure>
        
        <?php 
                $texto = (string) "Outros Produtos"; 
                echo(titulo($texto)); 
            ?>
            
        <section>
            <div class="container">
                <div id="outrosProdutos">
                   
                   <?php echo(produtoDoMes('torta de frango', '17,99', 'macia e saborosa', 'torta1')); ?>
                   <?php echo(produtoDoMes('torta de carne', '18,99', 'macia e saborosa', 'torta2')); ?>
                   <?php echo(produtoDoMes('misto quente', '8,50', 'macia e saborosa', 'misto')); ?>
                   
                   
                   
                   
                   
                  
                    
                </div>
            </div>
        </section>    
        
        
        <?php echo(rodaPe()); ?>
    </body>
</html>