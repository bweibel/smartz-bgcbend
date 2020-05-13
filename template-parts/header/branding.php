<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-branding">
	<?php the_custom_logo(); ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="white-logo-link" rel="home">
		<img src="<?php echo get_template_directory_uri() . '/assets/images/BGCB-Website-Logo-Stacked-White.svg'?>" class="custom-logo" alt="BGCB Logo" sizes="100vw" width="119" height="67">
	</a>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mobile-logo-link" rel="home">
		<img src="<?php echo get_template_directory_uri() . '/assets/images/BGCB-Website-Mobile-Logo-Horizontal-FC.svg'?>" class="custom-logo" alt="BGCB Logo" sizes="100vw">
	</a>

	<?php
	if ( is_front_page() && is_home() ) {
		?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php
	} else {
		?>
		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		<?php
	}
	?>

	<?php
	$wp_rig_description = get_bloginfo( 'description', 'display' );
	if ( $wp_rig_description || is_customize_preview() ) {
		?>
		<p class="site-description">
			<?php echo $wp_rig_description; /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */ ?>
		</p>
		<?php
	}
	?>
</div><!-- .site-branding -->
