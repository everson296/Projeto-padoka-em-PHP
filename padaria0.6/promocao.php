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
            
            .efeitoMenu #corPromocao{
                color: var(--menuColor);
            }


             #containerDestaque{
                height: 600px;
                width: 100%;
                background-color: orange;
                padding: 20px;
                padding-top: 30px;
                box-sizing: border-box;
            }

            #imgDestaque{
                height: 500px;
                width: 800px;
                background-color: aqua;
                float: left;

            }

            #containerSubDestaque{
                height: 500px;
                width: 540px;
            /*    background-color: firebrick;*/
                float: right;
            }

            .subDestaque{
                height: 240px;
                width: 100%;
                background-color: aqua;
                margin-bottom: 20px;
            }


            #containerPromocao{
                min-height: 450px;
                height: auto;
                width: 100%;
                background-color: orange;
                padding: 20px;
                padding-top: 30px;
                padding-right: 0px;
                box-sizing: border-box;
                overflow-y: hidden;
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
                background-color: red;

            }

            .containerPreco{
                height: 50px;
                width: 100%;
                background-color: black;
            }

            .preco, .desconto{
                height: inherit;
                width: 50%;
                background-color: rgb(255,255,255,0.5);
                float: left;
            }

            .desconto{
                float: right;
                background-color: rgb(45,45,45,0.5);
            }

            .containerCompra{
                height: 60px;
                width: 100%;
                background-color: rgb(255,0,0,0.5);
                padding: 10px;
                box-sizing: border-box;
            }

            .btmMenos, .btnMais{
                height: 35px;
                width: 35px;
                border-radius: 50%;
                background-color: aqua;
                margin-top: 5px;
                float: left;
            }

            .quantidade{
                height: 40px;
                width: 40px;
                background-color: black;
                float: left;
            }

            .compra{
                height: 40px;
                width: 100px;
                background-color: red;
                float: right;
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
                        <div class="subDestaque"></div>
                        <div class="subDestaque"></div>
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
                   
                   <?php echo(Promocao()); ?>
                   
                   
               </div>
           </div>
       </section>
       
       
        <?php echo(rodaPe()); ?>
    </body>
</html>