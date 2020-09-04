<?php
    setlocale(LC_ALL, "pt-BR");
    require_once("conexao.php");

    $conex = conexaoMysql();
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
                
                <form action="ADMfaleConosco" method="post" name="frmFaleConosco">
                    <div id="containerConteudo">
                       <table>
                           <div id="filtro">
                               <select>
                                   <option value="">todos</option>
                                   <option value="">sujestao</option>
                                   <option value="">critica</option>
                               </select>
                           </div>
                           <tr>
                               <td>nome</td>
                               <td>celular</td>
                               <td>opção</td>
                               <td>email</td>
                               <td>ação</td>
                           </tr>

                          <?php 
                           
                           $sql = "select tblContatos.idContatos ,tblcontatos.nome, tblcontatos.celular, tblcontatos.email, tblsugestaocritica.tipo
                            from tblcontatos, tblsugestaocritica
                            where tblSugestaoCritica.idSugestaoCritica = tblContatos.idSugestaoCritica
                            order by tblContatos.idContatos desc";
                           
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