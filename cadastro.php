<?php
require 'bd/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome_usuario = $_POST['nome_usuario'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = "INSERT INTO usuarios (nome_usuario, email, senha) VALUES (:nome_usuario, :email, :senha)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':nome_usuario', $nome_usuario);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);

    if ($stmt->execute()) {
        echo "<script>alert('Usuário cadastrado com sucesso!');</script>";
    } else {
        $errorInfo = $stmt->errorInfo();
        echo "<script>alert('Erro ao cadastrar usuário: {$errorInfo[2]}');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPark - Cadastro e Login</title>
    <link rel="stylesheet" href="style/style.css?t=<?php echo date('YmdHis') . rand(0, 999999); ?>">
    <link rel="stylesheet" href="style/cadastro.css?t=<?php echo date('YmdHis') . rand(0, 999999); ?>">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <div class="container">
            <div class="signup">
                <h2>Cadastro</h2>
                <form method="POST" action="">
                    <input type="text" name="nome_usuario" placeholder="Digite seu nome de usuário" required>
                    <input type="email" name="email" placeholder="Digite seu email" required>
                    <input type="password" name="senha" placeholder="Digite uma senha" required>
                    <button type="submit">Cadastrar-se</button>
                </form>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>