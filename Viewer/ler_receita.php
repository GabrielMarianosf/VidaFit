<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog VidaFit - Home</title>
    <link  href = " //maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css " rel = " stylesheet " media = " all " >
    <link rel="stylesheet" href="css/hover.css"/>
    <link rel="stylesheet" href="css/demo-page.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1990 12:00:00 GMT" />
    <script rel="text/javascript" src="js/js.js"></script>
</head>
<body>
    <div class="boxmenu">
        <div class="img-logo"></div>
        <div class="menu">
        <a href="../index.php" class="hvr-bounce-to-right botao"><i class="fa fa-home hvr-icon"></i> Início</a>
            <a href="receitas.php" class="hvr-bounce-to-left botao"><i class="fa fa-tint hvr-icon"></i> Receitas</a>
            <a href="sobre.php" class="hvr-bounce-to-right botao"><i class="fa fa-paperclip hvr-icon"></i> Sobre</a>
            <a href="contato.php" class="hvr-bounce-to-left botao"><i class="fa fa-phone hvr-icon"></i> Contato</a>
        </div>
        <?php
    $_SESSION['Logado'] = null;
    $_SESSION['id'] = null;
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_cache_expire(60);
            session_start();
            //session_destroy();
          }
          
        if( isset($_SESSION['Logado'])  ){
            echo '
            <div class="user-logg"> 
            <a href="#" class="hvr-icon-forward botao">
            Editar Perfil
            <i class="fa fa-chevron-circle-right hvr-icon"></i>
            </a>
            <a href="sair.php" class="hvr-skew-forward botao">
            Sair/Deslogar
            </a>
            </div>';
        }else{
            echo '<div class="user-log">Já é cadastrado? <a id="login" class="hvr-radial-out botao">
            <i class="fa fa-arrow-circle-o-up hvr-icon"></i> Efetue Login</a> É novo por aqui? <a id="cadastro" class="hvr-shutter-out-vertical botao"><i class="fa fa-plus-circle hvr-icon"></i> Cadastre-se !</a></div>';
        }
    ?> 
    </div>
    <div id="modal" class="container-modal">
            <div class="modal-conteudo">
                <button class="fechar-modal">&KHcy;</button>
                <h1>Login</h1>
                <div class="modal-form">
                <form action="" method="POST">
                    <input class="input" type="text" placeholder="Digite seu E-mail" style="width: 300px;"/><br/><br/><br/>
                    <input class="input" type="password" placeholder="Digite sua Senha" style="width: 300px;"/><br/><br/><br/>
                    <input class="input" type="submit" value="Entrar" style="position: absolute; left: 35%; padding: 15px; cursor: pointer" />
                </form>
                </div>
            </div>
        </div>
        <div id="modal-cadastro" class="container-modal">
            <div class="modal-conteudo">
                <button class="fechar-modal">&KHcy;</button>
                <h1>Cadastre-se</h1>
                <div class="modal-form-cad">
                <form action="../Controller/proc_cadastro.php" method="POST">
                    <input class="input" type="text" id="nome" name="nome" style="width: 300px;" placeholder="Digite seu Nome" /><br/><br/>
                    <input class="input" type="text" id="sobrenome" name="sobrenome" style="width: 300px;" placeholder="Digite seu Sobrenome" /><br/><br/>
                    <input class="input" type="text" id="email" name="email" style="width: 300px;" placeholder="Digite seu E-mail" /><br/><br/>
                    <input class="input" type="password" id="senha" name="senha" style="width: 300px;" placeholder="Digite uma Senha" /><br/><br/>
                    <input class="input" type="password" id="senha2" style="width: 300px;" placeholder="Repita a Senha" />
                    <input class="input-green" type="submit" value="Cadastrar" style="position: absolute; top: 122%; left: 8%; padding: 15px; cursor: pointer" />
                    <input class="input-red" type="reset" value="Limpar" style="position: absolute; top: 122%; left: 60%; padding: 15px; cursor: pointer" />
                </form>
                </div>
            </div>
        </div>
    <script>
            const login = document.getElementById('login');
            login.addEventListener('click', () => iniciaModal('modal'))
            const cadastro = document.getElementById('cadastro');
            cadastro.addEventListener('click', () => iniciaModal('modal-cadastro'))
    </script>

        <div class="pesquisa-receitas"> 
            <form action="receitas_busca.php" method="POST">    
                Pesquise uma Receita:  <input type="text" id="busca" name="busca"  /> 
                <input type="submit" Value="Pesquisar" id="enviar" name="enviar" />
            </form>
        </div>
        <div class="conteudo-receitas">     

        <?php
        if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
        
        include_once("../Model/conexao.php");
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        
            $sql = "SELECT * FROM receitas where id= '$id'";
            $resultado = mysqli_query($conexao, $sql);
            while ($row = mysqli_fetch_assoc($resultado)) {
                echo "
                    <div class='result'>
                    <table border='0px' class='tableb'>
                        <tr>
                            <td class='table_titulo'> <p> ".$row['titulo']." </p> </td>
                        </tr>
                        <tr>
                            <td class='table_autor'><p>Autor: ".$row['autor']."</p></td>
                        </tr>
                        <tr>
                            
                            <td class='table_descricao'><p>".$row['descricao']."</p></td>
                            
                        </tr>
                        <tr>
                            <td class='link_receita'><a class='link_receita' style='position:relative; top:0%; left:20%' href='ler_receita.php?id=" . $row['id'] . "'>Ler Receita...</a></td>
                        </tr>
                    </table>
                    </div>
                    
                    ";
            }
            //<td><span class='glyphicon glyphicon-remove'></span><a class='btn btn-danger delete-object' href='deletar_banca.php?box=" . $row[''] . "'>Deletar</a></td>
?>
        </div>
    <div class="rodape">
        <div class="img-logo2"></div>
        <div class="txt-rodape"><p>&copy; VidaFit ltda. CNPJ: 12.345.678/0000-00 Av. Sandu Norte, 50, Brasilia-DF, 72727-722, vidafit@fit.com &nbsp; &phone; +55 61 1234-1234-<?php if(isset($_SESSION['id']) && $_SESSION['id']== 12) echo'<a href="cadreceitas.php" target="_blank">Área ADM  </a>';?></p></div>
        <div class="redes-sociais">
            <a href="https:www.facebook.com" target="_blank">
            <img src="../Viewer/img/icon-fb.png" width="40px" height="50px" alt="Facebook">
            </a>&nbsp;&nbsp;&nbsp;
            <a href="https:www.instagram.com" target="_blank">
                <img src="../Viewer/img/icon-insta.png" width="35px" height="50px" alt="instagram">
            </a>&nbsp;&nbsp;&nbsp;
            <a href="https:twitter.com" target="_blank">
                <img src="../Viewer/img/icon-twitter.png" width="35px" height="50px" alt="twitter">
            </a>
        </div>
    </div>
    
    

</body>
</html>