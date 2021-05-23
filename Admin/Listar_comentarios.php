<?php
  		$resultado=mysqli_query($conectar,"SELECT * FROM comentarios ORDER BY 'id'");
  		$linhas=mysqli_num_rows($resultado);
  	?>


    <div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Listagem de Comentários</h1>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Comentários</th>
                <th>Data</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
            	<?php
            	while ($linhas = mysqli_fetch_array($resultado)) {
            		echo "<tr>";
            		echo "<td>".$linhas['id']."</td>";
            		echo "<td>".$linhas['nome']."</td>";
                echo "<td>".$linhas['comentarios']."</td>";
            		echo "<td>".$linhas['data']."</td>";
            		?>
                <td>
                <a href='administrativo.php?link=11&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-success'>Responder</button> </a>
                <a href='processa/proc_del_com.php?&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Deletar</button> </a>

                <?php
            		echo "</tr>";
            	}
            	?>
            </tbody>
          </table>
        </div>
      </div>
      </div> <!-- /container -->