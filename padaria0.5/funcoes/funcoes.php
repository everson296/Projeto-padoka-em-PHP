<?php 

function containerProduto(){
    $retorno = 
        "               <div class='produtos'>
                           <div class='imgProduto'></div>
                           <div class='nome'>pao</div>
                           <div class='descricao'>lindo</div>
                           <div class='containerPreco'>
                               <div class='preco'>R$ 5.00</div>
                               <div class='desconto'>R$ 5.00</div>
                           </div>
                           <div class='detalhe'>detalhes</div>
                           
                       </div>
                        ";
    return $retorno;
}

function menu() {
    $retorno = "<header>
            <div id='containerMenu'>
                <div class='container'>
                    <div id='logo'>
                        <div id='containerLinks'>
                            <div id='inicio'></div>
                            <div id='sistemaInterno'></div>
                        </div>
                    </div>
                    <nav id='menu'>
                        <ul id='itensMenu'>
                        <li id='widthCuriosidades' >
                            <span ></span>
                            <span ></span>
                            <span ></span>
                            <span ></span>
                            Curiosidades
                        </li>
                        <li id='widthEmpresa'>
                            <span ></span>
                            <span ></span>
                            <span ></span>
                            <span ></span>
                            Empresa
                        </li> 
                        <li id='widthPromocao'>
                            <span ></span>
                            <span ></span>
                            <span ></span>
                            <span ></span>
                            Promoção
                        </li>  
                        <li id='widthloja'>
                            <span ></span>
                            <span ></span>
                            <span ></span>
                            <span ></span>
                            loja
                        </li>  
                        <li id='widthProdutos'>
                            <span ></span>
                            <span ></span>
                            <span ></span>
                            <span ></span>
                            Produtos do mês
                        </li> 
                        <li id='widthContato'>
                            <span ></span>
                            <span ></span>
                            <span ></span>
                            <span ></span>
                            Contato
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
        <section>
               <div class='container'>
                <div id='containerRedes'>
                    <div id='facebook'></div>
                    <div id='whatsapp'></div>
                    <div id='instagram'></div>
                </div>
             </div>
        </section>
    ";
    
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
    
    $retorno = "
                <div class='TITULO'><h1>$texto</h1></div>
            ";
    return $retorno;
}

function Promocao() {
    $retorno ="
        <div class='produto'>

               <div class='imgProduto'></div>
               <div class='nome'></div>
               <div class='containerPreco'>
                   <div class='preco'></div>
                   <div class='desconto'></div>
               </div>
               <div class='containerCompra'>
                   <div class='btmMenos'></div>
                   <div class='quantidade'></div>
                   <div class='btnMais'></div>
                   <div class='compra'></div>
               </div>

           </div>
    ";
    return $retorno;
}
















?>