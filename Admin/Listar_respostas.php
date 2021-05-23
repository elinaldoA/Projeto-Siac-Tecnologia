<?php
  		$resultado=mysqli_query($conectar,"SELECT * FROM responder_comentarios ORDER BY 'id'");
  		$linhas=mysqli_num_rows($resultado);
  	?>


    <div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Listagem de Respostas</h1>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Respostas</th>
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
                echo "<td>".$linhas['respostas']."</td>";
            		echo "<td>".$linhas['data']."</td>";
            		?>
                <td>
                <a href='administrativo.php?link=13&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button> </a>
                <a href='processa/proc_del_resp.php?&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Deletar</button> </a>

                <?php
            		echo "</tr>";
            	}
            	?>
            </tbody>
          </table>
        </div>
      </div>
      </div> <!-- /container -->