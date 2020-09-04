<?php
if(!$_SESSION['usuario']){
    header('location: ../inicio.php');
    exit();
}

require_once('../BD/conexao.php');
$conex = conexaoMysql();

$usuario = $_SESSION['usuario'];
$nivel = $_SESSION['nivel'];

$sql = "select tblusuario.*, tblnivel.* 
    from tblusuario, tblnivel
    where tblnivel.idNivel = tblusuario.idNivel
    and nomeUsuario = '".$usuario."' and nivel = '".$nivel."'";

$selectAtivacao = mysqli_query($conex, $sql);
$rsAtivacao = mysqli_fetch_assoc($selectAtivacao);    

$ADMconteudo = $rsAtivacao['ADMconteudo'];
$ADMfaleConosco = $rsAtivacao['ADMfaleConosco'];
$ADMprodutos = $rsAtivacao['ADMprodutos'];
$ADMusuario = $rsAtivacao['ADMusuario'];

if($ADMconteudo == 1){
    $conteudo = "enable";
}else{
    $conteudo = "disabled";
}

if($ADMfaleConosco == 1){
    $faleConosco = "enable";
}else{
    $faleConosco = "disabled";
}

if($ADMusuario == 1){
    $usuarios = "enable";
}else{
    $usuarios = "disabled";
}

?>