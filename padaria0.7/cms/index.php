<?php 
    setlocale(LC_ALL, "pt-BR");
    require_once("../BD/conexao.php");

    $conex = conexaoMysql();
?>


<!doctype html>
<html lang="pt-br">
    <head>
        <title> CMS </title>
        <meta charset="utf-8">
       
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="../javascript/jquery2.js"></script>
        <script src="../javascript/script.js"></script>
        
        <script>
            $(document).ready(function(){
               $('#admUsuario').click(function(){
                 $('#containerCadastroUsuario').slideToggle(800); 
               });
            });
            
            $(document).ready(function(){
                $('#faleConosco').click(function(){
                   $('#admFaleConosco').slideToggle(800);
                   $('#containerModalInformacoes').slideToggle(800);
                });
            });
            
            //Devemos sempre iniciar o JQuery por essa função
            $(document).ready(function(){
                
                // função para iniciar o modal e vizualizar
                $('.imgExibir').click(function(){
                    
                    //chama a div modal pelo efeito fadeIn
                    $('.modal').slideToggle(1000);
                });
            });
            
            // function para abrir um arquivo dentro da modal;
            const modalContatos = (idContato) =>{
                $.ajax({
                    type: "POST", 
                    url: "../BD/modalContatos.php",
                    data: {modo: 'visualizar', id:idContato},
                    success: function(dados){
                        $('.modalConteudo').html(dados);  
                    }
                });
            }
            
        </script> 
        
                           
    </head>
    <body>
       
       <div class="modal">
           <div class="modalConteudo"></div>
       </div>
        
        <sction>
            <div id="containerModalInformacoes">
                <div id="cabecalhoModal"> filtro de pesquisa </div>
                
                <div id="containerBusca">
                    <select type="text" name="txtPesquisa">
                        <option>todos</option>
                        <option>sugestão</option>
                        <option>critica</option>
                    </select>
                    <input type="submit" name="btnbuscar" value="BUSCAR">
                </div>
            </div>
            
        </sction>
        
        <section>
                <div class="containerConteudo">
                    
                    <div id="cabecalho">
                        <div id="texto">
                            <h1> CMS - sistema de gerenciamento do site</h1>
                        </div>
                        
                        <div id="containerImg">
                            <div id="img"></div>
                        </div>
                    </div>
                    
                    <div id="escolhas">
                        <div class="containerFuncao">
                            <div class="imgFuncao" id="admConteudo"></div>
                            <div class="nomeFuncao">ADM.Conteúdo</div>
                        </div>
                        
                        <div class="containerFuncao">
                            <div class="imgFuncao" id="faleConosco"></div>
                            <div class="nomeFuncao">ADM.Fale Conosco</div>
                        </div>
                        
                        <div class="containerFuncao">
                            <div class="imgFuncao"></div>
                            <div class="nomeFuncao">ADM.Produtos</div>
                        </div>
                        
                        <div class="containerFuncao">
                            <div class="imgFuncao" id="admUsuario"></div>
                            <div class="nomeFuncao">ADM.Usúario</div>
                        </div>
                        
                        <div class="containerBoasVindas">
                            <div class="textoBoasVindas">Bem Vindo, [xxxxxxx].</div>
                            <div class="textoBoasVindas">logout</div>
                        </div>
                    </div>
                    
                    <div id="conteudo">
                        
                        
                        <table id="admFaleConosco">
                            <tr>
                                <td><h4>Nome</h4></td>
                                <td><h4>Celular</h4></td>
                                <td><h4>Opção</h4></td>
                                <td><h4>Email</h4></td>
                                <td><h4>Ação</h4></td>
                            </tr>
                            
                            <?php 

                                $sql= "
                                    select tblContatos.idContatos, tblContatos.nome as nomeContato, tblContatos.celular, tblContatos.email, tblSugestaoCritica.sigla, tblSugestaoCritica.tipo as nomeSugestaoCritica 
                                    from tblContatos, tblSugestaoCritica
                                    where tblSugestaoCritica.idSugestaoCritica = tblContatos.idSugestaoCritica
                                    order by tblContatos.idContatos desc;
                                ";

                                $selectContatos = mysqli_query($conex, $sql);

                            //                                echo($sql); exibir erros.
                                while($rsContatos = mysqli_fetch_assoc($selectContatos))
                                {


                            ?>

                                <tr>
                                    <td><?=$rsContatos['nomeContato'] ?></td>
                                    <td><?=$rsContatos['celular'] ?></td>
                                    <td><?=$rsContatos['nomeSugestaoCritica']?></td>
                                    <td><?=$rsContatos['email'] ?></td>
                                    <td>
                                        <div class="tblImg">
                                            <a onclick="return confirm('deseja realmente excluir');" href="../BD/deleteContato.php?modo=excluir&id=<?=$rsContatos['idContatos'] ?>">
                                                <div class="imgExcluir"></div>
                                            </a>

                                            <div class="imgExibir" onclick="modalContatos(<?=$rsContatos['idContatos']?>);"></div>
                                        </div>
                                    </td>
                                </tr>

                            <?php 
                                }
                            ?>
                            
                        </table>
                        
                        <div id="containerCadastroUsuario">
                            
                            <div id="containerCadastros">
                                <a href="../BD/cadastroUsuario.php">
                                    <div class="containerCadastroNiveis">
                                        <div class="imgCadastro"></div>   
                                        <h2>Cadastrar Úsuario</h2>
                                    </div>
                                </a>
                                <a href="../BD/cadastroNivel.php">
                                    <div class="containerCadastroNiveis">
                                        <div class="imgCadastro"></div> 
                                        <h2>Cadastrar Nivel</h2>
                                    </div>
                                </a>
                                
                            </div>
                            
                               <table>
                                   <tr>
                                       <td>nome</td>
                                       <td>senha</td>
                                       <td>nivel</td>
                                       <td>ativar</td>
                                       <td>opções</td>
                                   </tr>
                                   
<!--                               dados dos usuarios    -->
                                  
                                  
                                   <?php 

                                $sql= "select tblusuario.idPermissoes, nomeUsuario, senha, tblPermissoes.idPermissoes, tblPermissoes.nivel
                                from tblUsuario, tblPermissoes
                                where tblpermissoes.idPermissoes = tblUsuario.idPermissoes
                                order by tblUsuario.idUsuario desc";
                                
                                $selectNiveis = mysqli_query($conex, $sql);
                                   
                                while($rsNiveis = mysqli_fetch_assoc($selectNiveis)){
                            ?>
                                   <tr>
                                       <td><?=$rsNiveis['nomeUsuario']?></td>
                                       <td><?=$rsNiveis['senha']?></td>
                                       <td><?=$rsNiveis['nivel']?></td>
                                       <td id="configChebox">
                                          <input type="checkbox" name="ckb">
                                       </td>
                                       <td>
                                          <div class="tblImg">
                                              <div class="imgExcluir"></div>
                                              <div class="imgEditar"></div>
                                              <div class="imgExibir"></div>
                                              
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
       
        
       
        <script src="script.js"></script>   
    </body>
</html>