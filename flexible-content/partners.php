<?php
$space_up = get_sub_field('space_up');
$space_down = get_sub_field('space_down');
?>

<section class="partners padding-top--<?= $space_up; ?> padding-bottom--<?= $space_down; ?>">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-sm-12 col-md-10 col-lg-8">
				<div class="content__wrapper">
					<<?php the_sub_field('heading');?>><?php the_sub_field('title'); ?></<?php the_sub_field('heading');?>>
					<?php
					if (get_sub_field('add_text', 'option') == 'yes') :
						?>
						<p><?php the_sub_field('partners_text', 'option'); ?></p>
						<?php
					endif;
					?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="partners__carousel">
					<?php
					$args = array(
						'post_type' => 'partners',
						'posts_per_page' => -1,
						'orderby'=> 'date',
						'order' => 'ASC'
					);
					$i=0;
					$myposts = get_posts($args);
					foreach ($myposts as $key => $post) :
						$i++;
						$image = get_the_post_thumbnail_url($post->ID, 'full');
						?>
						<div class="partners__logo carousel-cell" data-aos="fade" data-aos-delay="<?php echo $i; ?>00">
							<div style="background-image: url('<?php echo $image; ?>');" class="carousel-cell--image"></div>
						</div>
						<?php
						endforeach;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</div>
</section>
