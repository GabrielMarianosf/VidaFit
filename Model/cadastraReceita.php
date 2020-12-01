<?php

    $arquivo = '../Model/conexao.php';
    if(file_exists($arquivo)){
        require_once('../Model/conexao.php');

    }else{
        echo "<script>alert('Arquivo não encontrado !')</script>";
    }
    
    
?>

<?php

    function cadastraReceita($receita){
        $conexao = mysqli_connect('localhost','root','','vidafit') or die ("Erro ao acessar o banco !");
        
        try {
            $sql = "select nome from usuario where id=$receita->autor";
            $resultado = mysqli_query($conexao, $sql) or die ("Erro no consulta !");   
            if(!empty($resultado)){
                    while ($row = mysqli_fetch_assoc($resultado)) {
                    $receita->autor = $row['nome'];
                    }
            }
            $sql = "insert into receitas (id,titulo,descricao,autor) values (null,'$receita->titulo','$receita->descricao','$receita->autor')";
            $resultado = mysqli_query($conexao, $sql) or die ("Erro ao inserir uma receita !");
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