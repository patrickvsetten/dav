<?php
$space_up = get_sub_field('space_up');
$space_down = get_sub_field('space_down');

$num_rows = count(get_sub_field('blocks'));
$cols = [
	'',
	'col-12 koloms-1',
	'col-12 col-sm-12 col-md-6 col-lg-6 koloms-2',
	'col-12 col-sm-12 col-md-4 col-lg-4 koloms-3',
	'col-12 col-sm-12 col-md-6 col-lg-3 koloms-4',
];

?>

<section class="blocks padding-top--<?= $space_up; ?> padding-bottom--<?= $space_down; ?>">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				 <<?php the_sub_field('blocks_main_heading');?> class="mbn"><?php the_sub_field('blocks_main_title');?></<?php the_sub_field('blocks_main_heading');?>>
				 <div class="subtitle"><?php the_sub_field('blocks_main_subtitle');?></div>
			</div>
		</div>
		<div class="row">
			<?php
				if( have_rows('blocks') ):
					$i = 0;
					while ( have_rows('blocks') ) : the_row();
						$i++;
						$title 		= get_sub_field('block_title');
						$image		= get_sub_field('block_image');
						$content	= get_sub_field('block_text');
						$link 		= get_sub_field('block_link');
							if( get_sub_field('block_type') == 'links' ):
								?>
								<div class="<?= $cols[$num_rows]; ?> blocks__block" data-aos="fade" data-aos-delay="<?php echo $i;?>00">
									<div class="blocks__wrapper blocks__wrapper--<?php the_sub_field('block_type'); ?> shadow">
						                <<?php the_sub_field('block_heading');?>><?= $title; ?></<?php the_sub_field('block_heading');?>>
										<?php
											if( have_rows('block_links') ):
												while ( have_rows('block_links') ) : the_row();
													$link 		= get_sub_field('link');
													$link_url 	= $link['url'];
													$link_title = $link['title'];
														?>
															<a href="<?= $link_url; ?>" class="blocks__link">
																<svg class="icon icon--small"><use xlink:href="#icon-arrow" /></svg>
																<span class="blocks__word-link"><?= $link_title; ?></span>
															</a>
														<?php
													endwhile;
												endif;
											?>
									</div>
				            	</div>
							<?php elseif( get_sub_field('block_type') == 'image' ): ?>
								<div class="<?= $cols[$num_rows]; ?> blocks__block" data-aos="fade" data-aos-delay="<?php echo $i;?>00">
									<div class="blocks__wrapper blocks__wrapper--<?php the_sub_field('block_type'); ?> shadow">
										<div class="blocks__image-wrapper" style="background-image:url(<?= $image; ?>)">
											<?php if(get_sub_field('block_action')): ?>
											<div class="blocks__action"><?php the_sub_field('block_action'); ?></div>
											<?php endif; ?>
											<?php
												if( $link ):
													?>
														<a href="<?= $link['url']; ?>" class="coverlink"></a>
													<?php
												endif;
											?>
											<div class="blocks__heading">
												<<?php the_sub_field('block_heading');?> class="mbn"><?= $title; ?></<?php the_sub_field('block_heading');?>>
											</div>
										</div>
									</div>
								</div>
							<?php elseif( get_sub_field('block_type') == 'content' ): ?>
								<div class="<?= $cols[$num_rows]; ?> blocks__block" data-aos="fade" data-aos-delay="<?php echo $i;?>00">
									<div class="blocks__wrapper blocks__wrapper--<?php the_sub_field('block_type'); ?> blocks__wrapper--<?php the_sub_field('block_color');?> shadow">
										<div class="blocks__heading">
											<<?php the_sub_field('block_heading');?>><?= $title; ?></<?php the_sub_field('block_heading');?>>
										</div>
										<div class="blocks__text">
											<?= $content; ?>
											<?php
												if( $link ):
													?>
													<?php if( get_sub_field('block_color') == 'white' ): ?>
														<a href="<?= $link['url']; ?>" class="button button--primary" target="<?= $link['target']; ?>" data-text="<?= $link['title']; ?>">
													<?php elseif( get_sub_field('block_color') == 'blue' ): ?>
														<a href="<?= $link['url']; ?>" class="button button--primary orange" target="<?= $link['target']; ?>" data-text="<?= $link['title']; ?>">
													<?php endif; ?>
						                                <span class="button__text">
						                                    <?= $link['title']; ?>
						                                </span>
						                                <span class="button__icon">
						                                    <svg class="icon icon--small"><use xlink:href="#icon-arrow"/></svg>
						                                </span>
						                            </a>
													<?php
												endif;
											?>
										</div>
									</div>
								</div>
							<?php
							endif;
						endwhile;
					endif;
				?>
		</div>
	</div>
</section>
