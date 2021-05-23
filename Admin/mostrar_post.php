<?php
  $resultado=mysqli_query($conectar,"SELECT * FROM post ORDER BY id desc");
  $linhas=mysqli_num_rows($resultado);

  while ($linhas = mysqli_fetch_array($resultado)) {
  echo "<section id='blog'>";
  echo "<div class='container'>";
  echo"<div class='col-md-8'>";
  echo"<h2 class='entry-title'><a href='blog.php'>".$linhas['titulo']."</a></h2>";
  echo"<header class='entry-header'>";
  echo"<div class='blog-post'>";
  echo"<img class='img-responsive' src='Blog/".$linhas['imagem']."'>";
  echo"<footer class='entry-meta'>";
  echo"<span class='entry-author'><i class='fa fa-pencil'></i> " . $linhas['autor'] ."</span>";
  echo"<span class='entry-category'><i class='fa fa-folder-o'></i> " .$linhas['categoria']. "</span>";
  echo"</footer>";
  echo"<p> Postado em ".date('d-m-Y', strtotime($linhas['data']))."</p>";
#  echo "<a class='btn btn-primary' href='#'>Saiba mais</a>";
  echo"</div>";
  echo"</header><br>";
  echo"<div class='entry-content'>";
  echo"<p>".$linhas['conteudo_completo']."</p>";
  echo"</div><br>";
  echo"</div>";
  echo"</div>";
}

?>

