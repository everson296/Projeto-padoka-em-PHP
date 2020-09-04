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
            
            .efeitoMenu #corContato{
                color: var(--menuColor);
            }

            body{
                background-image: url(imagens/contato/background/b5.jpg);
                background-position: center;
                background-origin: border-box;
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }
            
            section{
                background-color: transparent;
            }
            
            ::-webkit-input-placeholder {
               color: rgb(77, 170, 232, 0.9);
            }

            :-moz-placeholder { /* Firefox 18- */
               color: rgb(77, 170, 232, 0.9); 
            }

            ::-moz-placeholder {  /* Firefox 19+ */
               color: rgb(77, 170, 232, 0.9); 
            }

            :-ms-input-placeholder {  
               color: rgb(77, 170, 232, 0.9);  
            }
            
            #containerConteudo{
                min-height: 500px;
                height: auto;
                width: 100%;
                background-color:  var(--blackTransparent);
            /*    background-color:  rgba(255,255,255,0.25);*/
            }

            #containerPerfil{
                height: 150px;
                width: 100%;
            /*    background-color: gray;*/
                display: flex;
                justify-content: center;
                align-items: center;
            }

            #perfil{
                height: 250px;
                width: 250px;
                background-color: lightblue;
                border-radius: 50%;
                margin-top: -150px;
                background-image: url(../imagens/contato/perfil/fotoDePErfil.jpg);
                background-position: center;
                background-origin: border-box;
                background-size: cover;
                background-repeat: no-repeat;
            }

            #containerFormulario{
                min-height: 500px;
                height: auto;
                width: 100%;
            /*    background-color: green;*/

            }

            .confgTxtInput{
                height: 45px;
                width: 100%;
                margin-bottom: 10px;
                display: flex;
                justify-content: center;
                align-content: center;

            }

            .confgTxtInput input{
                width: 500px;
                border: none;
                border-radius: 40px;
            /*    background-color: rgba(38, 38, 38,0.9);*/
                background-color: rgba(0, 0, 0, 0.8);
                font-size: 20px;
                color: var(--white);
                border: 4px solid transparent;
                padding-left: 20px;
                box-sizing: border-box;
                outline: none;
                user-select: none;


            }

            .confgTxtInput input:hover{
                transition: .3s;
                border-bottom-color: #0b9cb8;
            }

            #containerSexo{
                height: 45px;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: row;
                margin-bottom: 10px;
/*                background-color: orange;*/
            }

            .configRadio{
                font-size: 24px;
                font-weight: bold;
                text-transform: capitalize;
                display: inline-block;
                vertical-align: middle;
                color: #fff;
                position: relative;
                padding-left: 30px;
                cursor: pointer;
            }

            .configRadio + .configRadio{
                margin-left: 20px;
            }

            .configRadio input{
                display: none;
            }

             .efeitoRadio{
                height: 20px;
                width: 20px;
                border-radius: 50%;
                border: 3px solid #00aeef;
                display: block;
                position: absolute;
                left: 0;
                top: 0;
            }

            .efeitoRadio:after{
                content: "";
                height: 10px;
                width: 10px;
                background: #00aeef;
                display: block;
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%) scale(0);
                border-radius: 50%;
                transition: 300ms ease-in-out 0s;
            }

            .configRadio input[type="radio"]:checked ~ .efeitoRadio:after{
                transform: translate(-50%, -50%) scale(1);
            }

            #configSelect{
                min-height: 300px;
                height: auto;
                width: 100%;
                padding: 20px;
                padding-top: 30px;
                box-sizing: border-box;
                display: flex;
                align-items: center;
                flex-direction: column;
                margin-bottom: 10px;
            }

            #configSelect select{
                height: 50px;
                width: 45%;
                border: none;
                font-size: 1.5em;
                color: rgb(77, 170, 232, 0.9);
                background-color: rgba(0, 0, 0, 0.8);
                border-radius: 40px;
                outline: none;
                padding-left: 20px;
                box-sizing: border-box;
                margin-bottom: 10px;

            }

            #configSelect textarea{
                height: 200px;
                width: 500px;
                resize: none;
                font-size: 1.6em;
                border: none;
                background-color: rgba(255,255,255,0.8);

            }

            #configbtn{
                min-height: 50px;
                height: auto;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                margin-bottom: 10px;


            }

            #configbtn input{
                height: 45px;
                width: 500px;
                border: none;
                font-size: 1.5em;
                border-radius: 40px;
                background: linear-gradient(90deg, #0162c8, #55e7fc);
                font-family: sans-serif;
                text-transform: uppercase; 
                letter-spacing: 2px;
            }

            
        </style>
        
    </head>
    <body>
      
        <?php  echo(menu()); ?>
        
        <section>
            <div class="container">
                <div id="containerConteudo">
                    
                    <div id="containerPerfil">
                        <div id="perfil"></div>
                    </div>
                    
                    <div id="containerFormulario">
                        <form name="frmRequesitos" method="post" action="contato.php" >
                           
                            <div class="confgTxtInput">
                                <input placeholder="Nome"  name="txtnome" type="text" value="">
                            </div>
                            
                            <div class="confgTxtInput">
                                <input placeholder="telefone"  name="txttelefone" type="text" value="">
                            </div>
                            
                            <div class="confgTxtInput">
                                <input placeholder="celular"  name="txtcelular" type="text" value="">
                            </div>

                            <div class="confgTxtInput">
                                <input placeholder="email"  name="txtemail" type="text" value="">
                            </div>

                            <div class="confgTxtInput">
                                <input placeholder="home page"  name="txthomepage" type="text" value="">
                            </div>

                            <div class="confgTxtInput">
                                <input placeholder="faceboock"  name="txtfaceboock" type="text" value="">
                            </div>

                            <div class="confgTxtInput">
                                <input placeholder="profissao"  name="txtprofissao" type="text" value="">
                            </div>
                            
                            <div id="containerSexo">   
                                   
                                <div class="configRadio">
                                    <input type="radio" value="M" name="rdoSexo"><h2>Masculino</h2>
                                    <span class="efeitoRadio"></span>
                                </div>



                                <div class="configRadio">
                                    <input type="radio" value="F" name="rdoSexo"><h2>Feminino</h2>
                                    <span class="efeitoRadio"></span>
                                </div>



                                <div class="configRadio">
                                    <input type="radio" value="O" name="rdoSexo"><h2>Outros</h2>
                                    <span class="efeitoRadio"></span>
                                </div>
                            </div>
                            
                            <div id="configSelect">
                                <select>
                                    <option value="0">selecione</option>
                                    <option value="1">sugestao</option>
                                    <option value="2">critica</option>
                                </select>

                                <textarea name="txtobs" cols="50" rows="7"></textarea>
                            </div>
                            
                            <div id="configbtn">
                                <input type="submit" name="btnEnviar" value="enviar">
                            </div>
                        </form>
                    </div>
                    
                    
                </div>
            </div>
        </section>
       
        <?php echo(rodaPe()); ?>
    </body>
</html>