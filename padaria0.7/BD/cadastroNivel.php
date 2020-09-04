<?php
    setlocale(LC_ALL, "pt-BR");
    //import da biblioteca de conexão
    require_once("conexao.php");
    $conex = conexaoMysql(); 

        $nomeNivel = (string) null;
        $usuario = (string) null;
        $faleConosco = (string) null;
        $produtos = (string) null;
        $conteudo = (string) null;
    

    if(isset($_POST['btnCadastrar'])){
        
        $nomeNivel = $_POST['textNomeUsuario'];
        $usuario = (isset($_POST['usuario'])) ? 1 : 0;
        $faleConosco = (isset($_POST['faleConosco'])) ? 1 : 0;
        $produtos = (isset($_POST['produtos'])) ? 1 : 0;
        $conteudo = (isset($_POST['conteudo'])) ? 1 : 0;  
        $ativacao = (isset($_POST['ckbAtivacao'])) ? 0 : 1;
        
//        echo($nomeNivel.'<br>');
//        echo($usuario.'<br>');
//        echo($faleConosco.'<br>');
//        echo($produtos.'<br>');
//        echo($conteudo.'<br>');
        
        $sql = "insert into tblPermissoes (nivel, ADMusuario, ADMfaleConosco, ADMprodutos, ADMconteudo, ativacao)
        
        values('".$nomeNivel."', '".$usuario."', '".$faleConosco."', '".$produtos."', '".$conteudo."', '".$ativacao."')";
        
//        var_dump($sql);
        
        if(mysqli_query($conex, $sql))
            echo("<script> alert('registro inserido com sucesso');
                           location.href = 'cadastroNivel.php';
                </script>");
        else 
            echo("<script> 
                    alert('Erro')
                    location.href = 'cadastroNivel.php';
                    window.history.back();
                </script>");
    }
?>


<!doctype html>
<html lang="pt-br">
    <head>
        <title> titulo </title>
        <meta charset="utf-8">
       
        <link rel="stylesheet" type="text/css" href="../cms/css/nivel.css">        
    </head>
    <body>
            <div id="containerCadastroNivelUsuario">
                <div id="containerCadastroNivel">
                    <form action="cadastroNivel.php" name="frmCadastoNivel" method="post">
                        <div id="cabecalhoCadastroNivel">Cadastro de Nivel</div>

                        <div class="containerText">

                            <input type="text" name="textNomeUsuario" placeholder="nome">

                        </div>

                        <div class="containerCheckbox">
                            <input type="checkbox" name="usuario" value="0">ADM.Usuarios
                            <input type="checkbox" name="faleConosco" value="0">ADM.Fale Conosco
                            <input type="checkbox" name="produtos" value="0">ADM.Produtos
                            <input type="checkbox" name="conteudo" value="0">ADM.Conteudo
                        </div>

                        <div class="containerBotao">
                            <input type="submit" name="btnCadastrar" value="cadastrar">
                            
                            <a href="../cms/index.php"><div id="btnFecharNivel">voltar</div></a>
                        </div>
                    </form> 
                </div>    
                
                <div id="containerDadosNivel">
                    <table>
                        <tr id="gg">
                            <td colspan="7" id="cabecalhoDadosNivel">
                                Consulta De Dados Dos Niveis
                            </td>
                        </tr>
                        
                        <tr>
                            <td>nome</td>
                            <td>ADM.usuario</td>
                            <td>ADM.fale conosco</td>
                            <td>ADM.produtos</td>
                            <td>ADM.conteudo</td>
                            <td>ativar</td>
                            <td>opção</td>
                        </tr>
                        
                        <?php
                            $sql = "select *from tblpermissoes";

                            $selectNiveis = mysqli_query($conex, $sql);

                            while($rsNiveis = mysqli_fetch_assoc($selectNiveis)){
                        
                        ?>
                         <tr>
                             <td>
                               <?=$nome = $rsNiveis['nivel']?>
                             </td>
                             <td>
                                 <?=$rsNiveis['ADMusuario']?>
                             </td>
                             <td>
                                 <?=$rsNiveis['ADMfaleConosco']?>
                             </td>
                             <td>
                                 <?=$rsNiveis['ADMprodutos']?>
                             </td>
                             <td>
                                 <?=$rsNiveis['ADMconteudo']?>
                             </td>
                             <td id="configChebox">
                                <input type="checkbox" name="ckbAtivacao" value="1">
                             </td>
                             <td>
                                <div class="tblImg">

                                    <a onclick="return confirm('deseja realmente excluir este nivel');" 
                                       href="deleteContato.php?modo=excluirNivel&id=<?=$rsNiveis['idPermissoes'] ?>">
                                        <div class="imgExcluir"></div>
                                    </a>

                                    <div class="imgEditar"></div>

                                    <div class="imgExibir"></div>
                                </div>
                             </td>
                         </tr>
                        <?php
                            }
                        ?>
                       
                    </table>
                </div>
            </div> 
    </body>
</html>