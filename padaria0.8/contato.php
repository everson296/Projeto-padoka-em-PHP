<?php 
    setlocale(LC_ALL, "pt-BR");
    require_once('funcoes/funcoes.php');

    //import da biblioteca de conexão
    require_once("BD/conexao.php");

    // abre a conexão com o BD
    $conex = conexaoMysql();
    $nome = (string) null;
    $telefone = (float) 0;
    $celular = (float) 0;
    $email = (string) null;  
    $homePage = null;  
    $facebook = null;    
    $profissao = (string) null;  
    $sexo = (string) null;    
    $idsugestaocritica = (float) 0;    
    $obs = (string) null; 
    $sql = (string) null;    


    if(isset($_POST['btnEnviar'])){
        
        if(!isset($_POST['rdoSexo']))        
            echo('<script> alert("pro favor selecione seu sexo")</script>');  
        else{    
        
        
        if(!empty($nome) || !empty($celular) || !empty($email) || !empty($obs) || !empty($sexo) || !empty($profissao)){
            
                echo('<script> alert("erro caixa obrigatória vazia.")</script>');
            
        }elseif(!is_numeric($telefone) || !is_numeric($celular)){
                echo('<script> alert("erro o campo telefone/ celular contem letra/s.")</script>');
   
        }else{ 
                
            if(is_numeric($nome) || is_numeric($profissao) ){  
                echo('<script> alert("nome ou profissao não pode ter numero.")</script>');
            }else{    
            
                $nome = $_POST['txtnome'];
                $telefone = $_POST['txttelefone'];
                $celular = $_POST['txtcelular'];
                $email = $_POST['txtemail'];
                $homePage = $_POST['txthomepage'];
                $facebook = $_POST['txtfaceboock'];
                $profissao = $_POST['txtprofissao'];
                $sexo = $_POST['rdoSexo'];
                $idsugestaocritica = $_POST['sltOpcao'];
                $obs = $_POST['txtobs'];

                $sql = "insert into tblContatos (nome, telefone, celular, email, homePage, facebook, idSugestaoCritica, profissao, sexo, obs) 

                values('".$nome."', '".$telefone."', '".$celular."', '".$email."', '".$homePage."', '".$facebook."', ".$idsugestaocritica.", '".$profissao."', '".$sexo."', '".$obs."' )";

                if(mysqli_query($conex, $sql))
                    echo("<script> alert('registro inserido com sucesso')</script>");
                else 
                    echo("<script> alert('Erro')</script>");
                    }
            }
        }
    }

?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title> padaria-contato </title>
        <link rel="shortcut icon" href="imagens/pao.png">
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <script src="javascript/jquery.js"></script>
        
        <script>
                $(document).ready(function(){

        //                .css, .slideToggle

                        // função para o click do menu mobile 
                        $('#containerMenuMobile').click(function(){
                            $('#menuMobile').fadeToggle(1000);
                        });

                        $('.itensMenuMobile').click(function(){
                            $('#iconeMenu').fadeToggle();
                        });

                });
        
        </script>
        
        <style>
            @media screen and (min-device-width:1300px){
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
                background-image: url(imagens/contato/perfil/fotoDePerfil.jpg);
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
            }
                
            #containerSexo input{
                height: 30px;
                width: 30px;
                margin-right: 5px;
            }    

            .configRadio{
                font-size: 1.5em;
                font-weight: bold;
                color: rgb(77, 170, 232, 0.9);
                padding-left: 30px;
                cursor: pointer;
                outline: none;
                user-select: none;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: row;
                
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
                padding-left: 10px;
                padding-top: 10px;
                box-sizing: border-box;
                border-radius: 5px;

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
            }
            
            @media screen and (max-device-width:780px){
                
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
/*                background-color:  rgba(255,255,255,0.25);*/
                
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
                background-image: url(imagens/contato/perfil/fotoDePerfil.jpg);
                background-position: center;
                background-origin: border-box;
                background-size: cover;
                background-repeat: no-repeat;
            }

            #containerFormulario{
                min-height: 500px;
                height: auto;
                width: 100%;
/*                background-color: green;*/

            }

            .confgTxtInput{
                height: 60px;
                width: 100%;
                margin-bottom: 10px;
                display: flex;
                justify-content: center;
                align-content: center;

            }

            .confgTxtInput input{
                width: 80%;
                border: none;
                border-radius: 40px;
            /*    background-color: rgba(38, 38, 38,0.9);*/
                background-color: rgba(0, 0, 0, 0.8);
                font-size: 2em;
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
            }
                
            #containerSexo input{
                height: 30px;
                width: 30px;
                margin-right: 5px;
            }    

            .configRadio{
                font-size: 1.5em;
                font-weight: bold;
                color: rgb(77, 170, 232, 0.9);
                padding-left: 30px;
                cursor: pointer;
                outline: none;
                user-select: none;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: row;
                
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
                width: 80%;
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
                width: 80%;
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
                margin-bottom: 20px;
            } 
                
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
                                <input placeholder="telefone (xxx) xxxx-xxxx"  name="txttelefone" type="text" pattern="([0-9]{3}) [0-9]{4}-[0-9]{4}" value="">
                            </div>
                            
                            <div class="confgTxtInput">
                                <input placeholder="celular (xx) xxxxx-xxxx"  name="txtcelular" type="text" pattern="([0-9]{2}) [0-9]{5}-[0-9]{4}" value="">
                            </div>

                            <div class="confgTxtInput">
                                <input placeholder="email"  name="txtemail" type="text" value="">
                            </div>

                            <div class="confgTxtInput">
                                <input placeholder="home page"  name="txthomepage" type="text" value="">
                            </div>

                            <div class="confgTxtInput">
                                <input placeholder="facebook"  name="txtfaceboock" type="text" value="">
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
                            
                            
                                <select name="sltOpcao">
                                    <option value="0">selecione</option>
                                    <?php 

                                        $sql = "select * from tblSugestaoCritica order by tipo";

                                        $selectSugestaoCritica = mysqli_query($conex, $sql);   

                                        while ($rsSugestaoCritica = mysqli_fetch_assoc($selectSugestaoCritica))
                                        {

                                    ?>

                                    <option value="<?= $rsSugestaoCritica['idSugestaoCritica'] ?>"><?= $rsSugestaoCritica['tipo'] ?></option>

                                    <?php } ?>
                                </select>

                                <textarea name="txtobs"></textarea>
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