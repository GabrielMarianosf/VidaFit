<?php
    require_once("../Model/classUsuario.php");
    require_once("../Model/atualiza_usuario.php");
?>
<?php

    $usuario = new Usuario();
    
    $usuario->nome = $_POST["nome"];
    $usuario->sobrenome = $_POST["sobrenome"];
    $usuario->email = $_POST["email"];

    $res = atualizaUsuario($usuario);

    if($res == true){
        session_start();
        $_SESSION['msg'] = "<script>alert('Perfil Atualizado com Sucesso !');</script>";
        header("Location: ../Viewer/editar_perfil.php");
    }else{
        header("Location: ../Viewer/Erro.php");
    }

?>