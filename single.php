<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

$colors = ['blue', 'green', 'orange', 'purple'];
$color = $colors[rand(0, 3)];

?>
	<main id="primary" class="site-main">
	<header class="entry-header <?php echo $color ?>">
			<h1 class="entry-title">Events & News</h1>
		</header>
		<?php

		while ( have_posts() ) {
			the_post();

			// get_template_part( 'template-parts/content/entry', 'page' );

			get_template_part( 'template-parts/content/entry', 'get_post_type()' );
		}
		?>
	</main><!-- #primary -->
<?php
get_sidebar();
get_footer();
