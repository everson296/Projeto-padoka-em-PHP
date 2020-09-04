<?php
require_once('../funcoes/funcoes.php');
$rsContatos = null;

    if(isset($_POST['modo'])){
        if($_POST['modo'] == 'visualizarCuriosidade'){
            if($_POST['id']){

                require_once("conexao.php");

                $conex = conexaoMysql();

                $id = $_POST['id'];

                $sql = "select tblcuriosidadecard.*
                from tblcuriosidadecard
                where idCuriosidadeCard =".$id;            

                $selectCuriosidade = mysqli_query($conex, $sql);
                $rsModalCuriosidade = mysqli_fetch_assoc($selectCuriosidade);

                $dataBanco = $rsModalCuriosidade['dataPublicacao'];
                $data = dataBrasil($dataBanco);

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
        <link rel="stylesheet" type="text/css" href="../cms/css/curiosidade.css">    
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
       <div id="containerModalCuriosidades">

           <div id="cabecalhoModal">
               <p>titulo:</p>
               <h1 id="tituloCuriosidade"><?=$rsModalCuriosidade['titulo']?></h1>
               <div id="fecharModal">+</div>
            </div>
           
           <div id="containerConteudoModalCuriosidade">
               <div id="containerLeft">
                  <img src="imgBanco/imgCuriosidade/<?=$rsModalCuriosidade['img']?>"> 
               </div>
               
               <div id="containerRight">
                   <div class="containerDadosCuriosidade">
                       <div id="data">
                           <p>data:</p>
                           <div><?=$data?></div>
                       </div>
                       
                       <div id="nome">
                           <p>escritor:</p>
                           <div><?=$rsModalCuriosidade['nomeEscritor']?></div>
                       </div>
                   </div>
                   
                   <div class="containerDadosLojaTexto">
                       <p>texto:</p>
                       <div><?=$rsModalCuriosidade['texto']?></div>
                   </div> 
               </div>
               
           </div>

          
       </div>
    </body>
</html>