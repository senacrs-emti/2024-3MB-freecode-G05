<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome_usuario = $_POST['nome_usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE nome_usuario = :nome_usuario";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome_usuario', $nome_usuario);
    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($senha, $usuario['senha'])) {
        echo "Login realizado com sucesso!";
    } else {
        echo "Nome de usuário ou senha incorretos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="login.php">
        <input type="text" name="nome_usuario" placeholder="Nome de usuário" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
