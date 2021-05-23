<?php
  $resultado=mysqli_query($conectar,"SELECT * FROM responder_comentarios ORDER BY 'id'");
  $linhas=mysqli_num_rows($resultado);

  while ($linhas = mysqli_fetch_array($resultado)) {
  echo "<div class='form-group'>";
  echo "&nbsp &nbsp &nbsp<i class='glyphicon glyphicon-user'></i>";
  echo "&nbsp &nbsp<span>" .$linhas['nome']." </span><br /><br />";
  echo "<section id='cta' class='wow fadIn'>";
  echo "&nbsp &nbsp &nbsp<i class='fa fa-fw fa-comments'></i>";
  echo "&nbsp &nbsp<span>" .$linhas['respostas']." </span><br /><br />";
  echo " &nbsp &nbsp &nbsp<span>".date('d-m-Y', strtotime($linhas['data']))."</span>";
  echo "</div>";
}

?>
