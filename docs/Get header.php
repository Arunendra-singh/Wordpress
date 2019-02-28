1 - for header copy paste the code in header.php and functions.php
2 - Copy and paste the code of ul class in the menu_class to work.


// Copy and paste the code in functions.php file for register the menu in wordpress. //

 add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;



// Copy and paste the code in header.php file for the menu. //

 <?php /* Primary navigation */
    wp_nav_menu( array(
      'menu' => 'top-menu',
      'depth' => 2,
      'container' => false,
      'menu_class' => 'nav navbar-nav navbar-right',
      //Process nav menu using our custom nav walker
      'walker' => new wp_bootstrap_navwalker())
    );
 ?>
