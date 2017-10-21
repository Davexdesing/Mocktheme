<?php

add_theme_support( 'post-formats', array( 'aside') );
// Removes some links from the header
function my_theme_remove_headlinks() {
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'start_post_rel_link' );
    remove_action( 'wp_head', 'index_rel_link' );
    remove_action( 'wp_head', 'wp_shortlink_wp_head' );
    remove_action( 'wp_head', 'adjacent_posts_rel_link' );
    remove_action( 'wp_head', 'parent_post_rel_link' );
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    remove_action( 'wp_head', 'feed_links', 2 );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'my_theme_remove_headlinks' );

/* add theme support */
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
) );

add_theme_support( 'post-thumbnails' );
add_image_size('mini', 50, 50);
add_image_size( 'content', 750, 450, true);
/* nav menus */


register_nav_menus(
	array(
		'nav-menu' => __('Nav Menu'),
		'footer-menu' => __('Footer Menu')
		)
 );



add_action('widgets_init','sidebar_footer');

function sidebar_footer(){
  register_sidebar( array(
    'id' => 'sidebar_footer',
    'name' => 'Sidebar Footer',
    'description' => 'Aqui estara todo el sidebar del footer',
    'class' => 'nav flex-column',
    'before_widget' => '<div class="ul-li nav-item ml-4 it">',
    'after_widget'  => "</div>",
    'before_title'  => '<h2 class="lato color-claro">',
	'after_title'   => '</h2>'
  )
  );
}
add_action('widgets_init','sidebar_publicidad');

function sidebar_publicidad(){
  register_sidebar( array(
    'id' => 'sidebar_publicidad',
    'name' => 'Publicidad header',
    'description' => 'Aqui estara todo el sidebar del publicidad',
    'class' => 'nav flex-column',
    'before_widget' => '<div class="">',
    'after_widget'  => "</div>",
  )
  );
}

add_action('widgets_init','sidebar_publicidad_bajo');

function sidebar_publicidad_bajo(){
  register_sidebar( array(
    'id' => 'sidebar_publicidad_bajo',
    'name' => 'Publicidad Abajo',
    'description' => 'Aquis estara todo el sidebar del publicidad',
    'class' => 'nav flex-column',
    'before_widget' => '<div class="">',
    'after_widget'  => "</div>",
  )
  );
}

add_action('widgets_init','sidebar_postrel');

function sidebar_postrel(){
  register_sidebar( array(
    'id' => 'sidebar_postrel',
    'name' => 'Sidebar content',
    'description' => 'Aqui estara todo el sidebar del publicidad',
    'class' => 'nav flex-column',
    'before_widget' => '<div class="ul-li nav-item ml-4 it">',
    'after_widget'  => "</div>",
  )
  );
}


require_once get_template_directory() . '/ince/filtros.php';
require_once get_template_directory() . '/ince/rcpost.php';
require_once get_template_directory() . '/ince/ajax.php';
require_once get_template_directory() . '/ince/pagination.php';
require_once get_template_directory() . '/ince/options/user-option.php';

/**
 * Enqueue scripts
 *
 * @param string $handle Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of script names on which this script depends
 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
 */
function theme_name_scripts() {
	wp_enqueue_style( 'mdb', get_template_directory_uri(). '/css/mdb.min.css', '', false, false );
	wp_enqueue_script( 'mbdjs', get_template_directory_uri(). '/js/mdb.min.js', '', $ver = false, $in_footer = true );
	wp_enqueue_script( 'interac', get_template_directory_uri(). '/js/interactividad.js', '', $ver = false, $in_footer = true );
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
