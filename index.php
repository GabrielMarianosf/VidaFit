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
            <a href="Viewer/editar_perfil.php" class="hvr-icon-forward botao">
            Editar Perfil
            <i class="fa fa-chevron-circle-right hvr-icon"></i>
            </a>
            <a href="Viewer/sair.php" class="hvr-skew-forward botao">
            Sair/Deslogar
            </a>
            </div>';
        }else{
            echo '<div class="user-log">Já é cadastrado? <a id="login" class="hvr-radial-out botao">
            <i class="fa fa-arrow-circle-o-up hvr-icon"></i> Efetue Login</a> É novo por aqui? <a id="cadastro" class="hvr-shutter-out-vertical botao"><i class="fa fa-plus-circle hvr-icon"></i> Cadastre-se !</a></div>';
        }
    ?> 
    
</div>
        <div id="modal-login" class="container-modal">
            <div class="modal-conteudo">
                <button class="fechar-modal">&KHcy;</button>
                <h1>Login</h1>
                <div class="modal-form">
                <form action="Controller/proc_login.php" method="POST">
                    <input class="input" id="email" name="email" type="email" placeholder="Digite seu E-mail" style="width: 300px;"/><br/><br/><br/>
                    <input class="input" id="senha" name="senha" type="password" placeholder="Digite sua Senha" style="width: 300px;"/><br/><br/><br/>
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
                <form action="Controller/proc_cadastro.php" method="POST">
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
            login.addEventListener('click', () => iniciaModal('modal-login'))
            const cadastro = document.getElementById('cadastro');
            cadastro.addEventListener('click', () => iniciaModal('modal-cadastro'))
        </script>

    <div class="conteudo">
        <h1>7 Motivos para Levar uma VidaFit</h1>
        <p>Existem algumas maneiras de facilitar o processo de levar uma vida com mais qualidade no geral, com o resultado de transformar não apenas o seu corpo, mas também a mente, e colher todos os benefícios que vem daí. E vamos te ajudar com algumas dicas para não abandonar essa resolução e terminar 2017 ainda melhor do que começou!</p>
        <p style="font-weight: bolder; font-size:30px">1. Tome a atitude de mudar</p>
        <p>Para começar, é preciso tomar a atitude de mudar seu estilo de vida e trabalhar sua determinação para não desistir no meio do caminho. Como dissemos, é muito comum que as pessoas percam o mesmo pique do começo do ano e em poucos meses acabem voltando a tudo que faziam antes. Por isso, é importante traçar um plano de como pretende agir para facilitar a adaptação.</p>
        <p style="font-weight: bolder; font-size:30px">2. Defina seus objetivos</p>
        <p>Uma das melhores formas de se manter dentro do plano estabelecido é através da definição de objetivos claros e acessíveis. Não adiantar apenas estipular algo vago como apenas “ser mais saudável” ou uma meta pouco possível como “perder 50 quilos em 2017”. Definições assim costumam somente aumentar as chances de frustração e desistência.

Então pare e pense bem no que deseja: perder 10 ou até 20 quilos em um ano é mais palpável, por exemplo, assim como diminuir medidas ou alcançar 10 quilômetros de corrida.</p>
        <p style="font-weight: bolder; font-size:30px">3. Cuide da alimentação</p>
        <p>De pouco adianta praticar exercícios sem fim se não prestar atenção também no que está comendo. Quem faz isso acaba vendo pouco ou nenhum resultado no corpo e também pode acabar desmotivado para a sequência do ano. Cada corpo é diferente, então conhecer o seu é fundamental para saber que tipos de alimento funcionam melhor ou não – ou precisam ser consumidos com muita moderação.

Existem diversos protocolos alimentares distintos que funcionam melhor para uns do que para outros, então aprenda e teste qual é melhor para você. Ah, e não deixe de consultar um nutricionista.</p>
        <p style="font-weight: bolder; font-size:30px">4. Deixe o estresse de lado</p>
        <p>A rotina de trabalho corrida que a maioria das pessoas vive hoje em dia costuma ser muito estressante. E o estresse é um grande inimigo da qualidade de vida: pode levar a hábitos alimentares ruins, sedentarismo e também a algumas doenças de fundo emocional. Ou seja, exatamente o oposto de tudo que você quer. Então é muito importante administrar melhor suas tarefas em casa e no escritório e tentar fazer de tudo para não se deixar dominar pelo estresse. Começar a caminhar, meditar ou a praticar yoga, por exemplo, é uma excelente solução para quem tem dificuldade em se manter calmo e zen ao longo do dia.</p>
        <p style="font-weight: bolder; font-size:30px">5. Descubra o seu esporte</p>
        <p>Nem todo mundo tem os mesmos gostos e vê o corpo reagir da mesma forma. Então de nada adianta seguir o amigo que é fã de musculação se você não tem a mesma paixão pelo assunto e não suporta frequentar uma academia.

Sua melhor opção pode ser a corrida, a natação, o ciclismo, uma arte marcial… não faltam opções de atividades físicas disponíveis para todas as tribos.

Se você ainda não tem uma ideia exata do que prefere, também pode ir testando algumas até achar a sua favorita.</p>
        <p style="font-weight: bolder; font-size:30px">6. Mantenha-se motivado</p>
        <p>Manter uma rotina de restrição a inúmeras tentações e coisas de que gostamos é sempre difícil. Por isso muita gente perde a motivação ao longo do ano e retorna aos velhos hábitos. Mas, há formas acessíveis de manter-se motivado, como contar com amigos que tenham os mesmos objetivos ou procurar grupos de afinidade pela internet. A melhor delas é ver evolução no que está fazendo.</p>
        <p style="font-weight: bolder; font-size:30px">7. Acompanhe sua evolução</p>
        <p>Com o avanço tecnológico, existem sites, aplicativos e dispositivos (como uma Smartband, por exemplo) que o ajudam a manter controle dos seus resultados e outros dados. E ao ter real noção do progresso que está tendo, fica muito mais fácil de seguir animado com a sua vida saudável. Com uma pulseira inteligente – como a Smartband TCD1 da On Me – você pode acompanhar todo o seu desempenho através de informações como calorias perdidas, quilômetros percorridos e passos dados. Ela também te ajuda a analisar a qualidade do sono e também a se organizar melhor no trabalho, dois fatores importantes para quem quer melhorar a vida e ser mais saudável.</p>
        <p></p>
        <p></p>


    </div>

    <div class="rodape" style="top:280%; ">
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