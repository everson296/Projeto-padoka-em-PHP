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
        <link rel="stylesheet" type="text/css" href="css/promocao.css">
        <script src="javascript/jquery.js"></script>
        
        <script>
                $(document).ready(function(){

        //                .css, .slideToggle

                        // função para o click do menu mobile 
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
                <div id="containerDestaque">
                    <div id="imgDestaque"></div>
                    <div id="containerSubDestaque">
                        <div id="subPromocao1"></div>
                        <div id="subPromocao2"></div>
                    </div>
                </div>
            </div>
        </figure>
        
        <?php 
                $texto = (string) "Produtos da semana"; 
                echo(titulo($texto)); 
            ?>
       
       <section>
           <div class="container">
               <div id="containerPromocao">
                   
                   <?php echo(Promocao('torta de frango', '15,59', '17,99','torta1')); ?>
                   <?php echo(Promocao('torta de carne', '16,59', '18,99','torta2')); ?>
                   <?php echo(Promocao('torta de recheada', '12,59', '15,99','torta3')); ?>
                   <?php echo(Promocao('misto', '6,99', '8,50','misto1')); ?>
                   <?php echo(Promocao('misto', '5,50', '17,99','misto2')); ?>
                   <?php echo(Promocao('cafe', '2,00', '2,50','cafe')); ?>
                   <?php echo(Promocao('bolo de chocolate', '25,00', '30,99','bolo1')); ?>
                   <?php echo(Promocao('bolo de doce', '30,00', '35,00','bolo2')); ?>
                   <?php echo(Promocao('bolo de fuba', '20,00', '22,00','bolo3')); ?>
                   
                   
               </div>
           </div>
       </section>
       
       
        <?php echo(rodaPe()); ?>
    </body>
</html>