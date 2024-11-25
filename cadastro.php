<?php
require 'bd/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome_usuario = $_POST['nome_usuario'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO usuarios (nome_usuario, email, senha) VALUES (:nome_usuario, :email, :senha)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':nome_usuario', $nome_usuario);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);

    if ($stmt->execute()) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPark - Cadastro e Login</title>
    <link rel="stylesheet" href="style/style.css?t=<?php echo date('YmdHis').rand(0,999999);?>">
    <link rel="stylesheet" href="style/cadastro.css?t=<?php echo date('YmdHis').rand(0,999999);?>">
</head>
<body>
    <!-- <header class="header">
        <div class="logo">iPark</div>
        <div class="search-container">
            <input type="text" placeholder="Descubra locais com iPark" class="search-bar">
            <button class="search-button">
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </button>
        </div>
        <nav class="navbar">
            <a href="index.php" class="active">Inicio</a>
            <a href="equipe.php">Equipe</a>
            <a href="projeto.php">Projeto</a>
            <a href="cadastro.php" id="botaocadastro">Cadastro</a>
            <a href="login.php" id="botaologin">Login</a>
        </nav>
    </header> -->

    <?php include 'includes/header.php'; ?>

    <main>
        <div class="container">
            <div class="signup">
                <h2>Cadastro</h2>
                <input type="email" placeholder="Digite seu email">
                <input type="text" placeholder="Digite seu nome de usuário">
                <input type="password" placeholder="Digite uma senha">
                <button>Cadastrar-se</button>
            </div>
           
        </div>
    </main>
</body>

<?php include 'includes/footer.php'; ?>

</html>
