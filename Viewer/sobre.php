<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog VidaFit - Home</title>
    <link  href = " //maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css " rel = " stylesheet " media = " all " >
    <link rel="stylesheet" href="css/hover.css" />
    <link rel="stylesheet" href="css/demo-page.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Frijole&display=swap" rel="stylesheet">
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
    <h1 style="font-family: 'Courgette', cursive">Referência do Blog</h1>
    <div class="img-sobre">
        <img alt="Fernanda Scheer" src="img/fernanda.jpg" class="img"/>
    </div>
    <div class="txt-sobre" style="position: absolute; top:16%; left: 39.5%">
        <h1 style="font-family: 'Frijole', cursive; font-size: 40px">Fernanda Scheer,</h1>
    </div>
    <div class="txt-sobre">
    Sou nutricionista apaixonada por uma alimentação saudável com leveza e sem radicalismos.
E é essa visão que eu tento sempre trazer para o meu trabalho.

Sou pós graduada “Nutrição Clínica Funcional”, e “Prevenção de doenças ligadas ao envelhecimento”, além de ter formação em Health Coach pelo IIN (NY) e em culinária vegetariana pelo “Natural Gourmet Institute”.
Também sou Thetahealear certificada pelo Think (Thetahealing Institute of Knowledge), o que permite uma visão mais ampla sobre crenças limitantes que podem ser bloqueadoras no processo de busca por saúde.

Atuo há mais de 15 anos com atendimento em consultório, com foco no tratamento de doenças e desequilíbrio, melhora da vitalidade, desintoxicação e emagrecimento.

Nos últimos anos tenho participado também como palestrante nesses assuntos em diversos congressos e eventos.
O meu objetivo é auxiliar quem me procura a encontrar o seu caminho único de evolução, que não só traga resultados, como também permita trazer alegria em comer bem.
Acredito que o segredo para uma vida plena é se apaixonar pela alimentação e estilo de vida saudável, assim esse processo se torna natural e espontâneo, sem a necessidade de fazer dietas.

Meu objetivo é guiar esse lindo processo, trazendo mais consciência e conhecimento para quem me procura.
    </div>
    <div class="txt-sobre-2">
    Sou nutricionista apaixonada por uma alimentação saudável com leveza e sem radicalismos.
E é essa visão que eu tento sempre trazer para o meu trabalho.

Sou pós graduada “Nutrição Clínica Funcional”, e “Prevenção de doenças ligadas ao envelhecimento”, além de ter formação em Health Coach pelo IIN (NY) e em culinária vegetariana pelo “Natural Gourmet Institute”.
Também sou Thetahealear certificada pelo Think (Thetahealing Institute of Knowledge), o que permite uma visão mais ampla sobre crenças limitantes que podem ser bloqueadoras no processo de busca por saúde.

Atuo há mais de 15 anos com atendimento em consultório, com foco no tratamento de doenças e desequilíbrio, melhora da vitalidade, desintoxicação e emagrecimento.

Nos últimos anos tenho participado também como palestrante nesses assuntos em diversos congressos e eventos.
O meu objetivo é auxiliar quem me procura a encontrar o seu caminho único de evolução, que não só traga resultados, como também permita trazer alegria em comer bem.
Acredito que o segredo para uma vida plena é se apaixonar pela alimentação e estilo de vida saudável, assim esse processo se torna natural e espontâneo, sem a necessidade de fazer dietas.

Meu objetivo é guiar esse lindo processo, trazendo mais consciência e conhecimento para quem me procura.
    </div>
    <div class="img-2"></div>
    <div class="txt-sobre-2" style="top:88%">
        <h1 style="position: absolute; top: 80%; left: 0%">Formações</h1>
    </div>
    
    <div class="txt-sobre-2" style="top: 135%; left:5%">
        <ul>
            <li>Formada em Nutrição pela UNIVALI;</li>
            <li>Pós-graduação em Nutrição Clínica Funcional pela VP consultoria nutricional;</li>
            <li>Especialista em Personal Diet pela NTR Cursos;</li>
            <li>“Health Coach” formada pelo IIN- Institute for Integrative Nutrition/ NY- EUA;</li>
            <li>Membro do Instituto Brasileiro de Nutrição Funcional;</li>
            <li>Pós graduação em Nutriendocrinologia e prevenção das doenças do envelhecimento pela Faculdade Uningá – Instituto Lair Ribeiro.</li>
            <li>Thetahealear certificada pelo Think (Thetahealing Institute of Knowledge)</li>
            <li>Formação em culinária vegetariana pelo Natural Gourmet Institute- EUA</li>
            
        </ul>
    </div>
    

    </div>
</body>

</html>