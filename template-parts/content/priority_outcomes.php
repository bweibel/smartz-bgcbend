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

$outcomes = get_field('outcomes');
?>

<section class="priority-outcomes page-content" >

  <?php
		echo $outcomes['content'];
	?>

</section>
