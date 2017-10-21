

<div class="container">
	<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
    <h1 class="display-4">MocksTheme</h1>
    <p class="lead">Aqui se encuentran las opciones del tema</p>
  </div>
</div>



<div class="row">
	<div class="col-sm-6">
		 <h2 class="lato">Opciones de Navegacion</h2>


		<form class="form-control" method="post" action="admin.php?page=mocks">
			<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="navegation" id="exampleRadios1" value="default" <?php if (get_option( 'mockNav' ) == 'default') {
    	echo 'checked';
    } ?>>
      <div class="ml-4 mt-2">
    Opcion por defecto que trae <br>
     <img src="<?php echo get_template_directory_uri() ?>/img/defa.png"> </div>
  </label>


</div>
<div class="form-check  mt-4">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="navegation" id="exampleRadios2" value="grand" <?php if (get_option( 'mockNav' ) == 'grand') {
    	echo 'checked';
    } ?>>
     <div class="ml-4 mt-2">
    Barra de navegacion Grande <br>
     <img src="<?php echo get_template_directory_uri() ?>/img/grand.png"> </div>
  </label>
</div>

<div class="form-check  mt-4">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="navegation" id="exampleRadios3" value="nofix" <?php if (get_option( 'mockNav' ) == 'nofix') {
    	echo 'checked';
    } ?>>
    <div class="ml-4 mt-2">
   Barra de Navegacion estatica <br>
   <img src="<?php echo get_template_directory_uri() ?>/img/nofix.png"> 
   </div>
  </label>
</div>

<input type="submit" name="Update" id="Update" class="button button-primary" value="Save Changes">
		</form>
	</div>
	<div class="col-sm-6">
		 <h2 class="lato">Opciones de contenido</h2>


		<form class="form-control" method="post" action="admin.php?page=mocks">
			<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="content" id="exampleRadios1" value="default" <?php if (get_option( 'mockpage' ) == 'default') {
    	echo 'checked';
    } ?>>
     <div class="ml-4">
    Opcion ancho completo <br>
     <img src="<?php echo get_template_directory_uri() ?>/img/content.png">  </div>
  </label>


</div>
<div class="form-check  mt-4">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="content" id="exampleRadios2" value="right" <?php if (get_option( 'mockpage' ) == 'right') {
    	echo 'checked';
    } ?>>
     <div class="ml-4">
   Opcion Con sidebar ubicado a la derecha <br>
  <img src="<?php echo get_template_directory_uri() ?>/img/content-sidebar.png"> </div> 
  </label>
</div>

<div class="form-check  mt-4">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="content" id="exampleRadios3" value="left" <?php if (get_option( 'mockpage' ) == 'left') {
    	echo 'checked';
    } ?>>
     <div class="ml-4">
  Opcion sidebar ubicado a la izquierda <br>
   <img src="<?php echo get_template_directory_uri() ?>/img/sidebar-content.png">  </div>
  </label>
</div>

<input type="submit" name="Update" id="Update" class="button button-primary" value="Save Changes">
		</form>
	</div>
</div>
</div>