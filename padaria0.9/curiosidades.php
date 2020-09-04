<?php 
    setlocale(LC_ALL, "pt-BR");
    require_once('funcoes/funcoes.php');
    require_once('BD/conexao.php');
    $conex = conexaoMysql();

    $sql = "select *from tblCuriosidadeCard";
    $selectCuriosidadesCard = mysqli_query($conex, $sql);
    $rsCuriosidade = mysqli_fetch_assoc($selectCuriosidadesCard);

    $dataAmericana = $rsCuriosidade['dataPublicacao'];
    $data = dataBrasil($dataAmericana);
    
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title> padaria- curiosidades </title>
        <link rel="shortcut icon" href="imagens/pao.png">
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/curiosidade.css">
        
        <script src="javascript/jquery.js"></script>
        
        <script>
            $(document).ready(function(){
                $('#containerMenuMobile').click(function(){
                    $('#menuMobile').fadeToggle(1000);
                });

                $('.itensMenuMobile').click(function(){
                    $('#iconeMenu').fadeToggle();
                });
            });
        </script>
    </head>
    <body>
      
        <?php  echo(menu()); ?>

        <section>
           <div class="container">
               <div id="containerAssuntosAntigos">
                   <div id="containerAssuntos">
                        <?php
                        
                            $sql = "select *from tblCuriosidadeCard 
                                    where tblCuriosidadeCard.ativacao <> 0
                                    order by idCuriosidadeCard desc";
                            $selectCuriosidadesCard = mysqli_query($conex, $sql);
                            while($rsCuriosidade = mysqli_fetch_assoc($selectCuriosidadesCard)){                       
                        ?>
                        <div class='assunto'>
                           <div class='imagemAssunto'>
                               <figure>
                                   <img src="BD/imgBanco/imgCuriosidade/<?=$rsCuriosidade['img']?>" alt="">
                               </figure>
                               <div class='tituloAssunto'>
                                   <h2><?=$rsCuriosidade['titulo']?></h2>
                               </div>
                           </div>
                           <div class='textoAssunto'>
                               <div class='containerCreditos'>
                                   <div class='data_nome'><h2><?=$data?></h2></div>
                                   <div class='data_nome'><h2><?=$rsCuriosidade['nomeEscritor']?></h2></div>
                               </div>
                               <div class='texto'>
                                   <h2> <?=$rsCuriosidade['texto']?></h2>
                               </div>
                                <div class='redesSociais'>
                                   <a href='https://www.facebook.com/' target='_blank' title='ir para o facebook'>
                                       <div class='redes RDfacebook'></div>
                                   </a>
                                   <a href='https://twitter.com/login?lang=pt' target='_blank' title='ir para o twitter'>
                                       <div class='redes RDtwitter'></div>
                                   </a>
                                   <a href='https://web.whatsapp.com/' target='_blank' title='ir para o whatsapp'>
                                       <div class='redes RDwhatzapp'></div>
                                   </a>
                                   <a href='https://br.pinterest.com/' target='_blank' title='ir para o pinterest'>
                                       <div class='redes RDpinterest'></div>
                                   </a>
                                   <a href='https://www.youtube.com/' target='_blank' title='ir para o youtube'>
                                       <div class='redes RDyoutube'></div>
                                   </a>
                                   <a href='https://www.instagram.com/?hl=pt-br' target='_blank' title='ir para o instagram'>
                                       <div class='redes RDinstagram'></div>
                                   </a>
                                </div>
                           </div>
                       </div>
                       <?php } ?>
                       
                   </div>                         
                   
                   
                   <div id="containerMaisVistos">
                           <div id="DestaqueMaisVistos">
                               <div id="numeracao">1</div>
                               <div id="tituloDestaqueMaisVisto">
                                   pão faz bem ?
                               </div>
                           </div>
                           
                           <?php echo(listacuriosidade(2, 'como funciona a ...')); ?>
                           <?php echo(listacuriosidade(3, 'pão ja foi usado ...')); ?>
                           <?php echo(listacuriosidade(4, 'quem mais conso ...')); ?>
                           
                           
                           
                   </div>
               </div>
           </div>
       </section>
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
        <?php echo(rodaPe()); ?>
    </body>
</html>