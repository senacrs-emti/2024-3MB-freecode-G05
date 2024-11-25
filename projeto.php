<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPark - Sobre o Projeto</title>
    <link rel="stylesheet" href="style/style.css?t=<?php echo date('YmdHis').rand(0,999999);?>">
    <link rel="stylesheet" href="style/projeto.css?t=<?php echo date('YmdHis').rand(0,999999);?>">
</head>
<!-- <body>
<header class="header">
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
            <a href="cadastro.php"id="botaocadastro">Cadastro</a>
            <a href="login.php"id="botaologin">Login</a>
        </nav>
    </header> -->

    <?php include 'includes/header.php'; ?>

    <section id="video-section">
    <div class="video-container">
        <video controls>
            <source src="caminho/do/video.mp4" type="video/mp4">
            Seu navegador não suporta a tag de vídeo.
        </video>
    </div>
</section>
    <section id="project-description">
        <h2>Sobre o iPark</h2>
        <p>O iPark é uma plataforma inovadora que facilita a busca por locais de estacionamento, oferecendo informações em tempo real e ajudando
        a reduzir o tempo gasto para encontrar vagas.O iPark é uma plataforma inovadora que facilita a busca por locais de estacionamento, oferecendo
         informações em tempo real e ajudando a reduzir o tempo gasto para encontrar vagas.O iPark é uma plataforma inovadora que facilita a busca por
          locais de estacionamento, oferecendo informações em tempo real e ajudando a reduzir o tempo gasto para encontrar vagas.O iPark é uma plataforma
           inovadora que facilita a busca por locais de estacionamento, oferecendo informações em tempo real e ajudando a reduzir o tempo gasto para encontrar vagas.
           O iPark é uma plataforma inovadora que facilita a busca por locais de estacionamento, oferecendo informações em tempo real e ajudando a reduzir o tempo 
           gasto para encontrar vagas.O iPark é uma plataforma inovadora que facilita a busca por locais de estacionamento, oferecendo informações em tempo real.</p>
    </section>

    <section id="features">
        <h2>Funcionalidades Principais</h2>
        <div class="feature-list">
            <div class="feature-item">
                <img src="img/localizador.png" alt="Localização">
                <p>Busca de Estacionamentos Próximos</p>
            </div>
            <div class="feature-item">
                <img src="img/tempo.png" alt="Tempo Real">
                <p>Informações em Tempo Real</p>
            </div>
            <div class="feature-item">
                <img src="img/escudo.png" alt="Segurança">
                <p>Estacionamentos Seguros</p>
            </div>
        </div>
    </section>

    <section id="technologies">
        <h2>Tecnologias Utilizadas</h2>
        <div class="tech-list">
            <img src="img/html.png" alt="HTML">
            <img src="img/css.png" alt="CSS">
            <img src="img/js.png" alt="JavaScript">
            <img src="img/php.png" alt="PHP">
            <img src="img/python.png" alt="Python">
            <img src="img/bd.png" alt="MySQL">
            <img src="img/arduino.png" alt="Arduino">
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

</body>
</html>
