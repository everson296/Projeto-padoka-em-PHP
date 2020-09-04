<?php 
    
if(isset($_GET['modo'])){
    if($_GET['modo'] == 'excluirContato'){
        require_once('conexao.php');
        $conex = conexaoMysql();
        
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            
            $sql = "delete from tblContatos where idContatos =".$id;
            
             if(mysqli_query($conex, $sql)){
                    //redireciona para a pagina index.
                    header('location:../BD/ADMfaleConosco.php');
            }
        } 
    }
    
    if($_GET['modo'] == 'excluirLoja'){
        require_once('conexao.php');
        $conex = conexaoMysql();
        
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            
            $sql = "delete from tblLoja where idLoja =".$id;
            
            if(mysqli_query($conex, $sql)){
                    //redireciona para a pagina index.
                    header('location:../BD/loja.php');
            }
        }
    }
    
    
    else{
        echo('conteudo de modo inesistente');
    }
}else{
    echo('variavel modo não encontrada');
}

?>