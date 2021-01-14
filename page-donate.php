<?php
/**
 * Template Name: Donate Template
 * The template for displaying donate page. Currently a standard page, but footer does not include donate cta
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

?>

	<main id="primary" class="site-main">
		<?php

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content/entry', 'page' );
		}
		?>
	</main><!-- #primary -->
	<?php get_template_part( 'template-parts/content/newsletter_signup' ); ?>
<?php
// get_sidebar();
get_footer('donate');
