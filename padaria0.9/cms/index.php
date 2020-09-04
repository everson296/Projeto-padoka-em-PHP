<?php
session_start();

if(!$_SESSION['usuario']){
    header('location: ../inicio.php');
    exit();
}

require_once('../BD/conexao.php');
require_once('../BD/bloqueioUsuario.php');
$conex = conexaoMysql();

?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title> titulo </title>
        <meta charset="utf-8">
       
        <link rel="stylesheet" type="text/css" href="css/style.css">        
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
                    <p>Bem vindo ao CMS</p>
                </div>
                
                <footer><h1>Desenvolvido por: Everson Silva de Almeida</h1></footer>
            </div>
        </section>
       
       
    </body>
</html>