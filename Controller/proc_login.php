<?php require_once('../Model/classLogin.php')?>
<?php require_once('../Model/classUsuario.php')?>
<?php require_once('../Model/validaLogin.php')?>
<?php

    $login = new Login();
    $user = new Usuario();

    $login->email = $_POST['email'];
    $login->senha = $_POST['senha'];

    $res = validaLogin($login);
    $g = mysqli_fetch_array($res);

    if(mysqli_num_rows($res) > 0) {

        session_start();

        $user->id = $g['id'];
        $user->nome = $g['nome'];
        $user->sobrenome = $g['sobrenome'];
        $user->email = $g['email'];

        $_SESSION['id'] = $user->id;
        $_SESSION['Logado'] = true;

        header("Location: ../index.php");
    }else {
        header("Location: ../Viewer/Erro.php");
    }
    



?>