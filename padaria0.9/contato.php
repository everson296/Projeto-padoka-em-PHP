<?php 
    setlocale(LC_ALL, "pt-BR");
    require_once('funcoes/funcoes.php');

    //import da biblioteca de conexão
    require_once("BD/conexao.php");

    // abre a conexão com o BD
    $conex = conexaoMysql();
    $nome = (string) null;
    $telefone = (string) null;
    $celular = (string) null;
    $email = (string) null;  
    $homePage = null;  
    $facebook = null;    
    $profissao = (string) null;  
    $sexo = (string) null;    
    $idsugestaocritica = (float) 0;    
    $obs = (string) null; 
    $sql = (string) null;    
    $tipo = (string) null;

       
    $action = 'contato.php?modo=inserirContato';



    if(isset($_POST['btnEnviar'])){
        
        if($_GET['modo'] == 'inserirContato'){
        
            if(!isset($_POST['rdoSexo']))        
                echo('<script> alert("pro favor selecione seu sexo")</script>');  
            else{    

            if(!empty($nome) || !empty($celular) || !empty($email) || !empty($obs) || !empty($sexo) || !empty($profissao)){

                    echo('<script> alert("erro caixa obrigatória vazia.")</script>');


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
                        echo("<script> alert('registro inserido com sucesso'); location.href = 'contato.php';</script>");
                    else 
                        echo("<script> alert('Erro')</script>");
                    }
                }
            }
        }
    }

if(isset($_GET['modo'])){
        
    //valida se a ação de modo busca um registro no BD
    if($_GET['modo'] == 'editarContato'){

        if(isset($_GET['id'])){
            $id= $_GET['id'];
            $sqlContato = "
                    select tblContatos.*, tblSugestaoCritica.tipo, tblSugestaoCritica.sigla 
                    from tblContatos, tblSugestaoCritica
                    where tblSugestaoCritica.idSugestaoCritica = tblContatos.idSugestaoCritica
                    and tblContatos.idContatos =".$id;

            $selectDadosContato = mysqli_query($conex, $sqlContato);
            if($rsListaContato = mysqli_fetch_assoc($selectDadosContato)){

                $nome = $rsListaContato['nome'];
                $telefone = $rsListaContato['telefone'];
                $celular = $rsListaContato['celular'];
                $email = $rsListaContato['email'];
                $homePage = $rsListaContato['homePage'];
                $facebook = $rsListaContato['facebook'];
                $idSugestaoCritica = $rsListaContato['idSugestaoCritica'];
                $profissao = $rsListaContato['profissao'];
                $sexo = $rsListaContato['sexo'];
                $obs = $rsListaContato['obs'];
                $tipo = $rsListaContato['tipo'];

                $action = "BD/updateContato.php?modo=editarContato&id=".$rsListaContato['idContatos'];
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
        <link rel="stylesheet" type="text/css" href="css/contato.css">
        <script defer src="javascript/mascara.js"></script>
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
        
    </head>
    <body>
      
        <?php  echo(menu()); ?>
        
        <section>
            <div class="container">
                <div id="containerConteudo">
                  
                    
                    <div id="containerFormulario">
                        <form name="frmRequesitos" method="post" action="<?=$action?>">
                           
                            <div class="confgTxtInput">
                                <input placeholder="Nome" name="txtnome" type="text" value="<?=$nome?>" data-type="texto">
                            </div>
                            
                            <div class="confgTxtInput">
                                <input placeholder="telefone"  name="txttelefone" type="text" data-type="telefone" maxlength="15" value="<?=$telefone?>">
                            </div>
                            
                            <div class="confgTxtInput">
                                <input placeholder="celular" data-type="celular" name="txtcelular" maxlength="15" type="text" value="<?=$celular?>">
                            </div>

                            <div class="confgTxtInput">
                                <input placeholder="email"  name="txtemail" type="text" value="<?=$email?>">
                            </div>

                            <div class="confgTxtInput">
                                <input placeholder="home page"  name="txthomepage" type="text" value="<?=$homePage?>">
                            </div>

                            <div class="confgTxtInput">
                                <input placeholder="facebook"  name="txtfaceboock" type="text" value="<?=$facebook?>">
                            </div>

                            <div class="confgTxtInput">
                                <input placeholder="profissao"  name="txtprofissao" type="text" value="<?=$profissao?>">
                            </div>
                            
                            <div id="containerSexo">   
                                   
                                <div class="configRadio">
                                    <input type="radio" value="M" name="rdoSexo" <?php echo $sexo == 'M' ? 'checked' : '' ?>><h2>Masculino</h2>
                                    <span class="efeitoRadio"></span>
                                </div>

                                <div class="configRadio">
                                    <input type="radio" value="F" name="rdoSexo" <?php echo $sexo == 'F' ? 'checked' : '' ?>><h2>Feminino</h2>
                                    <span class="efeitoRadio"></span>
                                </div>

                                <div class="configRadio">
                                    <input type="radio" value="O" name="rdoSexo" <?php echo $sexo == 'O' ? 'checked' : '' ?>><h2>Outros</h2>
                                    <span class="efeitoRadio"></span>
                                </div>
                            </div>
                            
                            <div id="configSelect">
                            
                            
                                <select name="sltOpcao">
                                  
                                   <?php 
                                        if(isset($_GET['modo'])){
                                        if($_GET['modo'] == 'editarContato'){
                                    ?>
                                        <option value="<?=$idSugestaoCritica?>" selected><?=$tipo?></option>
                                    <?php
                                        }
                                        }else{
                                    ?>
                                        <option value="0" >selecione um item</option>
                                    <?php
                                        }

                                        $sql = "select * from tblsugestaocritica where idSugestaoCritica <> '".$tipo."' order by tipo";

                                        $selectContato = mysqli_query($conex, $sql); 
                                        while ($rsContato = mysqli_fetch_assoc($selectContato))
                                        {
                                    ?>
                                        <option value="<?=$rsContato['idSugestaoCritica']?>"><?=$rsContato['tipo']?></option>
                                    <?php 
                                        }
                                    ?>
                                 </select>

                                <textarea name="txtobs"><?=$obs?></textarea>
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