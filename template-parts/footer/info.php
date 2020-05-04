<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-info">

		<?php
			printf("	<span>© %u %s.</span></br>", date('Y'), get_bloginfo());
			printf("	<span>BGCB is a 501(c)(3) non-profit organization.</span>")
		?>
	</span>
	<span>All rights reserved.</span>
</div><!-- .site-info -->
