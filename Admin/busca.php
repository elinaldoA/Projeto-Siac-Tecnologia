<!DOCTYPE html>
<html lang="pt-br">
<head><!--Inicio do head-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Matrix soluções TI">
  <title>SIAC - Tecnologia</title>
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

<body id="home" class="homepage">
    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/Logo.svg" alt="logo" height="60"></a>
                </div>
        
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="index.html">Inicio</a></li>
                        <li class="scroll"><a href="servicos.html">Serviços</a></li>
                        <li class="scroll"><a href="cases.html">Cases</a></li>
                        <li class="scroll"><a href="clientes.html">Clientes</a></li>
                        <li class="scroll"><a href="parceiros.html">Parceiros</a></li>
                        <li class="scroll"><a href="siac.html">A empresa</a></li>
                        <li class="scroll"><a href="#blog">Blog</a></li> 
                        <li class="scroll"><a href="#get-in-touch">Contatos</a></li>                        
                    </ul>
                </div>
            </div><!--Fim de container-->
        </nav><!--Fim do menu-->
    </header><!--Fim do header-->
<!-- Page Content -->
<section id="blog">
    <div class="container">
      <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Blog</h2>
                 <p class="text-center wow fadeInDown">
                    Confira as ultimas noticias do nosso blog
                </p>
            </div>
        <!-- Post Content Column -->
        <div class="col-md-8">
          <?php
      		session_start();
      		include_once('Admin/conexao.php');
      		include_once('Admin/seguranca.php');

      		$buscar = $_POST['buscar'];
      		$result = "SELECT * FROM post WHERE categoria LIKE '%$buscar%' LIMIT 5";
      		$resultado = mysqli_query($conectar,$result);
      		if ($linhas = mysqli_fetch_array($resultado)) {
      		echo "<section id='blog'>";
      		echo "<div class='container'>";
      		echo"<div class='col-md-8'>";
      		echo"<h2 class='entry-title'><a href='#'>".$linhas['titulo']."</a></h2>";
      		echo"<header class='entry-header'>";
      		echo"<div class='blog-post'>";
      		echo"<img class='img-responsive' src='Blog/".$linhas['imagem']."'>";
      		echo"<footer class='entry-meta'><br>";
      		echo"<span class='entry-author'><i class='fa fa-pencil'></i>" . $linhas['autor'] ."</span>";
      		echo"<span class='entry-category'><i class='fa fa-folder-o'></i>" .$linhas['categoria']. "</span>";
      		echo"</footer>";   
      		echo"<p>". $linhas['data'] ."</p>";
      		echo "<a class='btn btn-primary' href='#'>Saiba mais</a>";
      		echo"</div>";
      		echo"</header><br>";
      		echo"<div class='entry-content'>";
      		echo"<p>".$linhas['conteudo_completo']."</p>";
      		echo"</div><br>";
      		echo"</div>";
      		echo"</div>";
      		}else{
      		echo "<section id='blog'>";
      		echo "<div class='container'>";
      		echo"<div class='col-md-12'>";
      		echo "Desculpe, sua Pesquisa não retornou nenhum resultado";
      		echo "</div>";
      		echo"</div>";
      		}
      	?>
          <br>
        </div>
        <br>
        <br>
        <br>
        <article>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
          <!-- Search Widget -->
          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categorias</h5>
            <div class="blog-post blog-large wow fadeInLeft">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Servidores</a>
                    </li>
                    <li>
                      <a href="#">Infraestrutura</a>
                    </li>
                    <li>
                      <a href="#">Segurança da informação</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Data Center</a>
                    </li>
                    <li>
                      <a href="#">Gerenciadores de serviços</a>
                    </li>
                    <li>
                      <a href="#">Tutorials</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        <br />
        <div>
        	<a href="blog.php"><button class="btn btn-primary" value="submit">Voltar</button></a>
        </div>
      </div>
      </article>
      </div>
      </section>        
    <!-- /.container -->
    <br>
    <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Entre em contato <br>conosco</h2>
                <p class="text-center wow fadeInDown">Dúvidas, sugestões & elógios</p>
                <p class="text-center wow fadeInDown">Será um prazer atendê-lo</p>
            </div>
        </div>
    </section><!--/#get-in-touch-->
    <section id="contact">
        <div id="google-maps">
            <iframe style="height:650px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29956.618391627497!2d-40.266251000000004!3d-20.19331800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa1ab3d702b9116f0!2sSIAC+Tecnologia!5e0!3m2!1spt-BR!2sbr!4v1520807518584" width="1500" height="550" frameborder="0"></iframe>
       </div>
      
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="contact-form">
                            <h3>Contato</h3>

                            <address>
                              <strong>SIAC Tecnologia, Inc.</strong><br>
                              2163 Shopping MontSerrat, Sala 329<br>
                              Serra, Es 29165-680<br>
                              <abbr title="Phone">Tel:</abbr> (27) 4042-1758
                            </address>

                            <form id="main-contact-form" name="contact-form" method="post" action="Admin/enviar_email.php">
                                <div class="form-group">
                                    <input type="text" name="nome" class="form-control" placeholder="Nome" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="mail@exemplo.com.br" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="assunto" class="form-control" placeholder="Assunto.." required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Mensagens" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" value="enviar">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--Fim do bottom-->

    <!--Inicio do footer-->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    &copy; 2018 SIAC - Tecnologia | Desenvolvido por <a target="_blank" href="http://matrixsolucoesti.com/">Matrix soluções TI</a>
                    <p><i class="fa fa-2x fa-envelope pull-left"></i>contato@siactecnologia.com</p>
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-2x fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-2x fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-2x fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-2x fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!-- Fim do footer-->

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