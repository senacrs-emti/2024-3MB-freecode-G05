<?php
// Verifica se o usuário está logado
if (!isset($_SESSION['nome_usuario'])) {
    header("Location: login.php"); // Redireciona para a página de login
    exit();
}
?>