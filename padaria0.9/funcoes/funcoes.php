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
                      <div id='containerMenuPrincipalmobile'>
                          <div id='iconeMenuMobile'></div>
                           <nav id='menuMobile'>

                               <div class='itensMenuMobile'><a href='inicio.php'><h2>inicio</h2></a></div>
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
                   </div>
                   
                   <div id='containerSubMenuMobile'>
                       <div id='iconeSubMenu'></div>
                       <ul id='subMenuMobile'>
                           <li class='itensSubMenu'>sub menu</li>
                           <li class='itensSubMenu'>sub menu</li>
                           <li class='itensSubMenu'>sub menu</li>
                           <li class='itensSubMenu'>sub menu</li>
                       </ul>
                   </div>
                  
                   
                    <a href='inicio.php' title='ir para a pagina inicial'> 
                       <div id='logo'></div>
                    </a>
                    
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

function dataBrasil($data){
    $data = explode("-", $data);
    return $dataAmericana = $data[2]."/".$data[1]."/".$data[0];
}

function dataAmericana($data){
    $data = explode("/", $data);
    return $dataAmericana = $data[2]."-".$data[1]."-".$data[0];
}






?>