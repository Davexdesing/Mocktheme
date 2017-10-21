<?php

	function load_more(){
	
			$paged = $_POST["page"]+1;
	
	$query = new WP_Query( array(
		'post_type' => 'post',
		'paged' => $paged
	) );
	
	if( $query->have_posts() ):
						
		while( $query->have_posts() ): $query->the_post();
		
			?>

			<h1><?php echo the_title( );?></h1>
			<?php  	
		endwhile;
		
	endif;
	
	wp_reset_postdata();
	
	die();
	

	}
	add_action("wp_ajax_nopriv_load_more","load_more");
	add_action("wp_ajax_load_more","load_more");