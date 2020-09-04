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
        
        <style>
            
            .efeitoMenu #corEmpresa{
                color: var(--menuColor);
            }
            
            #containerImg{
                height: 460px;
                width: 100%;
                padding: 20px;
                padding-top: 30px;
                box-sizing: border-box;
                background-color: var(--corSecundaria);
            }

            #containerImgEmpresa{
                height: 400px;
                width: 650px;
                background-color: var(--corPrimaria);
                float: left;
                margin-right: 20px;
            }

            #containerTextSobreEmpresa{
                height: 350px;
                width: 650px;
                float: left;
                background-color: var(--corPrimaria);
            }

            #tituloSobreEmpresa{
                height: 80px;
                width: 100%;
                background-color: var(--div);
                text-align: center;
                font-family: "comic sans ms", "arial";
                font-size: 24px;
                color:aqua;
            }

            #textSobreEmpresa{
                height: 270px;
                width: 100%;
                background-color: var(--div2);
            }

            #containerInformacoes{
                height: 350px;
                width: 100%;
                background-color: var(--corSecundaria);
                
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
                background-color: gray;
                
            }
            /* ************** hover *************** */

            #FaleConosco{
                height: 250px;
                width: 100%;
                background-color: aqua;
                opacity: 0;
                visibility:hidden;
/*                margin-top: 50px;*/
            }

            .tituloEmpresa{
                padding: 13px;
                box-sizing: border-box;
                font-size: 1.7em;
                height: 80px;
                width: 100%;
/*                background-color: orange;*/
                
            }
            
            .info{
                min-height: 50px;
                height: auto;
                width: 90%;
/*                background-color: aliceblue;*/
                transition: 1s;

            }

            .info:hover{
                min-height: 45px;
                width: 95%;
                background-color: orange;
                transition: 0.5s;
                cursor:pointer;
                border-bottom: solid 5px red;
            }

            #containerFaleConosco:hover > #FaleConosco{
                opacity: 1;
                visibility: visible;
                transition: 1s;
                margin-top: 10px;
                text-align: center;
                font-size: 30px;
            }

            #comoTrabalhamos{
                height: 250px;
                width: 100%;
                background-color: red;
                opacity: 0;
                visibility: hidden;
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
                background-color: blue;
                margin-bottom: 10px;

            }

            #VerVagas{
                height: 60px;
                width: 150px;
                background-color: aqua;
                margin-left: 10px;
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
                      <div id="textSobreEmpresa"></div>
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
                           <div class="info"><h3>telefone:</h3></div>
                           
                           <div class="info"><h3>celular:</h3></div>
                           
                           <div class="info"><h3>rua:</h3></div>
                           
                           <div class="info"><h3>numero: </h3></div>
                           
                           <div class="info"><h3>cep: </h3></div>
                           
                           
                           
                       </div>
                   </div>
                   
                   


                   <div id="containerComoTrabalhamos">
                      <div class="tituloEmpresa"><h2>informações</h2></div>
                       <div id="comoTrabalhamos">
                           <div id="textComoTrabalhamos"></div>
                       </div>
                   </div>
                   
                   

                   <div id="containerTrabalheConosco">
                      <div class="tituloEmpresa"><h2>trabalhos</h2></div>
                       <div id="trabalheConosco">
                           <div id="textTrabalheConosco"></div>
                           <div id="VerVagas"> </div>
                       </div>

                   </div>

                   
                   
               </div>
           </div>
       </section>
       
       
       

       
       
       
       
       
        <?php echo(rodaPe()); ?>
    </body>
</html>