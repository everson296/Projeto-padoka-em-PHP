<?php
require_once('conexao.php');
$conex = conexaoMysql();
    
$nomeNivel = null;
$ADMusuario = null;
$ADMfaleConosco = null;
$ADMprodutos = null;
$ADMconteudo = null;
$ativacao = null;

$action = "insertContato.php?modo=inserirNivel";
?>


<!doctype html>
<html lang="pt-br">
    <head>
        <title> titulo </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../cms/css/usuarioNivel.css">        
    </head>
    <body>
        
        <div id="containerCadastroNivel">
            <form name="frmCadastroNivel" action="<?=$action?>" method="post">
                <div id="containerCadastro">
                    <div class="cabecalho">cadastro de nível</div>

                    <div id="conteudoNivel">
                        <div id="configTxt">
                            <input type="text" name="txtNome" placeholder="nome do nivel">
                        </div>
                        <div id="configCheckbox">
                            <div>
                                <input type="checkbox" name="ckbADMusuario" value="0"> ADMusuario
                            </div>
                            <div>
                                <input type="checkbox" name="ckbADMfaleConosco" value="0"> ADMfaleConosco
                            </div>
                            <div>
                                <input type="checkbox" name="ckbADMprodutos" value="0"> ADMprodutos
                            </div>
                            <div>
                                <input type="checkbox" name="ckbADMconteudo" value="0"> ADMconteudo
                            </div>
                        </div>
                    </div>

                    <div id="containerBTN">
                        <input type="submit" value="Cadastrar" name="btnCadastrarNivel"> 
                        <a href="ADMusuario.php"><div>Voltar</div></a>
                    </div>
                </div>
            </form>
            
            <div id="containerDadosNiveis">
                <table>
                    <div class="cabecalho"> Cadastros registrados</div>
                    
                    <tr>
                        <td>nome</td>
                        <td>ADMusuario</td>
                        <td>ADMfaleConosco</td>
                        <td>ADMprodutos</td>
                        <td>ADMconteudo</td>
                        <td>ativação</td>
                        <td>opções</td>
                    </tr>
                    
                    
                    <?php 
                        
                        $sql = "select *from tblNivel";
                  
                        $selectNiveis = mysqli_query($conex, $sql);
                        while($rsNiveis = mysqli_fetch_assoc($selectNiveis)){

                    ?>
                    <tr>
                        <td><?=$nomeNivel = $rsNiveis['nivel']?></td>
                        <td><?=$ADMconteudo = $rsNiveis['ADMusuario']?></td>
                        <td><?=$ADMconteudo = $rsNiveis['ADMfaleConosco']?></td>
                        <td><?=$ADMconteudo = $rsNiveis['ADMprodutos']?></td>
                        <td><?=$ADMconteudo = $rsNiveis['ADMconteudo']?></td>
                        <td class="configCheboxTable">
                            <input type="checkbox" name="ckbAtivacao" >
                        </td>
                        <td>
                            <div class="containerAcao">
                               <div class="imgApagar"></div>
                               <div class="imgEditar"></div>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </table>
            </div>
        </div>
        
       
    </body>
</html>