<?php 
    setlocale(LC_ALL, "pt-BR");
    require_once('funcoes/funcoes.php');


?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title> padaria- curiosidades </title>
        <link rel="shortcut icon" href="imagens/pao.png">
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
      
        <?php  echo(menu()); ?>
        
        <header> 
            <div id='contatoImg'>
                <div id='tituloHeaderContato'>Contato</div> 
            </div>
        </header>
        
        <section>
            <div class="container">
                <div id="containerPerfilCliente">

                    <div id="textoAreaDoCliente">
                        <div id="tituloAreaDoCliente">Área do cliente</div>
                        <div id="funcionalidadeAreaCliente"> </div>
                    </div>

                    <div id="perfil"></div>
                </div>
            </div>
        </section>
       
       <section>
           <div class="container">
               <div id="containerEntradaDeDados">
                   <form action="contato.php" name="frmDados" method="post">
                   <div id="containerInformacoesCliente">
                   
                        <div> <input class="configtxt" placeholder="Nome" name="txtnome" type="text" value=""></div>
                        <div> <input class="configtxt" placeholder="Telefone" name="txttelefone" type="text" value="" ></div>
                        <div> <input class="configtxt" placeholder="Celular" name="txtcelular" type="text" value=""></div>
                        <div> <input class="configtxt" placeholder="Email" name="txtemail" type="text" value=""></div>
                        <div> <input class="configtxt" placeholder="Home page" name="txthomePage" type="text" value=""></div>
                        <div> <input class="configtxt" placeholder="Facebook" name="txtfacebook" type="text" value=""></div>
                        <div> <input class="configtxt" placeholder="Mensagem" name="txtmensagem" type="text" value=""></div>
                        <div> <input class="configtxt" placeholder="Profissão" name="txtprofissao" type="text" value=""></div>

                        <div id="sexo">Sexo:</div>
                        <div class="radio"> <input class="configradio" type="radio" value="F">feminino</div>
                        <div class="radio2"> <input class="configradio" type="radio" value="M">Masculino</div>
                        <div class="radio2"> <input class="configradio" name="rdoSexo" type="radio" value="O">Outros</div>


                   </div>

                   <div id="containerSugestao">
                       <select name="sltSugestao" id="congifSelect">
                           <option value="sugestao">Sugestão</option>
                           <option value="critica">Critica</option>
                       </select>
                       <textarea id="configTextArea" name=""></textarea>
                       
                       <input name="btnEnviar" type="submit" value="Enviar" id="configBtn">

                   </div>
                   </form>
               </div>
           </div>
       </section>
       
       
       
       

       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
        <?php echo(rodaPe()); ?>
    </body>
</html>