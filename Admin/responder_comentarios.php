<div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Responder comentários</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
     <div class="form-group">
              <form id="comentarios" name="comentarios" method="POST" action="processa/proc_res_post.php">
                  <div class="form-group">
                  <i class="fa fa-fw fa-2x fa-user"></i>
                  <label>Nome </label>
                  <input type="text" name="nome" class="form-control" placeholder="Nome completo" required>
                  </div>
                  <div class="form-group">
                  <i class="fa fa-fw fa-2x fa-edit"></i>
                  <label for="resposta">Respostas </label>
                  <textarea name="resposta" class="form-control" rows="8" placeholder="Respostas" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary" value="comentar">Responder</button>
                  <br>
                  <br>
                  </form>
            </div>
        </div>
      </div>
    </div>
 </div> <!-- /container -->
