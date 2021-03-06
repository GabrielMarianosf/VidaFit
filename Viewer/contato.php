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
    
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_cache_expire(60);
            session_start();
            //session_destroy();
          }
          
        if( isset($_SESSION['Logado'])  ){
            echo '
            <div class="user-logg"> 
            <a href="editar_perfil.php" class="hvr-icon-forward botao">
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
    <div class="conteudo" style="top:20%">
    
    <div class="form-contato">
    <h1 style="text-align:justify; font-size:50px; text-decoration: underline; letter-spacing: 5px; position:absolute; left:-10% ">Envie uma Mensagem</h1>
    <p style=" position:relative; top: 10%; left: -%; padding-top: 70px; padding-bottom: 100px;letter-spacing: 5px; font-weight:bold">Tel: (61) 1234-5678 | vidafit@fit.com</p>
    <form action="../Controller/enviaContato.php" method="POST">
        <table style="position:absolute; left:-5%">
        <tr>
                <td>
                    <input type="text" class="input-cont" name="nome" id="nome" style="margin-bottom: 60px" placeholder="Nome"/>
                </td>
                <td>
                    <input type="text" class="input-cont" id="sobrenome" name="sobrenome" style="margin-bottom: 60px; margin-left:50px" placeholder="Sobrenome"/>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="email" class="input-cont" id="email" name="email" style="margin-bottom: 60px" placeholder="Email"/>
                </td>
                <td>
                    <input type="number" class="input-cont" id="telefone" name="telefone"  style="margin-bottom: 60px;margin-left:50px"placeholder="Telefone"/>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <textarea id="mensagem" name="mensagem" class="input-cont" cols="49" rows="8" placeholder="Escreva uma mensagem"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" class="input-green" style="cursor:pointer;margin-top:50px;margin-bottom: 60px;margin-left:50px" name="enviar" value="Enviar Mensagem"/>
                </td>
                <td>
                    <input type="reset" class="input-red" style="cursor:pointer;margin-top:50px;margin-bottom: 60px;margin-left:50px" name="enviar" value="Limpar Campos"/>
                </td>
            </tr>
            
            </table>
           
    </form>
    </div>
    </div>
</body>
</html>