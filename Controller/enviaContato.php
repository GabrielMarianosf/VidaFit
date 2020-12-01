<?php
    require_once('../Model/sendEmail.php');
    require_once('../Model/classContato.php');


    try {

    $contato = new Contato();
    $contato->nome = $_POST["nome"];
    $contato->sobrenome = $_POST["sobrenome"];
    $contato->email = $_POST["email"];
    $contato->telefone = $_POST["telefone"];
    $contato->mensagem = $_POST["mensagem"];

    $res = enviaContato($contato);
    echo $res;

    if($res == true){
    header("Location: ../Viewer/contato.php");
    }else {
        echo "<script>alert('Erro ao enviar e-mail .$res.')</script>";
        header("Location: ../index.php");
    }
    } catch (Exception $e) {
       echo $e;
    }
?>