<?php 
    setlocale(LC_ALL, "pt-BR");
    require_once('funcoes/funcoes.php');
    require_once('BD/conexao.php');
    $conex = conexaoMysql();

?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title> padaria-loja </title>
        <link rel="shortcut icon" href="imagens/pao.png">
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/loja.css">
        
    </head>
       <body>
        <?php  echo(menu()); ?>
        
        <section>
            <div class="container">
                <div id="containerConteudo">
                   
                   <?php 
                    
                        $sql = "select tblloja.idLoja, tblloja.imgLoja, tblloja.nomeLoja, tblloja.nomeGerente, tblloja.rua, tblloja.bairro, tblloja.numero, tblloja.email, tblloja.linkGoogleMaps, tblEstados.nomeEstado, tblestados.sigla
                        from tblloja, tblEstados
                        where tblEstados.idEstados = tblloja.idEstados
                        order by idLoja desc";
                    
                        $selectLojas = mysqli_query($conex, $sql);
                        while($rsLojas = mysqli_fetch_assoc($selectLojas)){
                    ?>
                    <div class='containerCidade'>
                       <div class='titulo'><h2><?=$rsLojas['sigla'] ." - ". $rsLojas['nomeEstado']?></h2></div>
                       
                       <div class='infoCidade'>
                           <div class='imgLoja'>
                               <img src="BD/imgBanco/imgLoja/<?=$rsLojas['imgLoja']?>">
                           </div>
                           <div class='infoLoja'>
                               <div class='nome'><?=$rsLojas['nomeLoja']?></div>
                               <div class='gerente'><?=$rsLojas['nomeGerente']?></div>
                               <div class='rua'><?=$rsLojas['rua']?></div>
                               <div class='bairro'><?=$rsLojas['bairro']?></div>
                               <div class='numero'><?=$rsLojas['numero']?></div>
                               <div class='E_mail'><?=$rsLojas['email']?></div>
                           </div>
                           <div class='googleMaps'>
                               <iframe src='<?=$rsLojas['linkGoogleMaps']?>'></iframe>
                           </div>
                       </div>
                   </div>
                   <?php } ?>
                   
                </div>
            </div>
        </section>
        
        <?php echo(rodaPe()); ?>
    </body>
</html>