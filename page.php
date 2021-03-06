<?php get_header(); ?>

<article class='container'>
  <div class="row">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   <!-- post -->
<header>
   <div class="col-sm-12 mt-5 text-center">
   <div class="bg-page" style="background: url(
<?php if (the_post_thumbnail_url()) {
	echo the_post_thumbnail_url();
}



?>
   );height: 50vh;max-width: 200vh;background-size: cover;background-repeat: no-repeat;background-attachment: fixed;">
   	
   </div>
     <h1 class="lato text-dark"><?php the_title(); ?></h1>
     </header>
     <p class="lato text-dark">

       <?php the_content();?>

     </p>
   </div>
   <?php endwhile; ?>
   <!-- post navigation -->
   <?php else: ?>
   <!-- no posts found -->
   <?php endif; ?>
  </div>
</article>



<section class="container mt-4">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">	<?php dynamic_sidebar('sidebar_publicidad_bajo'); ?></div>
		<div class="col-sm-2"></div>
	</div>
</section>
<?php get_footer(); ?>
