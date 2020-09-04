<?php 
    setlocale(LC_ALL, "pt-BR");
    require_once('funcoes/funcoes.php');


?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title> padaria-produto do mês </title>
        <link rel="shortcut icon" href="imagens/pao.png">
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <style>
     #containerPodioProdutos{
        height: 500px;
        width: 100%;
        background-color: gray;
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
    }

    #segundoLugar, #terceiroLugar{
        height: 214px;
        width: 600px;
        background-color: orange;
        float: left;
        margin-bottom: 20px;

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

    }

    .containerProduto{
        height: 350px;
        width: 325px;
        background-color: orange;
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
        background-color: #fff;
    }

    .preco{
        height: 50px;
        width: 100%;
        background-color: aqua;
    }

    .descricao{
        height: 50px;
        width: 100%;
        background-color: rgb(0,0,0,0.5);
    }

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
                <div id="containerPodioProdutos">
                    <div id="primeiroLugar"></div>
                    <div id="segundoLugar"></div>
                    <div id="terceiroLugar"></div>
                    
                </div>
            </div>
        </section>
        
        <?php 
                $texto = (string) "Outros Produtos"; 
                echo(titulo($texto)); 
            ?>
            
        <section>
            <div class="container">
                <div id="outrosProdutos">
                   
                   <div class="containerProduto">
                       <div class="imgProduto"></div>
                       <div class="nome">pao</div>
                       <div class="preco">5.00</div>
                       <div class="descricao">gostoso</div>
                   </div>
                   
                  
                    
                </div>
            </div>
        </section>    
        
        
        <?php echo(rodaPe()); ?>
    </body>
</html>