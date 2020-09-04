<?php 
    setlocale(LC_ALL, "pt-BR");
    require_once('funcoes/funcoes.php');


?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title> padaria-contato </title>
        <link rel="shortcut icon" href="imagens/pao.png">
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <style>
        
            #containerPerfilCliente{
                height: 250px;
                width: 100%;
                background-color: orange;
            }

            #perfil{
                height: 250px;
                width: 250px;
                background-color: #333634;
                border-radius: 50%;
                float: left;
                margin-left: 110px;
                margin-top: -120px;
            }

            #textoAreaDoCliente{
                height: 200px;
                width: 450px;
                float: left;
                margin-top: 20px;
                margin-left: 20px;
            }

            #tituloAreaDoCliente{
                height: 32px;
                width: 100%;
                background-color: gray;
                text-align: center;
                font-family: "Arial","comic sans ms";
                font-size: 22px;
                padding-top: 8px;

            }


            #funcionalidadeAreaCliente{
                height: 160px;
                width: 100%;
                background-color: aliceblue;
                text-align: justify;
                font-family: "Arial","comic sans ms";
                font-size: 22px;
                padding-top: 8px;
            }

            #containerEntradaDeDados{
                height: 540px;
                width: 100%;
            }

            #containerInformacoesCliente{
                height: 520px;
                width: 700px;
                background-color: aquamarine;
                float: left;
                padding-top: 20px;

            }

            .configtxt{
                height: 30px;
                width: 450px;
                padding-left: 10px;
                margin-left: 100px;
                margin-bottom: 20px;

            }

            #sexo{
                height: 25px;
                width: 80px;
                float: left;
                text-align: center;
                font-family: "Arial", "comic sans ms";
                font-size: 18px;
                margin-left: 90px;
                padding-top: 5px;
            }

            .radio, .radio2{
                height: 30px;
                width: 120px;
                float: left;
                text-align: center;
                font-family: "Arial", "comic sans ms";
                font-size: 18px;
            }

            .radio2{
                margin-left: 10px;
            }

            .configradio{
                height: 20px;
                width: 20px;
            }

            #containerSugestao{
                height: 520px;
                width: 700px;
                background-color: brown;
                float: left;
                padding-top: 20px;
            }

            #congifSelect{
                height: 40px;
                width: 240px;
                font-family: "Arial", "comic sans ms";
                font-size: 15px;
                padding-left: 10px;
                margin-left: 100px;

            }

            #configTextArea{
                margin-top: 20px;
                height: 200px;
                width: 600px;
                margin-left: 50px;
            }

            #configBtn{
                height: 50px;
                width: 600px;
                margin-top: 150px;
                margin-left: 50px;
                border-radius: 50px;
                border: none;
            }

            
        </style>
        
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