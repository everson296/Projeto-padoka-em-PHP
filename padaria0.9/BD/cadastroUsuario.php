<?php
require_once('conexao.php');
$conex = conexaoMysql();

$action = "insertContato.php?modo=inserirUsuario";

session_start();

if(!$_SESSION['usuario']){
    header('location: ../inicio.php');
    exit();
}

$nivel = (string) null;
$nome = (string) null;
$senha = (string) null;
$email = (string) null;
$idNivel = 0;

if(isset($_GET['modo'])){
    //valida se a ação de modo busca um registro no BD
    if($_GET['modo'] == 'editarUsuario'){

        if(isset($_GET['id'])){
            $id= $_GET['id'];
            $sql = "select tblusuario.nomeUsuario, tblusuario.senha, tblusuario.email, tblusuario.idNivel, tblnivel.nivel
            from tblusuario inner join tblnivel
               on(tblusuario.idNivel = tblnivel.idNivel)
               and idUsuario =".$id;

            $selectDadosUsuario = mysqli_query($conex, $sql);
            if($rsListaUsuario = mysqli_fetch_assoc($selectDadosUsuario)){

                $nivel = $rsListaUsuario['nivel'];
                $idNivel = $rsListaUsuario['idNivel'];
                $nome = $rsListaUsuario['nomeUsuario'];
                $email = $rsListaUsuario['email'];


                @$action = "updateContato.php?modo=editarUsuario&id=".$id;
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
        <script defer src="../javascript/mascara.js"></script>     
    </head>
    <body>
        
        <form name="frmCadastroUsuario" action="<?=$action?>" method="post">
            <div id="containerCadastro">
                <div class="cabecalho"> cadastro de úsuario</div>

                <div id="conteudoUsuario">
                    <input type="text" name="txtNome" placeholder="nome" value="<?=$nome?>" data-type="texto">
                    <input type="text" name="txtSenha" placeholder="senha" value="" data-type="textoNumero">
                    <input type="email" name="txtEmail" placeholder="email" value="<?=$email?>">

                   <select name="sltNivel">
                                  
                   <?php 
                        if(isset($_GET['modo'])){
                        if($_GET['modo'] == 'editarUsuario'){
                    ?>
                        <option value="<?=$idNivel?>" selected><?=$nivel?></option>
                    <?php
                        }
                        }else{
                    ?>
                        <option value="" >selecione um estado</option>
                    <?php
                        }

                        $sql = "select * from tblnivel where idNivel <> ".$idNivel." order by idNivel";

                         $selectNivelUsuario = mysqli_query($conex, $sql);
                         while($rsNivelUsuario = mysqli_fetch_assoc($selectNivelUsuario))
                        {
                    ?>
                        <option value="<?=$rsNivelUsuario['idNivel']?>"> <?=$rsNivelUsuario['nivel']?></option>
                    <?php 
                        }
                    ?>
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