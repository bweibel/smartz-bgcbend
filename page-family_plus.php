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
    <header class="family-header">
      <?php

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content/entry_content', get_post_type() );
		}
    ?>
      <?php get_template_part( 'template-parts/content/entry_thumbnail', get_post_type() ); ?>
    </header>
		
    <h2 class="services-title">Family Plus Services</h2>
    <section class="services wrap-large">
      
      <div class="service">
        <img src="<?php echo $theme;?>/assets/images/BGCB-Website-Icon-Counseling.svg" alt="Counseling">
        <h3>Counseling</h3>
        <p>Regular individual sessions with the Director of Youth & Family Services to assess individual needs of the Club member and create a plan to address identified needs.</p>
      </div>
      <div class="service">
        <img src="<?php echo $theme;?>/assets/images/BGCB-Website-Icon-Family.svg" alt="Family">
        <h3>Family Engagement</h3>
        <p>Special parent and family night events and informational sessions will be advertised as they come availible.</p>
      </div>
      <div class="service">
        <img src="<?php echo $theme;?>/assets/images/BGCB-Website-Icon-Mentor.svg" alt="Counseling">
        <h3>Mentoring</h3>
        <p>BGC Bend runs an on-site mentoring program. Enrolled youth will be matched with an adult staff or volunteer mentor who will meet with their mentee weekly. Additional information available upon request.</p>
      </div>
      <div class="service">
        <img src="<?php echo $theme;?>/assets/images/BGCB-Website-Icon-Referral.svg" alt="Counseling">
        <h3>Referrals for Additional Services</h3>
        <p>Assistance locating and accessing community services and resources.</p>
      </div>
    </section>

    <!-- Programs -->
  <?php get_template_part( 'template-parts/content/programs_list' ); ?>

  </main><!-- #primary -->
  <!-- <section class="blue blue-container">
    <div class="enrollment wrap-large">
      <div class="text">
        <h3 class="title">Family Plus Enrollment Form</h3>
        <p>The purpose of this form is to help us serve you, your children, and your family better. The more information you can share, the better we will be able to support your family. The information on this form will be kept strictly confidential and is only for the purpose of assessing needs, enrolling your family in the program, and creating a service plan.</p>
        <p>Please download and complete the form and bring them in to our office or <a href="/members-families/family-plus/enroll/">submit them online</a> </p>
        <p><strong>Boys and Girls Club of Bend</strong><br>
            500 NW Wall Street<br>
            Bend, OR 97703
      </p>
      </div>
      <div class="action">
        <img src="<?php echo $theme;?>/assets/images/BGCB-Website-Icon-Form.svg" alt="">
        <a href="#" class="button button-blue">DOWNLOAD</a>
      </div>
      
  </section> -->
<?php
get_sidebar();
get_footer();
