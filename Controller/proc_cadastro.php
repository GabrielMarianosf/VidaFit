<?php
    require_once("../Model/classUsuario.php");
    require_once("../Model/cadastraUsuario.php");
?>
<?php

    $usuario = new Usuario();
    
    $usuario->nome = $_POST["nome"];
    $usuario->sobrenome = $_POST["sobrenome"];
    $usuario->email = $_POST["email"];
    $usuario->senha = $_POST["senha"];

    $res = cadastraUsuario($usuario);

    if($res == true){
        header("Location: ../index.php");
    }else{
        header("Location: ../Viewer/Erro.php");
    }
    


?>