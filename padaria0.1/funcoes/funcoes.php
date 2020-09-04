<?php 

function containerProduto(){
    $retorno = 
        "<div class='conteudoProduto'>
                            <div class='containerImgemProduto'>
                                <div class='imagemProduto'></div>
                            </div>
                            
                            <div class='containerInformacoesProduto'>
                                <div class='nomeProduto'>Nome:</div>
                                <div class='descricaoProduto'>Descrição:</div>
                                <div class='precoProduto'>Preço:</div>
                                <div class='detalhesproduto'>Detalhes</div>
                                
                            </div>
                        </div>
                        ";
    return $retorno;
}

function containerProduto2(){
    $retorno = 
        "<div class='conteudoProduto2'>
                            <div class='containerImgemProduto'>
                                <div class='imagemProduto'></div>
                            </div>
                            
                            <div class='containerInformacoesProduto'>
                                <div class='nomeProduto'>Nome:</div>
                                <div class='descricaoProduto'>Descrição:</div>
                                <div class='precoProduto'>Preço:</div>
                                <div class='detalhesproduto'>Detalhes</div>
                                
                            </div>
                        </div>
                        ";
    return $retorno;
}

function menu() {
    $retorno = "<section>
            <div class='container'>
                <div id='containerMenu'>
                    <a href='inicio.php'><div id='containerLogo'></div></a>
                    
                    <nav id='menu'>
                        <ul id='menuItens'>
                            <li class='itensMenu' id='Curiosidades'><a href='curiosidades.php'>Curiosidades</a></li>
                            <li class='itensMenu'> <a href='empresa.php'>Empresa</a></li>
                            <li class='itensMenu' id='promocoes'><a href='promocao.php'>Promoções</a></li>
                            <li class='itensMenu' id='loja'><a href='lojas.php'>Lojas</a></li>
                            <li class='itensMenu' id='produtoDoMes'><a href='produtoDoMes.php'>Produto do Mês</a></li>
                            <li class='itensMenu' id='contato'><a href='contato.php'>Contato</a></li>
                        </ul>
                    </nav>
                    
                    <div id='containerForm'>
                        <form name='frmLogin' method='post' action='inicio.php'>
                            <div class='containerInput'> 
                                Usuário <input class='confgInput' name='txtUsuario' type='text' value=''>
                            </div> 
                            <div class='containerInput'>
                                Senha <input class='confgInput' name='txtSenha' type='text' value=''>
                            </div>
                            <div>
                                <input id='botao' name='btnOk' type='submit' value='OK'>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>";
    
    return $retorno;
}

function rodaPe() {
    $retorno = "<footer>
            <div class='container'>
                <div id='containerSistemaInterno'>
                    <div id='sistemaInterno'><a href='sistemaInterno.php'>Sistema interno</a></div>    
                </div>
                
                <div id='containerEndereco'>
                    <div id='endereco'> Endereço: </div>    
                </div>
                
                <div id='containerAPP'>
                    <div id='imagemAPP'></div>
                    <div id='baixarAPP'> Baixe o app</div>
                </div>
            </div>
        </footer>";
    return $retorno;
}

function titulo($texto) {
    
    $retorno = "<div class='container'> 
                <div class='TITULO'><h1>$texto</h1></div>
            </div>";
    return $retorno;
}


















?>