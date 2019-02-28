<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Beami
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<div class="container-fluid">
		<!-- Main Banner Section -->
		<div class="row header_section">
			<div class="container header_section">
				<div class="col-md-12 text-right">
					<div class="nav-toggle">
						<div class="nav-toggle-bar"></div>
					</div>

					<nav class="nav">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
						) );
					?>
					</nav>
					
				</div>
				<div class="col-md-12">
					<div class="logo_sec">
						<?php
							the_custom_logo();
							if ( is_front_page() && is_home() ) :
						?>
						<!-- <h1 class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></h1> -->
						<?php $handle_logo_upload = get_option('handle_logo_upload'); ?>
						<?php
							else :
						?>
						<?php
							endif;
							$responsible_mailing_description = get_bloginfo( 'description', 'display' );
							if ( $responsible_mailing_description || is_customize_preview() ) :
						?>
						<?php endif; ?>
					</div>
				</div>
			</div>	
		</div>
		<!-- Main Banner Section -->

	<div id="content" class="site-content">
