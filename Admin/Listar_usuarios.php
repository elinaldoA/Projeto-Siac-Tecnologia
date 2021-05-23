<?php
  		$resultado=mysqli_query($conectar,"SELECT * FROM usuarios ORDER BY 'id'");
  		$linhas=mysqli_num_rows($resultado);
  	?>


    <div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Lista de Usuários</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Nivel de Acesso</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
            	<?php
            	while ($linhas = mysqli_fetch_array($resultado)) {
            		echo "<tr>";
            		echo "<td>".$linhas['id']."</td>";
            		echo "<td>".$linhas['nome']."</td>";
            		echo "<td>".$linhas['email']."</td>";
            		echo "<td>".$linhas['nivel_acesso_id']."</td>";
            		?>
                <td>
                <a href='administrativo.php?link=4&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button> </a>
                <a href='processa/proc_del_usuario.php?&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Deletar</button> </a>

                <?php
            		echo "</tr>";
            	}
            	?>
            </tbody>
          </table>
        </div>
      </div>
      </div> <!-- /container -->