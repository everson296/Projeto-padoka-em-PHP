<?php 

if(isset($_GET['modo'])){
    if($_GET['modo'] == 'inserirNivel'){
        require_once("conexao.php");
        $conex = conexaoMysql();
        
        if(isset($_POST['btnCadastrarNivel'])){
            
            $nomeNivel = $_POST['txtNome'];
            $ADMusuario = (isset($_POST['ckbADMusuario'])) ? 1 : 0;
            $ADMfaleConosco = (isset($_POST['ckbADMfaleConosco'])) ? 1 : 0;
            $ADMprodutos = (isset($_POST['ckbADMprodutos'])) ? 1 : 0;
            $ADMconteudo = (isset($_POST['ckbADMconteudo'])) ? 1 : 0;
            $ativacao = (isset($_POST['ckbAtivacao'])) ? 1 : 0;
            
            $sql = "insert into tblNivel (nivel, ativar, ADMusuario, ADMfaleConosco, ADMprodutos, ADMconteudo)
            
                    values('".$nomeNivel."', '".$ativacao."', '".$ADMusuario."', '".$ADMfaleConosco."', '".$ADMprodutos."', '".$ADMconteudo."')";
            
            if(mysqli_query($conex, $sql))
                echo("<script> alert('registro inserido com sucesso'); location.href = '../BD/ADMusuario.php'; </script>");
            else 
                echo("<script> alert('Erro') location.href = '../BD/cadastroNivel.php'; window.history.back(); </script>");
        }
    }
    
    if($_GET['modo'] == 'inserirUsuario'){
        require_once('conexao.php');
        $conex = conexaoMysql();

        if(isset($_POST['btnCadastrarUsuario'])){

            $nome = $_POST['txtNome'];
            $senha = $_POST['txtSenha'];
            $email = $_POST['txtEmail'];
            $nivel = $_POST['sltNivel'];
            $ativacao = '0';

            $sql = "insert into tblUsuario (idNivel, nomeUsuario, senha, email, ativacao)
                    values('".$nivel."', '".$nome."', '".$senha."', '".$email."', '".$ativacao."')";

            if(mysqli_query($conex, $sql))
                echo("<script> alert('registro inserido com sucesso'); location.href = '../BD/ADMusuario.php'; </script>");
            else 
                echo("<script>  alert('Erro'); location.href = '../BD/cadastroUsuario.php'; window.history.back(); </script>");
        }
    }
    
    if($_GET['modo'] == 'inserirLoja'){
        require_once('conexao.php');
        $conex = conexaoMysql();
        
        if(isset($_POST['btnCadastro'])){
            
            $idEstado = $_POST['sltEstados'];
            $nomeLoja = $_POST['txtNomeLoja'];
            $nomeGerente = $_POST['txtNomeGerente'];
            $rua = $_POST['txtRua'];
            $bairro = $_POST['txtBairro'];
            $email = $_POST['txtEmail'];
            $numero = $_POST['txtNumero'];
            $link = $_POST['txtLink'];
            
            session_start();
            $img = $_SESSION['nameImg'];
            
            $sql = "insert into tblLoja (idEstados, imgLoja, nomeLoja, nomeGerente, rua, bairro, numero, email, linkGoogleMaps) 
            
            values(".$idEstado.", '".$img."', '".$nomeLoja."', '".$nomeGerente."', '".$rua."', '".$bairro."', '".$numero."', '".$email."', '".$link."')";
            
            
            if(mysqli_query($conex, $sql)){
                echo("<script> alert('registro inserido com sucesso'); location.href = '../BD/loja.php'; </script>");
            
                session_destroy();
            }else{ 
                echo("<script>  alert('Erro'); location.href = '../BD/loja.php'; window.history.back(); </script>");
            }
        }
    }
    
//    if($_GET['modo'] == 'atualizarEmpresa'){
//        require_once('conexao.php');
//        $conex = conexaoMysql();
//        
//        if(isset($_POST['btnEditar'])){
//            
//            $sobreEmpresa = $_POST['txtSobreEmpresa'];
//            $txtInformacao = $_POST['txtInformacoes'];
//            $txtTrabalheConosco = $_POST['txtTrabalheConosco'];
//            $telefone = $_POST['txtTelefone'];
//            $celular = $_POST['txtCelular'];
//            $rua = $_POST['txtRua'];
//            $numero= $_POST['txtNumero'];
//            
//            
//            session_start();
//            $img = $_SESSION['nameImg'];
//            
//            $sql = "insert into tblEmpresa (imgPrincipal, sobreEmpresa, txtInformacao, txtTrabalheConosco, telefone, celular, rua, numero) 
//            
//            values('".$img."', '".$txtInformacao."', '".$sobreEmpresa."','".$txtTrabalheConosco."', '".$telefone."', '".$celular."', '".$rua."', '".$numero."')";
//            
//            
//            if(mysqli_query($conex, $sql)){
//                echo("<script> alert('registro inserido com sucesso'); location.href = '../BD/loja.php'; </script>");
//            
//                session_destroy();
//            }else{ 
//                echo("<script>  alert('Erro'); location.href = '../BD/loja.php'; window.history.back(); </script>");
//            }
//        }
//    }
    
    else{
        echo('variavel modo inesistente');
    }               
}else{
    echo('<script> alert("ABORTAR MISSÃO VARIAVEL MODO INESISTENTE.")</script>');
}
 
?>