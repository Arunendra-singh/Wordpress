// Now i sm going to show you how to create testimonials in php file using owl carousel.
// Before start we just make sure that we have required file in our root directory 
// Required file is : owl.carousel.js




// Code for template or page 

<!-- Testimonial Section -->
		<div class="row testimonial_section">
			<div class="container">
				<!-- Testimonial Slider -->
				<div id="testimonial-slider" class="testimonial_slider owl-carousel">

					<?php
					    $loop = new WP_Query( array( 'post_type' => 'testimonials','posts_per_page' => '-1') );
					    if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); 
					?>
						<div class="col-md-10">
							<div class="testimonial_item">
								<div class="item">
									<h3 class="test_content"><?php the_content();?></h3>
									<h4><?php the_title();?></h4>
								</div>
							</div>
						</div>

					<?php endwhile; endif; wp_reset_postdata(); ?>
	            	<?php wp_reset_query(); ?>

				</div>
<!-- Testimonial Slider -->





// Script for template or page 

<script>
	 jQuery('.testimonial_slider').owlCarousel({
		dots:false,
	    loop:true,
		nav:true,
	    margin:10,
		autoplay:true,
	    responsive:{
	        0:{
	            items:1,
	        },
			600:{
	            items:1,
	        },
	        1000:{
	            items:1,
	            nav:true,
	            loop:true
	        }
	    }
	 });
	</script>
