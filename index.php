<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPark - Estacione do Seu Jeito</title>
    <link rel="stylesheet" href="style/style.css?t=<?php echo date('YmdHis').rand(0,999999);?>">
    <link rel="stylesheet" href="style/home.css?t=<?php echo date('YmdHis').rand(0,999999);?>">
</head>
<?php include 'includes/header.php'; ?>
<body>
    <main class="main-banner">
        <div class="background">
            <img src="./img/image.png" alt="Fundo com mar e céu" class="background-image">
        </div>
        <div class="foreground">
            <img src="./img/Chão.png" alt="Chão" class="ground-image">
            <img src="./img/Carro.png" alt="Carro" class="car-image">
        </div>
        <div id="texto-over">
            <h1>ESTACIONE</h1>
        </div>
        <div id="textoIp">
        <h1 >IPARK</h1>
        </div>
        <div id="text-overlay">
            <h1>DO SEU JEITO</h1>
        </div>
    </main>
</body>

<?php include 'includes/footer.php'; ?>
</html>