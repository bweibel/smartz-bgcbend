<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$theme = get_template_directory_uri();
?>

<div class="info wrap-large">
	<div class="logo">
		<img src="<?php echo $theme;?>/assets/images/BGCB-Website-Logo-Stacked-White.svg" alt="Boys & Girls Club of Bend Logo">
		<img src="<?php echo $theme;?>/assets/images/unitedway-logo_white.png" alt="United Way of Bend Logo">

	</div>
	<div class="connect">
		<h3>Connect With Us</h3>
			<div class="address">
				<p><strong>Administration Office & Downtown Location: </strong><br>
				500 NW Wall Street <br>
				Bend, OR 97703 <br>
				<strong><a href="tel:541-617-2877">(541) 617-2877</a></strong><br>
				<a class="button button-orange" style="margin-top: 10px;" href="https://goo.gl/maps/XCrPMEgQNCagxLut7" rel=”nofollow” target="_blank">Get Directions</a>
				</p>
			</div>
			<div class="address">
				<p><strong>East Bend Location: </strong><br>
				1707 Tempest Dr. <br>
				Bend, OR 97703 <br>
				<strong><a href="tel:541-385-3009">(541) 385-3009</a></strong><br>
				<a class="button button-orange" style="margin-top: 10px;" href="https://goo.gl/maps/Q63i5ssT4aVKc3Rj6" rel=”nofollow” target="_blank">Get Directions</a>
				</p>
			</div>
	</div>
	<div class="social">
				<a href="https://www.facebook.com/bgcbend" target="_blank"><img src="<?php echo $theme;?>/assets/images/BGCB-Website-Icon-Social-Facebook.svg" alt="Facebook"></a>
				<a href="https://www.instagram.com/bgcbend/" target="_blank"><img src="<?php echo $theme;?>/assets/images/insta.png" alt="Instagram"></a>
				<a href="https://www.youtube.com/channel/UCZNcqKg1o3nMcDXBRvOxLyQ" target="_blank"><img src="<?php echo $theme;?>/assets/images/BGCB-Website-Icon-Social-YouTube.svg" alt="Youtube"></a>
			</div>
</div>

<div class="site-info">

		<?php
			printf("	<span>© %u %s.</span></br>", date('Y'), get_bloginfo());
			printf("	<span>BGCB is a 501(c)(3) non-profit organization.</span><br>");
		?>
	</span>
	<span>All rights reserved.</span>
	<br>
	<span>This site is protected by reCAPTCHA and the Google <a target="_blank" rel="noopener" href="https://policies.google.com/privacy" >Privacy Policy</a> and <a target="_blank" rel="noopener" href="https://policies.google.com/terms">Terms of Service</a> apply.</span>

</div><!-- .site-info -->
