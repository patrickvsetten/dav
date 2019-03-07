<?php
$options = get_sub_field('input_section');

$space_up = get_sub_field('space_up');
$space_down = get_sub_field('space_down');

$opacity = get_sub_field('overlay_opacity');
$heading = get_sub_field('heading');

$num_rows = count(get_sub_field('blocks'));
$cols = [
	'',
	'col-12 koloms-1',
	'col-12 col-sm-12 col-md-6 col-lg-6 koloms-2',
	'col-12 col-sm-12 col-md-4 col-lg-4 koloms-3',
	'col-12 col-sm-12 col-md-6 col-lg-3 koloms-4',
];
?>

<section class="imageblock padding-top--<?= $space_up; ?> padding-bottom--<?= $space_down; ?>">
	<div class="container">
		<div class="row">
			<?php
			if( have_rows('blocks') ):
				while( have_rows('blocks') ): the_row();
					?>
					<div class="<?= $cols[$num_rows]; ?> block">
						<div class="imageblock__wrapper" style="background-image:url('<?php the_sub_field('image');?>')">
							<div class="imageblock__content">
								<<?= $heading;?>><?php the_sub_field('title');?></<?= $heading;?>>
                                <?php
								if( $options && in_array('text_break', $options) ):
									?>
									<div class="imageblock__text white"><?php the_sub_field('text');?></div>
									<?php
								else :
									?>
									<div class="imageblock__text white" style="height: auto;-webkit-line-clamp: unset;"><?php the_sub_field('text');?></div>
									<?php
								endif;

								if( $options && in_array('button', $options) && have_rows('button') ):
									while( have_rows('button') ): the_row();

										$link = get_sub_field('button_link');
										if( $link ):
											?>
											<a class="button button--<?php the_sub_field('type_button');?>" href="<?= $link['url']; ?>" target="<?= $link['target']; ?>"><?= $link['title']; ?></a>
											<?php
										endif;

									endwhile;
								endif;
								?>
							</div>
							<?php
							if( in_array('overlay', $options) ):
								?>
								<div class="overlay" style="opacity:<?= $opacity;?>;"></div>
								<?php
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
