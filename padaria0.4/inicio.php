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
            min-height: 400px;
            height: auto;
            width: 100%;
            background-color: dimgray;
            overflow-y: hidden;

        }

        #subMenu{
            min-height: 50px;
            height: auto;
            width: 250px;
            float: left;

        }

        .itensSubMenu{
            height: 50px;
            width: 230px;
            background-color: orange;
            margin-bottom: 10px;
            transition: 1s;

        }

        .itensSubMenu:hover{
            width: 250px;
            background-color: darkorange;
            transition: 0.5s;
            cursor: pointer;
        }


        .containerProdutos{
            min-height: 400px;
            height: auto;
            width: 1150px;
            background-color: rgb(0,0,0,0.5);
            float: right;
            padding-top: 20px;
            padding-right: 10px;
            box-sizing: border-box;


        }

        .produtos{
            height: 350px;
            width: 350px;
            background-color: beige;
            float: right;
            margin-right: 20px;
            padding-top: 20px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        .imgProduto{
            height: 150px;
            width: 150px;
            background-color: orange;
            margin-left: auto;
            margin-right: auto;
        }

        .nome, .descricao, .containerPreco, .detalhe{
            height: 35px;
            width: 100%;
        /*    background-color: rgb(0,0,0,0.5);*/
            margin-top: 10px;
            padding-left: 10px;
            margin-top: 5px;
            box-sizing: border-box;
            text-align: left;
            font-family: "comic sans ms", "arial";
            font-size: 1.3em;
            text-align: center;
            border-bottom: 2px solid;

        }

        .descricao{
            height: 55px;
        }

        .preco{
            float: left;
            width: 50%;
            height: inherit;
        }

        .desconto{
            float: right;
            width: 50%;
            height: inherit;
        }

        .detalhe{
            text-align: right;
            padding-right: 10px;
            box-sizing: border-box;
        }

        .detalhe:hover{
            cursor: pointer;
        }
            
        </style>
        
    </head>
    <body>
          
        <?php  echo(menu()); ?>  
      
        <header> <div id="inicio"></div></header>
        
<!--                                    CONTEUDO                  -->
        <?php echo(redesSociais())?>
         

        
        <section>
            <div class="container">
                <div id="containerConteudo">
                   <div id="subMenu">
                       <div class="itensSubMenu"></div>
                       <div class="itensSubMenu"></div>
                       <div class="itensSubMenu"></div>
                   </div>
                   
                   
                   <div class="containerProdutos">
                      
                       <?php echo(containerProduto())?>
                       <?php echo(containerProduto())?>
                       <?php echo(containerProduto())?>
                   
                       
                   </div>   
                   
                     
                   
                    
                   
                    
                    
                </div>
            </div>
        </section>
        
        
        
        <?php echo(rodaPe()); ?>
                
        
        
        
        
        
        
        
        
    </body>
</html>