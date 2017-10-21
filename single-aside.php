
 <article class="container mt-4">
 	<div class="row">
 	<div class="col-sm-8">
</a>
  <header>
 	 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 	<!-- post -->
 	   <div class="bg-page" style="background: url(
<?php if (the_post_thumbnail_url()) {
	echo the_post_thumbnail_url();
}



?>
   );height: 50vh;max-width: 200vh;background-size: cover;background-repeat: no-repeat;background-attachment: fixed;">
   	
   </div>
<h1 class="lato text-center"><?php the_title(); ?></h1>
</header>
<p class="lato text-center"><?php the_content(); ?></p>
<footer>
<p class="lato text-muted"><?php the_date(); ?></p> 
<p class="lato text-muted"><?php the_author(); ?> <br><?php
$twit = get_the_author_meta('twitterMocks' );
$face = get_the_author_meta( 'facebookMocks');
$insta = get_the_author_meta('instagramMocks');
$youtu = get_the_author_meta( 'youtubeMocks' );
$link =get_the_author_meta('linkMocks');

if ($twit || $face || $insta || $youtu || $link) {
 if ($twit !== '') {
    echo '<a href="'.$twit.'"><img src="'.get_template_directory_uri().'/img/twitter.png" width="50"> </a>';
 }
 if ($face !== '') {
     echo '<a href="'.$face.'"><img src="'.get_template_directory_uri().'/img/facebook.png" width="50"> </a>';
 }
if ($insta !== '') {
  echo '<a href="'.$insta.'"> <img src="'.get_template_directory_uri().'/img/instagram.png" width="50"> </a>';
}if ($link !== '') {
  echo '<a href="'.$link.'"><img src="'.get_template_directory_uri().'/img/linkedin.png" width="50"> </a>';
}
  
  

}


 ?></p> 
</footer>
<div>
<h1 class="lato">Related Post</h1>
<div class="row">
<?php
$orig_post = $post;
  global $post;
  $tags = wp_get_post_tags($post->ID);
   
  if ($tags) {
  $tag_ids = array();
  foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
  $args=array(
  'tag__in' => $tag_ids,
  'post__not_in' => array($post->ID),
  'posts_per_page'=>4, // Number of related posts to display.
  'caller_get_posts'=>1
  );
   
  $my_query = new wp_query( $args );
 
  while( $my_query->have_posts() ) {
  $my_query->the_post();
  ?>
   
  <div class="col-sm-2">
    <a rel="lato text-dark" href="<? the_permalink()?>"><?php the_post_thumbnail(array(150,100)); ?><br />
    <p class="text-dark"><?php the_title(); ?></p>
    </a>
  </div>
   
  <? }
  }
  $post = $orig_post;
  wp_reset_query();
  ?>
  </div>
</div>
</div>



 	<?php endwhile; ?>
 	<!-- post navigation -->
 	<?php else: ?>
 	<!-- no posts found -->
 	<?php endif; ?>
       <div class="col-sm-4 mt-4">
  <?php dynamic_sidebar( 'sidebar_postrel' ); ?>

      </div>
 			
 		</div>
 	</div>
 </article>



