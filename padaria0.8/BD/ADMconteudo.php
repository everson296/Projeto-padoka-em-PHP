<!doctype html>
<html lang="pt-br">
    <head>
        <title> titulo </title>
        <meta charset="utf-8">
       
        <link rel="stylesheet" type="text/css" href="../cms/css/style.css">        
        <link rel="stylesheet" type="text/css" href="../cms/css/conteudo.css">        
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
                    <a href="curiosidade.php">
                        <div class="containerEscolhaConteudo">
                            <div class="escolhaConteudo" id="curiosidade"></div>
                            <h3>curiosidade</h3>
                        </div>
                    </a>
                    
                    <a href="empresa.php">
                        <div class="containerEscolhaConteudo">
                            <div class="escolhaConteudo" id="empresa"></div>
                            <h3>empresa</h3>
                        </div>
                    </a>
                    
                    
                    <a href="loja.php">
                        <div class="containerEscolhaConteudo">
                            <div class="escolhaConteudo" id="loja"></div>
                            <h3>loja</h3>
                        </div>
                    </a>
                    
                    
                </div>
                
                <footer><h1>Desenvolvido por: Everson Silva de Almeida</h1></footer>
            </div>
        </section>
       
       
    </body>
</html>