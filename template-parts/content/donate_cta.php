<?php
/**
 * Template part for displaying Donate CTA
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$theme = get_template_directory_uri();
?>

<a class="donate-cta" href="/donate">
  <img src="<?php echo $theme;?>/assets/images/BGCB-Website-Icon-Donate.svg" alt=""><span>Donate Now</span>
</a>
