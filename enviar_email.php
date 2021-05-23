
<?php

	$postData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

	if (isset($postData) && !empty($postData))
	{

    $nome = $postData['nome'];
	$email = $postData['email'];
	$assunto = $postData['assunto'];
	$mensagem = $postData['mensagem'];

	$user = "siac"; //seu usuario para acessar o banco
	$pass = "SIAC0106"; //senha do usuario para acessar o banco
	$banco = "siac_nsite"; //banco que deseja acessar

	$conectar = mysqli_connect($host,$user,$pass,$banco);

	if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$sql = mysqli_query($conectar,"INSERT INTO contatos(nome,email,assunto,mensagem)
    VALUES ('$nome','$email','$assunto','$mensagem'") or die("Erro ao tentar cadastrar registro" .mysqli_error($conectar));

	mysqli_query($conectar,$sql)or die(mysqli_error($conectar));
	echo "Dados enviados com sucesso, entraremos em contato em breve, obrigado!";
	mysqli_close($con);
	echo "<br><br><a href='index.html'>Voltar à página inicial</a>";
	}
?>
