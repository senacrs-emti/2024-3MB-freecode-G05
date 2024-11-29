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
    <link rel="stylesheet" href="style/painel.css?t=<?php echo date('YmdHis') . rand(0, 999999); ?>">
</head>
<?php include 'includes/header.php'; ?>
<body>
    <main class = main>
    <h1>Painel de Estacionamento</h1>
    <div class="painel">
        <div class="vaga livre">
            <div class="icone">
                🚗
            </div>
            <div class="numero">Vaga 01</div>
            <div class="status">Livre</div>
        </div>
        <div class="vaga ocupado">
            <div class="icone">
                🚙
            </div>
            <div class="numero">Vaga 02</div>
            <div class="status">Ocupado</div>
        </div>
        <div class="vaga livre">
            <div class="icone">
                🚘
            </div>
            <div class="numero">Vaga 03</div>
            <div class="status">Livre</div>
        </div>
        <div class="vaga ocupado">
            <div class="icone">
                🚐
            </div>
            <div class="numero">Vaga 04</div>
            <div class="status">Ocupado</div>
        </div>
        <div class="vaga livre">
            <div class="icone">
                🚕
            </div>
            <div class="numero">Vaga 05</div>
            <div class="status">Livre</div>
        </div>
    </div>
    </main>
</body>

<?php include 'includes/footer.php'; ?>
</html>
