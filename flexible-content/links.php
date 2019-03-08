<?php
$space_up = get_sub_field('space_up');
$space_down = get_sub_field('space_down');

$num_rows = count(get_sub_field('links'));
$cols = [
	'',
	'col-12 koloms-1',
	'col-12 col-sm-12 col-md-6 col-lg-6 koloms-2',
	'col-12 col-sm-12 col-md-4 col-lg-4 koloms-3',
	'col-12 col-sm-12 col-md-6 col-lg-3 koloms-4',
];

?>

<section class="d-none d-md-block links padding-top--<?= $space_up; ?> padding-bottom--<?= $space_down; ?>">
	<div class="container">
		<div class="row">
			<?php
				if( have_rows('links') ):
					$i = 0;
					while ( have_rows('links') ) : the_row();
						$i++;
						$title = get_sub_field('title');
							?>
								<div class="<?= $cols[$num_rows]; ?>" data-aos="fade" data-aos-delay="<?php echo $i;?>00">
					                <<?php the_sub_field('heading');?>><?= $title; ?></<?php the_sub_field('heading');?>>
									<?php
										if( have_rows('link') ):
											while ( have_rows('link') ) : the_row();
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
				            	</div>
							<?php
						endwhile;
					endif;
				?>
		</div>
	</div>
</section>

<section class="d-md-none links links__mobile padding-top--<?= $space_up; ?> padding-bottom--<?= $space_down; ?>">
	<div class="container">
		<div class="row">
			<?php
				if( have_rows('links') ):
					$i = 0;
					while ( have_rows('links') ) : the_row();
						$i++;
						$title = get_sub_field('title');
							?>
								<div class="accordion <?= $cols[$num_rows]; ?>" data-aos="fade" data-aos-delay="<?php echo $i;?>00">
					                <<?php the_sub_field('heading');?> class="title"><a href="#accordion-<?= $i; ?>"><?= $title; ?><span class="toggle_icon"></span></a></<?php the_sub_field('heading');?>>
									<div id="accordion-<?= $i; ?>" class="content">
									<?php
										if( have_rows('link') ):
											while ( have_rows('link') ) : the_row();
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
									</div>
				            	</div>
							<?php
						endwhile;
					endif;
				?>
		</div>
	</div>
</section>
