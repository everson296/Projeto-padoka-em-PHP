<?php 
//echo('teste');
if(isset($_GET['verificar'])){
    
if($_FILES['fleImg']['size'] > 0 && $_FILES['fleImg']['type'] != ""){
    
    $imgSize = round($_FILES['fleImg']['size']/1024);
    
    $validacaoArquivo = array("image/jpeg", "image/jpg", "image/png", "image/gif");
    
    $imgType = $_FILES['fleImg']['type'];
    
    if(in_array($imgType, $validacaoArquivo)){
        
        if($imgSize <= 2000){
            
            $nameImg = pathinfo($_FILES['fleImg']['name'], PATHINFO_FILENAME);
            
            $extensaoImg = pathinfo($_FILES['fleImg']['name'], PATHINFO_EXTENSION);
            
            $nameImgCrypty = md5($nameImg . uniqid(time())); 
            
            $img = $nameImgCrypty . "." . $extensaoImg;  
                                 
            $arquivoTemporario = $_FILES['fleImg']['tmp_name'];
                 
            if($_GET['verificar'] == 'imgLoja'){
            
                $pastaImgs = "imgBanco/imgLoja/";
                
                if(move_uploaded_file($arquivoTemporario, $pastaImgs.$img)){
                    session_start();

                    $_SESSION['nameImg'] = $img;

                    echo("<img src='imgBanco/imgLoja/".$img."'>");
                }else{
                    // if numero 4
                    echo('Erro ao mover o arquivo para o servidor');
                } 
            }
            
            if($_GET['verificar'] == 'imgEmpresa'){
                
                $pastaImgs = "imgBanco/imgEmpresa/";
                
                if(move_uploaded_file($arquivoTemporario, $pastaImgs.$img)){
                    session_start();

                    $_SESSION['nameImg'] = $img;

                    echo("<img src='imgBanco/imgEmpresa/".$img."'>");
                }else{
                    // if numero 4
                    echo('Erro ao mover a imagem para o servidor');
                } 
                
            }
            
            if($_GET['verificar'] == 'imgCuriosidade'){
                
                $pastaImgs = "imgBanco/imgCuriosidade";
                
                if(move_uploaded_file($arquivoTemporario, $pastaImgs.$img)){
                    session_start();

                    $_SESSION['nameImg'] = $img;

                    echo("<img src='imgBanco/imgEmpresa/".$img."'>");
                }else{
                    // if numero 4
                    echo('Erro ao mover a imagem para o servidor');
                } 
                
            }
        }else{
            // if numero 3
            echo('tamanho da imagem maior que 2MB. Não é permitido');
        }
    
    }else{
        // if numero 2
        echo('Extensão do arquivo não é permitodo no servidor');
    }

}else{
    // if numero 1
    echo('A imagem da loja não está no formato requisitado');
}
}else{
    echo('não existe');
}

?>