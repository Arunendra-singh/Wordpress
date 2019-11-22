if you want to get category or tag title on your page, please follow the code : 

<div class="row">   

     <?php
        $taxonomy = 'post_tag';             // 'post_tag' or 'category_name' according to your requirements
        $terms = get_terms($taxonomy);      // Get all terms of a taxonomy  

        if ( $terms && !is_wp_error( $terms ) ) :

        foreach ( $terms as $term ) {
     ?>             

        <div class="col-md-3 custom-grid">

            <div class="catergory-box">
                <h3> <a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a> </h3>
             </div>
        </div>

     <?php }
           endif;
     ?>

</div>
