<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog VidaFit - Home</title>
    <link  href = " //maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css " rel = " stylesheet " media = " all " >
    <link rel="stylesheet" href="Viewer/css/hover.css" />
    <link rel="stylesheet" href="Viewer/css/demo-page.css" />
    <link rel="stylesheet" type="text/css" href="Viewer/css/style.css">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1990 12:00:00 GMT" />
    <script rel="text/javascript" src="Viewer/js/js.js"></script>
</head>

<body>
    <div class="img-home"></div>
    <div class="txt-img">
        Seja bem-vindo
        ao blog VidaFit
    </div>  
    <div class="boxmenu">
    
    <div class="img-logo"></div>
    <div class="menu">
            <a href="index.php" class="hvr-bounce-to-right botao"><i class="fa fa-home hvr-icon"></i> Início</a>
            <a href="Viewer/receitas.php" class="hvr-bounce-to-left botao"><i class="fa fa-tint hvr-icon"></i> Receitas</a>
            <a href="Viewer/sobre.php" class="hvr-bounce-to-right botao"><i class="fa fa-paperclip hvr-icon"></i> Sobre</a>
            <a href="Viewer/contato.php" class="hvr-bounce-to-left botao"><i class="fa fa-phone hvr-icon"></i> Contato</a>
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

    <div class="conteudo">
        <h1>Receitas</h1>

        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean auctor nunc ex. Praesent sed viverra mauris. Nulla rutrum eu ipsum in condimentum. Donec fringilla aliquam fringilla. Nunc facilisis faucibus ligula, eget dapibus urna cursus in. Nulla facilisi. Vestibulum tristique rutrum interdum. Duis ut malesuada arcu. Aliquam ultricies sapien id odio cursus, nec tincidunt turpis pharetra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam non nulla at est feugiat hendrerit vitae at ipsum.

Nam maximus augue sit amet eros scelerisque, et consectetur nisi iaculis. Morbi sed nisi pretium, cursus erat sed, tincidunt tellus. Suspendisse consectetur faucibus interdum. Aenean ut purus a ligula commodo maximus ut non massa. Maecenas mattis purus neque, eu malesuada nunc feugiat vitae. Curabitur auctor, diam in rutrum venenatis, magna dui eleifend lacus, nec suscipit lectus nulla at nisi. Donec faucibus pellentesque fringilla. Donec cursus luctus bibendum. Nullam feugiat nisl nulla, ac efficitur libero pulvinar sed. Nulla id tristique dolor, sed gravida nunc. Suspendisse vestibulum, dui in elementum convallis, leo justo cursus nibh, vel accumsan nisl libero at massa. Integer vitae ornare elit. Vivamus a laoreet ipsum, at tempus lectus.

Proin ex neque, viverra id ullamcorper in, scelerisque at erat. Etiam eget finibus enim. Sed convallis magna eu nulla pharetra aliquam sit amet sed erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam blandit id purus quis mattis. Nullam eu imperdiet odio. Sed scelerisque ante eu quam porta eleifend. Morbi leo arcu, tempor sed est sit amet, ornare ornare eros. Suspendisse id metus ante. Sed vitae dui lobortis, dapibus libero at, tempor nulla. Sed in elit a augue auctor sollicitudin sed vel nibh. Suspendisse vitae lacus suscipit mi sodales consectetur.

Quisque porta tortor urna, at pretium elit maximus eu. Ut sagittis consectetur nisi, id accumsan ipsum volutpat et. Phasellus quis velit nisi. Morbi suscipit sapien velit, et aliquet nisi aliquet id. Etiam non nibh dictum, interdum velit in, dictum nunc. Sed sapien urna, ultricies et feugiat et, mattis eu risus. Quisque pulvinar risus quis nisi pretium luctus. Suspendisse non tortor ultrices, aliquam elit vel, accumsan ipsum. Aliquam suscipit quam a ante consequat laoreet. Mauris rhoncus bibendum consectetur. Cras vestibulum dui et lectus feugiat pharetra. In viverra libero in semper fringilla.

Donec turpis justo, vestibulum sit amet bibendum eu, iaculis sed mi. Nulla nec sollicitudin nulla. Suspendisse nec sem sit amet ante porttitor vehicula a vel sem. Praesent pellentesque molestie nunc, nec varius elit tempus vitae. Aenean tincidunt pharetra libero quis placerat. Sed dapibus est dignissim tellus pellentesque semper. Aliquam in velit id leo varius convallis. In hac habitasse platea dictumst. Nunc ut eros hendrerit, mollis lectus nec, lobortis augue. Vivamus fringilla enim a gravida sollicitudin. Nam at diam vitae dolor tempus varius. Integer ligula ipsum, commodo in purus eu, suscipit aliquet magna. Sed tristique velit sed mollis egestas. Praesent tincidunt sem malesuada pharetra euismod. Ut enim augue, fringilla vestibulum magna ac, pharetra euismod sem.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean auctor nunc ex. Praesent sed viverra mauris. Nulla rutrum eu ipsum in condimentum. Donec fringilla aliquam fringilla. Nunc facilisis faucibus ligula, eget dapibus urna cursus in. Nulla facilisi. Vestibulum tristique rutrum interdum. Duis ut malesuada arcu. Aliquam ultricies sapien id odio cursus, nec tincidunt turpis pharetra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam non nulla at est feugiat hendrerit vitae at ipsum.
    </div>

    <div class="rodape">
        <div class="img-logo2"></div>
        <div class="txt-rodape"><p>&copy; VidaFit ltda. CNPJ: 12.345.678/0000-00 Av. Sandu Norte, 50, Brasilia-DF, 72727-722, vidafit@fit.com &nbsp; &phone; +55 61 1234-1234   </p></div>
        <div class="redes-sociais">
            <a href="https:www.facebook.com" target="_blank">
            <img src="Viewer/img/icon-fb.png" width="40px" height="50px" alt="Facebook">
            </a>&nbsp;&nbsp;&nbsp;
            <a href="https:www.instagram.com" target="_blank">
                <img src="Viewer/img/icon-insta.png" width="35px" height="50px" alt="instagram">
            </a>&nbsp;&nbsp;&nbsp;
            <a href="https:twitter.com" target="_blank">
                <img src="Viewer/img/icon-twitter.png" width="35px" height="50px" alt="twitter">
            </a>
        </div>
    </div>
</body>

</html>