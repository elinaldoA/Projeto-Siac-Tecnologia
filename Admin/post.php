<div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Adcionar Posts</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form class="form-horizontal" method="POST" action="processa/proc_adc_post.php" enctype="multipart/form-data">
	<div class="form-group">
    <label for="titulo" class="col-sm-2 control-label">Titulo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo do post">
    </div>
  </div>
  <div class="form-group">
    <label for="autor" class="col-sm-2 control-label">Autor</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="autor" id="autor" placeholder="Autoria do post">
    </div>
  </div>
  <div class="form-group">
    <label for="imagem" class="col-sm-2 control-label">Enviar imagem</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="imagem" id="imagem">
    </div>
  </div>
  <div class="form-group">
    <label for="categoria" class="col-sm-2 control-label">Categorias</label>
    <div class="col-sm-10">
     <select class="form-control" name="categoria">
    <option>Selecione</option>
	  <option value="Servidores">Servidores</option>
	  <option value="Infraestrutura">Infraestrutura</option>
	  <option value="Segurança da informação">Segurança da informação</option>
	  <option value="Data Center">Data Center</option>
	  <option value="Gerenciador de serviços">Gerenciador de serviços</option>
	  <option value="Tutorias">Tutorias</option>
</select>
    </div>
  </div>
  <div class="form-group">
    <label for="conteudo" class="col-sm-2 control-label">Conteúdo</label>
    <div class="col-sm-10">
      <textarea name="conteudo" id="conteudo" class="form-control" placeholder="conteúdo completo do post" rows="8" required></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Postar</button>
    </div>
  </div>
</form>
 </div>
 </div>
 </div> <!-- /container -->
