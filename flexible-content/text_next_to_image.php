<?php
$options = get_sub_field('input_section');

$space_up = get_sub_field('space_up');
$space_down = get_sub_field('space_down');
?>

<section class="textimage__section padding-top--<?= $space_up; ?> padding-bottom--<?= $space_down; ?>">
	<div class="container">
		<div class="row <?php the_sub_field('alignment');?>">
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 image_block">
				<figure class="object-fit__container shadow">
					<img class="image" src="<?php the_sub_field('image');?>" alt="<?php the_sub_field('title');?>" data-aos="fade" data-aos-delay="300">
				</figure>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 text_block">
				<div class="block_wrapper">
					<div class="text_wrapper" data-aos="fade">
						<<?php the_sub_field('heading');?>><?php the_sub_field('title');?></<?php the_sub_field('heading');?>>
						<div class="text_block">
							<?php the_sub_field('text');?>
						</div>
						 <?php
						if( $options && in_array('button', $options) && have_rows('button') ):
							while( have_rows('button') ): the_row();

								$link = get_sub_field('button_link');
								if( $link ):
									?>
										<a href="<?= $link['url']; ?>" class="button button--primary" target="<?= $link['target']; ?>" data-text="<?= $link['title']; ?>">
											<span class="button__text">
												<?= $link['title']; ?>
											</span>
											<span class="button__icon">
												<svg class="icon icon--small"><use xlink:href="#icon-arrow"/></svg>
											</span>
										</a>
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
