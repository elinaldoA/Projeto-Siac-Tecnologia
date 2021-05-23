<?php
  		$resultado=mysqli_query($conectar,"SELECT * FROM post ORDER BY 'id'");
  		$linhas=mysqli_num_rows($resultado);
  	?>


    <div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Listagem de Posts</h1>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Autor</th>
                <th>Data</th>
                <th>Categoria</th>
                <th>Titulo</th>
                <th>Imagem</th>
                <th>Conteúdo completo</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
            	<?php
            	while ($linhas = mysqli_fetch_array($resultado)) {
            		echo "<tr>";
            		echo "<td>".$linhas['id']."</td>";
            		echo "<td>".$linhas['autor']."</td>";
            		echo "<td>".$linhas['data']."</td>";
            		echo "<td>".$linhas['categoria']."</td>";
                echo "<td>".$linhas['titulo']."</td>";
                echo "<td>".$linhas['imagem']."</td>";
                echo "<td>".$linhas['conteudo_completo']."</td>";
            		?>
                <td>
                <a href='administrativo.php?link=7&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button> </a>
                <a href='processa/proc_del_post.php?&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Deletar</button> </a>

                <?php
            		echo "</tr>";
            	}
            	?>
            </tbody>
          </table>
        </div>
      </div>
      </div> <!-- /container -->