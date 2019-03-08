<?php
$space_up = get_sub_field('space_up');
$space_down = get_sub_field('space_down');

$alignment = get_sub_field('text_alignment');

$num_rows = count( get_sub_field('columns') );
$cols = [
	'',
	'col-md-8 col-12',
	'col-md-6 col-12',
	'col-md-4 col-12',
	'col-lg-3 col-sm-6 col-12',
];
?>

<section class="textcolumn padding-top--<?= $space_up; ?> padding-bottom--<?= $space_down; ?>" data-aos="fade">
	<div class="container">
		<div class="row align-<?= $alignment; ?>">
			<div class="textcolumn__wrapper">
				<?php
				if( have_rows('columns') ):
					while( have_rows('columns') ): the_row();
						?>
						<div class="<?= $cols[$num_rows]; ?> column">
							<?php
							$input = get_sub_field('column');

							if( !$input ){
								$input = [];
							}

							if( in_array('image', $input) && have_rows('image_group') ):
								while( have_rows('image_group') ): the_row();

									if( get_sub_field('image_or_icon') == 'image' ):
										?>
										<div class="textcolumn__image" style="background-image:url('<?php the_sub_field('image');?>');"></div>
										<?php
									endif;

									if( get_sub_field('image_or_icon') == 'icon' ):
										?>
										<img class="svg" src="<?php the_sub_field('icon');?>">
										<?php
									endif;

								endwhile;
							endif;

							if( in_array('title', $input) && have_rows('title_group') ):
								while( have_rows('title_group') ): the_row();
									?>
									<<?php the_sub_field('heading'); ?> class="textcolumn__title">
										<?php
										the_sub_field('title');
										?>
									</<?php the_sub_field('heading');?>>
									<?php
								endwhile;
							endif;

							if( in_array('text', $input) && have_rows('text_group') ):
								while( have_rows('text_group') ): the_row();
									?>
									<div class="textcolumn__text"><?php the_sub_field('text');?></div>
									<?php
								endwhile;
							endif;

							if( in_array('button', $input) && have_rows('button_group') ):
								while( have_rows('button_group') ): the_row();

									$link = get_sub_field('button');
									if( $link ):
										?>
										<a href="<?= $link['url']; ?>" data-text="<?= $link['title']; ?>" target="<?= $link['target']; ?>" class="button button--icon button--<?php the_sub_field('button_type');?>"><span><?= $link['title']; ?></span><svg class="icon"><use xlink:href="#icon-cross"/></svg></a>
										<?php
									endif;

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
	</div>
</section>
