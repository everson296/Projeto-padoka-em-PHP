<?php 
    setlocale(LC_ALL, "pt-BR");
    require_once('funcoes/funcoes.php');


?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title> padaria-loja </title>
        <link rel="shortcut icon" href="imagens/pao.png">
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <style>
            
            .efeitoMenu #corLoja{
                color: var(--menuColor);
            }
            
            #containerConteudo{
                min-height: 600px;
                height: auto;
                width: 100%;
            /*    background-color: gray;*/
                padding-top: 30px;
                box-sizing: border-box;
                overflow: hidden;

            }

            .containerCidade{
                height: 480px;
                width: 100%;
                background-color: blanchedalmond;
                margin-bottom: 20px;
            }

            .titulo{
                height: 80px;
                width: 100%;
                background-color: orange;
            }

            .infoCidade{
                height: 400px;
                width: 100%;
                background-color: rgba(3, 248, 252,0.5);
                padding: 20px;
                padding-top: 30px;
                box-sizing: border-box;
            }

            .imgLoja{
                height: 320px;
                width: 470px;
                background-color: orange;
                margin-right: 20px;
                float: left;
            }

            .infoLoja{
                height: 320px;
                width: 380px;
            /*    background-color: orange;*/
                margin-right: 20px;
                float: left;
            }

            .nome, .gerente, .rua, .bairro, .numero, .E_mail{
                height: 45px;
                width: 100%;
                background-color: rgba(255,255,255,0.5);
                margin-bottom: 10px;
                text-align: center;
                font-family: comic sans ms;
                font-size: 24px;
                color: #36332f;
            }

            .googleMaps{
                height: 320px;
                width: 470px;
                background-color: orange;
                float: left;
            }

        </style>
        
    </head>
       <body>
        <?php  echo(menu()); ?>
        
        <section>
            <div class="container">
                <div id="containerConteudo">
                   
                   <?php echo(lojas()); ?>
                   
                </div>
            </div>
        </section>
        
        <?php echo(rodaPe()); ?>
    </body>
</html>