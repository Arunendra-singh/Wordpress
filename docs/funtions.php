<?php

add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
function enqueue_child_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array('parent-style')  );
}
 require_once('wp_bootstrap_navwalker.php');



/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;

function wpt_register_js() {
   wp_register_script('jquery.bootstrap', get_template_directory_uri() . '/js/bootstrap.js', 'jquery');
   wp_enqueue_script('jquery.bootstrap');
  }
  add_action( 'init', 'wpt_register_js' );
  function wpt_register_css() {
   wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
   wp_enqueue_style( 'bootstrap' );
  }
  add_action( 'wp_enqueue_scripts', 'wpt_register_css' );
