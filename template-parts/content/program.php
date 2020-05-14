<?php
/**
 * Template part for displaying the call to action
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$theme = get_template_directory_uri();
$cols = get_field('cols');
$rows = get_field('rows');
$color = get_field('color');
$order = get_field('order');
$subtitle = get_field('sub_title');

?>

<div class="program" >
  <div class="program-image">
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
    </div>
    <div class="title-box">
      <?php the_title('<h3 class="title">', '</h3>') ?>
      <?php echo '<h4 class="subtitle">' . $subtitle . '</h4>'; ?>
      <a class="button" href="<?php the_permalink( ) ?>">Learn More</a>
    </div>
    <div class="content-box">
      <?php the_content( ); ?>
    </div>

</div>
