<?php
session_start();
include_once("seguranca.php");
	echo "Bem vindo usuario ".$_SESSION['usuarioNome'];
?>
<br/>
<a href="sair.php">Sair</a>