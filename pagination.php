// This is the reference code for pagination via custom loop

function woocommerce_subcats_from_parentcat_by_NAME_sec($parent_cat_NAME) {
              $IDbyNAME = get_term_by('name', $parent_cat_NAME, 'product_cat');
              $product_cat_ID = $IDbyNAME->term_id;
                $args = array(
                  'orderby' => 'id', 
                  'order' => 'ASC',
                  'hierarchical' => 1,
                  'show_option_none' => '',
                  'hide_empty' => 0,
                  'parent' => $product_cat_ID,
                  'taxonomy' => 'product_cat'
                );
              $subcats = get_categories($args);

                $rows_per_page = 12;
                $numrows = count($subcats);
                $lastpage = ceil($numrows/$rows_per_page);    // Calculate number of $lastpage

                // condition inputs/set default
                if (isset($_GET['pageno'])) {

                   $pageno = $_GET['pageno'];

                } else {
                   $pageno = 1;
                }

                // Find start and end array index that corresponds to the reuqeted pageno
                $start = ($pageno - 1) * $rows_per_page;
                $end = $start + $rows_per_page -1;

                // limit $end to highest array index
                if($end > $numrows - 1){ $end = $numrows - 1; }

                // display array from $start to $end
                foreach (
                  array_slice($subcats, $start, $end) as $sc) {

                  $link = get_term_link( $sc->slug, $sc->taxonomy );
                  $shortcodevaraibleval = $sc->slug;
                  echo "<div class='categoryhead' id='$sc->slug'><h1>$sc->name</h1></div>";
                  echo do_shortcode('[product_table lazy_load="true" columns="image,name,description,price,add-to-cart" category="'. $sc->slug.'" image_size="100x100" show_quantity="true"]');   
                }

                // first/prev pagination hyperlinks
                if ($pageno == 1) {
                   echo " Prev  << ";
                } else {
                   echo " <a href='?pageno=1'>Prev</a> ";
                   echo str_repeat('&nbsp;', 2);
                   $prevpage = $pageno-1;
                   echo " <a href='?pageno=$prevpage'> << </a> ";
                }

                // Display current page or pages
                echo str_repeat('&nbsp;', 2);
                echo " $pageno ";
                echo str_repeat('&nbsp;', 2);

                // next/last pagination hyperlinks
                if ($pageno == $lastpage) {
                   echo " >>  Last ";
                } else {
                   $nextpage = $pageno+1;
                   echo " <a href='?pageno=$nextpage'> >> </a> ";
                   echo str_repeat('&nbsp;', 2);
                   echo " <a href='?pageno=$lastpage'>Last</a> ";
                }

              }

              woocommerce_subcats_from_parentcat_by_NAME_sec($categoryname);  
           ?>
