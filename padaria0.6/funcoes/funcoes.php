<?php 

function containerProduto(){
    $retorno = "
        <div class='containerProdutos'>
                        <div class='imgProduto'></div>
                        <h1 class='nome'>nome</h1>
                        <h1 class='decricao'>decrição</h1>
                        <h1 class='preco'>preço</h1>
                        <h1 class='detalhes'>detalhes</h1>
                    </div>
        ";
    return $retorno;
}

function menu() {
    $retorno = "
        <header>
            <div id='containerMenu'>
                <div class='container'>
                   
                   
                   
                    <div id='logo'>
                        <div id='containerLinks'>
                            <div id='inicio'>
                                <a href='inicio.php'>
                                        <div class='efeitoRoda'></div>
                                    </a>
                            </div> 
                               
                            <div id='sistemaInternoLogo'>
                                <div id='linkSI'>
                                    <a href='sistemaInterno.php'>
                                        <div class='efeitoRoda'></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    <nav id='menu'>
                        <ul id='itensMenu'>
                        
                            <li id='widthCuriosidades' class='efeitoMenu'>
                                <a href='curiosidades.php' id='corCuriosidade'>Curiosidades</a>
                            </li>
                        
                        <li id='widthEmpresa' class='efeitoMenu'>
                            <a href='empresa.php' id='corEmpresa'>Empresa</a>
                        </li> 
                        <li id='widthPromocao' class='efeitoMenu'>
                            <a href='promocao.php' id='corPromocao'>Promoção</a>
                        </li>  
                        <li id='widthloja' class='efeitoMenu'>
                            <a href='lojas.php' id='corLoja'>loja</a>
                        </li>  
                        <li id='widthProdutos' class='efeitoMenu'>
                            <a href='produtoDoMes.php' id='corProdutosDoMes'>Produtos do mês</a>
                        </li> 
                        <li id='widthContato' class='efeitoMenu'>
                            <a href='contato.php' id='corContato'>Contato</a>
                        </li>           
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
            
            <div id='img'></div>
            
        </header>";
    
    return $retorno;
}

function redesSociais() {
    $retorno = "
    <div class='container'>
        <div id='containerRedes'>
            <div id='facebook'></div>
            <div id='whatsapp'></div>
            <div id='instagram'></div>
        </div>
    </div>
    ";
    
    return $retorno;
}

function rodaPe() {
    $retorno = "
    <footer>
            <div class='container'>
                <div id='containerSistemaInterno'>
                    <div id='sistemaInterno'><a href='sistemaInterno.php'>Sistema interno</a></div>    
                </div>
                
                <div id='containerEndereco'>
                    <div id='endereco'> Endereço: Av. Luis Carlos Berrini, nº 666.</div>    
                </div>
                
                <div id='containerAPP'>
                    <div id='imagemAPP'></div>
                    <div id='baixarAPP'> Baixe o app</div>
                </div>
            </div>
        </footer>
        ";
    return $retorno;
}

function titulo($texto) {
    
    $retorno = "
                <div class='TITULO'><h1>$texto</h1></div>
            ";
    return $retorno;
}

function Promocao() {
    $retorno ="
        <div class='produto'>

               <div class='imgProduto'></div>
               <div class='nome'><h2>pão</h2></div>
               <div class='containerPreco'>
                   <div class='preco'><h2>5,00</h2></div>
                   <div class='desconto'><h2>6,00</h2></div>
               </div>
               <div class='containerCompra'>
                   <div class='btmMenos'></div>
                   <div class='quantidade'></div>
                   <div class='btnMais'></div>
                   <div class='compra'><h2>comprar</h2></div>
               </div>

           </div>
    ";
    return $retorno;
}

function lojas(){
    $retorno = "
        <div class='containerCidade'>
               <div class='titulo'><h2>jandira</h2></div>
               <div class='infoCidade'>
                   <div class='imgLoja'></div>
                   <div class='infoLoja'>
                       <div class='nome'>Everson</div>
                       <div class='gerente'>Everson</div>
                       <div class='rua'>lalala</div>
                       <div class='bairro'>lololo</div>
                       <div class='numero'>666</div>
                       <div class='E_mail'>@gmail</div>
                   </div>
                   <div class='googleMaps'></div>
               </div>
           </div>
    ";
    
    return $retorno;
}

function curiosidade(){
    $retorno = "
        <div class='assunto'>
                          
           <div class='imagemAssunto'>
               <div class='tituloAssunto'>
                   <h2>titulo curiosidade</h2>
               </div>
           </div>

           <div class='textoAssunto'>
               <div class='containerCreditos'>
                   <div class='data_nome'><h2>15/02/2003</h2></div>
                   <div class='data_nome'><h2>Everson Silva</h2></div>
               </div>

               <div class='texto'><h2>
                   Quorum senserit ex ingeniis, de aut elit aute labore. Ad te esse proident iis 
                   arbitror aliqua qui senserit transferrem. Sed consequat a senserit. Ut hic tamen </h2>


               </div>

               <div class='redesSociais'>
                   <div class='redes RDfacebook'></div>
                   <div class='redes RDtwitter'></div>
                   <div class='redes RDwhatzapp'></div>
                   <div class='redes RDpinterest'></div>
                   <div class='redes RDyoutube'></div>
                   <div class='redes RDinstagram'></div>
               </div>
           </div>

       </div>
    ";
    return $retorno;
}

function listacuriosidade($n) {
    $retorno = "
    <div class='maisVistos'>
       <div class='numeracao'>$n</div>
       <div class='tituloMaisVisto'>
           titulo curiosidade
       </div>
    </div>
    ";
    return $retorno;
}

function produtoDoMes() {
    $retorno = "
    <div class='containerProduto'>
       <div class='imgProduto'></div>
       <div class='nome'><h2>pao</h2></div>
       <div class='preco'><h2>1,50</h2></div>
       <div class='descricao'><h2>quente</h2></div>
   </div>
    
    ";
    return $retorno;
}








?>