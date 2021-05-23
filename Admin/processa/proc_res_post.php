<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$nome 				= $_POST["nome"];
$resposta 			= $_POST["resposta"];

//insere os dados do usuario no banco
$sql = mysqli_query($conectar,"INSERT INTO responder_comentarios(nome, respostas, data)
VALUES ('$nome', '$resposta' ,NOW())") or die("Erro ao tentar cadastrar registro" .mysqli_error($conectar));
//verifica se aas linhas estão preenchidas e retorna os dados listados
if(mysqli_affected_rows($conectar) !=0){
	echo"
	<META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://nsite.siactecnologia.com.br/Admin/administrativo.php?link=11'>
	<script type=\"text/javascript\">
	alert(\"Comentário respondido com sucesso.\");
	</script>";
}else{
	echo"
	<META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://nsite.siactecnologia.com.br/Admin/administrativo.php?link=11'>
	<script type=\"text/javascript\">
	alert(\"O post não foi respondido com sucesso.\");
	</script>";
}
?>
