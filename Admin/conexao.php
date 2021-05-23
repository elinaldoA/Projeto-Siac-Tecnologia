<?php
$host = "localhost"; //computador onde o servidor de banco de dados esta instalado
$user = "siac"; //seu usuario para acessar o banco
$pass = "SIAC0106"; //senha do usuario para acessar o banco
$banco = "siac_nsite"; //banco que deseja acessar

$conectar = mysqli_connect($host,$user,$pass,$banco);

if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>