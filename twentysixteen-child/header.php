<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until 
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Leadbgone
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lead B Gone</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>

<body class="bdy">
    <div class="container-fluid">
        <div class="row menu_header">
            <div class="col-lg-10 col-md-10 col-sm-12">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <?php
                            the_custom_logo();
                            if ( is_front_page() && is_home() ) :
                        ?>
                        <?php $handle_logo_upload = get_option('handle_logo_upload'); ?>
                        
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        
                        <?php else : ?>
                        <?php
                            endif;
                            $leadbg_description = get_bloginfo( 'description', 'display' );
                            if ( $leadbg_description || is_customize_preview() ) :
                        ?>
                        <?php endif; ?>

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>         
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php
                            wp_nav_menu( array(
                                    'theme_location' => 'primary',
                                    'menu_class'     => 'nav navbar-nav custnav navbar-right',
                                    'menu_id'        => 'primary-menu',
                                )
                            );
                        ?>
                    </div>
                </nav>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <div class="header_rgt">
                    <ul class="list-inline header_social">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> 
    <!--Header Ends-->
