// Paste this line to get the footer from funtions.php file. //

<?php dynamic_sidebar( 'Footer Widget Area' ); ?>

Add this lines of codes to register the widgets in wp-panel.
  if ( function_exists('register_sidebar') ) {
    register_sidebar( array(
        'name' => __( 'Footer One', 'theme-slug' ),
        'id' => 'footer_one',
  'before_widget' =>  '<div class="widget %2$s">',
        'after_widget'  =>  '</div>',
  'before_title'  =>  '<h4 class="title">',
        'after_title'   =>  '</h4>',
   'description' => __( 'Widgets contains video', 'theme-slug' )
    ) );
  register_sidebar( array(
        'name' => __( 'Footer Two', 'theme-slug' ),
        'id' => 'footer_two',
  'before_widget' =>  '<div class="widget %2$s">',
        'after_widget'  =>  '</div>',
  'before_title'  =>  '<h4 class="title">',
        'after_title'   =>  '</h4>',
   'description' => __( 'Widgets contains video', 'theme-slug' )
    ) );
  }
