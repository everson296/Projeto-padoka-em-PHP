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

$action ='insertContato.php?modo=inserirLoja';
$actionImg ='uploadImg.php?verificar=imgLoja';

$nomeLoja = (string) null;
$estado = (string) null;
$idEstado =0;
$nomeGerente = (string) null;
$rua = (string) null;
$bairro = (string) null;
$numero = (string) null;
$email = (string) null;
$google = (string) null;
$img = (string) null;

if(isset($_GET['modo'])){
        
        //valida se a ação de modo busca um registro no BD
        if($_GET['modo'] == 'editarLoja'){
            
            if(isset($_GET['id'])){
                $id= $_GET['id'];
                $sql = "
                        select tblLoja.*, tblestados.nomeEstado, tblEstados.sigla 
                        from tblLoja, tblEstados
                        where tblestados.idEstados = tblloja.idEstados
                        and tblLoja.idLoja =".$id;
                
                $selectDadosLoja = mysqli_query($conex, $sql);
                if($rsListaLoja = mysqli_fetch_assoc($selectDadosLoja)){
                    
                    $nomeLoja = $rsListaLoja['nomeLoja'];
                    $estado = $rsListaLoja['nomeEstado'];
                    $idEstado = $rsListaLoja['idEstados'];
                    $nomeGerente = $rsListaLoja['nomeGerente'];
                    $rua = $rsListaLoja['rua'];
                    $bairro = $rsListaLoja['bairro'];
                    $numero = $rsListaLoja['numero'];
                    $email = $rsListaLoja['email'];
                    $google = $rsListaLoja['linkGoogleMaps'];
                    $img = $rsListaLoja['imgLoja'];
                    
                    $action = "updateContato.php?modo=editarLoja&id=".$rsListaLoja['idLoja'];
                }
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
        <script src="../javascript/jquery.js"></script> 
        <script src="../javascript/jquery2.js"></script>
        <script src="../javascript/jquery.form.js"></script>
        <script defer src="../javascript/script.js"></script>
        <script defer src="../javascript/mascara.js"></script>
        
       
        <script>
            $(document).ready(function(){
               
                $('#file').live('change', function(){
                   $('#frmImg').ajaxForm({
                    target:'#imagemLoja'    
                   }).submit();
                });
                
           
            
                    // função para iniciar o modal e vizualizar
            $('.imgVizualizar').click(function(){
                    
                    //chama a div modal pelo efeito fadeIn
                    $('.containerModal').slideToggle(1000);
                });
            });    
             
            const modalLoja = (idLoja) =>{
                $.ajax({
                    type: "POST", 
                    url: "modalLoja.php",
                    data: {modo: 'vizualizarLoja', id:idLoja},
                    success: function(dados){
                        $('.modalConteudo').html(dados);  
                    }
                });
            }
            
        </script>               
    </head>
    <body>
        
        <div class="iconPaginaInicial" onclick="location.href='../lojas.php'">
            <div id="efeitoMenu"></div>
        </div>
        
        <div class="containerModal">
            <div class="modalConteudo"></div>
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
                     <div id="containerCadastroLoja">
                       
                        <!-- ============== FORM IMAGEM ===================== -->
                        
                         <form name="frmImg" id="frmImg" method="post" action="<?=$actionImg?>" enctype="multipart/form-data">
                             <div id="configFile">
                                 <input type="file" id="file" name="fleImg" accept="image/jpeg, image/gif, image/png" value="<?=$img?>" hidden>
                                 <label for="file" id="selector">Escolha uma imagem</label>
                                 <div id="imagemLoja"></div>
                             </div>
                         </form>

                        <!-- ============== FORM DADOS ===================== -->

                         <form name="frmLoja" method="post" action="<?=$action?>" enctype="multipart/form-data">
                             <div id="configTxt">
                                 <select name="sltEstados">
                                  
                                   <?php 
                                        if(isset($_GET['modo'])){
                                        if($_GET['modo'] == 'editarLoja'){
                                    ?>
                                        <option value="<?=$idEstado?>" selected><?=$estado?></option>
                                    <?php
                                        }
                                        }else{
                                    ?>
                                        <option value="" >selecione um estado</option>
                                    <?php
                                        }

                                        $sql = "select * from tblestados where idEstados <> ".$idEstado." order by nomeEstado";

                                        $selectEstados = mysqli_query($conex, $sql); 
                                        while ($rsEstados = mysqli_fetch_assoc($selectEstados))
                                        {
                                    ?>
                                        <option value="<?=$rsEstados['idEstados']?>"><?=$rsEstados['nomeEstado']?></option>
                                    <?php 
                                        }
                                    ?>
                                 </select>
                                 <input type="text" name="txtNomeLoja" data-type="texto" placeholder="nome da loja" value="<?=$nomeLoja?>">
                                 <input type="text" name="txtNomeGerente" data-type="texto" placeholder="nome gerente" value="<?=$nomeGerente?>">
                                 <input type="text" name="txtRua" data-type="texto" placeholder="rua" value="<?=$rua?>">
                                 <input type="text" name="txtBairro" data-type="texto" placeholder="bairro" value="<?=$bairro?>">
                                 <input type="text" name="txtNumero" data-type="numero" placeholder="numero" value="<?=$numero?>">
                                 <input type="email" name="txtEmail" placeholder="email" value="<?=$email?>">
                                 <input type="text" name="txtLink" placeholder="link Google maps" value="<?=$google?>">
                             </div>
                             
                             
                             
                             <div id="configBtn">
                                 <input type="submit" name="btnCadastro" value="cadastrar">
                             </div>
                         </form>
                     </div>
                <!-- =================== Dados loja ==================    -->
                    
                    <table>
                        <div id="cabecalhoLoja">cadastros realizados</div>
                        <tr>
                            <td>nome</td>
                            <td>gerente</td>
                            <td>email</td>
                            <td>ativação</td>
                            <td>opções</td>
                        </tr>
                        
                        <?php
                            $sql = "select tblLoja.nomeLoja, tblloja.nomeGerente, tblloja.email, tblLoja.idLoja, tblLoja.ativacao
                                    from tblLoja 
                                    order by idLoja desc";
                        
                            $selectLoja = mysqli_query($conex, $sql);
                            while($rsLoja = mysqli_fetch_assoc($selectLoja)){
                                $ativacao = $rsLoja['ativacao'];
                                
                                if($ativacao == 1){
                                    $ativo = 'unchecked';
                                }else{
                                    $ativo = 'checked';
                                }
                        ?>
                        
                        <tr>
                            <td><?=$rsLoja['nomeLoja']?></td>
                            <td><?=$rsLoja['nomeGerente']?></td>
                            <td><?=$rsLoja['email']?></td>
                            <td class="configCheboxTable">
                                <input type="checkbox" name="ckbAtivacao" 
                                onclick="location.href='updateContato.php?modo=ativarDesativar&id=<?=$rsLoja['idLoja']?>&tbl=Loja&diretorio=loja'" 
                                <?=$ativo?>>

                            </td>
                            <td>
                               <div class="containerAcao">
                                    <a onclick="return confirm('deseja realmente excluir');" href="deleteContato.php?modo=excluirLoja&id=<?=$rsLoja['idLoja']?>">
                                        <div class="imgApagar"></div>
                                    </a>
                                    
                                    <a href="loja.php?modo=editarLoja&id=<?=$rsLoja['idLoja']?>">
                                        <div class="imgEditar"></div>
                                    </a>
                                    
                                    <div class="imgVizualizar" onclick="modalLoja(<?=$rsLoja['idLoja']?>);"></div>
                               </div>
                            </td>
                        </tr>
                        
                        <?php } ?>
                    </table>
                    
                </div>
                
                <footer><h1>Desenvolvido por: Everson Silva de Almeida</h1></footer>
            </div>
        </section>
       
       
    </body>
</html>