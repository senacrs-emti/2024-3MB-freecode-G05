<?php
include_once 'bd/db.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dados['nome_usuario'])) {
       
        $query_usuario = "SELECT id, nome_usuario, email, senha 
                        FROM usuarios 
                        WHERE nome_usuario =:nome_usuario  
                        AND senha =:senha
                        LIMIT 1";
        $result_usuario = $conn->prepare($query_usuario);
        $result_usuario->bindParam(':nome_usuario', $dados['nome_usuario'], PDO::PARAM_STR);
        $result_usuario->bindParam(':senha', md5($dados['senha']), PDO::PARAM_STR);
        $result_usuario->execute();

        if(($result_usuario) AND ($result_usuario->rowCount() != 0)){
                $_SESSION['id'] = $row_usuario['id'];
                $_SESSION['nome_usuario'] = $row_usuario['nome_usuario'];
                header("Location: painel.php");
        }else{
            $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Usuário ou senha inválida!</p>";
        }
        
    }

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

?>
