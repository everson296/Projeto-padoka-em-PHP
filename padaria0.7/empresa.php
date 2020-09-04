<?php 
    setlocale(LC_ALL, "pt-BR");
    require_once('funcoes/funcoes.php');


?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title> padaria-empresa </title>
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
            .efeitoMenu #corEmpresa{
                color: var(--menuColor);
            }
            
            #containerImg{
                height: 460px;
                width: 100%;
                padding: 20px;
                padding-top: 30px;
                box-sizing: border-box;
            }

            #containerImgEmpresa{
                height: 400px;
                width: 650px;
                background-color: var(--corPrimaria);
                float: left;
                margin-right: 20px;
                background-image: url(imagens/empresa/padoka.jpg);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                background-origin: border-box;
            }

            #containerTextSobreEmpresa{
                height: 350px;
                width: 650px;
                float: left;
                background-color: #fff;
                
            }

            #tituloSobreEmpresa{
                height: 80px;
                width: 100%;
                background-color: #000;
                text-align: center;
                font-family: "comic sans ms", "arial";
                font-size: 1.5em;
            }

            #textSobreEmpresa{
                height: 270px;
                width: 100%;
                background-color: var(--div2);
                font-family: sans-serif;
                font-size: 1.7em;
                color: #000;
                padding: 20px;
                box-sizing: border-box;
            }

            #containerInformacoes{
                height: 350px;
                width: 100%;
                
            }

            #containerFaleConosco, #containerComoTrabalhamos, #containerTrabalheConosco{
                height: 90px;
                width: 460px;
                background-color: var(--black);
                transition: 1s;
                float: left;
                color: #fff;
            }

            #containerFaleConosco:hover, #containerComoTrabalhamos:hover, #containerTrabalheConosco:hover {
                transition: 1s;
                background-color: #db9d00;
                
            }

            #FaleConosco{
                height: 250px;
                width: 100%;
                background-color: #fff;
                opacity: 0;
                visibility:hidden;
            }

            .tituloEmpresa{
                padding: 13px;
                box-sizing: border-box;
                font-size: 1.7em;
                height: 80px;
                width: 100%;
                
            }
            
            .info{
                min-height: 50px;
                height: auto;
                width: 90%;
                transition: 1s;
                color: #000;
                font-size: 1.4em;
                padding-left: 20px;
                box-sizing: border-box;
                text-align: center;
                margin-bottom: 10px;

            }

            .info:hover{
                width: 100%;
                background-color: rgba(252, 186, 3, .8);
                transition: 0.5s;
                cursor:pointer;
                font-size: 1.5em;
            }

            #containerFaleConosco:hover > #FaleConosco{
                opacity: 1;
                visibility: visible;
                transition: 1s;
                margin-top: 10px;
               
            }

            #comoTrabalhamos{
                height: 250px;
                width: 100%;
                background-color: #fff;
                opacity: 0;
                visibility: hidden;
                color: #000;
                padding: 20px;
                line-height: 1.5;
                font-size: 1.5em;
                font-family: sans-serif;
                box-sizing: border-box;
            }

            #containerComoTrabalhamos:hover > #comoTrabalhamos{
                opacity: 1;
                visibility: visible;
                transition:1s;
                margin-top: 10px;
            }

            #trabalheConosco{
                height: 250px;
                width: 100%;
                background-color: var(--div2);
                opacity: 0;
                visibility: hidden;
            }

            #textTrabalheConosco{
                height: 170px;
                width: 100%;
                background-color: #fff;
                margin-bottom: 10px;
                color: #000;
                padding: 20px;
                box-sizing: border-box;
                font-size: 1.5em;
                font-family: sans-serif;

            }

            #VerVagas{
                height: 60px;
                width: 250px;
                background-color: #fff;
                margin-left: auto;
                margin-right: auto;
                border-radius: 40px;
                border-bottom: 5px solid #000;
                border-right: 5px solid #000;
                display: flex;
                justify-content: center;
                align-content: center;
                align-items: center;
                color: #000;
                font-weight: bold;
                font-family: comic sans ms;
                font-size: 1.8em;
                
            }

            #containerTrabalheConosco:hover > #trabalheConosco{
                opacity: 1;
                visibility: visible;
                transition:1s;
                margin-top: 10px;
            }
            
            h2{
                font-size: 2em;
                text-align: center;
                color: #fff;
            }
                 
            }

            @media screen and (max-device-width:780px){ 
            .efeitoMenu #corEmpresa{
                color: var(--menuColor);
            }
            
            #containerImg{
                min-height: 100px;
                height: auto;
                overflow: hidden;
                width: 100%;
                padding: 20px;
                padding-top: 30px;
                box-sizing: border-box;
                background-color: var(--corSecundaria);
            }

            #containerImgEmpresa{
                height: 400px;
                width: 95%;
                margin-bottom: 30px;
                background-color: var(--corPrimaria);
                margin-left: auto;
                margin-right: auto;
                background-image: url(imagens/empresa/padoka.jpg);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                background-origin: border-box;
            }

            #containerTextSobreEmpresa{
                height: 350px;
                width: 90%;
                margin-left: auto;
                margin-right: auto;
                background-color: var(--corPrimaria);
            }

            #tituloSobreEmpresa{
                height: 80px;
                width: 100%;
                background-color: gray;
                text-align: center;
                font-family: "comic sans ms", "arial";
                font-size: 24px;
                color: #fff;
            }

            #textSobreEmpresa{
                height: 270px;
                width: 100%;
                background-color: #fff;
                padding: 20px;
                box-sizing: border-box;
                color: #000;
                font-size: 1.9em;
            }

            #containerInformacoes{
                min-height: 100px;
                height: auto;
                overflow: hidden;
                width: 100%;
                background-color: var(--corSecundaria);
                
            }    

            #containerFaleConosco, #containerComoTrabalhamos, #containerTrabalheConosco{
                height: 90px;
                width: 98%;
                background-color: var(--black);
                transition: 1s;
                color: #fff;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 250px;
                 
            }
                
                #containerTrabalheConosco{
                    margin-bottom: 280px;
                }
                
            #FaleConosco{
                height: 250px;
                width: 100%;
                background-color: #fff;
                color: #000;
                font-family: sans-serif;
                font-size: 2em;
                padding-left: 20px;
                box-sizing: border-box;
            }

            .tituloEmpresa{
                padding: 13px;
                box-sizing: border-box;
                font-size: 1.7em;
                height: 80px;
                width: 100%;                
            }
            
            .info{
                min-height: 50px;
                height: auto;
                width: 90%;
/*                background-color: aliceblue;*/
                transition: 1s;
            }

            .info:hover{
                background-color: orange;
                transition: 0.5s;
                cursor:pointer;
            }

            #comoTrabalhamos{
                height: 250px;
                width: 100%;
                background-color: #fff;
                opacity: 1;
            }

            

            #trabalheConosco{
                height: 250px;
                width: 100%;
                background-color: var(--div2);
                opacity: 1;
            }

            #textTrabalheConosco{
                height: 170px;
                width: 100%;
                background-color: #fff;
                margin-bottom: 10px;

            }

            #VerVagas{
                height: 90px;
                width: 600px;
                background-color: #fff;
                margin-left: auto;
                margin-right: auto;
                border-radius: 40px;
                text-align: center;
                font-size: 3em;
                font-family: comic sans ms;
                color: #000;
                display: flex;
                align-items: center;
                justify-content: center;
                text-transform: uppercase;
                font-weight: bold;
                border-bottom: 5px solid black;
                border-right: 5px solid black;
                
                
            }

            h2{
                font-size: 2em;
                text-align: center;
                color: #fff;
            }
            }

        </style>
        
    </head>
    <body>
      
        <?php  echo(menu()); ?>
        
       <section>
           <div class="container">
              <div id="containerImg">
                  <div id="containerImgEmpresa"></div>
                  <div id="containerTextSobreEmpresa">
                      <div id="tituloSobreEmpresa">
                          <h2> Sobre a empresa</h2>
                      </div>
                      <div id="textSobreEmpresa">
                          E de quem magna cillum. O cillum graviterque iis culpa et possumus, incurreret 
                          eram summis ubi elit sed laborum fugiat summis et enim, ita ut varias offendit 
                          ad aut magna ne illum, a culpa quem varias litteris aut nostrud noster duis ut 
                          
                          ad aut magna ne illum, a culpa quem varias litteris aut nostrud noster duis ut 
                      </div>
                  </div>
              </div>
               
           </div>
       </section>
       
       <section>
          <div class="container"> 
              <div id="containerInformacoes">
                  
                   <div id="containerFaleConosco">
                      <div class="tituloEmpresa"><h2>fale cononsco</h2></div>
                       <div id="FaleConosco">
                           <div class="info"><h3>telefone: (011) 9480-4580</h3></div>
                           
                           <div class="info"><h3>celular: 985467122</h3></div>
                           
                           <div class="info"><h3>rua: R. Serra de Parima - Jardim Bela Vista, Itapevi - SP</h3></div>
                           
                           <div class="info"><h3>numero: 105</h3></div>
                           
                           
                           
                           
                       </div>
                   </div>
                   
                   


                   <div id="containerComoTrabalhamos">
                      <div class="tituloEmpresa"><h2>informações</h2></div>
                       <div id="comoTrabalhamos">
                           <div id="textComoTrabalhamos">
                               Pariatur fugiat quo cernantur relinqueret do et pariatur eruditionem et irure 
                               ullamco cernantur, de anim voluptate. Cillum tempor se voluptate quo nostrud 
                               nisi enim tempor aute, cupidatat firmissimum a singulis qui
                           </div>
                       </div>
                   </div>
                   
                   

                   <div id="containerTrabalheConosco">
                      <div class="tituloEmpresa"><h2>trabalhe conosco</h2></div>
                       <div id="trabalheConosco">
                           <div id="textTrabalheConosco">
                               Legam ex cernantur, duis occaecat iis summis tamen se nisi mentitum ex minim 
                               quem, occaecat noster quamquam proident. Eu senserit instituendarum
                           </div>
                           <div id="VerVagas">Ver Vagas</div>
                       </div>

                   </div>

                   
                   
               </div>
           </div>
       </section>
       
       
       

       
       
       
       
       
        <?php echo(rodaPe()); ?>
    </body>
</html>