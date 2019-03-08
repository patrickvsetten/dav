<?php
$space_up = get_sub_field('space_up');
$space_down = get_sub_field('space_down');

?>

<section class="textsidebar textsidebar--contact padding-top--<?= $space_up; ?> padding-bottom--<?= $space_down; ?>" data-aos="fade">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-7">
				<<?php the_sub_field('heading'); ?>><?php the_sub_field('title'); ?></<?php the_sub_field('heading'); ?>>
				<span class="textsidebar__intro">
					<?php the_sub_field('intro'); ?>
				</span>
				<?php the_sub_field('content'); ?>
			</div>
			<div class="col-12 offset-lg-1 col-lg-4">
				<div class="textsidebar__sidebar">
					<<?php the_sub_field('heading_sidebar'); ?>><?php the_sub_field('title_sidebar'); ?></<?php the_sub_field('heading_sidebar'); ?>>
					<?php the_sub_field('text'); ?>
					<div class="textsidebar__links">
					<?php
						if( have_rows('links') ):
						    while ( have_rows('links') ) : the_row();
								?>

									<?php
										$link = get_sub_field('links');
										if( $link ):
											?>

											<a href="<?= $link['url']; ?>" data-text="<?= $link['title']; ?>" target="<?= $link['target']; ?>" class=""><img src="<?php the_sub_field('icon'); ?>" /><span><?= $link['title']; ?></span></a>

									<?php
								endif;
						    endwhile;
						endif;
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
