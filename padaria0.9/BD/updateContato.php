<?php

require_once('../funcoes/funcoes.php');

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
    
    if($_GET['modo'] == 'editarLoja'){
        require_once("conexao.php");
        $conex = conexaoMysql(); 
            
        if(isset($_POST['btnCadastro'])){
            $id = $_GET['id'];

            $nomeLoja = $_POST['txtNomeLoja'];
            $idEstado = $_POST['sltEstados']; 
            $nomeGerente = $_POST['txtNomeGerente']; 
            $rua = $_POST['txtRua'];
            $bairro = $_POST['txtBairro'];
            $numero = $_POST['txtNumero'];
            $email = $_POST['txtEmail'];
            $google =$_POST['txtLink']; 
            
            session_start();
            $img = $_SESSION['nameImg'];

                $sql = "update tblloja set
                
                    idEstados = ".$idEstado.",
                    imgLoja = '".$img."', 
                    nomeLoja = '".$nomeLoja."', 
                    nomeGerente = '".$nomeGerente."', 
                    rua = '".$rua."', 
                    bairro = '".$bairro."', 
                    numero = '".$numero."', 
                    email = '".$email."', 
                    linkGoogleMaps = '".$google."'
                    where idLoja = " . $id;

                

                if(mysqli_query($conex, $sql)){
                    echo("<script> 
                        alert('registro atualizado com sucesso');
                        location.href = 'loja.php';
                    </script>");
                }else {
                    echo("<script> 
                            alert('Erro')
                            location.href = 'loja.php';
                            window.history.back();
                        </script>");
                }
            }
        }
    
    if($_GET['modo'] == 'editarCuriosidade'){
        require_once("conexao.php");
        $conex = conexaoMysql(); 
            
        if(isset($_POST['btnCadastro'])){
            $id = $_GET['id'];

            $titulo = $_POST['txtTitulo'];
            $dataAmerica = $_POST['txtData'];
            $data = dataAmericana($dataAmerica);
            $escritor = $_POST['txtEscritor'];
            $texto = $_POST['textTexto'];

            
            session_start();
            $img = $_SESSION['nameImg'];

                $sql = "update tblCuriosidadeCard set
                
                    img = '".$img."',
                    titulo = '".$titulo."',
                    dataPublicacao = '".$data."', 
                    nomeEscritor = '".$escritor."', 
                    texto = '".$texto."' 
                    where idCuriosidadeCard =". $id;

                

                if(mysqli_query($conex, $sql)){
                    echo("<script> 
                        alert('registro atualizado com sucesso');
                        location.href = 'curiosidade.php';
                    </script>");
                }else {
                    echo("<script> 
                            alert('Erro')
                            location.href = 'curiosidade.php';
                            window.history.back();
                        </script>"
                    );                    
                }
            }
        }
    
    if($_GET['modo'] == 'ativarDesativar'){
        require_once("conexao.php");
        $conex = conexaoMysql(); 
        $id = $_GET['id'];
        $tbl = $_GET['tbl'];
        $diretorio = $_GET['diretorio'];
        
        $sqlCHK = "select tbl".$tbl.".ativacao from tbl".$tbl." where id".$tbl." =". $id;
        $selectCHK = mysqli_query($conex, $sqlCHK);
        $rsCHK = mysqli_fetch_assoc($selectCHK);
        
        $ativacao = $rsCHK['ativacao'];
                
        if($ativacao == 1){
            $ativo = 0;
        }else{
            $ativo = 1;
        }

        $sql = "update tbl".$tbl." set ativacao = ".$ativo." where id".$tbl."=". $id;
        
        if(mysqli_query($conex, $sql)){
            echo("<script> 
                alert('registro atualizado com sucesso');
                location.href = '".$diretorio.".php';
            </script>");
        }else{
            echo("<script> 
                alert('Erro')
                location.href = '".$diretorio.".php';
                window.history.back();
                </script>"
            );                    
        }
    }    
    
    if($_GET['modo'] == 'editarUsuario'){
        require_once("conexao.php");
        $conex = conexaoMysql(); 
            
        if(isset($_POST['btnCadastrarUsuario'])){
            $id = $_GET['id'];
            
            $nome = $_POST['txtNome'];
            $senha = $_POST['txtSenha'];
            $email = $_POST['txtEmail'];
            $nivel = $_POST['sltNivel'];
            
            if(empty($senha)){
                 echo("<script>  alert('senha vazia');  window.history.back(); </script>");                
            }else{
                
            $senhaMD5 = md5($_POST['txtSenha']);
            $sql = "update tblusuario set
                
                nomeUsuario = '".$nome."',
                senha = '".$senhaMD5."', 
                email = '".$email."',
                idNivel = ".$nivel."
                where idUsuario=".$id;
                
            if(mysqli_query($conex, $sql)){
                echo("<script> 
                    alert('registro atualizado com sucesso');
                    location.href = '../inicio.php';
                </script>");
            }else {
                echo("<script> 
                        alert('Erro')
                        location.href = 'ADMusuario.php';
                        window.history.back();
                    </script>"
                );                    
            }
            }
        }
    }
    
    if($_GET['modo'] == 'editarNivel'){
        require_once("conexao.php");
        $conex = conexaoMysql(); 
        $id = $_GET['id'];
        
        $nomeNivel = $_POST['txtNome'];
        $ADMusuario = (isset($_POST['ckbADMusuario'])) ? 1 : 0;
        $ADMfaleConosco = (isset($_POST['ckbADMfaleConosco'])) ? 1 : 0;
        $ADMprodutos = (isset($_POST['ckbADMprodutos'])) ? 1 : 0;
        $ADMconteudo = (isset($_POST['ckbADMconteudo'])) ? 1 : 0;
        
        $sql = "select tblLoja.ativacao from tblLoja where idLoja =". $id;

        $sql = "update tblnivel set 
            nivel = '".$nomeNivel."',
            ADMusuario = '".$ADMusuario."', 
            ADMfaleConosco = '".$ADMfaleConosco."', 
            ADMprodutos = '".$ADMprodutos."', 
            ADMconteudo = '".$ADMconteudo."' 
            where idNivel =".$id;
        
        if(mysqli_query($conex, $sql)){
            echo("<script> 
                alert('registro atualizado com sucesso');
                location.href = 'ADMusuario.php';
            </script>");
        }else{
            echo("<script> 
                alert('Erro')
                location.href = 'ADMusuario.php';
                window.history.back();
                </script>"
            );                    
        }
    } 
    
    if($_GET['modo'] == 'editarContato'){
        require_once("conexao.php");
        $conex = conexaoMysql(); 
            
        if(isset($_POST['btnEnviar'])){
            $id = $_GET['id'];

            $nome = $_POST['txtnome'];
            $telefone = $_POST['txttelefone'];
            $celular = $_POST['txtcelular'];
            $email = $_POST['txtemail'];
            $homePage = $_POST['txthomepage'];
            $facebook = $_POST['txtfaceboock'];
            $profissao = $_POST['txtprofissao'];
            $sexo = $_POST['rdoSexo'];
            $idsugestaocritica = $_POST['sltOpcao'];
            $obs = $_POST['txtobs'];

                $sql = "update tblContatos set
                
                    nome = '".$nome."',
                    telefone = '".$telefone."', 
                    celular = '".$celular."', 
                    email = '".$email."',
                    homePage = '".$homePage."',
                    facebook = '".$facebook."',
                    idSugestaoCritica = ".$idsugestaocritica.", 
                    profissao = '".$profissao."', 
                    sexo = '".$sexo."',
                    obs = '".$obs."'
                    
                    where idContatos =". $id;

                

                if(mysqli_query($conex, $sql)){
                    echo("<script> 
                        alert('registro atualizado com sucesso');
                        location.href = 'ADMfaleConosco.php';
                    </script>");
                }else {
                   echo($sql);               
                }
            }
        }
    
    
}
?>