<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
//execulta consulta
$result=mysqli_query($conectar,"SELECT * FROM post WHERE id = '$id' LIMIT 1");
$resultado = mysqli_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Editar Posts</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form class="form-horizontal" method="POST" action="processa/proc_edit_post.php" enctype="multipart/form-data">
	<div class="form-group">
    <label for="titulo" class="col-sm-2 control-label">Titulo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo do post" value="<?php echo $resultado['titulo'];?>">
    </div>
  </div>
  <div class="form-group">
    <label for="autor" class="col-sm-2 control-label">Autor</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="autor" id="autor" placeholder="Autoria do post" value="<?php echo $resultado['autor'];?>">
    </div>
  </div>
  <div class="form-group">
    <label for="imagem" class="col-sm-2 control-label">Enviar imagem</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="imagem" id="imagem" value="<?php echo $resultado["imagem"]?>">
    </div>
  </div>
  <div class="form-group">
    <label for="categoria" class="col-sm-2 control-label">Categorias</label>
    <div class="col-sm-10">
     <select class="form-control" name="categoria">
    <option><?php echo $resultado["categoria"]?></option>
	  <option value="Servidores"
    <?php
      if ( $resultado ['categoria'] == 1) {
        echo 'selected';
      }
    ?>
    >Servidores</option>
	  <option value="Infraestrutura"
    <?php
      if ( $resultado ['categoria'] == 2) {
        echo 'selected';
      }
    ?>
    >Infraestrutura</option>
	  <option value="Segurança da informação"
    <?php
      if ( $resultado ['categoria'] == 3) {
        echo 'selected';
      }
    ?>
    >Segurança da informação</option>
	  <option value="Data Center"
    <?php
      if ( $resultado ['categoria'] == 4) {
        echo 'selected';
      }
    ?>
    >Data Center</option>
	  <option value="Gerenciador de serviços"
    <?php
      if ( $resultado ['categoria'] == 5) {
        echo 'selected';
      }
    ?>
    >Gerenciador de serviços</option>
	  <option value="Tutorias"
    <?php
      if ( $resultado ['categoria'] == 6) {
        echo 'selected';
      }
    ?>
    >Tutorias</option>
</select>
    </div>
  </div>
  <div class="form-group">
    <label for="conteudo" class="col-sm-2 control-label">Conteúdo</label>
    <div class="col-sm-10">
      <textarea name="conteudo" id="conteudo" class="form-control" placeholder="conteúdo completo do post" rows="8"><?php echo $resultado['conteudo_completo'];?></textarea>
    </div>
  </div>
  <input type="hidden" name="id" id="id" value="<?php echo $resultado['id']; ?>">
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Postar</button>
    </div>
  </div>
</form>
 </div>
 </div>
 </div> <!-- /container -->