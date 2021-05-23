<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id = isset($_GET['id']) ? $_GET['id'] : '';
//insere os dados do usuario no banco
$sql = "DELETE FROM comentarios WHERE id='$id'";
$resultado = mysqli_query($conectar,$sql);
//verifica se aas linhas estão preenchidas e retorna os dados listados
if(mysqli_affected_rows($conectar) !=0){
	echo"
	<META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://nsite.siactecnologia.com.br/Admin/administrativo.php?link=10'>
	<script type=\"text/javascript\">
	alert(\"Comentário deletado com sucesso.\");
	</script>";
}else{
	echo"
	<META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://nsite.siactecnologia.com.br/Admin/administrativo.php?link=10'>
	<script type=\"text/javascript\">
	alert(\"O comentário não foi deletada com sucesso.\");
	</script>";
}
?>
