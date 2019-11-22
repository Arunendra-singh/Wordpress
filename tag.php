<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>

<section class="video-section">
    <div class="container">
      


        <h1 class="text-center"><?php the_title(); ?> Gallery</h1>
          <?php 
            $postid = get_the_ID();     // Now getting tag id
            
            $my_query_args = array(
            'post_type'     => array( 'videos'),
            'tag__in'       =>get_queried_object(), 
            'orderby'       => 'post_date',
            'posts_per_page' => -1
            );

            $my_query = new WP_Query( $my_query_args );
          ?>
        <div class="row">
            <?php 
                if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); 
            ?>
            <div class="col-md-4 video-custom-grid">
                <div class="video-container">
                    <div class="video-title">
                        <h4 class="text-center"><?php the_title(); ?></h4>
                    </div>
                    <div class="video">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <?php
                endwhile; 
                endif;
            ?>
           <div class="pagination-block">
                <?php pagination(); ?>
    </div> 
        </div>
    </div>
</section>

<?php get_footer(); ?>