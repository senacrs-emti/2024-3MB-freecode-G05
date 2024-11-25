<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos</title>
    <link rel="stylesheet" href="style/style.css?t=<?php echo date('YmdHis').rand(0,999999);?>">
    <link rel="stylesheet" href="style/equipe.css?t=<?php echo date('YmdHis').rand(0,999999);?>">
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

    <section class="hero" id="IMG5">
        <h1>QUEM SOMOS</h1>
    </section>
    <section class="content">
        <div class="text-side">
            <h2>Sobre Nós</h2>
            <p>A nossa equipe é inteiramente formada por Yasser Fonseca, Lucas Godoy,  Artur Santana e Pablo Haralambie, todos atuais 
                estudantes da turma 301 do curso técnico do Senac Distrito Criativo.</p>
        </div>
        <div class="image-side" id="IMG1"></div>
    </section>
    <section class="content">
        <div class="image-side" id="IMG2"></div>
        <div class="text-side">
            <p>Juntos, discutimos diversas vezes em como poderiamos criar um projeto que não fosse apenas pensado para concluir nossa
                 tarefa de criar um projeto para a feira mas que de alguma maneira fosse útil para o futuro.</p>
        </div>    
    </section>
    <section class="content">
        <div class="text-side">
            <p>Visamos uma alternativa exclusiva que funciona de forma organizada mantendo a essência presente nos estacionamentos.
            </p>
            <p>Com programadores de alta qualidade, desenvolvemos nosso site para
                que seja acessível a todos os usuários e principalmente fácil de utilizar.</p>
        </div>
        <div class="image-side" id="IMG3"></div>    
    </section>
    <section class="content">
        <div class="image-side" id="IMG4"></div>
        <div class="text-side">
            <p>
             Com um design minimalista focado nas cores azul e branco, tentamos despertar
              ao usuário a sensação de clareza e leveza, explicando de forma indireta o nosso objetivo com esse projeto.
            </p>
            <h2>Muito Obrigado</h2>
        </div>    
    </section>
</body>

<?php include 'includes/footer.php'; ?>

</html>