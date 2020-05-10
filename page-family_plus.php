<?php
/**
 * 
 * Template Name: Family Plus Template
 * 
 * The template for displaying family plus
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

$theme = get_template_directory_uri();
?>

<!-- Hero Image -->


	<main id="primary" class="site-main">
		<?php

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content/entry', 'page' );
		}
    ?>
    <h2 class="services-title">Family Plus Services</h2>
    <div class="services wrap-large">
      
      <div class="service">
        <img src="<?php echo $theme;?>/assets/images/BGCB-Website-Icon-Counseling.svg" alt="Counseling">
        <h3>Counseling</h3>
        <p></p>
      </div>
      <div class="service">
        <img src="<?php echo $theme;?>/assets/images/BGCB-Website-Icon-Family.svg" alt="Family">
        <h3>Family Engagement</h3>
        <p></p>
      </div>
      <div class="service">
        <img src="<?php echo $theme;?>/assets/images/BGCB-Website-Icon-Mentor.svg" alt="Counseling">
        <h3>Mentoring</h3>
        <p></p>
      </div>
      <div class="service">
        <img src="<?php echo $theme;?>/assets/images/BGCB-Website-Icon-Referral.svg" alt="Counseling">
        <h3>Referrals for Additional Services</h3>
        <p></p>
      </div>
    </div>
  </main><!-- #primary -->
  <section class="blue">
    <div class="enrollment wrap">
      
    </div>
  </section>
<?php
get_sidebar();
get_footer();
