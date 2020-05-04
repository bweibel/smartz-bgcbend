<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-info">
	<span>
		<?php
			printf("© %u %s.", date('Y'), get_bloginfo());
		?>
	</span>
	<span>All rights reserved.</span>
</div><!-- .site-info -->
