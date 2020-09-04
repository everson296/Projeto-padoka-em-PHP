<?php 
setlocale(LC_ALL, "pt-BR");
require_once('funcoes/funcoes.php');

require_once('BD/conexao.php');
$conex = conexaoMysql();

$sql = "select *from tblEmpresa";

$selectEmpresa = mysqli_query($conex, $sql);
$rsEmpresa = mysqli_fetch_assoc($selectEmpresa);

?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title> padaria-empresa </title>
        <link rel="shortcut icon" href="imagens/pao.png">
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/empresa.css">
        
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
                      <div id="textSobreEmpresa"><?=$rsEmpresa['sobreEmpresa']?></div>
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
                           <div class="info"><h3>telefone: <?=$rsEmpresa['telefone']?></h3></div>
                           
                           <div class="info"><h3>celular: <?=$rsEmpresa['celular']?></h3></div>
                           
                           <div class="info"><h3>rua: <?=$rsEmpresa['rua']?></h3></div>
                           
                           <div class="info"><h3>numero: <?=$rsEmpresa['numero']?></h3></div>
                           
                           
                           
                           
                       </div>
                   </div>
                   
                   


                   <div id="containerComoTrabalhamos">
                      <div class="tituloEmpresa"><h2>informações</h2></div>
                       <div id="comoTrabalhamos">
                           <div id="textComoTrabalhamos"><?=$rsEmpresa['txtInformacao']?></div>
                       </div>
                   </div>
                   
                   

                   <div id="containerTrabalheConosco">
                      <div class="tituloEmpresa"><h2>trabalhe conosco</h2></div>
                       <div id="trabalheConosco">
                           <div id="textTrabalheConosco"><?=$rsEmpresa['txtTrabalheConosco']?></div>
                           <div id="VerVagas">Ver Vagas</div>
                       </div>

                   </div>

                   
                   
               </div>
           </div>
       </section>
       
       
       

       
       
       
       
       
        <?php echo(rodaPe()); ?>
    </body>
</html>