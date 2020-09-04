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
                margin-bottom: 20px;
            }

            .titulo{
                height: 80px;
                width: 100%;
                background-color: orange;
                color: #000;
                display: flex;
                justify-content: center;
                align-content: center;
                align-items: center;
                font-family: comic sans ms;
                font-size: 1.8em;
            }

            .infoCidade{
                height: 400px;
                width: 100%;
                background-color: #474a48;
                padding: 20px;
                padding-top: 30px;
                box-sizing: border-box;
            }

            .imgLoja{
                height: 320px;
                width: 470px;
                margin-right: 20px;
                float: left;
            }

            .infoLoja{
                height: 320px;
                width: 380px;
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
                
            #foto1{
                background-image: url(imagens/loja/unnamed.jpg);
                background-position: center;
                background-repeat: no-repeat;
                background-origin: border-box;
                background-size: cover;
                
            }
                
            }

            @media screen and (max-device-width:780px){
            .efeitoMenu #corLoja{
                color: var(--menuColor);
            }
            
            #containerConteudo{
                min-height: 600px;
                height: auto;
                width: 100%;
            /*    background-color: gray;*/
                padding-bottom: 30px;
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
                text-align: center;
                display: flex;
                justify-content: center;
                align-content: center;
                align-items: center;
                font-size: 2em;
                font-weight: bold;
                font-family: comic sans ms;
            }

            .infoCidade{
                height: 400px;
                width: 100%;
                padding: 20px;
                padding-top: 30px;
                box-sizing: border-box;
            }

            .imgLoja{
                height: 320px;
                width: 470px;
                background-color: orange;
                margin-right: 50px;
                float: left;
            }

            .infoLoja{
                height: 320px;
                width: 380px;
/*                background-color: orange;*/
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
                display: none;
            }
                
                #foto1{
                background-image: url(imagens/loja/unnamed.jpg);
                background-position: center;
                background-repeat: no-repeat;
                background-origin: border-box;
                background-size: cover;
                
            }
                
            }
            
            
        </style>
        
    </head>
       <body>
        <?php  echo(menu()); ?>
        
        <section>
            <div class="container">
                <div id="containerConteudo">
                   
                   <?php echo(lojas('são paulo', 'foto1', 'Everson', 'Rua Haddock Lobo', 'Cerqueira César', '354', 'hillvalleypadaria@gmail.com' )); ?>
                   
                   
                </div>
            </div>
        </section>
        
        <?php echo(rodaPe()); ?>
    </body>
</html>