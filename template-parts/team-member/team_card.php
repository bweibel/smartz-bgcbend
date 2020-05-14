<?php
/**
 * Template part for displaying a team member in a list
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$theme = get_template_directory_uri();
$job_title = get_field('job_title');

?>

<section class="team-card" style="">
<?php
		global $wp_query;
		if ( 0 === $wp_query->current_post ) {
			the_post_thumbnail(
				'post-thumbnail',
				[
					'class' => 'skip-lazy',
					'alt'   => the_title_attribute(
						[
							'echo' => false,
						]
					),
				]
			);
		} else {
			the_post_thumbnail(
				'post-thumbnail',
				[
					'alt' => the_title_attribute(
						[
							'echo' => false,
						]
					),
				]
			);
		}
		?>
  <?php the_title('<h2 class="team-name">', '</h2>') ?>
  <h3 class="job-title"><?php printf($job_title) ?></h3>
  <a href="<?php the_permalink() ?>" class="team-link"></a>
</section>
