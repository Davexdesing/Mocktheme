<?php get_header();


 $contentl = get_option( 'mockpage' );

  if (isset($contentl)) {
     get_template_part('template-parts/content', $contentl);
   } else{
      get_template_part('template-parts/content', $contentl = 'default' );
      
   }



 get_footer(); ?>