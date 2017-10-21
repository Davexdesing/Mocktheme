<nav class="navbar navbar-expand-lg navbar-light bg-df">
  <a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>"><?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
   if($custom_logo_id) : $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 ?> <img src="<?php echo $image[0];?>"> <?php
	else : echo bloginfo( 'name' );
	endif;

   ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  		  <?php

    wp_nav_menu( array(
    	'theme_location'  => 'nav-menu',
    	'menu'            => 'Menu Header',
    	'container' =>  none,
    	'menu_class'      => 'navbar-nav mr-auto mt-2 mt-lg-0'
    ) );

     ?>

   <form class="form-inline my-2 my-lg-0 " role="search" method="get">
      <input class="form-control mr-sm-2" value="" name="s" id="s" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" value="Search" type="submit">Search</button>
    </form>
  </div>
</nav>

<section class="container mt-5">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">	<?php dynamic_sidebar('sidebar_publicidad'); ?></div>
		<div class="col-sm-2"></div>
	</div>
</section>