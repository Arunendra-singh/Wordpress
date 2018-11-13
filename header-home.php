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
						<a href="<?php echo home_url(); ?>" class="custom-logo-link" rel="home" itemprop="url"><img width="187" height="146" src="http://coderzz.com/arunendra/Beami/wp-content/uploads/2018/11/cropped-inner-pg-logo-1.png" class="custom-logo" alt="Beami" itemprop="logo"></a>	
					</div>
				</div>
			</div>	
		</div>
		<!-- Main Banner Section -->

	<div id="content" class="site-content">
