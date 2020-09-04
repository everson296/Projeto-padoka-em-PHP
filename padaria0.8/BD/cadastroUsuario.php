<?php
require_once('conexao.php');
$conex = conexaoMysql();

$action = "insertContato.php?modo=inserirUsuario";

?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title> titulo </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../cms/css/usuarioNivel.css">        
    </head>
    <body>
        
        <form name="frmCadastroUsuario" action="<?=$action?>" method="post">
            <div id="containerCadastro">
                <div class="cabecalho"> cadastro de úsuario</div>

                <div id="conteudoUsuario">
                    <input type="text" name="txtNome" placeholder="nome">
                    <input type="text" name="txtSenha" placeholder="senha">
                    <input type="text" name="txtEmail" placeholder="email">

                    <select name="sltNivel">
                       
                        <option value="0"> selecione um nivel</option>
                        
                        <?php 
                            $sql = "select *from tblNivel order by nivel";
    
                            $selectNivelUsuario = mysqli_query($conex, $sql);
                            while($rsNivelUsuario = mysqli_fetch_assoc($selectNivelUsuario)){
                        ?>
                        <option value="<?=$rsNivelUsuario['idNivel']?>"> <?=$rsNivelUsuario['nivel']?></option>
                        <?php } ?>
                        
                    </select>
                </div>

                <div id="containerBTN">
                    <input type="submit" value="Cadastrar" name="btnCadastrarUsuario"> 
                    <a href="ADMusuario.php"><div>Voltar</div></a>
                </div>
            </div>
        </form>
       
    </body>
</html>