// Example 1 

<?php /* Template Name: newpage */ ?>

<?php get_header(); ?>

<table border="1">
    <tr>
     <th>Date</th>
     <th>FULL NAME</th>
     <th>Id</th>
    </tr>

      <?php

        global $wpdb;

        $result = $wpdb->get_results("SELECT * FROM wp_em_events");

        foreach ( $result as $print )   { ?>
          <tr>
              <td>  <?php echo $print->event_start_date; ?> </td>
              <td><?php echo $print->event_name; ?> </td>
              <td> <?php echo $print->event_id ; ?> </td>
          </tr>
            <?php }
      ?>

</table>
<?php get_header(); ?>
 

}


####################################################################################################


Example 2


<?php /* Template Name: newpage */ ?>

<?php get_header(); ?>

<table border="1">
    <tr>
     <th>Date</th>
     <th>FULL NAME</th>
     <th>STATUS</th>
    </tr>

      <?php

        global $wpdb;

        $result = $wpdb->get_results("SELECT * FROM wp_posts WHERE post_status = 'publish'");

        foreach ( $result as $print )   { ?>
          <tr>
              <td>  <?php echo $print->post_date; ?> </td>
              <td><?php echo $print->post_title; ?> </td>
              <td> <?php echo $print->post_status ; ?> </td>
          </tr>
            <?php }
      ?>

</table>
<?php get_header(); ?>
 

}
