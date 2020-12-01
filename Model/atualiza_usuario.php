<?php
function atualizaUsuario($usuario){
    $conexao = mysqli_connect('localhost','root','','vidafit') or die ("Erro ao acessar o banco !");
    try {
        session_start();
        $id = $_SESSION['id'];
        $sql = "UPDATE usuario SET nome='$usuario->nome', sobrenome='$usuario->sobrenome', email='$usuario->email' where id='$id'";
        $resultado = mysqli_query($conexao, $sql) or die ("Erro no banco de dados !");
        if($resultado == true){
            mysqli_close($conexao);
            return true;
        }else {
            mysqli_close($conexao);
            return false;
        }
    } catch (Exception $e) {
        echo $e;
        header("Location: ../Viewer/Erro.php");
    }

}

?>