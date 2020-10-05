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
        session_start();
        if(isset($_SESSION['logado'])){
            echo '<div class="user-log"> <button href="" class="hvr-rectangle-out botao">Editar Perfil</button></div>';
        }else{
            echo '<div class="user-log">Já é cadastrado? <a id="login" class="hvr-radial-out botao">
            Efetue Login</a> É novo por aqui? <a href="" class="hvr-shutter-out-vertical botao">Cadastre-se !</a></div>';
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
    <script>
            const login = document.getElementById('login');
            login.addEventListener('click', () => iniciaModal('modal'))
        </script>

    <br><br><br><br><br><br><br><br><br><h1>Receitas</h1>

</body>
</html>