<?php
$space_up = get_sub_field('space_up');
$space_down = get_sub_field('space_down');

?>

<section class="textsidebar padding-top--<?= $space_up; ?> padding-bottom--<?= $space_down; ?>" data-aos="fade">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-7">
				<<?php the_sub_field('heading'); ?>><?php the_sub_field('title'); ?></<?php the_sub_field('heading'); ?>>
				<span class="textsidebar__intro">
					<?php the_sub_field('intro'); ?>
				</span>
				<?php the_sub_field('content'); ?>
			</div>
			<div class="col-12 col-md-5 col-xl-4 offset-xl-1">
				<div class="textsidebar__sidebar">
					<<?php the_sub_field('heading_sidebar'); ?>><?php the_sub_field('title_sidebar'); ?></<?php the_sub_field('heading_sidebar'); ?>>
					<?php if( get_sub_field('links_text') == 'links' ): ?>
						<?php
							if( have_rows('links') ):
								while ( have_rows('links') ) : the_row();
									$link 		= get_sub_field('link');
									$link_url 	= $link['url'];
									$link_title = $link['title'];
										?>
											<a href="<?= $link_url; ?>" class="links__link">
												<svg class="icon icon--small"><use xlink:href="#icon-arrow" /></svg>
												<span class="links__word-link"><?= $link_title; ?></span>
											</a>
										<?php
									endwhile;
								endif;
							?>
						<?php elseif( get_sub_field('links_text') == 'tekst' ): ?>
							<?php the_sub_field('text'); ?>
						<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
