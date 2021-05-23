<?php
include_once("../conexao.php");

$nome 				= $_POST["nome"];
$comentarios 		= $_POST["comentarios"];

//insere os dados do usuario no banco
$sql = mysqli_query($conectar,"INSERT INTO comentarios(nome, comentarios, data)
VALUES ('$nome', '$comentarios',NOW())") or die("Erro ao tentar cadastrar registro" .mysqli_error($conectar));

//verifica se as linhas estão preenchidas e retorna os dados listados
if(mysqli_affected_rows($conectar) !=0){
	echo"
	<META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://nsite.siactecnologia.com.br/blog.php'>
	<script type=\"text/javascript\">
	alert(\"Comentário publicado com sucesso.\");
	</script>";
}else{
	echo"
	<META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://nsite.siactecnologia.com.br/blog.php'>
	<script type=\"text/javascript\">
	alert(\"Seu comentário não foi publicado com sucesso.\");
	</script>";
}
?>