<?php
/**
 * Template part for displaying the call to action
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$theme = get_template_directory_uri();
$cols = get_field('cols');
$rows = get_field('rows');
$color = get_field('color');
$order = get_field('order');

?>

<div class="feature-box" >
  <div class="wrap-large">
    <?php the_title('<h3 class="title">', '</h3>') ?>
    <?php the_content( ); ?>
  </div>
  

</div>
