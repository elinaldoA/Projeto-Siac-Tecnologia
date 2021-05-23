<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");

$titulo 	= $_POST["titulo"];
$autor 		= $_POST["autor"];
$categoria   = $_POST["categoria"];
$conteudo   = $_POST["conteudo"];

$nome_imagem = $_FILES["imagem"]["name"];
$nome_temporal = $_FILES["imagem"]["tmp_name"];
$tipo_arquivo = $_FILES["imagem"]["type"];

$destino = "imagens/" . $nome_imagem;

if ($tipo_arquivo == "image/jpeg" || $tipo_arquivo == "image/jpg" || $tipo_arquivo == "image/png" || $tipo_arquivo == "image/gif") {
	move_uploaded_file($nome_imagem, $nome_temporal);
	echo "A imagem foi enviada com sucesso <br/>";
}else{
	echo "O arquivo enviado está no formato incorreto. <br/>";
	exit();
	echo "<a href='post.php'>Voltar</a>";
}


$sql = mysqli_query($conectar,"INSERT INTO post(autor, data, categoria, titulo, imagem, conteudo_completo)
VALUES ('$autor', NOW(), '$categoria', '$titulo', '$nome_imagem','$conteudo')") or die("Erro ao tentar cadastrar registro" .mysqli_error($conectar));
//verifica se aas linhas estão preenchidas e retorna os dados listados
if(mysqli_affected_rows($conectar) !=0){
	echo"
	<META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://nsite.siactecnologia.com.br/Admin/administrativo.php?link=5'>
	<script type=\"text/javascript\">
	alert(\"Post publicado com sucesso.\");
	</script>";
}else{
	echo"
	<META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://nsite.siactecnologia.com.br/Admin/administrativo.php?link=5'>
	<script type=\"text/javascript\">
	alert(\"Post não foi publicado com sucesso.\");
	</script>";
}
//var_dump($id);
//var_dump($titulo);
//var_dump($autor);
//var_dump($categoria);
//var_dump($conteudo);
?>