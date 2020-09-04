<?php 
    setlocale(LC_ALL, "pt-BR");
    require_once('funcoes/funcoes.php');


?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title> padaria- curiosidades </title>
        <link rel="shortcut icon" href="imagens/pao.png">
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <style>
            .efeitoMenu #corCuriosidade{
                color: var(--menuColor);
            }
            
            #curiosidades{
                background-image: url("./imagens/curiosidade/header.jpg");

            }

            #containerDestaqueCuriosidade{
                height: 460px;
                width: 100%;
                background-color: #333634;

            }

            #primeiraCuriosidade{
                height: 420px;
                width: 660px;
                background-color: orange;
                float: left;
                margin-left: 30px;
                margin-top: 20px;
                overflow: hidden;
            }

            #primeiroTitulo, #segundoTitulo, #terceiroTitulo, #quartoTitulo{
                height: 100px;
                width: 100%;
                background-color: rgb(0,0,0,0.5);
                opacity: 0;
                visibility: hidden;
                margin-top: 340px;

            }

            #primeiraCuriosidade:hover > #primeiroTitulo{
                opacity: 1;
                visibility: visible;
                transition: 1s;
                margin-top: 320px;
            }

            #segundaCuriosidade{
                height: 200px;
                width: 650px;
                background-color: orange;
                float: right;
                margin-top: 20px;
                margin-right: 30px;
                overflow: hidden;
            }

            #segundoTitulo, #terceiroTitulo, #quartoTitulo{
                margin-top: 140px;
            }

            #segundaCuriosidade:hover > #segundoTitulo{
                opacity: 1;
                visibility: visible;
                transition: 1s;
                margin-top: 100px;
            }

            #terceiraCuriosidade, #quartaCuriosidade{
                height: 200px;
                width: 310px;
                background-color: orange;
                float: left;
                margin-top: 20px;
                margin-left: 30px;
                overflow: hidden;
            }

            #terceiraCuriosidade:hover > #terceiroTitulo{
                opacity: 1;
                visibility: visible;
                transition: 1s;
                margin-top: 100px;
            }

            #quartaCuriosidade:hover > #quartoTitulo{
                opacity: 1;
                visibility: visible;
                transition: 1s;
                margin-top: 100px;
            }

            #containerAssuntosAntigos{
                min-height: 500px;
                height: auto;
                width: 100%;
                background-color: #67686b;
                overflow: hidden;
            }

            #containerAssuntos{
                height: inherit;
                width: 1000px;
                float: left;
            }

            .assunto{
                height: 200px;
                width: 920px;
                margin-left: 30px;
                margin-top: 20px;
                margin-bottom: 20px;
            }
            
            .assunto h2{
                font-size: 1.0em;
            }

            .imagemAssunto{
                height: inherit;
                width: 350px;
                background-color: #fff;
                float: left;
                overflow: hidden;

            }
            
            .imagemAssunto{
                cursor: pointer;
            }
            
            .tituloAssunto{
                height: 50px;
                width: 100%;
                background-color: rgb(0,0,0,0.7);
                margin-top: 160px;
                opacity: 0;
                visibility:hidden; 
                font-family: sans-serif;
                color: #fff;
                font-size: 1.5em;
                padding: 10px;
                text-align: center;
                box-sizing: border-box;
            
            }

            .imagemAssunto:hover > .tituloAssunto{
                opacity: 1;
                visibility: visible;
                transition: 0.6s;
                margin-top: 150px; 
                cursor: pointer;
            }

            .textoAssunto{
                height: inherit;
                width: 550px;
                background-color: #fff;
                float: right;
                
            }

            .containerCreditos{
                height: 26px;
                width: 100%;
            }

            .data_nome{
                height: inherit;
                width: 261px;
                float: left;
                color: #000;
                font-family: "arial";
                font-size: 20px;
                padding-left: 10px;
                padding-top: 4px;
                border-bottom: 2px solid #000;
                text-align: center;
                
            }

            .texto{
                height: 125px;
                width: 546px;
                font-size: 1.4em;
                text-align: justify;
                color: #000;
                padding: 15px;
                box-sizing: border-box;
                font-family: sans-serif, arial;
            }

            .redesSociais{
                height: 48px;
                width: 546px;
                border-top: 2px solid #000;

            }

            .redesSociais:hover{
                cursor: pointer;
            }
            .redes{
                height: 48px;
                width: 48px;
/*                background-color: #f5b60a;*/
                border-radius: 10px;
                float: left;
                margin-right: 5px;
            }

            .RDfacebook{
                background-image: url(imagens/curiosidade/redes/face.png);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                box-sizing: border-box;
            }

            .RDfacebook:hover{
                transition: .5s;
                box-shadow: 0 0 10px #3564e6, 0 0 40px #3564e6;
            }

            .RDtwitter{
                background-image: url(imagens/curiosidade/redes/twit.png);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                box-sizing: border-box;
            }

            .RDtwitter:hover{
                transition: .5s;
                box-shadow: 0 0 10px #6fc6d1, 0 0 40px #6fc6d1;
            }

            .RDwhatzapp{
                background-image: url(imagens/curiosidade/redes/whats.png);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                box-sizing: border-box;
            }

            .RDwhatzapp:hover{
                transition: .5s;
                box-shadow: 0 0 10px #00ff2a, 0 0 40px #00ff2a;
            }

            .RDpinterest{
                background-image: url(imagens/curiosidade/redes/pin.png);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                box-sizing: border-box;
            }

            .RDpinterest:hover{
                transition: .5s;
                box-shadow: 0 0 10px #ff0055, 0 0 40px #ff0055;
            }

            .RDyoutube{
                background-image: url(imagens/curiosidade/redes/yt.png);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                box-sizing: border-box;
            }

            .RDyoutube:hover{
                transition: .5s;
                box-shadow: 0 0 10px #ff0000, 0 0 40px #ff0000;
            }

            .RDinstagram{
                background-image: url(imagens/curiosidade/redes/insta.png);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                box-sizing: border-box;
            }

            .RDinstagram:hover{
                transition: .5s;
                box-shadow: 0 0 10px #1779ad, 0 0 40px #1779ad;
            }

            #containerMaisVistos{
                height: 700px;
                width: 400px;
                float: right;
            }

            #DestaqueMaisVistos{
                height: 200px;
                width: 330px;
                background-color: aliceblue;
                margin-left: 35px;
                margin-top: 20px;
                overflow: hidden;
            }

            #numeracao{
                height: 42px;
                width: 50px;
                background-color: orange;
                text-align: center;
                color: #000;
                font-family: "comic sans ms", "arial";
                font-size: 24px;
                padding-top: 8px;

            }

            #tituloDestaqueMaisVisto{
                height: 60px;
                width: 100%;
                background-color: rgb(0,0,0,0.5);
                margin-top: 110px;
                opacity: 0;
                visibility: hidden;
                padding: 10px;
                padding-top: 15px;
                font-size: 1.6em;
                font-family: sans-serif;
                color: #fff;
                text-align: center;
                box-sizing: border-box;
                
            }

            #DestaqueMaisVistos:hover > #tituloDestaqueMaisVisto{
                opacity: 1;
                visibility: visible;
                transition:0.8s;
                margin-top: 90px;
            }

            .maisVistos{
                height: 60px;
                width: 330px;
                margin-top: 20px;
                margin-left: 35px;
            }

            .numeracao{
                height: 52px;
                width: 60px;
                background-color: orange;
                text-align: center;
                font-family: "comic sans ms", "arial";
                font-size: 30px;
                padding-top: 8px;
                color: #000;
                float: left;
            }

            .tituloMaisVisto{
                height: 60px;
                width: 270px;
                background-color: rgb(0,0,0,0.5);
                float: left;
                padding: 10px;
                padding-top: 15px;
                font-size: 1.6em;
                font-family: sans-serif;
                color: #fff;
                text-align: center;
                box-sizing: border-box;
            }
            
            h3{
                text-align: center;
                color: #fff;
            }
            
            .tituloGrande{
                font-size: 3em;
            }
            
            .tituloPequeno{
                font-size: 1.9em;
            }
            
        </style>
    </head>
    <body>
      
        <?php  echo(menu()); ?>
        
        <section>
            <div class="container">
                <div id="containerDestaqueCuriosidade">
                    <div id="primeiraCuriosidade">
                        <div id="primeiroTitulo"><h3 class="tituloGrande">o quanto um pão pode durar</h3></div>
                    </div>
                    <div id="segundaCuriosidade">
                        <div id="segundoTitulo"><h3 class="tituloGrande">Quando foi criado o pão</h3></div>
                    </div>
                    <div id="terceiraCuriosidade">
                        <div id="terceiroTitulo"><h3 class="tituloPequeno">Como foi criado o pão</h3></div>
                    </div>
                    <div id="quartaCuriosidade">
                        <div id="quartoTitulo"><h3 class="tituloPequeno">
                            Por que è um habito comermos Pão no café da manhã
                        </h3></div>
                    </div>
                </div>
            </div>
        </section>

            <?php 
                $texto = (string) "Assuntos antigos"; 
                echo(titulo($texto)); 
            ?>
             
       <section>
           <div class="container">
               <div id="containerAssuntosAntigos">
                   <div id="containerAssuntos">
                      
                       <?php echo(curiosidade()); ?>
                       <?php echo(curiosidade()); ?>
                       <?php echo(curiosidade()); ?>
                       <?php echo(curiosidade()); ?>
                       <?php echo(curiosidade()); ?>
                       <?php echo(curiosidade()); ?>
                       <?php echo(curiosidade()); ?>
                       
                   </div>                         
                   
                   
                   <div id="containerMaisVistos">
                           <div id="DestaqueMaisVistos">
                               <div id="numeracao">1</div>
                               <div id="tituloDestaqueMaisVisto">
                                   titulo curiosidade
                               </div>
                           </div>
                           
                           <?php echo(listacuriosidade(2)); ?>
                           <?php echo(listacuriosidade(3)); ?>
                           <?php echo(listacuriosidade(4)); ?>
                           <?php echo(listacuriosidade(5)); ?>
                           <?php echo(listacuriosidade(6)); ?>
                           <?php echo(listacuriosidade(7)); ?>
                           
                           
                   </div>
               </div>
           </div>
       </section>
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
        <?php echo(rodaPe()); ?>
    </body>
</html>