<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br" >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Siac - Login</title>
  <meta name="description" content="Página de login">
  <meta name="author" content="Matrix soluções TI">
  <link rel="icon" href="images/favicon.ico">
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
  unset($_SESSION['usuarioId'],
        $_SESSION['usuarioNome'],
        $_SESSION['usuarioNivelAcesso'],
        $_SESSION['usuarioLogin'],
        $_SESSION['usuarioSenha']);
  ?>
    <div class="wrapper text-center">
    <form class="form-signin" method="POST" action="valida_login.php">
    <img class="mb-4" src="images/Logo.svg" alt="" width="100" height="100">       
      <h2 class="form-signin-heading">Painel Administrativo</h2>
      <input type="text" class="form-control" name="usuario" placeholder="Seu usuário" required="" autofocus="" />
      <br>
      <input type="password" class="form-control" name="senha" placeholder="Sua senha" required=""/>      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
    
    <p class="text-center text-danger">
      <?php
        if(isset($_SESSION['loginErro'])){
          echo $_SESSION['loginErro'];
          unset($_SESSION['loginErro']);
        }
      ?>
    </p>
  </div>
</body>

</html>
