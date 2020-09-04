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
            
            .efeitoMenu #corPromocao{
                color: var(--menuColor);
            }


             #containerDestaque{
                height: 600px;
                width: 100%;
                padding: 20px;
                padding-top: 30px;
                box-sizing: border-box;
            }

            #imgDestaque{
                height: 500px;
                width: 800px;
                background-color: #ffb300;
                float: left;
                background-image: url(imagens/promocao/destaques/promocao1.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;

            }

            #containerSubDestaque{
                height: 500px;
                width: 540px;
            /*    background-color: firebrick;*/
                float: right;
            }

            #subPromocao1, #subPromocao2{
                height: 240px;
                width: 100%;
                margin-bottom: 20px;
                background-color: #ffb300;
                background-image: url(imagens/promocao/destaques/promocao3.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }
                
            #subPromocao2{
                background-image: url(imagens/promocao/destaques/promocao4.jpg);
            }


            #containerPromocao{
                min-height: 450px;
                height: auto;
                width: 100%;
                padding: 20px;
                padding-top: 30px;
                padding-right: 0px;
                box-sizing: border-box;
                overflow-y: hidden;
                background-color: rgba(28, 28, 28,0.6);
            }

            .produto{
                height: 350px;
                width: 255px;
                background-color: aliceblue;
                margin-right: 20px;
                margin-bottom: 20px;
                float: left;
            }

            .imgProduto{
                height: 210px;
                width: 100%;
                background-color: rgb(255, 149, 0 , 0.5);
            }

            .nome{
                height: 30px;
                width: 100%;
                text-align: center;
                font-size: 1.2em;
            }

            .containerPreco{
                height: 50px;
                width: 100%;
                background-color: black;
            }

            .preco, .desconto{
                height: inherit;
                width: 50%;
                background-color: #fff;
                float: left;
                font-size: 1em;
                display: flex;
                justify-content: center;
                align-content: center;
                align-items: center;
                font-family: comic sans ms;
                color: #eb8500;
            }

            .desconto{
                float: right;
                text-decoration: line-through;
                color: #737574;
            }

            .containerCompra{
                height: 60px;
                width: 100%;
                background-color: #fff;
                padding: 10px;
                box-sizing: border-box;
                border-top: 2px solid #000;
            }

            .btmMenos, .btnMais{
                height: 15px;
                width: 15px;
                transform: rotate(45deg);
                margin-top: 10px;
                border-top: 5px solid #000;
                border-right: 5px solid #000;
                float: left;
            }
                
            .btmMenos{
                border-top: none;
                border-right: none;  
                border-bottom: 5px solid #000;
                border-left: 5px solid #000;
            }

            .quantidade{
                height: 40px;
                width: 40px;
                float: left;
                color: #000;
                display: flex;
                justify-content: center;
                align-content: center;
                align-items: center;
                font-size: 1.8em;
                font-weight: bold;
                font-family: comic sans ms;
            }

            .compra{
                height: 40px;
                width: 100px;
                background-color: #fff;
                border-radius: 40px;
                border-bottom: 2px solid #000;
                border-right: 2px solid #000;
                float: right;
                display: flex;
                justify-content: center;
                align-content: center;
                align-items: center;
                color: #000;
                font-weight: bold;
                font-family: comic sans ms;
                font-size: 0.9em
            }
                
            #torta1{
                background-image: url(imagens/promocao/produtos/torta.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }
                
            #torta2{
                background-image: url(imagens/promocao/produtos/torta2.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }
                
            #torta3{
                background-image: url(imagens/promocao/produtos/torta3.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }
                
            #misto1{
                background-image: url(imagens/promocao/produtos/misto1.jpeg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }
                
            #misto2{
                background-image: url(imagens/promocao/produtos/misto2.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }
                
            #cafe{
                background-image: url(imagens/promocao/produtos/cafe.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }
                
            #bolo1{
                background-image: url(imagens/promocao/produtos/bolo1.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }
                
            #bolo2{
                background-image: url(imagens/promocao/produtos/bolo2.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }
                
            #bolo3{
                background-image: url(imagens/promocao/produtos/bolo3.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }
                
                
            
            }
            
            @media screen and (max-device-width:780px){
            
            .efeitoMenu #corPromocao{
                color: var(--menuColor);
            }


             #containerDestaque{
                 min-height: 100px;
                height: auto;
                width: 100%;
                padding: 20px;
                padding-top: 30px;
                box-sizing: border-box;
                 display: flex;
                 justify-content: center;
                 align-content: center;
                 align-items: center;
                 flex-direction: column;
            }

            #imgDestaque{
                height: 500px;
                width: 90%;
                background-color: #ffb300;
                float: left;
                background-image: url(imagens/promocao/destaques/promocao1.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
                margin-bottom: 20px;

            }

            #containerSubDestaque{
                height: 500px;
                width: 90%;
            /*    background-color: firebrick;*/
            }

            #subPromocao1, #subPromocao2{
                height: 240px;
                width: 100%;
                margin-bottom: 20px;
                background-color: #ffb300;
                background-image: url(imagens/promocao/destaques/promocao3.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }
                
            #subPromocao2{
                background-image: url(imagens/promocao/destaques/promocao4.jpg);
            }


            #containerPromocao{
                min-height: 450px;
                height: auto;
                width: 100%;
                padding: 20px;
                padding-top: 30px;
                padding-right: 0px;
                box-sizing: border-box;
                overflow-y: hidden;
                background-color: rgba(28, 28, 28,0.6);
                display: flex;
                justify-content: center;
                align-content: center;
                align-items: center;
                flex-direction: column;
            }
                
                #containerPromocao h2{
                    color: #000;
                }    

            .produto{
                height: 550px;
                width: 455px;
                background-color: aliceblue;
                margin-bottom: 20px;
                float: left;
            }

            .imgProduto{
                height: 210px;
                width: 100%;
                background-color: rgb(255, 149, 0 , 0.5);
            }

            .nome{
                height: 80px;
                width: 100%;
                text-align: center;
                font-size: 2em;
                color: #000;
            }
                
                

            .containerPreco{
                height: 80px;
                width: 100%;
                background-color: black;
            }

            .preco, .desconto{
                height: inherit;
                width: 50%;
                background-color: #fff;
                float: left;
                font-size: 2em;
                display: flex;
                justify-content: center;
                align-content: center;
                align-items: center;
                font-family: comic sans ms;
                color: #eb8500;
            }

            .desconto{
                float: right;
                text-decoration: line-through;
                color: #737574;
            }

            .containerCompra{
                height: 100px;
                width: 100%;
                background-color: #fff;
                padding: 10px;
                box-sizing: border-box;
                border-top: 2px solid #000;
            }

            .btmMenos, .btnMais{
                height: 20px;
                width: 20px;
                margin-right: 20px;
                transform: rotate(45deg);
                margin-top: 10px;
                border-top: 5px solid #000;
                border-right: 5px solid #000;
                float: left;
            }
                
            .btmMenos{
                border-top: none;
                border-right: none;  
                border-bottom: 5px solid #000;
                border-left: 5px solid #000;
            }

            .quantidade{
                height: 40px;
                width: 40px;
                float: left;
                color: #000;
                display: flex;
                justify-content: center;
                align-content: center;
                align-items: center;
                font-size: 3em;
                margin-right: 20px;
                font-weight: bold;
                font-family: comic sans ms;
            }

            .compra{
                height: 80px;
                width: 200px;
                background-color: #fff;
                border-radius: 40px;
                border-bottom: 2px solid #000;
                border-right: 2px solid #000;
                float: right;
                display: flex;
                justify-content: center;
                align-content: center;
                align-items: center;
                color: #000;
                font-weight: bold;
                font-family: comic sans ms;
                font-size: 1.9em
            }
                
            #torta1{
                background-image: url(imagens/promocao/produtos/torta.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }
                
            #torta2{
                background-image: url(imagens/promocao/produtos/torta2.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }
                
            #torta3{
                background-image: url(imagens/promocao/produtos/torta3.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }
                
            #misto1{
                background-image: url(imagens/promocao/produtos/misto1.jpeg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }
                
            #misto2{
                background-image: url(imagens/promocao/produtos/misto2.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }
                
            #cafe{
                background-image: url(imagens/promocao/produtos/cafe.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }
                
            #bolo1{
                background-image: url(imagens/promocao/produtos/bolo1.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }
                
            #bolo2{
                background-image: url(imagens/promocao/produtos/bolo2.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                background-origin: border-box;
            }
                
            #bolo3{
                background-image: url(imagens/promocao/produtos/bolo3.jpg);
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