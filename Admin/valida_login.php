<?php
session_start();
$usuariot = $_POST['usuario'];
$senhat = $_POST['senha'];
include_once("conexao.php");
//Selecionando os dados do banco 
$result = mysqli_query($conectar,"SELECT * FROM usuarios WHERE login='$usuariot' AND senha='$senhat' LIMIT 1");
$resultado = mysqli_fetch_assoc($result);
//echo "Usuario: ".$resultado['nome'];
if(empty($resultado)){
	//Mensagem de erro
	$_SESSION['loginErro'] = "Usuário ou senha inválida";

	//Redireciona o usuário para a tela de login
	header("Location: login.php");
}else{
	//Define os valores atribuitos na sessão do usuário
	$_SESSION['usuarioId'] = $resultado['id'];
	$_SESSION['usuarioNome'] = $resultado['nome'];
	$_SESSION['usuarioNivelAcesso'] = $resultado['nivel_acesso_id'];
	$_SESSION['usuarioLogin'] = $resultado['login'];
	$_SESSION['usuarioSenha'] = $resultado['senha'];
	if($_SESSION['usuarioNivelAcesso']==1){
	header("Location: administrativo.php");
}else{
	header("Location: usuario.php");
  }
}
?>