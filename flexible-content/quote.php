<?php
$space_up = get_sub_field('space_up');
$space_down = get_sub_field('space_down');
?>

<section class="quote padding-top--<?= $space_up; ?> padding-bottom--<?= $space_down; ?>">
	<div class="container">
		<div class="row">
			<div class="carousel">
				<?php
				while( have_rows('quote') ): the_row();
					?>
					<div class="carousel-cell">
						<div class="col-12 col-sm-10 col-md-12">
							<div class="quote__text">
								<p><?php the_sub_field('text');?></p>
							</div>
							<h3 class="quote__person mbn"><?php the_sub_field('title');?></h3>
							<div class="quote__function"><?php the_sub_field('subtitle');?></div>
						</div>
					</div>
					<?php
				endwhile;
				?>
			</div>
		</div>
	</div>
</section>
