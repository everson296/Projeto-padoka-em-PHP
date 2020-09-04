<?php 

function containerProduto($id, $nome, $descricao, $preco){
    $retorno = "
        <div class='containerProdutos'>
                        <div class='imgProduto configImg' id=$id></div>
                        <h1 class='nome'>$nome</h1>
                        <h1 class='decricao'>$descricao</h1>
                        <h1 class='preco'>R$ $preco</h1>
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
                   
                   <div id='containerMenuMobile'>
                      <div id='iconeMenuMobile'></div>
                       <nav id='menuMobile'>
                             
                           <div class='itensMenuMobile'><a href='imagens/'><h2>inicio</h2></a></div>
                           <div class='itensMenuMobile'><a href='curiosidades.php'><h2>curiosidades</h2></a></div>
                           <div class='itensMenuMobile'><a href='empresa.php'><h2>empresa</h2></a></div>
                           <div class='itensMenuMobile'><a href='promocao.php'><h2>promoção</h2></a></div>
                           <div class='itensMenuMobile'><a href='lojas.php'><h2>loja</h2></a></div>
                           <div class='itensMenuMobile'><a href='produtoDoMes.php'><h2>Produtos do mês</h2></a></div>
                           <div class='itensMenuMobile'><a href='contato.php'><h2>contato</h2></a></div>
                           <div id='containerRSMobile'>
                               <a href='https://www.facebook.com/'><div id='faceMobile'></div></a>
                               <a href='https://web.whatsapp.com/'><div id='whatsMobile'></div></a>
                               <a href='https://www.instagram.com/?hl=pt-br'><div id='instaMobile'></div></a>
                               
                           </div>
                       </nav>
                   </div>
                   
                   
                   
                   
                    <div id='logo'>
                        <div id='containerLinks'>
                            <div id='inicio'>
                                <a href='inicio.php' title='ir para a pagina inicial'>
                                        <div class='efeitoRoda'></div>
                                    </a>
                            </div> 
                               
                            <div id='sistemaInternoLogo'>
                                <div id='linkSI'>
                                    <a href='sistemaInterno.php' title='ir para o sistema interno'>
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
            <a href='https://www.facebook.com/' target='_blank' title='ir para o facebook'><div id='facebook'></div></a>
            <a href='https://web.whatsapp.com/' target='_blank' title='ir para o whatsapp'><div id='whatsapp'></div></a>
            <a href='https://www.instagram.com/?hl=pt-br' target='_blank' title='ir para o instagram'><div id='instagram'></div></a>
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

function Promocao($nome, $preco, $desconto, $img) {
    $retorno ="
        <div class='produto'>

               <div class='imgProduto' id=$img></div>
               <div class='nome'><h2>$nome</h2></div>
               <div class='containerPreco'>
                   <div class='preco'><h2>R$ $preco</h2></div>
                   <div class='desconto'><h2>R$ $desconto</h2></div>
               </div>
               <div class='containerCompra'>
                   <div class='btmMenos'></div>
                   <div class='quantidade'>0</div>
                   <div class='btnMais'></div>
                   <div class='compra'><h2>comprar</h2></div>
               </div>

           </div>
    ";
    return $retorno;
}

function curiosidade( $titulo, $img){
    $retorno = "
        <div class='assunto'>
                          
           <div class='imagemAssunto' id='$img'>
           
               <div class='tituloAssunto'>
                   <h2>$titulo</h2>
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
                   <a href='https://www.facebook.com/' target='_blank' title='ir para o facebook'><div class='redes RDfacebook'></div></a>
                   <a href='https://twitter.com/login?lang=pt' target='_blank' title='ir para o twitter'><div class='redes RDtwitter'></div></a>
                   <a href='https://web.whatsapp.com/' target='_blank' title='ir para o whatsapp'><div class='redes RDwhatzapp'></div></a>
                   <a href='https://br.pinterest.com/' target='_blank' title='ir para o pinterest'><div class='redes RDpinterest'></div></a>
                   <a href='https://www.youtube.com/' target='_blank' title='ir para o youtube'><div class='redes RDyoutube'></div></a>
                   <a href='https://www.instagram.com/?hl=pt-br' target='_blank' title='ir para o instagram'><div class='redes RDinstagram'></div></a>
                </div>
           </div>

       </div>
    ";
    return $retorno;
}

function listacuriosidade($n, $titulo) {
    $retorno = "
    <div class='maisVistos'>
       <div class='numeracao'>$n</div>
       <div class='tituloMaisVisto'>$titulo</div>
    </div>
    ";
    return $retorno;
}

function produtoDoMes($nome, $preco, $descricao, $img) {
    $retorno = "
    <div class='containerProduto'>
       <div class='imgProduto' id=$img></div>
       <div class='nome'><h2>$nome</h2></div>
       <div class='preco'><h2>R$ $preco</h2></div>
       <div class='descricao'><h2>$descricao</h2></div>
    </div>
    
    ";
    return $retorno;
}








?>