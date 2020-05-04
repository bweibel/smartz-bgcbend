<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

// Use grid layout if blog index is displayed.
wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-front-page' );
?>

<!-- Hero Image -->
<?php get_template_part('template-parts/content/hero_image'); ?>

<!-- Main Content -->
<main id="primary" class="site-main">
	<?php
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content/entry_content');		
	}
	?>
</main><!-- #primary -->

<!-- Feature Boxes -->
<?php get_template_part( 'template-parts/content/feature_box_list' ); ?>

<?php
get_footer();
