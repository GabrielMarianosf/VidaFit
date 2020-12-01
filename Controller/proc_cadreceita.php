<?php
    require_once("../Model/classReceita.php");
    require_once("../Model/cadastraReceita.php");
?>
<?php

    $receita = new Receita();
    
    $receita->titulo = $_POST["titulo"];
    $receita->descricao = $_POST["descricao"];
    $receita->autor = $_POST["autor"];

    $res = cadastraReceita($receita);

    if($res == true){
        session_start();
        $_SESSION['mensagem-rec'] = "<script>alert('Receita cadastrada com Sucesso !')</script>";
        header("Location: ../Viewer/cadreceitas.php");
    }else{
        header("Location: ../Viewer/Erro.php");
    }
    


?>