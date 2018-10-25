<?php
/*
Template Name: Home Page Template
*/

get_header(); 
?>
<div class="row banner">
			<?php echo do_shortcode( '[metaslider id=53]' ) ?>
		</div>
<div class="container-fluid containercolor">
	<div class="row">
		<div class="container whtcolorbk containermain">
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<div class="row">
					<?php
					if ( have_posts() ) :
				// Start the Loop.
						while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					endwhile;
				// Previous/next post navigation.
					twentyfourteen_paging_nav();

					else :
				// If no content, include the "No posts found" template.
						get_template_part( 'content', 'none' );

					endif;
					?>

				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h1 class="bluesubhdtxt text-center"><a href="http://208.109.186.112/musaibsh/bostonthamil/events">Upcoming Events</a></h1>
					</div>
					
				</div>
				<div class="row">
					
					<?php query_posts(array(
    'category_name' => 'top-list', // get posts by category name
    'posts_per_page' => 6 // all posts
    ));
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    	<div class="eventmain">
    		<?php echo the_post_thumbnail('full', array('class' => 'img-responsive center-block')); ?>
    		<h1 class="eventhead"><?php the_title(); ?></h1>
    		<?php the_content(); ?>
    	</div>
    </div>

<?php endwhile; ?>
<?php wp_reset_query(); ?>
<?php endif; ?>

</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	<div class="rgtcol">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h1 class="bluesubhdtxt1 text-center">Our Sponsors</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<img src="http://208.109.186.112/musaibsh/bostonthamil/wp-content/uploads/2015/05/sponsor1.jpg" alt="" class="img-responsive center-block sponsorimg"/>
				<img src="http://208.109.186.112/musaibsh/bostonthamil/wp-content/uploads/2015/05/sponsor2.jpg" alt="" class="img-responsive center-block sponsorimg"/>
				<img src="http://208.109.186.112/musaibsh/bostonthamil/wp-content/uploads/2015/05/sponsor3.jpg" alt="" class="img-responsive center-block sponsorimg"/>
				<img src="http://208.109.186.112/musaibsh/bostonthamil/wp-content/uploads/2015/05/sponsor4.jpg" alt="" class="img-responsive center-block sponsorimg"/>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>