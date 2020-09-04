<?php 
    
    // verifica se a variavel modo existe no GET
    if(isset($_GET['modo'])){

        //valida de o conteudo da variavel GET é para excluir.
        if($_GET['modo'] == 'excluir'){
            require_once("conexao.php");

            $conex = conexaoMysql();

            if (isset($_GET['id'])){

                // resgata a variavel 'id' que foi enviada pela pagina d
                $id = $_GET['id'];

                //script de delete
                $sql =" delete from tblContatos where idContatos =" . $id;

                if(mysqli_query($conex, $sql)){
                    //redireciona para a pagina index.
                    header('location:../cms/index.php');
                }
            }
        }else{
            if($_GET['modo'] == 'excluirNivel'){
                require_once("conexao.php");
                
                $conex = conexaoMysql();
                
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    
                    $sql = "delete from tblPermissoes where idPermissoes =".$id;
                    
                    if(mysqli_query($conex, $sql)){
                    //redireciona para a pagina index.
                    header('location:../BD/cadastroNivel.php');
                }
                }
            }
        }
        
    
    }
    


?>