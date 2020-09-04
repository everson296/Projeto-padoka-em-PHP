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
            
            #containerConteudo{
                min-height: 500px;
                height: auto;
                width: 100%;
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
                background-color: #ff9500;
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
/*                background-color: rgba(255, 255, 255, 0.3);*/
/*                background-color: rgba(181, 151, 80, 0.8);*/
                background: linear-gradient(45deg , #ffb300,#c96f00);
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
                margin-bottom: 20px;
            }

            .nome, .decricao, .preco, .detalhes{
                height: 38px;
                width: 100%;
                border-bottom: 2px solid  #825700;
                padding-left: 20px;
                box-sizing: border-box;
                font-family: comic sans ms;
                font-size: 24px;
                box-sizing: border-box;
                color: #fff;

            }

            .decricao{
                height: 50px;
                width: 100%;
            }

            .detalhes{
                text-align: right;
                padding-right: 20px;
            }
                
            .configImg{
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                background-origin: border-box; 
            }

            #pao{
                background-image: url(imagens/inicio/produtos/pao.jpg);
            ;}

            #pao2{
                background-image: url(imagens/inicio/produtos/pao2.jpg);
            }

            #croassao{
                background-image: url(imagens/inicio/produtos/croass%C3%A3o.jpg);

            }

            #brigadeiro{
                background-image: url(imagens/inicio/produtos/brigadeiro.png);

            }    
                
            }
            
            @media screen and (max-device-width:780px){
                
            #containerConteudo{
                min-height: 500px;
                height: auto;
                width: 100%;
                overflow: hidden;
                padding-top: 100px;
                display: flex;
                justify-content: center;
                align-content: center;
                align-items: center;
                flex-direction: column;
                
            }

            #containerSubMenu{
                display: none;
            }

            .containerProdutos{
                height: 630px;
                width: 630px;
                background: linear-gradient(45deg , #ffb300,#c96f00);
                padding-top: 30px;
                box-sizing: border-box;
                margin-right: 20px;
                margin-bottom: 20px;
                
            }

            .imgProduto{
                height: 250px;
                width: 250px;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 20px;
            }

            .nome, .decricao, .preco, .detalhes{
                height: 80px;
                width: 100%;
                border-bottom: 2px solid  #825700;
                padding-left: 20px;
                box-sizing: border-box;
                font-family: comic sans ms;
                font-size: 3.5em;
                box-sizing: border-box;
                color: #fff;

            }

            .decricao{
                height: 80px;
                width: 100%;
            }

            .detalhes{
                text-align: right;
                padding-right: 20px;
            }
                
            .configImg{
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                background-origin: border-box; 
            }

            #pao{
                background-image: url(imagens/inicio/produtos/pao.jpg);
            }

            #pao2{
                background-image: url(imagens/inicio/produtos/pao2.jpg);
            }

            #croassao{
                background-image: url(imagens/inicio/produtos/croass%C3%A3o.jpg);

            }

            #brigadeiro{
                background-image: url(imagens/inicio/produtos/brigadeiro.png);

            }  
                
               
    
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
                    
                    <?php echo(containerProduto('pao', 'pao', 'gostoso,e quente', '4,00')); ?>
                    <?php echo(containerProduto('pao2', 'pao', 'caseiro', '5,00')); ?>
                    <?php echo(containerProduto('croassao', 'croassao','massa macia','5,00')); ?>
                    <?php echo(containerProduto('brigadeiro', 'brigadeiro','chocolate cremoso','2,00')); ?>
                    
                    
                    
                    
                    
                    <?php echo(redesSociais()); ?>
                </div>
            </div>
        </section>
        
        
        
         

        
       
        
        
        
        
        
        
        
        
        
        
        
        
        
        <?php echo(rodaPe()); ?>
    </body>
</html>