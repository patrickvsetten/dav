<?php
$options = get_sub_field('input_section');

$space_up = get_sub_field('space_up');
$space_down = get_sub_field('space_down');

$heading = get_sub_field('heading');
$headingTitle = get_sub_field('heading_title');

$num_rows = count(get_sub_field('blocks'));
$cols = [
	'',
	'col-12 koloms-1',
	'col-12 col-sm-12 col-md-6 col-lg-6 koloms-2',
	'col-12 col-sm-12 col-md-4 col-lg-4 koloms-3',
	'col-12 col-sm-12 col-md-6 col-lg-3 koloms-4',
];
?>

<section class="icons padding-top--<?= $space_up; ?> padding-bottom--<?= $space_down; ?>">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center mbl">
				<<?php the_sub_field('heading');?>><?php the_sub_field('title_section');?></<?php the_sub_field('heading');?>>
			</div>
			<div class="icons__wrapper__all">
				<?php
				if( have_rows('blocks') ):
					$i=0;
					while( have_rows('blocks') ): the_row();
						$i++;
						?>
						<div class="<?= $cols[$num_rows]; ?> block" data-aos="fade" data-aos-delay="<?php echo $i; ?>00">
							<div class="icons__wrapper">
								<div class="icons__icon" style="background-image:url('<?php the_sub_field('icon');?>')"></div>
								<div class="icons__content">
									<<?= $heading;?>><?php the_sub_field('title_icons');?></<?= $heading;?>>
									<?php
									if( $options && in_array('text_break', $options) ):
										?>
										<div class="icons__text"><?php the_sub_field('text_icons');?></div>
										<?php
									else :
										?>
										<div class="icons__text" style="height: auto;-webkit-line-clamp: unset;"><?php the_sub_field('text_icons');?></div>
										<?php
									endif;

									if( $options && in_array('button', $options) && have_rows('button') ):
										while( have_rows('button') ): the_row();

											$link = get_sub_field('button_link');
											if( $link ):
												?>
												<a class="button button--icon button--<?php the_sub_field('type_button');?> mtl" data-text="<?= $link['title']; ?>" href="<?= $link['url']; ?>" target="<?= $link['target']; ?>"><span><?= $link['title']; ?></span><svg class="icon"><use xlink:href="#icon-cross"/></svg></a>
												<?php
											endif;

										endwhile;
									endif;
									?>
								</div>
							</div>
						</div>
						<?php
					endwhile;
				endif;
				?>
			</div>
			<div class="col-12 text-center mtl">
				<?php
					if( get_sub_field('add_button_section') == 'ja' ):
						$link = get_sub_field('button_section');
						if( $link ):
							?>
								<a class="button button--primary button--icon mtl" href="<?= $link['url']; ?>" data-text="<?= $link['title']; ?>" target="<?= $link['target']; ?>"><span><?= $link['title']; ?></span><svg class="icon"><use xlink:href="#icon-cross"/></svg></a>
							<?php
						endif;
					endif;
				?>
			</div>
		</div>
	</div>
</section>
