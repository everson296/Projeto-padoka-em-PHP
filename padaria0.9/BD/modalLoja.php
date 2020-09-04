<?php

    $rsModalLojas = null;

    if(isset($_POST['modo'])){
        if($_POST['modo'] == 'vizualizarLoja'){    
            if($_POST['id']){ 
                
                require_once('conexao.php');
                $conex = conexaomysql();

                $id = $_POST['id'];  

                $sql = "select tblLoja.*, tblestados.nomeEstado, tblEstados.sigla 
                        from tblLoja, tblEstados
                        where tblestados.idEstados = tblloja.idEstados
                        and tblLoja.idLoja =".$id;

                $selectModalLojas = mysqli_query($conex, $sql);
                $rsModalLojas = mysqli_fetch_assoc($selectModalLojas);

                $google = $rsModalLojas['linkGoogleMaps'];
                $img = $rsModalLojas['imgLoja'];  
            }
        }
    }

?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title> titulo </title>
        <meta charset="utf-8">
       
        <link rel="stylesheet" type="text/css" href="../cms/css/style.css">        
        <link rel="stylesheet" type="text/css" href="../cms/css/loja.css">   
        <script src="../js/jquery.js"></script>
           
        <script>
            $(document).ready(function(){
                $('#fecharModal').click(function(){
                    $('.containerModal').fadeOut(800);
                });
            });
        </script>       
    </head>
    <body>
        
       <div id="containerModalLojas">
           <div id="cabecalhoModalLoja">
               você esta vendo os dados da loja 
               <h1 id="tituloLoja"><?=$rsModalLojas['nomeLoja']?></h1>
               <div id="fecharModal">+</div>
            </div>
           
           <div id="containerConteudoModalLoja">
               <div id="containerLeft">
                   <div class="containerDadosLoja">
                       <p>estado:</p>
                       <div><?=$rsModalLojas['sigla'] . " - " .$rsModalLojas['nomeEstado']?></div>
                   </div>
                  
                   <div class="containerDadosLoja">
                       <p>nome do gerente:</p>
                       <div><?=$rsModalLojas['nomeGerente']?></div>
                   </div>
                   
                   <div class="containerDadosLoja">
                       <p>rua:</p>
                       <div><?=$rsModalLojas['rua']?></div>
                   </div>
                   
                   <div class="containerDadosLoja">
                       <p>bairro:</p>
                       <div><?=$rsModalLojas['bairro']?></div>
                   </div>
                   
                   <div class="containerDadosLoja">
                       <p>numero:</p>
                       <div><?=$rsModalLojas['numero']?></div>
                   </div>
                   
                   <div class="containerDadosLoja">
                       <p>email:</p>
                       <div><?=$rsModalLojas['email']?></div>
                   </div>
                   
                   
               </div>
               
               <div id="containerRight">
                  <img src="imgBanco/imgLoja/<?=$img?>">
                  <iframe src='<?=$google?>'></iframe>
                  
                       
               </div>
           </div>
          
           
       </div>
       
       
    </body>
</html>