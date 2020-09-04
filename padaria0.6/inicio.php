<?php 
    setlocale(LC_ALL, "pt-BR");
    require_once('funcoes/funcoes.php');


?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title> padaria- inicio </title>
        <link rel="shortcut icon" href="imagens/pao.png">
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <link rel="shortcut icon" href="imagens/icone_web/pao.png">
        
        <style>
            
            #containerConteudo{
                min-height: 500px;
                height: auto;
                width: 100%;
                background-color: gray;
                overflow: hidden;
                padding-top: 100px;
            }

            #containerSubMenu{
                min-height: 100px;
                height: auto;
                width: 270px;
            /*    background-color: pink;*/
                float: left;
                margin-top: -100px;
            }

            #subMenu{
                height: inherit;
                width: 100%;
            }

            .subItens{
                height: 50px;
                width: 90%;
                background-color: orange;
                margin-bottom: 10px;
                transition: 0.5s;
                padding: 8px;
                font-family: comic sans ms;
                font-size: 24px;
                box-sizing: border-box;

            }

            .subItens:hover {
                width: 100%;
            }

            .containerProdutos{
                height: 350px;
                width: 350px;
                background-color: orange;
                float: right;
                padding-top: 30px;
                box-sizing: border-box;
                margin-right: 20px;
                margin-bottom: 20px;
            }

            .imgProduto{
                height: 130px;
                width: 130px;
                margin-left: auto;
                margin-right: auto;
                background-color: aqua;
                margin-bottom: 20px;
            }

            .nome, .decricao, .preco, .detalhes{
                height: 38px;
                width: 100%;
                border-bottom: 2px solid #000;
                padding-left: 20px;
                box-sizing: border-box;
                font-family: comic sans ms;
                font-size: 24px;
                box-sizing: border-box;

            }

            .decricao{
                height: 50px;
                width: 100%;
                background-color: rgba(0,15,30,0.5);
            }

            .detalhes{
                text-align: right;
                padding-right: 20px;
            }
       
            
        </style>
        
    </head>
    <body>
          
        <?php echo(menu()) ?>
        
        <section>
           
            <div class="container">
                <div id="containerConteudo">
                    <div id="containerSubMenu">
                        <ul id="subMenu">
                            <li class="subItens">itens</li>
                            <li class="subItens">itens</li>
                            <li class="subItens">itens</li>
                            <li class="subItens">itens</li>
                            
                        </ul>
                    </div>
                    
                    <?php echo(containerProduto()); ?>
                    <?php echo(containerProduto()); ?>
                    <?php echo(containerProduto()); ?>
                    <?php echo(containerProduto()); ?>
                    
                    
                    
                    
                    <?php echo(redesSociais()); ?>
                </div>
            </div>
        </section>
        
        
        
         

        
       
        
        
        
        
        
        
        
        
        
        
        
        
        
        <?php echo(rodaPe()); ?>
    </body>
</html>