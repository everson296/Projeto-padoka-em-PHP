<?php
    require_once('conexao.php');
    $conex = conexaoMysql();

    $sql = "select *from tblcuriosidadeimg";
    $selecCuriosidadeImg = mysqli_query($conex, $sql);
    $rsCuriosidadeImg = mysqli_fetch_assoc($selecCuriosidadeImg);
    
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title> titulo </title>
        <meta charset="utf-8">
       
        <link rel="stylesheet" type="text/css" href="../cms/css/style.css">        
        <link rel="stylesheet" type="text/css" href="../cms/css/curiosidade.css">    
        <script defer src="../javascript/script.js"></script>     
        <script src="../javascript/jquery2.js"></script>     
        <script src="../javascript/jquery.form.js"></script>
        
        <script>
            $(document).ready(function(){
               
                $('#fileImgprimaria').live('change', function(){
                   $('#frmImg').ajaxForm({
                    target:'#imgprimaria'    
                   }).submit();
                });
                
                $('#fileImgSecundaria').live('change', function(){
                   $('#frmImg').ajaxForm({
                    target:'#imgSecundaria'    
                   }).submit();
                });
                
                $('#fileImgTerciaria').live('change', function(){
                   $('#frmImg').ajaxForm({
                    target:'#imgTerciaria'    
                   }).submit();
                });
                
                $('#fileImgQuartaria').live('change', function(){
                   $('#frmImg').ajaxForm({
                    target:'#imgQuartaria'    
                   }).submit();
                });
                
            });
        </script>    
    </head>
    <body>
        
        <section>
            <div id="containerCMS">
                
                <div id="cabecalho">
                    <h1><p>CMS</p> - Sistema de gerenciamento do site</h1>
                    <div id="containerLogo"></div>
                </div>
                
                <div id="containerEscolha">
                    <div class="containerFuncao">
                        <a href="../BD/ADMconteudo.php"><div class="imgFuncao" id="ADMconteudo"></div></a>
                        <div class="nomeFuncao">ADM.Conteúdo</div>
                    </div>

                    <div class="containerFuncao">
                        <a href="../BD/ADMfaleConosco.php"><div class="imgFuncao" id="ADMfaleConosco"></div></a>
                        <div class="nomeFuncao">ADM.Fale Conosco</div>
                    </div>

                    <div class="containerFuncao">
                        <a href="../BD/ADMusuario.php"><div class="imgFuncao" id="ADMusuario"></div></a>
                        <div class="nomeFuncao">ADM.Usúario</div>
                    </div>

                    <div id="containerBoasVindas">
                        <div class="textoBoasVindas">Bem Vindo, [Everson].</div>
                        <div class="textoBoasVindas">logout</div>
                    </div>
                </div>
                
                <div id="containerConteudo">
                    <!-- FORM IMAMGENS -->
                    <form name="frmImg" id="frmImg" method="post" action="<?=$actionImg?>" enctype="multipart/form-data">
                         <div id="containerCadastroImagens">
                             <div class="contianerCadastroImagem">
                                 <div class="cabecalhoCuriosidade">primeira imagem</div>
                                 <input type="file" id="fileImgprimaria" name="fleImg" accept="image/jpeg, image/gif, image/png" hidden>
                                 <label for="fileImgprimaria" id="selector">Escolha uma imagem nova</label>
                                 <div class="imagemCuriosidade" id="imgprimaria"></div>
                             </div>
                             
                             <div class="contianerCadastroImagem">
                                 <div class="cabecalhoCuriosidade">segunda imagem</div>
                                 <input type="file" id="fileImgSecundaria" name="fleImg" accept="image/jpeg, image/gif, image/png" hidden>
                                 <label for="file" id="selector">Escolha uma imagem nova</label>
                                 <div class="imagemCuriosidade" id="imgSecundaria"></div>
                             </div>
                         </div>
                         
                         <div id="containerCadastroImagens">
                             <div class="contianerCadastroImagem">
                                 <div class="cabecalhoCuriosidade">terceira imagem</div>
                                 <input type="file" id="fileImgTerciaria" name="fleImg" accept="image/jpeg, image/gif, image/png" hidden>
                                 <label for="file" id="selector">Escolha uma imagem nova</label>
                                 <div class="imagemCuriosidade" id="imgTerciaria"></div>
                             </div>
                             
                             <div class="contianerCadastroImagem">
                                 <div class="cabecalhoCuriosidade">quarta imagem</div>
                                 <input type="file" id="fileImgQuartaria" name="fleImg" accept="image/jpeg, image/gif, image/png" hidden>
                                 <label for="file" id="selector">Escolha uma imagem nova</label>
                                 <div class="imagemCuriosidade" id="imgQuartaria"></div>
                             </div>
                         </div>
                         
                         
                         <div id="containerDadosImagens">
                             <div class="cabecalhoCuriosidade">Imagens atuais</div>
                             <div id="configImg">
                                 <img src="imgBanco/imgCuriosidade/<?=$rsCuriosidadeImg['imgPrimaria']?>">
                                 <img src="imgBanco/imgCuriosidade/<?=$rsCuriosidadeImg['imgSecundaria']?>">
                                 <img src="imgBanco/imgCuriosidade/<?=$rsCuriosidadeImg['imgTerciaria']?>">
                                 <img src="imgBanco/imgCuriosidade/<?=$rsCuriosidadeImg['imgQuartaria']?>">
                             </div>
                         </div>
                         
                         <div id="congifBTN">
                            <input type="submit" value="atualizar" name="btnEditar">
                        </div>
                    </form>
                    
                    
                             
                    
                    <!-- CADASTRO CURIOSIDADES -->
                    
                    
                    
                    <!--  DADOS CADASTRADOS -->
                    
                       
                        
                </div>
                
                <footer><h1>Desenvolvido por: Everson Silva de Almeida</h1></footer>
            </div>
        </section>
       
       
    </body>
</html>