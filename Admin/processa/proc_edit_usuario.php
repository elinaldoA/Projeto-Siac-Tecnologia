<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id                 = $_POST["id"];
$nome 				= $_POST["nome"];
$email 				= $_POST["email"];
$login 				= $_POST["login"];
$senha 				= $_POST["senha"];
$nivel_de_acesso 	= $_POST["nivel_de_acesso"];
//insere os dados do usuario no banco
$sql = mysqli_query($conectar,"UPDATE usuarios set nome='$nome', email='$email', login='$login', senha='$senha', nivel_acesso_id='$nivel_de_acesso', modifed=NOW() WHERE id='$id'") or die("Erro ao tentar modificar registro" .mysqli_error($conectar));
//verifica se aas linhas estão preenchidas e retorna os dados listados
if(mysqli_affected_rows($conectar) !=0){
	echo"
	<META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://nsite.siactecnologia.com.br/Admin/administrativo.php?link=2'>
	<script type=\"text/javascript\">
	alert(\"Usuário editado com sucesso.\");
	</script>";
}else{
	echo"
	<META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://nsite.siactecnologia.com.br/Admin/administrativo.php?link=2'>
	<script type=\"text/javascript\">
	alert(\"Usuário não foi editado com sucesso.\");
	</script>";
}
?>
