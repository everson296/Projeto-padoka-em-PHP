<?php
require_once('conexao.php');
$conex = conexaoMysql();
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
        
        <section>
            <div id="containerCMS">
                
                <div id="cabecalho">
                    <h1><p>CMS</p> - Sistema de gerenciamento do site</h1>
                    <div id="containerLogo"></div>
                </div>
                
                <div id="containerEscolha">
                    <div class="containerFuncao">
                        <a href="../BD/ADMconteudo.php"><div class="imgFuncao" id="ADMconteudo"></div></a>
                        <div class="nomeFuncao" id="nomeADMconteudo">ADM.Conteúdo</div>
                    </div>

                    <div class="containerFuncao">
                        <a href="../BD/ADMfaleConosco.php"><div class="imgFuncao" id="ADMfaleConosco"></div></a>
                        <div class="nomeFuncao" id="nomeADMfaleConosco">ADM.Fale Conosco</div>
                    </div>

                    <div class="containerFuncao">
                        <a href="../BD/ADMusuario.php"><div class="imgFuncao" id="ADMusuario"></div></a>
                        <div class="nomeFuncao" id="nomeADMusuario">ADM.Usúario</div>
                    </div>

                    <div id="containerBoasVindas">
                        <div class="textoBoasVindas">Bem Vindo, [Everson].</div>
                        <div class="textoBoasVindas">logout</div>
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
                               <td>senha</td>
                               <td>email</td>
                               <td>ativação</td>
                               <td>opções</td>
                           </tr>
                           
                           <?php 
                           $sql = "select tblusuario.nomeUsuario, tblusuario.senha, tblusuario.email, tblusuario.ativacao, tblnivel.nivel
                                    from tblusuario, tblnivel
                                    where tblnivel.idNivel = tblusuario.idNivel";
                           
                           $selectUsuario = mysqli_query($conex, $sql);
                           while($rsusuario = mysqli_fetch_assoc($selectUsuario)){
                               
                           ?>
                           
                           <tr>
                               <td><?=$rsusuario['nomeUsuario']?></td>
                               <td><?=$rsusuario['nivel']?></td>
                               <td><?=$rsusuario['senha']?></td>
                               <td><?=$rsusuario['email']?></td>
                               <td  class="configCheboxTable"> <input type="checkbox"> </td>
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
                
                <footer><h1>Desenvolvido por: Everson Silva de Almeida</h1></footer>
            </div>
        </section>
       
       
    </body>
</html>