<?php
include_once 'bd/db.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPark - Login</title>
    <link rel="stylesheet" href="style/style.css?t=<?php echo date('YmdHis') . rand(0, 999999); ?>">
    <link rel="stylesheet" href="style/login.css?t=<?php echo date('YmdHis') . rand(0, 999999); ?>">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <main>
        <div class="container">
            <div class="login">
                <h2>Login</h2>
                <?php if (isset($erro)): ?>
                    <p style="color: red;"><?php echo $erro; ?></p>
                <?php endif; ?>
                <form method="POST" action="./_login.php">
                    <input type="text" name="nome_usuario" placeholder="Digite seu nome de usuário" required>
                    <input type="password" name="senha" placeholder="Digite sua senha" required>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
