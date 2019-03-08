<?php
$options = get_sub_field('options');

$space_up = get_sub_field('space_up');
$space_down = get_sub_field('space_down');
?>

<section class="faq__section padding-top--<?= $space_up; ?> padding-bottom--<?= $space_down; ?>" data-aos="fade">
	<div class="container">
		<div class="row">
			<div class="faq_wrapper">
				<div class="col-12 col-sm-12 col-md-12 col-lg-10 offset-lg-1">
					<<?php the_sub_field('heading');?>><?php the_sub_field('title'); ?></<?php the_sub_field('heading');?>>
				</div>
				 <?php
				 if( $options && in_array('categories', $options) ):
				 	while( have_rows('faq_category') ): the_row();
				 		?>
				 		<div class="faq__section__wrapper col-12 col-sm-12 col-md-12 col-lg-10 offset-lg-1">
				 			<h3><?php the_sub_field('title');?></h3>
				 			<div class="questions">
								<?php
								while( have_rows('faq') ): the_row();
									$i++;
									?>
									<div class="accordion">
										<div class="title"><a href="#accordion-<?= $i; ?>" class=""><span class="text"><span class="question_text"><?php the_sub_field('title'); ?></span></span><span class="toggle_icon"></span></a></div>
										<div id="accordion-<?= $i; ?>" class="content"><?php the_sub_field('content'); ?></div>
									</div>
									<?php
								endwhile;
								?>
							</div>
						</div>
						<?php
					endwhile;
				else:
					?>
					<div class="faq__section__wrapper col-12 col-sm-12 col-md-12 col-lg-10 offset-lg-1">
						<div class="questions">
							<?php
							while( have_rows('faq') ): the_row();
								$i++;
								?>
								<div class="accordion">
									<div class="title"><a href="#accordion-<?= $i; ?>" class=""><span class="text"><span class="question_text"><?php the_sub_field('title'); ?></span></span><span class="toggle_icon"></span></a></div>
									<div id="accordion-<?= $i; ?>" class="content"><?php the_sub_field('content'); ?></div>
								</div>
								<?php
							endwhile;
							?>
						</div>
					</div>
					<?php
				endif;
				?>
			</div>
		</div>
	</div>
</section>
