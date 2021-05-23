<?php
session_start();
//Destruir a sessão
session_destroy();

//Remover todos os dados
unset($_SESSION['usuarioId'],
        $_SESSION['usuarioNome'],
        $_SESSION['usuarioNivelAcesso'],
        $_SESSION['usuarioLogin'],
        $_SESSION['usuarioSenha']);

//Redireciona o usuario para a página de login
header("Location: login.php");
?>