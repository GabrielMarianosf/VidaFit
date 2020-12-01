<?php

    $arquivo = '../Model/conexao.php';
    if(file_exists($arquivo)){
        require_once('../Model/conexao.php');

    }else{
        echo "<script>alert('Arquivo não encontrado !')</script>";
    }
    
    
?>

<?php

    function cadastraUsuario($usuario){
        $conexao = mysqli_connect('localhost','root','','vidafit') or die ("Erro ao acessar o banco !");
        try {
            $sql = "insert into usuario (id,nome,sobrenome,email,senha) values (null,'$usuario->nome','$usuario->sobrenome','$usuario->email',md5('$usuario->senha'))";
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