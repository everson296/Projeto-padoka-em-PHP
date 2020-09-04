<?php 
    setlocale(LC_ALL, "pt-BR");
    require_once('funcoes/funcoes.php');


?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title> padaria- inicio </title>
        <link rel="shortcut icon" href="imagens/pao.png">
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
    </head>
    <body>
      
        <section>
            <div class="container">
                <div id="containerMenu">
                    <div id="containerLogo"></div>
                    
                    <nav id="menu">
                        <ul id="menuItens">
                            <li class="itensMenu" id="Curiosidades"><a href="curiosidades.php">Curiosidades</a></li>
                            <li class="itensMenu"> <a href="empresa.php">Empresa</a></li>
                            <li class="itensMenu" id="promocoes"><a href="promocao.php">Promoções</a></li>
                            <li class="itensMenu" id="loja"><a href="lojas.php">Lojas</a></li>
                            <li class="itensMenu" id="produtoDoMes"><a href="produtoDoMes.php">Produto do Mês</a></li>
                            <li class="itensMenu" id="contato"><a href="contato.php">Contato</a></li>
                        </ul>
                    </nav>
                    
                    <div id="containerForm">
                        <form name="frmLogin" method="post" action="inicio.php">
                            <div class="containerInput"> 
                                Usuário <input class="confgInput" name="txtUsuario" type="text" value="">
                            </div> 
                            <div class="containerInput">
                                Senha <input class="confgInput" name="txtSenha" type="text" value="">
                            </div>
                            <div>
                                <input id="botao" name="btnOk" type="submit" value="OK">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
        <header> <div id="inicio"></div></header>
        
<!--                                    CONTEUDO                  -->

         <section>
               <div class="container">
                <div id="containerRedes">
                    <div id="facebook"></div>
                    <div id="whatsapp"></div>
                    <div id="instagram"></div>
                </div>
             </div>
        </section>

        
        <section>
            <div class="container">
                <div id="containerConteudo">
                      
                    <div id="containerSubMenu">
                        <ul id="subMenu">
                            <li class="subItens"> item 1 </li>
                            <li class="subItens"> iten 2 </li>
                            <li class="subItens"> iten 3 </li>
                            <li class="subItens"> iten 4 </li>
                            <li class="subItens"> iten 5 </li>
                        </ul>
                        
                    </div>
                    
                    <div class="containerProduto">
                      <?php echo(containerProduto())?>
                      <?php echo(containerProduto())?>
                      <?php echo(containerProduto())?>
                      <?php echo(containerProduto2())?>
                      <?php echo(containerProduto2())?>
                      <?php echo(containerProduto2())?>
                      
                    </div>
                    
            
                </div>
            </div>
        </section>
        
        
        
        <footer>
            <div class="container">
                <div id="containerSistemaInterno">
                    <div id="sistemaInterno">Sistema interno</div>    
                </div>
                
                <div id="containerEndereco">
                    <div id="endereco"> Endereço: </div>    
                </div>
                
                <div id="containerAPP">
                    <div id="imagemAPP"></div>
                    <div id="baixarAPP"> Baixe o app</div>
                </div>
            </div>
        </footer>
                
        
        
        
        
        
        
        
        
    </body>
</html>