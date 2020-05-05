<?php
/**
 * Template part for displaying the call to action
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$theme = get_template_directory_uri();
$cols = get_field('feature-box-cols');
$rows = get_field('feature-box-rows');
$color = get_field('feature-box-color');

?>

<div class="feature-box" >

  <?php the_title('<h3 class="title">', '</h3>') ?>
  <?php the_content( ); ?>

</div>
