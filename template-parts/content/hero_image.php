<?php
/**
 * Template part for displaying a Hero Image
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$hero = get_field('hero');


?>

<section class="hero">
	<div class="hero-img-wrap">
		<img src="<?php echo esc_url( $hero['image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['image']['alt'] ); ?>" />
	</div>
	<div class="hero-cta">
		<?php echo $hero['call_to_action']; ?>
	</div>
</section><!-- .entry-header -->
