<div class="container">
<div class="row">
<div class="col-sm-4 mt-4">
	<?php dynamic_sidebar( 'sidebar_postrel' ); ?>
</div>
<div class="col-sm-8">
<section class="container mt-4">
	<div class="row">
	
		 <?php

$args = array(
    'posts_per_page' => 3
);
$query = new WP_Query( $args );
		 if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		 <div class="col-sm-4 mt-2 "><a href="<?php the_permalink(); ?>">
		 <div class="z-depth-2" style="background: url(<?php echo the_post_thumbnail_url(); ?>); background-size: cover; height: 25rem;">
		 <div class=" pl-4 pt-5 bg-cl" style="background-color: rgba(0, 0, 0, .4)!important;color: lightgray;">
		 	<h2><?php the_title(); ?></h2>
		 	<?php the_excerpt(); ?>
		 	</div>
		 </div>
</a>
		 </div>
		<!-- post -->
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>

	</div>
</section>

<section class="container-fluid mt-5">
<div class="row load">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div  class="col-sm-12 mt-2 load">
			<div class="row">
				<div class="col-sm-2 "></div>

				<a href="<?php the_permalink( ); ?>" class='text-dark'><div class="col-sm-12 text-center view overlay hm-zoom">

					<img src="<?php the_post_thumbnail_url( 'content' ); ?>" class='img-responsive z-depth-2 ' data-aos="fade" width='700' height='400'>
				
					<h2 class="lato mt-4 text-dark"><?php the_title( $before = '', $after = '', $echo = true ); ?></h2>
					<p style="font-size: 1rem;" ><?php the_excerpt(); ?></p>
				</a></div>
				<div class="col-sm-2"></div>
			</div>
		</div>
	<!-- post -->
	<?php endwhile; ?>
	
	<!-- post navigation -->
	<div class="row">
	<div class="col-sm-10"></div>	
	<div class="col-sm-2"><?php wp_bootstrap_pagination(); ?></div>

	</div>
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?> 


</section>
</div>

</div>
</div>