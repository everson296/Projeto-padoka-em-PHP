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
        <title> CMS </title>
        <meta charset="utf-8">
       
        <link rel="stylesheet" type="text/css" href="../cms/css/style.css">        
        <link rel="stylesheet" type="text/css" href="../cms/css/faleConosco.css">     
        <script src="../javascript/jquery2.js"></script>
        <script src="../javascript/script.js"></script>
             
        <script>
        $(document).ready(function(){
                
                // função para iniciar o modal e vizualizar
                $('.imgVizualizar').click(function(){
                    
                    //chama a div modal pelo efeito fadeIn
                    $('.containerModal').slideToggle(1000);
                });
            });    
            
        const modalContatos = (idContato) =>{
                $.ajax({
                    type: "POST", 
                    url: "modalFaleConosco.php",
                    data: {modo: 'visualizarFaleConosco', id:idContato},
                    success: function(dados){
                        $('.modalConteudo').html(dados);  
                    }
                });
            }
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
                
                <form action="ADMfaleConosco.php" method="post" name="frmFaleConosco">
                    <div id="containerConteudo">
                       <table>
                           <div id="filtro">
                               <select name="sltFiltro">
                                   
                                   <?php
                                   
                                        $sql = "select *from tblsugestaocritica";
                                   $selectFiltro = mysqli_query($conex, $sql);
                                   while($rsFiltro = mysqli_fetch_assoc($selectFiltro)){
                                   
                                   ?>
                                   
                                   <option value="<?=$rsFiltro['idSugestaoCritica']?>"><?=$rsFiltro['tipo']?></option>
                                   
                                   <?php } ?>
                               </select>
                               
                               <input type="submit" name="btnFiltrar">
                           </div>
                           <tr>
                               <td>nome</td>
                               <td>celular</td>
                               <td>opção</td>
                               <td>email</td>
                               <td>ação</td>
                           </tr>

                          <?php 
                                if(isset($_POST['btnFiltrar'])){
                                    $tipo = $_POST['sltFiltro'];
                                    
                                    $sql = "select * 
                                    from tblcontatos, tblsugestaocritica
                                    where tblSugestaoCritica.idSugestaoCritica = tblContatos.idSugestaoCritica
                                    and tblsugestaocritica.idSugestaoCritica =".$tipo;
                                
                                }else{
                                    $sql = "select tblContatos.idContatos ,tblcontatos.nome, tblcontatos.celular, tblcontatos.email, tblsugestaocritica.tipo
                                    from tblcontatos, tblsugestaocritica
                                    where tblSugestaoCritica.idSugestaoCritica = tblContatos.idSugestaoCritica
                                    order by tblContatos.idContatos desc";
                                }
                            $selectContatos = mysqli_query($conex, $sql);
                            while($rsContato = mysqli_fetch_assoc($selectContatos)){
                               
                            ?>
                          
                           <tr>
                               <td><?=$rsContato['nome']?></td>
                               <td><?=$rsContato['celular']?></td>
                               <td><?=$rsContato['tipo']?></td>
                               <td><?=$rsContato['email']?></td>
                               <td>
                                   <div class="containerAcao">
                                       <a onclick="return confirm('deseja realmente excluir');" href="deleteContato.php?modo=excluirContato&id=<?=$rsContato['idContatos']?>">
                                           <div class="imgApagar"></div>
                                       </a>
                                       
                                       <a href="../contato.php?modo=editarContato&id=<?=$rsContato['idContatos']?>">
                                        <div class="imgEditar"></div>
                                    </a>
                                       
                                       <div class="imgVizualizar" onclick="modalContatos(<?=$rsContato['idContatos']?>);"></div>
                                   </div>
                               </td>
                           </tr>
                           
                           <?php } ?>
                       </table>
                    </div>
                </form>    
                
                <footer><h1>Desenvolvido por: Everson Silva de Almeida</h1></footer>
            </div>
        </section>
       
       
    </body>
</html>