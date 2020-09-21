<?php

// Main css + Bootstrap css

function apk_load_styles(){
    //wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    
    //wp_enqueue_style('theme_style');
}

add_action('wp_enqueue_scripts', 'apk_load_styles');


// JS from Bootstrap
function themebs_enqueue_scripts() {
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.bundle.min.js', array( 'jquery' ) );
  }
  add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');



// Add .class navbar list

function wp_list_pages_filter($output) {
  $output = str_replace('page_item', 'page_item nav-item', $output);
  return $output;
}
add_filter('wp_list_pages', 'wp_list_pages_filter');




function apk_register_sidebars() {

  register_sidebar( array (
    'name' => __('Sidebar principal', 'apk'), 
    'id' => 'main_sidebar',
    'description' => __('Este es el sidebar principal', 'apk'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
   ) );

}
add_action( 'widgets_init','apk_register_sidebars' );

// Add thumbnails

add_theme_support( 'post-thumbnails' );












?>
