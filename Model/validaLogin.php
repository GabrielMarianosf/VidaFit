<?php
        
       function validaLogin($login) {
        
        include_once("conexao.php");
        
        try {
            $sql = "select id,nome,sobrenome,email from usuario where email = '$login->email' AND senha = md5('$login->senha')";
            $resultado = mysqli_query($conexao, $sql) or die ("Erro no consulta !");
            $total = mysqli_num_rows($resultado);
            if($total > 0){ 
                mysqli_close($conexao);
                return $resultado;
            }else {
                mysqli_close($conexao);
                return 0;
            }
        } catch (Exception $e) {
            echo $e;
            header("Location: ../Viewer/Erro.php");
        }
    }    
        

?>