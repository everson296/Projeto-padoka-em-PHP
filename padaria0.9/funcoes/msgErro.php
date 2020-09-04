<?php

setlocale(LC_ALL, "pt-BR");  
define("ERRO_caixa_vazia", "<span class='msg'>Por Favor inserir dados nas caixas de texto, o sistema não pode realizar o calculo </span>");



function MSGerro($titulo, $texto, $diretorio){
    echo("<div class='containerMSG'>
            <a href='$diretorio.php'><div class='fecharMSG'><span>+</span></div></a>
                <div class='MGS'>
            <div class='containerTituloErro'>
                <div class='imgErro'></div>
                <h1>$titulo</h1>
            </div>
            <div class='textoErro'> $texto</div>
            </div>
        </div>");
}

function MSGsucesso($titulo, $diretorio){
    echo("<div class='containerMSG'>
            <a href='$diretorio.php'><div class='fecharMSG'><span>+</span></div></a>
                <div class='MGS'>
            <div class='containerTituloErro'>
                <div class='imgSucesso'></div>
                <h1>sucesso</h1>
            </div>
            <div class='textoErro'>sucesso em inserir um novo $titulo </div>
            </div>
        </div>");
}

?>