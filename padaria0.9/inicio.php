<?php 
    setlocale(LC_ALL, "pt-BR");
    require_once('funcoes/funcoes.php');
    require_once('funcoes/msgErro.php');
    require_once('BD/conexao.php');
    $conex = conexaoMysql();
    
    $action = "inicio.php";



    if(isset($_POST['btnOk'])){        
        if(empty($_POST['txtUsuario'] && $_POST['txtSenha'])){
            $titulo = "caixa vazia";
            $text = "olá, você se esqueceu de preencher um campo obrigatório";
            $diretorio = "inicio";
            MSGerro($titulo, $text, $diretorio);
        }else{
        
            $usuario = $_POST['txtUsuario'];
            $senha = md5($_POST['txtSenha']);
        
            $sql = "select tblusuario.*, tblnivel.* 
                    from tblusuario, tblnivel
                    where tblnivel.idNivel = tblusuario.idNivel
                    and nomeUsuario = '".$usuario."' and senha = '".$senha."'
                    and tblusuario.ativacao <> 0";
        
            $selectSenhausuario = mysqli_query($conex, $sql);
            $rsusuario = mysqli_fetch_assoc($selectSenhausuario);
            $nivel = $rsusuario['nivel'];
            $ativacao = $rsusuario['ativacao'];
            
            
            if($ativacao == 0){
                $titulo = "desativação";
                $text = "olá, este úsuario esta desativado no momento";
                $diretorio = "inicio";
            
                MSGerro($titulo, $text, $diretorio);
            }else{
                if($rsusuario == !''){
                    session_start();
                    $_SESSION['usuario'] = $usuario;
                    $_SESSION['nivel'] = $nivel;
                    header('Location: cms/index.php');

                }else {
                    $titulo = "falha no login";
                    $text = "olá, úsuario ou senha invalidos tente novamente";
                    $diretorio = "inicio";
            
                    MSGerro($titulo, $text, $diretorio);
                }
            }
        }   
    }
    
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title> padaria- inicio </title>
        <link rel="shortcut icon" href="imagens/pao.png">
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/inicio.css">
        <link rel="shortcut icon" href="imagens/logo/HILLVALEY.png">
        <script src="javascript/jquery2.js"></script>
        
        <script>
            $(document).ready(function(){

//                .css, .slideToggle

                // função para o click do menu mobile 
                $('#iconeMenuMobile').click(function(){
                    $('#menuMobile').fadeToggle(1000);
                });

                $('.itensMenuMobile').click(function(){
                    $('#iconeMenu').fadeToggle();
                });
            });
            
            $(document).ready(function(){

                $('#iconeSubMenu').click(function(){
                    $('#subMenuMobile').fadeToggle(1000);
                });

                $('.itensSubMenu').click(function(){
                    $('#subMenuMobile').fadeToggle();
                });
            });
      
                
            
        </script>
        
    </head>
    <body>
          
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
                    <div id='containerForm'>
                        <form name='frmLogin' method='post' action='<?=@$action?>'>
                            <div class='containerInput'> 
                                Usuário <input class='confgInput' name='txtUsuario' type='text' value=''>
                            </div> 
                            <div class='containerInput'>
                                Senha <input class='confgInput' name='txtSenha' type='password' value=''>
                            </div>
                            <div>
                                <input id='botao' name='btnOk' type='submit' value='OK'>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div id='img'></div>
            
        </header>
        <section>
           
            <div class="container">
                <div id="containerConteudo">
                    <div id="containerSubMenu">
                        <ul id="subMenu">
                            <li class="subItens">itens</li>
                            <li class="subItens">itens</li>
                            <li class="subItens">itens</li>
                            <li class="subItens">itens</li>
                            
                        </ul>
                    </div>
                    
                    <?php echo(containerProduto('pao', 'pao', 'gostoso,e quente', '4,00')); ?>
                    <?php echo(containerProduto('pao2', 'pao', 'caseiro', '5,00')); ?>
                    <?php echo(containerProduto('croassao', 'croassao','massa macia','5,00')); ?>
                    <?php echo(containerProduto('brigadeiro', 'brigadeiro','chocolate cremoso','2,00')); ?>
                    
                    
                    
                    <?php echo(redesSociais()); ?>
                </div>
            </div>
        </section>
        
        
        
         

        
       
        
        
        
        
        
        
        
        
        
        
        
        
        
        <?php echo(rodaPe()); ?>
    </body>
</html>