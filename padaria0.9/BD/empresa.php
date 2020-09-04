<?php

session_start();

if(!$_SESSION['usuario']){
    header('location: ../inicio.php');
    exit();
}

$usuario = $_SESSION['usuario'];


require_once('conexao.php');
require_once('bloqueioUsuario.php');
$conex = conexaoMysql();

$sql = "select * from tblempresa";

$selectEmpresa = mysqli_query($conex, $sql);
$rsEmpresa = mysqli_fetch_assoc($selectEmpresa);

$action = 'updateContato.php?modo=atualizarEmpresa';
$actionImg ='uploadImg.php?verificar=imgEmpresa';
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title> titulo </title>
        <meta charset="utf-8">
       
        <link rel="stylesheet" type="text/css" href="../cms/css/style.css">        
        <link rel="stylesheet" type="text/css" href="../cms/css/empresa.css">   
        <script defer src="../javascript/script.js"></script>     
        <script defer src="../javascript/mascara.js"></script>     
        <script src="../javascript/jquery2.js"></script>     
        <script src="../javascript/jquery.form.js"></script>
        
        <script>
            $(document).ready(function(){
               
                $('#file').live('change', function(){
                   $('#frmImg').ajaxForm({
                    target:'#imagemEmpresa'    
                   }).submit();
                });
                
            });
        </script>  
        
    </head>
    <body>
        <div class="iconPaginaInicial" onclick="location.href='../empresa.php'">
            <div id="efeitoMenu"></div>
        </div> 
        
        <section>
            <div id="containerCMS">
                
                <div id="cabecalho">
                    <h1><p>CMS</p> - Sistema de gerenciamento do site</h1>
                    <div id="containerLogo"></div>
                </div>
                
                <div id="containerEscolha">
                    <div class="containerFuncao">
                        <input type="submit" class="imgFuncao" id="ADMconteudo" onclick="location.href='../BD/ADMconteudo.php'" <?=$conteudo?> value="">
                        <div class="nomeFuncao">ADM.Conteúdo</div>
                    </div>

                    <div class="containerFuncao">
                        <input type="submit" class="imgFuncao" id="ADMfaleConosco" onclick="location.href='../BD/ADMfaleConosco.php'" <?=$faleConosco?> value="">
                        <div class="nomeFuncao">ADM.Fale Conosco</div>
                    </div>

                    <div class="containerFuncao">
                        <input type="submit" class="imgFuncao" id="ADMusuario" onclick="location.href='../BD/ADMusuario.php'" <?=$usuarios?> value="">
                        <div class="nomeFuncao">ADM.Usúario</div>
                    </div>

                    <div id="containerBoasVindas">
                        <div class="textoBoasVindas">Bom Dia, <?=$usuario?>.</div>
                        <a href="../BD/logout.php"><div class="textoBoasVindas">logout</div></a>
                    </div>
                </div>
                
                <div id="containerConteudo">
                    <!-- ====================== FORM DA IMAGEM ======================= -->
                   
                    <form name="frmImg" id="frmImg" method="post" action="<?=$actionImg?>" enctype="multipart/form-data">
                         <div id="configFile">
                             <input type="file" id="file" name="fleImg" accept="image/jpeg, image/gif, image/png" hidden>
                             <label for="file" id="selector">Escolha uma imagem nova</label>
                             <div id="imagemEmpresa"></div>
                             <img id="imgFixa" src="../BD/imgBanco/imgEmpresa/<?=$rsEmpresa['imgPrincipal']?>">
                         </div>
                    </form>
                    
                   <!-- ====================== FORM DA DADOS ======================= -->
                   
                    <form action="<?=$action?>" method="post" name="frmEmpresa" enctype="multipart/form-data"> 
                    
                        <div id="containerDadosEmpresa">
                            <div class="cabecalhoEmpresa">sobre a empresa</div>
                            <textarea placeholder="Texto sobre a empresa" name="txtSobreEmpresa"><?=$rsEmpresa['sobreEmpresa']?></textarea>
                            
                            <div class="cabecalhoEmpresa">Trabalhe conosco</div>
                            <textarea placeholder="Texto do trabalhe conosco" name="txtTrabalheConosco"><?=$rsEmpresa['txtTrabalheConosco']?></textarea>
                            
                            <div class="cabecalhoEmpresa">informações</div>
                            <textarea placeholder="Texto das informações" name="txtInformacoes"><?=$rsEmpresa['txtInformacao']?></textarea>
                            
                            <div class="cabecalhoEmpresa">fale conosco</div>
                            <div id="configText">
                                <input type="text" data-type="telefone" maxlength="15" placeholder="telefone" name="txtTelefone" value="<?=$rsEmpresa['telefone']?>">
                                <input type="text" data-type="celular" placeholder="celular" maxlength="15" name="txtCelular" value="<?=$rsEmpresa['celular']?>">
                                <input type="text" placeholder="rua" name="txtRua" value="<?=$rsEmpresa['rua']?>">
                                <input type="text" data-type="numero" maxlength="4" placeholder="numero" name="txtNumero" value="<?=$rsEmpresa['numero']?>">
                            </div>
                        </div>  

                        <div id="congifBTN">
                            <input type="submit" value="editar" name="btnEditar">
                        </div>
                    </form>
                </div>
                
                <footer><h1>Desenvolvido por: Everson Silva de Almeida</h1></footer>
            </div>
        </section>
       
       
    </body>
</html>