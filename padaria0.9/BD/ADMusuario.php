<?php

session_start();

if(!$_SESSION['usuario']){
    header('location: ../inicio.php');
    exit();
}

require_once('../BD/conexao.php');
require_once('bloqueioUsuario.php');
$conex = conexaoMysql();
$usuario = $_SESSION['usuario'];

?>


<!doctype html>
<html lang="pt-br">
    <head>
        <title> titulo </title>
        <meta charset="utf-8">
       
        <link rel="stylesheet" type="text/css" href="../cms/css/style.css">        
        <link rel="stylesheet" type="text/css" href="../cms/css/usuario.css">      
          
    </head>
    <body>
       
       <div class="iconPaginaInicial" onclick="location.href='../inicio.php'">
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
                    <div id="containerEscolhaUsuario">
                        <a href="cadastroUsuario.php"><div class="escolhaUsuario">Cadastro Úsuario</div></a>
                        <a href="cadastroNivel.php"><div class="escolhaUsuario">Cadastro Nível</div></a>
                    </div>
                    
                    <div id="containerDadosUsuario">
                       <table>
                           <tr>
                               <td>nome</td>
                               <td>nivel</td>
                               <td>email</td>
                               <td>ativação</td>
                               <td>opções</td>
                           </tr>
                           
                           <?php 
                           $sql = "select tblusuario.idUsuario, tblusuario.nomeUsuario, tblusuario.senha, tblusuario.email, tblusuario.ativacao, tblnivel.nivel
                                    from tblusuario, tblnivel
                                    where tblnivel.idNivel = tblusuario.idNivel
                                    order by idUsuario desc";
                           
                           $selectUsuario = mysqli_query($conex, $sql);
                           while($rsusuario = mysqli_fetch_assoc($selectUsuario)){
                               $ativacao = $rsusuario['ativacao'];
                                
                                if($ativacao == 1){
                                    $ativo = 'unchecked';
                                }else{
                                    $ativo = 'checked';
                                }
                           ?>
                           
                           <tr>
                               <td><?=$rsusuario['nomeUsuario']?></td>
                               <td><?=$rsusuario['nivel']?></td>
                               <td><?=$rsusuario['email']?></td>
                               <td  class="configCheboxTable"> 
                                   <input type="checkbox" name="ckbAtivacao" 
                                onclick="location.href='updateContato.php?modo=ativarDesativar&id=<?=$rsusuario['idUsuario']?>&tbl=Usuario&diretorio=ADMusuario'" <?=$ativo?>>
                                </td>
                               <td>
                                   <div class="containerAcao">
                                       <a onclick="return confirm('deseja realmente excluir');" href="deleteContato.php?modo=excluirUsuario&id=<?=$rsusuario['idUsuario']?>">
                                           <div class="imgApagar"></div>
                                       </a>
                                       
                                       <a href="cadastroUsuario.php?modo=editarUsuario&id=<?=$rsusuario['idUsuario']?>">
                                           <div class="imgEditar"></div>
                                       </a>
                                   </div>
                               </td> 
                           </tr>
                           
                           <?php } ?>
                       </table>
                    </div>
                    
                </div>
                
                <footer><h1>Desenvolvido por: Everson Silva de Almeida</h1></footer>
            </div>
        </section>
       
       
    </body>
</html>