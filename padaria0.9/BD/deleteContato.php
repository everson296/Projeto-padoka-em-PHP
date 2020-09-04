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
    
    if($_GET['modo'] == 'excluirCuriosidade'){
        require_once('conexao.php');
        $conex = conexaoMysql();
        
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            
            $sql = "delete from tblCuriosidadeCard where idCuriosidadeCard =".$id;
            
            if(mysqli_query($conex, $sql)){
                    //redireciona para a pagina index.
                    header('location:../BD/curiosidade.php');
            }
        }
    }
    
    if($_GET['modo'] == 'excluirUsuario'){
        require_once('conexao.php');
        $conex = conexaoMysql();
        
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            
            $sql = "delete from tblusuario where idUsuario =".$id;
            
            if(mysqli_query($conex, $sql)){
                    //redireciona para a pagina index.
                    header('location:../BD/ADMusuario.php');
            }
        }
    }
    
    if($_GET['modo'] == 'excluirNivel'){
        require_once('conexao.php');
        $conex = conexaoMysql();
        
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            
            $sql = "delete tblusuario.*, tblnivel.* 
                    from tblusuario, tblnivel 
                    where tblusuario.idNivel = tblnivel.idNivel 
                    and tblnivel.idNivel = ".$id;
            
            
            
            if(mysqli_query($conex, $sql)){
                    //redireciona para a pagina index.
                    header('location:../BD/ADMusuario.php');
            }else{
                echo('erro');
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