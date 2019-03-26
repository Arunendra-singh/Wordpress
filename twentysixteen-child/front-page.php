<?php 
    get_header(); 
?>

<!--Main Content starts-->
    <div class="container-fluid">
        <!-- Slider Section -->
        <div class="row slider_section">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <?php
                    $slides = array(); 
                    $args = array( 'posts_per_page'=>5, 'post_type' => 'sliders', 'order' => 'ASC', 'nopaging'=>true );
                    $slider_query = new WP_Query( $args );
                    if ( $slider_query->have_posts() ) {
                        while ( $slider_query->have_posts() ) {
                          $slider_query->the_post();
                            if(has_post_thumbnail()){
                             $temp = array();
                             $thumb_id = get_post_thumbnail_id();
                             $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
                             $thumb_url = $thumb_url_array[0];
                             //$temp['content'] = get_the_content();
                             $temp['excerpt'] = get_the_excerpt();
                             $temp['image'] = $thumb_url;
                             $slides[] = $temp;
                            }
                        }
                    } 
                    wp_reset_postdata();
                ?>

                <?php if(count($slides) > 0) { ?>
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner" role="listbox">
                            <?php $i=0; foreach($slides as $slide) { extract($slide); ?>
                            <div class="item <?php if($i == 0) { ?>active<?php } ?>">
                                <img src="<?php echo $image ?>" alt="<?php echo esc_attr($title); ?>">
                                <div class="carousel-caption">
                                    <div class="banner_content">
                                        <p><?php echo $excerpt; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; } ?>
                        </div>

                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                    </div>

                <?php } ?>
            </div>
        </div>
        <!-- Slider Section Ends -->

        <!-- About Us Section -->
        <div class="row aboutus_section">
            <div class="container">
                <div class="col-md-12 col-sm-12">
                    <div class="aboutus_content">
                        <h1 class="section_title"><?php the_field('about_us_heading'); ?></h1>
                        <p><?php the_field('about_us_description'); ?></p>
                        <a href="<?php the_field('about_us_button_link'); ?>" class="btn-blue"><?php the_field('about_us_button'); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Us Section Ends -->

        <!-- Training Section -->
        <div class="row training_section">
            <div class="container">
                <div class="col-md-12">
                    <div class="training_content">
                        <h1 class="section_title"><?php the_field('training_section_title'); ?></h1>
                    </div>

                    <div id="training-slider" class="training_slider owl-carousel">
                        <div class="item">
                            <div class="training_wrap">
                                <div class="training_desc">
                                    <p>June 5, 2013</p>
                                    <h4>Wednesday
                                    <span>(English)</span><h4>
                                    <p>No Seats Available<br>Bronx, NY</p>
                                </div>  
                                <a href="http://coderzz.com/arunendra/leadbgone/register-form" class="training_btn" target="_blank">Register Now</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="training_wrap">
                                <div class="training_desc">
                                    <p>June 7,  2013</p>
                                    <h4>Friday
                                    <span>(Spanish)</span><h4>
                                    <p>No Seats Available<br>Bronx, NY</p>
                                </div>  
                                <a href="http://coderzz.com/arunendra/leadbgone/register-form" class="training_btn" target="_blank">Register Now</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="training_wrap">
                                <div class="training_desc">
                                    <p>June 21,  2013</p>
                                    <h4>Friday
                                    <span>(Spanish)</span><h4>
                                    <p>No Seats Available<br>Bronx, NY</p>
                                </div>  
                                <a href="http://coderzz.com/arunendra/leadbgone/register-form" class="training_btn" target="_blank">Register Now</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="training_wrap">
                                <div class="training_desc">
                                    <p>June 5,  2013</p>
                                    <h4>Wednesday
                                    <span>(English)</span><h4>
                                    <p>No Seats Available<br>Bronx, NY</p>
                                </div>  
                                <a href="http://coderzz.com/arunendra/leadbgone/register-form" class="training_btn" target="_blank">Register Now</a>
                            </div>
                        </div>
                        
                    </div>  
                </div>   
            </div>
        </div>
        <!-- Training Section Ends -->

        <!-- Signup Section -->
        <div class="row signup_section">
            <div class="container">
                <div class="col-md-9 col-sm-8">
                    <div class="signup_content">
                        <h2><?php the_field('signup_section_title'); ?></h2>   
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <a href="<?php the_field('signup_section_button_link'); ?>" class="btn-signup"><?php the_field('signup_section_button'); ?></a>
                </div>
            </div>
        </div>
        <!-- Signup Section Ends -->

        <!-- Services Section -->
        <div class="row services_section">
            <div class="container">
                <div class="col-md-12">
                    <div class="service_content">
                        <h1 class="section_title"><?php the_field('services_section_title_desc'); ?></h1>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service_single">
                            <div class="service_image">
                                <img src="<?php the_field('services_section_img_1'); ?>" class="img-responsive center-block service_icon1"> 
                                <img src="<?php the_field('services_section_hover_img_1'); ?>" class="img-responsive center-block service_icon2">
                            </div>
                            <a href="http://coderzz.com/arunendra/leadbgone/renovation"><h3 class="service_head"><?php the_field('services_section_title_1'); ?></h3></a>
                        </div>
                    </div>  
                    <div class="col-md-3 col-sm-6">
                        <div class="service_single">
                            <div class="service_image">
                                <img src="<?php the_field('services_section_img_2'); ?>" class="img-responsive center-block service_icon1">
                                <img src="<?php the_field('services_section_hover_img_2'); ?>" class="img-responsive center-block service_icon2">
                            </div>
                            <a href="http://coderzz.com/arunendra/leadbgone/repair"><h3 class="service_head"><?php the_field('services_section_title_2'); ?></h3></a>
                        </div>
                    </div>  
                    <div class="col-md-3 col-sm-6">
                        <div class="service_single">
                            <div class="service_image">
                                <img src="<?php the_field('services_section_img_3'); ?>" class="img-responsive center-block service_icon1">
                                <img src="<?php the_field('services_section_hover_img_3'); ?>" class="img-responsive center-block service_icon2">
                            </div>
                            <a href="http://coderzz.com/arunendra/leadbgone/painting-must-training"><h3 class="service_head"><?php the_field('services_section_title_3'); ?></h3></a>
                        </div>
                    </div>  
                    <div class="col-md-3 col-sm-6">
                        <div class="service_single">
                            <div class="service_image">
                                <img src="<?php the_field('services_section_img_4'); ?>" class="img-responsive center-block service_icon1">
                                <img src="<?php the_field('services_section_hover_img_4'); ?>" class="img-responsive center-block service_icon2">
                            </div>
                            <a href="http://coderzz.com/arunendra/leadbgone/re-certification"><h3 class="service_head"><?php the_field('services_section_title_4'); ?></h3></a>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- Services Section Ends -->

        <!-- Service Box Section -->
        <div class="row servicebox_section">
            <div class="col-md-6 p-0">
                <div class="imagebox">
                    <img src="<?php the_field('service_box_img_1'); ?>" class="img-responsive center-block">
                    <div class="image_desc">
                        <h2><?php the_field('service_box_title_1'); ?></h2>
                        <a href="<?php the_field('service_box_button_link_1'); ?>" class="btn-dark"><?php the_field('service_box_button_title_1'); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="imagebox">
                    <img src="<?php the_field('service_box_img_2'); ?>" class="img-responsive center-block">
                    <div class="image_desc">
                        <h2><?php the_field('service_box_title_2'); ?></h2>
                        <a href="<?php the_field('service_box_button_link_2'); ?>" class="btn-dark"><?php the_field('service_box_button_title_1'); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Box Section Ends -->

        <!-- Contact Section -->
        <div class="row connect_section">
            <div class="col-md-12">
                <div class="connect_title">
                    <h1 class="section_title"><?php the_field('contact_section_heading'); ?> </h1>
                </div>
                <ul class="list-inline connect_list">
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- Connect Section Ends -->

    </div>  
    <!-- Main Content Ends Here -->

<?php 
    get_footer(); 
?>
