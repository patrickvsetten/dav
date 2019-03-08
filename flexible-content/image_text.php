<?php
$options = get_sub_field('input_section');

$space_up = get_sub_field('space_up');
$space_down = get_sub_field('space_down');
?>

<section class="imagetext margin-top--<?= $space_up; ?> margin-bottom--<?= $space_down; ?>" style="background-image:url('<?php the_sub_field('image');?>')">
	<div class="container">
		<div class="row <?php the_sub_field('alignment');?>">
			<div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-4 text_block">
				<div class="imagetext__wrapper imagetext__wrapper--<?php the_sub_field('background');?>" data-aos="fade">
					<div class="subtitle">
						<?php the_sub_field('subtitle'); ?>
					</div>
					<<?php the_sub_field('heading');?>><?php the_sub_field('title');?></<?php the_sub_field('heading');?>>
					<div class="imagetext__text">
						<p><?php the_sub_field('text');?></p>
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
</section>
