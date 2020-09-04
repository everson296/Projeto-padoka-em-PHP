<?php 

function conexaoMysql ()
{
    $server = 'localhost';
    $user = 'root';
    $password = 'bcd127';
    $database = 'dbContatosProjeto3';
    
    /* Realiza a conexão com o Banco de Dados Mysql */
    $conexao = mysqli_connect($server, $user, $password, $database);

    return $conexao;
}

?>