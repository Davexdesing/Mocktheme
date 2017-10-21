<?php
function add_class_footer( $atts, $item, $args ) {
    // check if the item is set to target="_blank"
    if ($args->theme_location == 'footer-menu') {
      // add the desired attributes:
      $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_class_footer', 10, 3 );

function add_class_to_target_blank_menu_items( $atts, $item, $args ) {
    // check if the item is set to target="_blank"
    if ($args->theme_location == 'nav-menu' ) {
      // add the desired attributes:
      $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_class_to_target_blank_menu_items', 10, 3 );

function kbnt_special_nav_class( $classes, $item){

  $classes[] = "nav-item";

 return $classes;
}
add_filter('nav_menu_css_class' , 'kbnt_special_nav_class' , 10 , 2);


/* content */


function my_theme_excerpt($length) {
    return 25;
}
add_filter('excerpt_length', 'my_theme_excerpt');
