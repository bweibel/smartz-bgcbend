<?php
/**
 * Template part for displaying all active feature boxes
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

use WP_Query;

$order = get_field('order');

$args = array( 
  'post_type' => 'featured_boxes',
  'orderby' => 'date'
);
$the_query = new WP_Query( $args ); 

$theme = get_template_directory_uri();
$color = get_field('feature_box_color');

?>

<section class="feature-box-list" >

  <?php if ( $the_query->have_posts() ) : ?>
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <?php get_template_part( 'template-parts/content/feature_box' ); ?>
    
    <?php endwhile; ?>
    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>
  <?php endif; ?>

</section>
