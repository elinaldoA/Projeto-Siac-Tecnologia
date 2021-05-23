<?php
session_start();
//Verifica se a pessoa esta logada
include_once("seguranca.php");
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!--Inicio do head-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>Administrativo</title>
  <!--Css-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/owl.carousel.css" rel="stylesheet">
  <link href="css/owl.transitions.css" rel="stylesheet">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></sript>
    <![endif]-->
  <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="Favicon/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="Favicon/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="Favicon/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="Favicon/apple-touch-icon-57-precomposed.png">
</head>
<!--Fim do head-->
  <br>
  <body role="document" >
  	<?php
  		include_once("menu_admin.php");

     if (isset($_GET["link"])){
        $link = $_GET["link"];
    }
      $pag[1] = "bem_vindo.php";
      $pag[2] = "Listar_usuarios.php";
      $pag[3] = "Cad_usuarios.php";
      $pag[4] = "editar_usuarios.php";
      $pag[5] = "post.php";
      $pag[6] = "Listar_post.php";
      $pag[7] = "editar_post.php";
      $pag[8] = "mostrar_post.php";
      $pag[9] = "busca.php";
      $pag[10] = "Listar_comentarios.php";
      $pag[11] = "responder_comentarios.php";
      $pag[12] = "Listar_respostas.php";
      $pag[13] = "editar_respostas.php";

      if (!empty($link)) {
        if (file_exists($pag[$link])) {
          include $pag[$link];
        }else{
          include "bem_vindo.php";
        }
      }else{
        include "bem_vindo.php";
      }

  	?>
<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
