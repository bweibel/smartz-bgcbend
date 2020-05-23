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
		<img src="<?php echo $theme;?>/assets/images/BGCB-Website-Logo-Stacked-White.svg" alt="">
	</div>
	<div class="connect">
		<h3>Connect With Us</h3>
			<div class="address">
				<p><strong>Administration Office & Downtown Location: </strong><br>
				500 NW Wall Street <br>
				Bend, OR 97703 <br>
				<strong><a href="tel:541-617-2877">(541) 617-2877</a></strong>
				</p>
			</div>
			<div class="address">
				<p><strong>East Bend Location: </strong><br>
				1707 Tempest Dr. <br>
				Bend, OR 97703 <br>
				<strong><a href="tel:541-385-3009">(541) 385-3009</a></strong>
				</p>
			</div>
	</div>
	<div class="social">
				<a href="#"><img src="<?php echo $theme;?>/assets/images/BGCB-Website-Icon-Social-Facebook.svg" alt="Facebook"></a>
				<a href="#"><img src="<?php echo $theme;?>/assets/images/BGCB-Website-Icon-Social-Twitter.svg" alt="Twitter"></a>
				<a href="#"><img src="<?php echo $theme;?>/assets/images/BGCB-Website-Icon-Social-YouTube.svg" alt="Youtube"></a>
			</div>
</div>

<div class="site-info">

		<?php
			printf("	<span>© %u %s.</span></br>", date('Y'), get_bloginfo());
			printf("	<span>BGCB is a 501(c)(3) non-profit organization.</span>")
		?>
	</span>
	<span>All rights reserved.</span>
</div><!-- .site-info -->
