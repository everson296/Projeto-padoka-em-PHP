<?php
require_once('conexao.php');
require_once('../funcoes/msgErro.php');
$conex = conexaoMysql();
    
$nomeNivel = null;
$ADMusuario = null;
$ADMfaleConosco = null;
$ADMprodutos = null;
$ADMconteudo = null;
$ativacao = null;

$action = "insertContato.php?modo=inserirNivel";

session_start();

if(!$_SESSION['usuario']){
    header('location: ../inicio.php');
    exit();
}

$nomeNivel = (string) null;
$ADMusuario = (string) null;
$ADMfaleConosco = (string) null;
$ADMprodutos = (string) null;
$ADMconteudo = (string) null;
$usuario = (string) null;
$faleConosco = (string) null;
$produtos = (string) null;
$conteudo = (string) null;

if(isset($_GET['modo'])){
        //valida se a ação de modo busca um registro no BD
        if($_GET['modo'] == 'editarNivel'){
            
            if(isset($_GET['id'])){
                $id= $_GET['id'];
                $sql = "select tblnivel.* from tblnivel where idNivel=".$id;
                
                $selectDadosNivel = mysqli_query($conex, $sql);
                if($rsListaNivel = mysqli_fetch_assoc($selectDadosNivel)){
                    
                    $nomeNivel = $rsListaNivel['nivel'];
                    $ADMusuario = $rsListaNivel['ADMusuario'];
                    $ADMfaleConosco = $rsListaNivel['ADMfaleConosco'];
                    $ADMprodutos = $rsListaNivel['ADMprodutos'];
                    $ADMconteudo = $rsListaNivel['ADMconteudo'];
                    
                    if($ADMusuario == 1){
                        $usuario = "checked";
                    }else{
                        $usuario = "";
                    }
                    
                    if($ADMfaleConosco == 1){
                        $faleConosco = "checked";
                    }else{
                        $faleConosco = "";
                    }
                    
                    if($ADMprodutos == 1){
                        $produtos = "checked";
                    }else{
                        $produtos = "";
                    }
                    
                    if($ADMconteudo == 1){
                        $conteudo = "checked";
                    }else{
                        $conteudo = "";
                    }
                    
                    
                    
                    @$action = "updateContato.php?modo=editarNivel&id=".$id;
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
        <link rel="stylesheet" type="text/css" href="../cms/css/usuarioNivel.css">        
        <link rel="stylesheet" type="text/css" href="../cms/css/MSG.css">     
        <script defer src="../javascript/mascara.js"></script>
    </head>
    <body>
        
        <div id="containerCadastroNivel">
            <form name="frmCadastroNivel" action="<?=$action?>" method="post">
                <div id="containerCadastro">
                    <div class="cabecalho">cadastro de nível</div>

                    <div id="conteudoNivel">
                        <div id="configTxt">
                            <input data-type="texto" type="text" name="txtNome" placeholder="nome do nivel" value="<?=$nomeNivel?>">
                        </div>
                        <div id="configCheckbox">
                            <div>
                                <input type="checkbox" name="ckbADMusuario" value="0" <?=$usuario?>> ADMusuario
                            </div>
                            <div>
                                <input type="checkbox" name="ckbADMfaleConosco" value="0" <?=$faleConosco?>> ADMfaleConosco
                            </div>
                            <div>
                                <input type="checkbox" name="ckbADMprodutos" value="0" <?=$produtos?>> ADMprodutos
                            </div>
                            <div>
                                <input type="checkbox" name="ckbADMconteudo" value="0" <?=$conteudo?>> ADMconteudo
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
                        
                        $sql = "select *from tblNivel order by idNivel desc";
                  
                        $selectNiveis = mysqli_query($conex, $sql);
                        while($rsNiveis = mysqli_fetch_assoc($selectNiveis)){

                    ?>
                    <tr>
                        <td><?=$nomeNivel = $rsNiveis['nivel']?></td>
                        <td><?=$rsNiveis['ADMusuario']?></td>
                        <td><?=$rsNiveis['ADMfaleConosco']?></td>
                        <td><?=$rsNiveis['ADMprodutos']?></td>
                        <td><?=$rsNiveis['ADMconteudo']?></td>
                        <td class="configCheboxTable">
                            <input type="checkbox" name="ckbAtivacao" >
                        </td>
                        <td>
                            <div class="containerAcao">
                                <a onclick="return confirm('deseja realmente excluir, todos os usuarios que estão relacinado com este nivel serão excluidos juntos');" href="deleteContato.php?modo=excluirNivel&id=<?=$rsNiveis['idNivel']?>">
                                    <div class="imgApagar"></div>
                                </a>
                                
                                <a href="cadastroNivel.php?modo=editarNivel&id=<?=$rsNiveis['idNivel']?>">
                                  <div class="imgEditar"></div>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </table>
            </div>
        </div>
        
       
    </body>
</html>