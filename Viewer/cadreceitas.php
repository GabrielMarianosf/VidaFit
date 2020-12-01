<?php
    session_start();
    if(isset($_SESSION['mensagem-rec'])){
        echo $_SESSION['mensagem-rec'];
        unset($_SESSION['mensagem-rec']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Cadastro de Receita</h1>
    <form action="../Controller/proc_cadreceita.php" method="POST">

    Titulo da  Noticia : <input type="text" name="titulo" id="titulo"/><br/><br/>
    Descrição da Noticia : 
    <textarea cols="50" rows="20" name="descricao" id="descricao"></textarea><br/>
    <input type="hidden" value="<?php echo $_SESSION['id']?>" name="autor" id="autor"/><br/>
    <input type="submit" name="submit" id="submit">

    </form><br/><br/>

    <a href="receitas.php">Voltar ao Inicio</a>
    </center>
</body>
</html>