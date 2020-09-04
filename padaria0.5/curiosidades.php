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
            height: 1000px;
            width: 100%;
            background-color: #333634;

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
        }

        .imagemAssunto{
            height: inherit;
            width: 350px;
            background-color: #fff;
            float: left;

        }

        .tituloAssunto{
            height: 50px;
            width: 100%;
            background-color: rgb(0,0,0,0.7);
            margin-top: 160px;
            opacity: 0;
            visibility:hidden; 
        }

        .imagemAssunto:hover > .tituloAssunto{
            opacity: 1;
            visibility: visible;
            transition: 0.6s;
            margin-top: 150px;
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
            text-align: left;
            color: #000;
            font-family: "arial";
            font-size: 20px;
            padding-left: 10px;
            padding-top: 4px;
            border: 2px solid #000;

        }

        .texto{
            height: 125px;
            width: 546px;
            border-left: 2px #000 solid;
            border-right: 2px #000 solid;
        }

        .redesSociais{
            height: 48px;
            width: 546px;
            border: solid 2px #000;
        }

        .redes{
            height: 48px;
            width: 48px;
            background-color: #000;
            float: left;
            margin-right: 5px;
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
            background-color: rgb(0,0,0,0.9);
            float: left;
        }
        </style>
    </head>
    <body>
      
        <?php  echo(menu()); ?>
        
        <header> 
            <div id='curiosidades'>
                <div id='tituloHeader'>CURIOSIDADES</div> 
            </div>
        </header>
        
        
        <section>
            <div class="container">
                <div id="containerDestaqueCuriosidade">
                    <div id="primeiraCuriosidade">
                        <div id="primeiroTitulo"></div>
                    </div>
                    <div id="segundaCuriosidade">
                        <div id="segundoTitulo"></div>
                    </div>
                    <div id="terceiraCuriosidade">
                        <div id="terceiroTitulo"></div>
                    </div>
                    <div id="quartaCuriosidade">
                        <div id="quartoTitulo"></div>
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
                       <div class="assunto">
                          
                           <div class="imagemAssunto">
                               <div class="tituloAssunto"></div>
                           </div>
                           
                           <div class="textoAssunto">
                               <div class="containerCreditos">
                                   <div class="data_nome">15/02/2003</div>
                                   <div class="data_nome">Everson Silva</div>
                               </div>
                               
                               <div class="texto"></div>
                               
                               <div class="redesSociais">
                                   <div class="redes"></div>
                                   <div class="redes"></div>
                                   <div class="redes"></div>
                                   <div class="redes"></div>
                               </div>
                           </div>
                           
                       </div>
                       
                                              <div class="assunto">
                          
                           <div class="imagemAssunto">
                               <div class="tituloAssunto"></div>
                           </div>
                           
                           <div class="textoAssunto">
                               <div class="containerCreditos">
                                   <div class="data_nome">15/02/2003</div>
                                   <div class="data_nome">Everson Silva</div>
                               </div>
                               
                               <div class="texto"></div>
                               
                               <div class="redesSociais">
                                   <div class="redes"></div>
                                   <div class="redes"></div>
                                   <div class="redes"></div>
                                   <div class="redes"></div>
                               </div>
                           </div>
                           
                       </div>
                       
                       <div class="assunto">
                          
                           <div class="imagemAssunto">
                               <div class="tituloAssunto"></div>
                           </div>
                           
                           <div class="textoAssunto">
                               <div class="containerCreditos">
                                   <div class="data_nome">15/02/2003</div>
                                   <div class="data_nome">Everson Silva</div>
                               </div>
                               
                               <div class="texto"></div>
                               
                               <div class="redesSociais">
                                   <div class="redes"></div>
                                   <div class="redes"></div>
                                   <div class="redes"></div>
                                   <div class="redes"></div>
                               </div>
                           </div>
                           
                       </div>
                       
                                              <div class="assunto">
                          
                           <div class="imagemAssunto">
                               <div class="tituloAssunto"></div>
                           </div>
                           
                           <div class="textoAssunto">
                               <div class="containerCreditos">
                                   <div class="data_nome">15/02/2003</div>
                                   <div class="data_nome">Everson Silva</div>
                               </div>
                               
                               <div class="texto"></div>
                               
                               <div class="redesSociais">
                                   <div class="redes"></div>
                                   <div class="redes"></div>
                                   <div class="redes"></div>
                                   <div class="redes"></div>
                               </div>
                           </div>
                           
                       </div>
                       
                       
                   </div>
                   
                   
                   <div id="containerMaisVistos">
                           <div id="DestaqueMaisVistos">
                               <div id="numeracao">1</div>
                               <div id="tituloDestaqueMaisVisto"></div>
                           </div>
                           
                           <div class='maisVistos'>
                               <div class="numeracao">2</div>
                               <div class="tituloMaisVisto"></div>
                           </div>
                           
                           <div class='maisVistos'>
                               <div class="numeracao">3</div>
                               <div class="tituloMaisVisto"></div>
                           </div>
                           
                           <div class='maisVistos'>
                               <div class="numeracao">4</div>
                               <div class="tituloMaisVisto"></div>
                           </div>
                           
                           <div class='maisVistos'>
                               <div class="numeracao">5</div>
                               <div class="tituloMaisVisto"></div>
                           </div>
                           
                           <div class='maisVistos'>
                               <div class="numeracao">6</div>
                               <div class="tituloMaisVisto"></div>
                           </div>
                   </div>
               </div>
           </div>
       </section>
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
        <?php echo(rodaPe()); ?>
    </body>
</html>