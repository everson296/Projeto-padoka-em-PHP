<?php 

    setlocale(LC_ALL, "pt-BR");
    require_once("conexao.php");

    $conex = conexaoMysql();

        


    if(isset($_POST['btnCadastrar'])){
        
        $nome = $_POST['txtNomeUsuario'];
        $senha = $_POST['txtSenha'];
        $confirmacaoSenha = $_POST['txtConfirmacaoSenha'];
        $idNivel = $_POST['sltNiveis'];
               
        $sql = "insert into tblUsuario (idpermissoes, nomeUsuario, senha, confirmacaoDeSenha)
        values(".$idNivel.", '".$nome."', '".$senha."', '".$confirmacaoSenha."')";
        
        if(mysqli_query($conex, $sql))
            echo("<script> alert('registro inserido com sucesso')</script>");
        else 
            echo("<script> alert('Erro')</script>");
    }        
?>


<!doctype html>
<html lang="pt-br">
    <head>
        <title> titulo </title>
        <meta charset="utf-8">
       
        <link rel="stylesheet" type="text/css" href="../cms/css/usuario.css">        
    </head>
    <body>
            
            <div id="containerCadastroNivel">
                <form method="post" name="frmCadastroUsuario" action="cadastroUsuario.php">
                    <div id="cabecalhoCadastroUsuario">Cadastro de Úsuario</div>
                   
                    <div class="containerText">
                        
                        <input type="text" name="txtNomeUsuario" placeholder="nome">
                        
                         <input type="text" name="txtSenha" placeholder="senha">
                        
                        <input type="text" name="txtConfirmacaoSenha" placeholder="confirmação de senha">
                        
                        <select name="sltNiveis">
                            
                            <option>Selecione um nivel</option>
                        
                        <?php
                            // guardando um script de BD para procurar pelos niveis.
                            $sql = "select * from tblPermissoes order by nivel";
                            
                            // resgatando os dados obtidos da procura em uma variavel.
                            $selectNiveis = mysqli_query($conex, $sql);
                            
                            // colocanco em um while para poder ficar repetindo.
                            while ($rsNiveis = mysqli_fetch_assoc($selectNiveis)){
                      
                        ?>        
                            <option value="<?=$rsNiveis['idPermissoes']?>"><?=$rsNiveis['nivel']; ?></option>
                            
                        <?php } ?> 
                           
                        </select>
                        
                    </div>
                    
                    <div class="containerBotao">
                        <input type="submit" name="btnCadastrar" value="cadastrar">
                        
                        <a href="../cms/index.php"><div id="fechar">voltar</div></a>
                    </div>
                </form> 
            </div>    
           
        <script src="script.js"></script>   
    </body>
</html>