<?php
/**
 * Template part for displaying a post's header
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$colors = ['blue', 'green', 'orange', 'purple'];
$color = $colors[rand(0, 3)];
?>

<header class="entry-header <?php echo $color ?>">
		<?php
		get_template_part( 'template-parts/content/entry_title', get_post_type() );

		// get_template_part( 'template-parts/content/entry_meta', get_post_type() );

		if ( ! is_search() && !is_single()) {
			get_template_part( 'template-parts/content/entry_thumbnail', get_post_type() );
		}
		?>
	
</header><!-- .entry-header -->
<?php if (is_single()) {
			get_template_part( 'template-parts/content/entry_thumbnail', get_post_type() );
		}
		?>