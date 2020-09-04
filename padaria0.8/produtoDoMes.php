<?php 
    setlocale(LC_ALL, "pt-BR");
    require_once('funcoes/funcoes.php');


?>

<!doctype html>
<html lang="pt-br">
    <head>
       
        <title> padaria-produto do mês </title>

        
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
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
            <style>
            
            @media screen and (min-device-width:1300px){
            .efeitoMenu #corProdutosDoMes{
                color: var(--menuColor);
            }


             #containerPodioProdutos{
                height: 500px;
                width: 100%;
                padding: 20px;
                padding-top: 30px;
                box-sizing: border-box;

            }

            #primeiroLugar{
                height: 450px;
                width: 730px;
                background-color: orange;
                margin-right: 20px;
                float: left;
                background-image: url(imagens/produtosDoMes/destaques/torta.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }

            #segundoLugar, #terceiroLugar{
                height: 214px;
                width: 600px;
                background-color: orange;
                float: left;
                margin-bottom: 20px;
                background-image: url(imagens/produtosDoMes/destaques/torta2.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;

            }
                
            #terceiroLugar{
                background-image: url(imagens/produtosDoMes/destaques/misto1.jpeg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }

            #outrosProdutos{
                min-height: 500px;
                width: 100%;
                background-color: gray;
                padding: 20px;
                padding-top: 30px;
                padding-right: 0px;
                box-sizing: border-box;
                overflow-y: hidden;
                background-color: rgba(28, 28, 28,0.6);

            }

            .containerProduto{
                height: 350px;
                width: 325px;
                background-color: #fff;
                float: left;
                margin-right: 20px;
                margin-bottom: 20px;
            }

            .imgProduto{
                height: 200px;
                width: 100%;
                background-color: rgb(0,0,0,0.5);
                margin-left: auto;
                margin-right: auto;

            }

            .nome{
                height: 50px;
                width: 100%;
                font-size: 1.5em;
                padding: 10px;
                box-sizing: border-box;
                font-family: sans-serif;
                color: #000;
                text-align: center;
                border-bottom: 2px solid #000;
                
            }

            .preco{
                height: 50px;
                width: 100%;
                padding: 10px;
                box-sizing: border-box;
                font-family: sans-serif;
                font-size: 1.5em;
                color: #000;
                text-align: center;
                border-bottom: 2px solid #000;
            }

            .descricao{
                height: 50px;
                width: 100%;
                padding: 10px;
                box-sizing: border-box;
                font-size: 1.5em;
                font-family: sans-serif;
                color: #000;
                text-align: center;
                border-bottom: 2px solid #000;
            }
                
            #torta1{
                background-image: url(imagens/produtosDoMes/produtos/torta.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }    
                
            #torta2{
                background-image: url(imagens/produtosDoMes/produtos/torta2.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }   
                
            #misto{
                background-image: url(imagens/produtosDoMes/produtos/misto1.jpeg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }       
            }
            
            @media screen and (max-device-width:780px){
            .efeitoMenu #corProdutosDoMes{
                color: var(--menuColor);
            }


             #containerPodioProdutos{
                 min-height: 100px;
                height: auto;
                width: 100%;
                padding: 20px;
                padding-top: 30px;
                box-sizing: border-box;
                 overflow: hidden;
                 display: flex;
                 justify-content: center;
                 align-content: center;
                 align-items: center;
                 flex-direction: column;

            }
                
                .containerProduto h2{
                    color: #000;
                }    

            #primeiroLugar{
                height: 450px;
                width: 95%;
                background-color: orange;
                margin-bottom: 20px;
                background-image: url(imagens/produtosDoMes/destaques/torta.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }

            #segundoLugar, #terceiroLugar{
                height: 214px;
                width: 95%;
                background-color: orange;
                margin-bottom: 20px;
                background-image: url(imagens/produtosDoMes/destaques/torta2.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;

            }
                
            #terceiroLugar{
                background-image: url(imagens/produtosDoMes/destaques/misto1.jpeg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }

            #outrosProdutos{
                min-height: 500px;
                width: 100%;
                background-color: gray;
                padding: 40px;
                box-sizing: border-box;
                overflow-y: hidden;
                background-color: rgba(28, 28, 28,0.6);
                

            }

            .containerProduto{
                height: 450px;
                width: 425px;
                background-color: #fff;
                float: left;
                margin-right: 20px;
                margin-bottom: 20px;
            }

            .imgProduto{
                height: 200px;
                width: 100%;
                background-color: rgb(0,0,0,0.5);
                margin-left: auto;
                margin-right: auto;

            }

            .nome{
                height: 50px;
                width: 100%;
                font-size: 1.5em;
                padding: 10px;
                box-sizing: border-box;
                font-family: sans-serif;
                color: #000;
                text-align: center;
                border-bottom: 2px solid #000;
                
            }

            .preco{
                height: 50px;
                width: 100%;
                padding: 10px;
                box-sizing: border-box;
                font-family: sans-serif;
                font-size: 1.5em;
                color: #000;
                text-align: center;
                border-bottom: 2px solid #000;
            }

            .descricao{
                height: 50px;
                width: 100%;
                padding: 10px;
                box-sizing: border-box;
                font-size: 1.5em;
                font-family: sans-serif;
                color: #000;
                text-align: center;
                border-bottom: 2px solid #000;
            }
                
            #torta1{
                background-image: url(imagens/produtosDoMes/produtos/torta.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }    
                
            #torta2{
                background-image: url(imagens/produtosDoMes/produtos/torta2.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }   
                
            #misto{
                background-image: url(imagens/produtosDoMes/produtos/misto1.jpeg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }       
            }
            

        </style>
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