<?php

if ( ! function_exists( 'leadbgone_scripts' ) ) :

function leadbgone_scripts() {

	wp_enqueue_style( 'bootstrap_css', get_stylesheet_directory_uri() . '/css/bootstrap.css' );

	wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri() . '/style.css' );

	wp_enqueue_style( 'custom_style', get_stylesheet_directory_uri() . '/css/custom_style.css' );	

	wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/fonts/font-awesome-4.7.0/css/font-awesome.css' );

	wp_enqueue_style( 'owl_carousel_css', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css' );

	wp_enqueue_style( 'owl_carousel_default', get_stylesheet_directory_uri() . '/css/owl.theme.default.min.css' );

	wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/js/jquery.min.js' );

	wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.js' );

	wp_enqueue_script( 'owl-carousel-js', get_stylesheet_directory_uri() . '/js/owl.carousel.js' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {

		wp_enqueue_script( 'comment-reply' );
	}

}
endif; // leadbgone_scripts

add_action( 'wp_enqueue_scripts', 'leadbgone_scripts' );   

/* Enqueue scripts and styles end */

/*
* Menu register for child theme 
*/

function register_menus() {
  	register_nav_menus(
	    array(
		  'primary' => __('Primary Menu'),
	      'header' => __( 'Header Menu' ),
	      'extra_menu' => __( 'Extra Menu' )
	    )
  	);
}
add_action( 'init', 'register_menus' );

/**
 * Register custom post type..
 */
function Leadbg_posts() {
 
    register_post_type( 'epa-training',
    // CPT Options
        array(
            'labels' 	  => array(
                'name' 	  => __('EPA Training'),
                'singular_name' => __('EPA Trainings')
            ),
            'public' 	  => true,
            'has_archive' => true,
            'taxonomies'  => array('category'),
            'supports'    => array('editor', 'excerpt', 'thumbnail', 'title', 'custom-fields',),
            'rewrite' 	  => array('slug' => 'epa-training'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'Leadbg_posts' );


/**
* Function for footer widgets. 
*/
register_sidebar( array(
	'name' => 'Footer Sidebar 1',
	'id' => 'footer-sidebar1',
	'description' => 'Appears in the footer area',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) 
);

register_sidebar( array(
	'name' => 'Footer Sidebar 2',
	'id' => 'footer-sidebar2',
	'description' => 'Appears in the footer area',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) 
);

register_sidebar( array(
	'name' => 'Footer Sidebar 3',
	'id' => 'footer-sidebar3',
	'description' => 'Appears in the footer area',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) 
);
/* End function for footer widgets. */

//Register Nav Walker
require_once('wp_bootstrap_navwalker.php');

/* Register slider on dashboard */
require_once('sliders.php');

require_once('breadcrumbs.php');

function myfavicon() {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'/favicon.ico" />';
}
add_action('wp_head', 'myfavicon');
