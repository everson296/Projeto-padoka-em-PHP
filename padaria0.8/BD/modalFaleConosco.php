<?php

    $nome = (string) null;
    $telefone = (string) null;
    $celular = (string) null;
    $email = (string) null;  
    $homePage = null;  
    $facebook = null;    
    $profissao = (string) null;  
    $sexo = (string) null;    
    $obs = (string) null; 
    $sql = (string) null;  
    $sugestaocritica = (string) null;

    if(isset($_POST['modo'])){
    if($_POST['modo'] == 'visualizarFaleConosco'){
        if($_POST['id']){
            
            require_once("conexao.php");

            $conex = conexaoMysql();
            
            $id = $_POST['id'];
            
            $sql = "select tblContatos.*, tblSugestaoCritica.*
            from tblContatos, tblSugestaoCritica
            where tblSugestaoCritica.idSugestaoCritica = tblContatos.idSugestaoCritica
            and tblContatos.idContatos=".$id;            
            
            $selectContato = mysqli_query($conex, $sql);
            
            if($rsContatos = mysqli_fetch_assoc($selectContato)){
                
                $nome = $rsContatos['nome'];
                $telefone = $rsContatos['telefone'];
                $celular = $rsContatos['celular'];
                $email = $rsContatos['email'];
                $homePage = $rsContatos['homePage'];
                $facebook = $rsContatos['facebook'];
                $profissao = $rsContatos['profissao'];
                $sexo = $rsContatos['sexo'];
                $sugestaocritica = $rsContatos['tipo'];
                $obs = $rsContatos['obs'];
            }        
        }
    }
}
       

?>


<!doctype html>
<html lang="pt-br">
    <head>
        <title> titulo </title>
        <meta charset="utf-8">
       
        <link rel="stylesheet" type="text/css" href="../cms/css/style.css"> 
        <link rel="stylesheet" type="text/css" href="../cms/css/faleConosco.css">    
        <script src="../js/jquery.js"></script>
           
            <script>

                $(document).ready(function(){
                    $('#fecharModal').click(function(){
                        $('.containerModal').fadeOut(800);
                    });
                });
            </script>        
    </head>
    <body>
        
        <div id="containerModalFaleConosco">
            <div id="cabecalhoModal">
                <div id="textoModal">você esta visualizando os dados de <p><?=$nome?></p></div>
                <div id="fecharModal">+</div>
            </div>
            
            <table>
              <tr>
                  <td>telefone:</td>
                  <td><?=$telefone?></td>
              </tr>

              <tr>
                  <td>celular:</td>
                  <td><?=$celular?></td>
              </tr>

              <tr>
                  <td>email:</td>
                  <td><?=$email?></td>
              </tr>

              <tr>
                  <td>home page:</td>
                  <td><?=$homePage?></td>
              </tr>

              <tr>
                  <td>facebook:</td>
                  <td><?=$facebook?></td>
              </tr>

              <tr>
                  <td>profissao:</td>
                  <td><?=$profissao?></td>
              </tr>

              <tr>
                  <td>sexo:</td>
                  <td><?=$sexo?></td>
              </tr>

              <tr>
                  <td>sugestão ou critica:</td>
                  <td><?=$sugestaocritica?></td>
              </tr>

              <tr>
                  <td>obs:</td>
                  <td><?=$obs?></td>
              </tr>
            </table>
        </div>
    </body>
</html>