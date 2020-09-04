<?php
require_once('conexao.php');
$conex = conexaoMysql();

$action ='insertContato.php?modo=inserirLoja';
$actionImg ='uploadImg.php?verificar=imgLoja';
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
        
       
        <script>
            $(document).ready(function(){
               
                $('#file').live('change', function(){
                   $('#frmImg').ajaxForm({
                    target:'#imagemLoja'    
                   }).submit();
                });
                
            });
        </script>               
    </head>
    <body>
        
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
                     <div id="containerCadastroLoja">
                       
                        <!-- ============== FORM IMAGEM ===================== -->
                        
                         <form name="frmImg" id="frmImg" method="post" action="<?=$actionImg?>" enctype="multipart/form-data">
                             <div id="configFile">
                                 <input type="file" id="file" name="fleImg" accept="image/jpeg, image/gif, image/png" hidden>
                                 <label for="file" id="selector">Escolha uma imagem</label>
                                 <div id="imagemLoja"></div>
                             </div>
                         </form>

                        <!-- ============== FORM DADOS ===================== -->

                         <form name="frmLoja" method="post" action="<?=$action?>" enctype="multipart/form-data">
                             <div id="configTxt">
                                 <select name="sltEstados">
                                     <option> selecione um estado </option>
                                     <?php 
                                     
                                        $sql = "select *from tblestados";
                                        $selectEstados = mysqli_query($conex, $sql);
                                        while($rsEstados = mysqli_fetch_assoc($selectEstados)){                                     
                                     ?>
                                     <option value="<?=$rsEstados['idEstados']?>"><?=$rsEstados['nomeEstado']?></option>
                                     <?php } ?>
                                 </select>
                                 <input type="text" name="txtNomeLoja" placeholder="nome da loja">
                                 <input type="text" name="txtNomeGerente" placeholder="nome gerente">
                                 <input type="text" name="txtRua" placeholder="rua">
                                 <input type="text" name="txtBairro" placeholder="bairro">
                                 <input type="text" name="txtNumero" placeholder="numero">
                                 <input type="text" name="txtEmail" placeholder="email">
                                 <input type="text" name="txtLink" placeholder="link Google maps">
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
                            $sql = "select tblLoja.nomeLoja, tblloja.nomeGerente, tblloja.email, tblLoja.idLoja
                                    from tblLoja 
                                    order by idLoja desc";
                        
                            $selectLoja = mysqli_query($conex, $sql);
                            while($rsLoja = mysqli_fetch_assoc($selectLoja)){
                        ?>
                        
                        <tr>
                            <td><?=$rsLoja['nomeLoja']?></td>
                            <td><?=$rsLoja['nomeGerente']?></td>
                            <td><?=$rsLoja['email']?></td>
                            <td class="configCheboxTable">
                                <input type="checkbox" name="ckbAtivacao" >
                            </td>
                            <td>
                               <div class="containerAcao">
                                    <a onclick="return confirm('deseja realmente excluir');" href="deleteContato.php?modo=excluirLoja&id=<?=$rsLoja['idLoja']?>">
                                        <div class="imgApagar"></div>
                                    </a>
                                    
                                    <div class="imgEditar"></div>
                                    <div class="imgVizualizar"></div>
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