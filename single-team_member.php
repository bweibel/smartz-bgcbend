<?php
/**
 * Template Name: Custom Post Template
 * Template Post Type: team_member
 *
 * When active, by adding the heading above and providing a custom name
 * this template becomes available in a drop-down panel in the editor.
 *
 * Filename can be anything.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#creating-page-templates-for-specific-post-types
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );


$colors = ['blue', 'green', 'orange', 'purple'];
$color = $colors[rand(0, 3)];
?>
	<main id="primary" class="site-main page">
		<header class="entry-header <?php echo $color ?>">
			<h1 class="entry-title">Meet the Team</h1>
		</header>
		<?php

		while ( have_posts() ) {
			get_template_part('template-parts/team-member/team_member');
		}
		?>
	</main><!-- #primary -->
<?php
get_sidebar();
get_footer();
