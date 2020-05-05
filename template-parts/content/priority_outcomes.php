<?php
/**
 * Template part for displaying all active feature boxes
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

use WP_Query;

$args = array( 
	'post_type' => 'outcomes',
);

$theme = get_template_directory_uri();


?>

<section class="priority-outcomes" >

  <?php
		echo get_field('outcomes_copy');
	?>

  <?php $the_query = new WP_Query( $args ); ?>

  <?php if ( $the_query->have_posts() ) : ?>
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <?php get_template_part( 'template-parts/content/outcome' ); ?>
    <?php endwhile; ?>
    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>
  <?php endif; ?>

</section>
