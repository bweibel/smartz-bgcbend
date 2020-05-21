<?php
/**
 * Template part for displaying a Hero Image
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<section class="newsletter-signup ">
  <div class="newsletter-form wrap-large">
    <span class="newsletter-intro">Sign up for our Newsletter:</span>
      <?php 
        echo do_shortcode('[contact-form-7 id="35" title="Newsletter Signup"]');
      ?>
  </div>
  
</section>
