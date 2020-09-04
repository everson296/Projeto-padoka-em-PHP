<?php

if(isset($_GET['modo'])){
    if($_GET['modo'] == 'atualizarEmpresa'){
        require_once('conexao.php');
        $conex = conexaoMysql();
        
        if(isset($_POST['btnEditar'])){
            
            $sobreEmpresa = $_POST['txtSobreEmpresa'];
            $informarcoes = $_POST['txtInformacoes'];
            $trabalheConosco = $_POST['txtTrabalheConosco'];
            $telefone = $_POST['txtTelefone'];
            $celular = $_POST['txtCelular'];
            $rua = $_POST['txtRua'];
            $numero = $_POST['txtNumero'];
                
            session_start();
            $img = $_SESSION['nameImg'];
           
            $sql = "update tblempresa set
                imgPrincipal = '".$img."',
                sobreEmpresa = '".$sobreEmpresa."',
                txtInformacao = '".$informarcoes."',
                txtTrabalheConosco = '".$trabalheConosco."',
                telefone = '".$telefone."',
                celular = '".$celular."',
                rua = '".$rua."',
                numero = '".$numero."'
                
                where idEmpresa = 1";
            
                if(mysqli_query($conex, $sql)){
                    echo("<script> 
                        alert('registro atualizado com sucesso');
                        location.href = '../BD/empresa.php';
                    </script>");
            
                    session_destroy();
                }else{ 
                    echo("<script> 
                            alert('Erro')
                            location.href = '../BD/empresa.php';
                            window.history.back();
                        </script>");
                }

        }
    }
}


?>