<?php
session_start();

if(!$_SESSION['usuario']){
    header('location: ../inicio.php');
    exit();
}

$usuario = $_SESSION['usuario'];

    require_once('conexao.php');
    require_once('bloqueioUsuario.php');
    require_once('../funcoes/funcoes.php');
    $conex = conexaoMysql();
    
    $action = "insertContato.php?modo=inserirCuriosidade";
    $actionImg = "uploadImg.php?verificar=imgCuriosidade";


$titulo = (string) null;
$dataDePublicacao = (string) null;
$data = (string) null;
$escritor = (string) null;
$texto = (string) null;

if(isset($_GET['modo'])){
        
        //valida se a ação de modo busca um registro no BD
        if($_GET['modo'] == 'editarCuriosidade'){
            
            if(isset($_GET['id'])){
                $id= $_GET['id'];
                $sql = " select tblCuriosidadeCard.*from tblCuriosidadeCard where idCuriosidadeCard=".$id;
                
                $selectDadosCuriosidade = mysqli_query($conex, $sql);
                if($rsListaCuriosidade = mysqli_fetch_assoc($selectDadosCuriosidade)){
                    
                    $titulo = $rsListaCuriosidade['titulo'];
                    
                    $dataDePublicacao = $rsListaCuriosidade['dataPublicacao'];
                    $data = dataBrasil($dataDePublicacao);
                    $escritor = $rsListaCuriosidade['nomeEscritor'];
                    $texto = $rsListaCuriosidade['texto'];
                   
                    
                    $action = "updateContato.php?modo=editarCuriosidade&id=".$rsListaCuriosidade['idCuriosidadeCard'];
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
        <link rel="stylesheet" type="text/css" href="../cms/css/curiosidade.css">    
        <script defer src="../javascript/script.js"></script>     
        <script src="../javascript/jquery2.js"></script>     
        <script src="../javascript/jquery.form.js"></script>
        <script defer src="../javascript/mascara.js"></script>  
        
        <script>
            $(document).ready(function(){
               
                $('#file').live('change', function(){
                   $('#frmImg').ajaxForm({
                    target:'#imagemCuriosidade'    
                   }).submit();
                });
                   // função para iniciar o modal e vizualizar
            $('.imgVizualizar').click(function(){
                    
                    //chama a div modal pelo efeito fadeIn
                    $('.containerModal').slideToggle(1000);
                });
            });    
             
            const modalCuriosidade = (idCuriosidade) =>{
                $.ajax({
                    type: "POST", 
                    url: "modalCuriosidade.php",
                    data: {modo: 'visualizarCuriosidade', id:idCuriosidade},
                    success: function(dados){
                        $('.modalConteudo').html(dados);  
                    }
                });
            }
            
        </script>    
    </head>
    <body>
      
        <div class="iconPaginaInicial" onclick="location.href='../curiosidades.php'">
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
                   <!-- ====================== FORM DA IMAGEM ======================= -->
                   
                    <form name="frmImg" id="frmImg" method="post" action="<?=$actionImg?>" enctype="multipart/form-data">
                         <div id="configFile">
                             <input type="file" id="file" name="fleImg" accept="image/jpeg, image/gif, image/png" hidden>
                             <label for="file" id="selector">Escolha uma imagem nova</label>
                             <div id="imagemCuriosidade"></div>
                         </div>
                    </form>
                    
                    <!-- CADASTRO CURIOSIDADES -->
                    <form name="frmCuriosidade" method="post" action="<?=$action?>">
                        <div id="configText">
                        <input type="text" name="txtTitulo" data-type="texto" placeholder="titulo da noticia" value="<?=$titulo?>">
                        <div id="dataNome">
                            <input data-type="data" maxlength="10" type="text" name="txtData" placeholder="data de publicação" value="<?=$data?>">
                            <input type="text" name="txtEscritor" data-type="texto" placeholder="nome do escritor" value="<?=$escritor?>">
                        </div>
                            <textarea name="textTexto"  placeholder="texto da curiosidade"><?=$texto?></textarea>
                        </div>
                        
                        <div id="congifBTN">
                            <input type="submit" value="cadastrar" name="btnCadastro">
                        </div>
                    </form>
                    
                    
                    <!--  DADOS CADASTRADOS -->
                    
                    <table>
                        <tr>
                            <td>titulo</td>
                            <td>nome do escritor</td>
                            <td>data</td>
                            <td>ativação</td>
                            <td>opções</td>
                        </tr>
                        
                        <?php
                            $sql = "select *from tblCuriosidadeCard";
                            $selectCuriosidade = mysqli_query($conex, $sql);
                            while($rsCuriosidade = mysqli_fetch_assoc($selectCuriosidade)){
                                $ativacao = $rsCuriosidade['ativacao'];
                                
                                if($ativacao == 1){
                                    $ativo = 'unchecked';
                                }else{
                                    $ativo = 'checked';
                                }
                        ?>
                        
                        <tr>
                            <td><?=$rsCuriosidade['titulo']?></td>
                            <td><?=$rsCuriosidade['nomeEscritor']?></td>
                            <td><?=$rsCuriosidade['dataPublicacao']?></td>
                            <td class="configCheboxTable">
                                <input type="checkbox" name="ckbAtivacao" 
                                onclick="location.href='updateContato.php?modo=ativarDesativar&id=<?=$rsCuriosidade['idCuriosidadeCard']?>&tbl=CuriosidadeCard&diretorio=curiosidade'" 
                                <?=$ativo?>>
                            </td>
                            <td>
                                <div class="containerAcao">
                                   <a onclick="return confirm('deseja realmente excluir');" href="deleteContato.php?modo=excluirCuriosidade&id=<?=$rsCuriosidade['idCuriosidadeCard']?>">
                                        <div class="imgApagar"></div>
                                    </a>
                                    
                                    <a href="curiosidade.php?modo=editarCuriosidade&id=<?=$rsCuriosidade['idCuriosidadeCard']?>">
                                        <div class="imgEditar"></div>
                                    </a>
                                    
                                    <div class="imgVizualizar" onclick="modalCuriosidade(<?=$rsCuriosidade['idCuriosidadeCard']?>);"></div>
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