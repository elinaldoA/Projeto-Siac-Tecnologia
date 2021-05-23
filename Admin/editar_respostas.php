<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
//execulta consulta
$result=mysqli_query($conectar,"SELECT * FROM responder_comentarios WHERE id = '$id' LIMIT 1");
$resultado = mysqli_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Editar respostas</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
     <div class="form-group">
              <form id="comentarios" name="comentarios" method="POST" action="processa/proc_edit_resp.php">
                  <div class="form-group">
                  <i class="fa fa-fw fa-2x fa-user"></i>
                  <label>Nome </label>
                  <input type="text" name="nome" class="form-control" placeholder="Nome completo" required value="<?php echo $resultado['nome'];?>">
                  </div>
                  <div class="form-group">
                  <i class="fa fa-fw fa-2x fa-edit"></i>
                  <label for="resposta">Respostas </label>
                  <textarea name="resposta" class="form-control" rows="8" placeholder="Respostas" required><?php echo $resultado['respostas'];?></textarea>
                  </div>
                  <input type="hidden" name="id" id="id" value="<?php echo $resultado['id']; ?>">
                  <button type="submit" class="btn btn-success" value="editar">Editar</button>
                  <br>
                  <br>
                  </form>
            </div>
        </div>
      </div>
    </div>
 </div> <!-- /container -->
