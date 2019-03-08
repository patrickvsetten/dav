<?php
$space_up = get_sub_field('space_up');
$space_down = get_sub_field('space_down');
?>

<section class="d-none d-md-block blog tabnav js-test-tabs padding-top--<?= $space_up; ?> padding-bottom--<?= $space_down; ?>" data-aos="fade">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<<?php the_sub_field('heading');?>><?php the_sub_field('title'); ?></<?php the_sub_field('heading');?>>
				<div class="blog__text"><?php the_sub_field('text_blog');?></div>
			</div>
			<div class="col-12 d-flex">
				<ul role="tablist" class="tabnav__tabs">
					<?php
	                    $args = array(
	                        'post_type' => 'blog',
	                        'posts_per_page' => 5,
	                        'orderby'=> 'date',
	                        'order' => 'ASC'
	                    );
	                    $myposts = get_posts($args);
	                    foreach ($myposts as $key => $post) :
							?>

							<li class="tabnav__tab <?php if ( $key==0 ) { echo "tabnav__tab--active"; } ?> js-tabnav-tab" role="tab" aria-selected="true" aria-setsize="5" tabindex="0" aria-posinset="1">
								<?php the_field('short_title'); ?>
								<svg class="icon icon--small"><use xlink:href="#icon-arrow" /></svg>
							</li>

							<?php
						endforeach;
						wp_reset_postdata();
					?>
				</ul>
				<div class="tabnav__panels js-tabnav-panels">

					<?php
	                    $args = array(
	                        'post_type' => 'blog',
	                        'posts_per_page' => 5,
	                        'orderby'=> 'date',
	                        'order' => 'ASC'
	                    );
	                    $myposts = get_posts($args);
	                    foreach ($myposts as $key => $post) :
							$image = get_the_post_thumbnail_url($post->ID, 'full');
							?>


	                        <div class="tabnav__panel js-tabnav-panel <?php if ( $key==0 ) { echo "tabnav__panel--active"; } ?>" role="tabpanel" aria-hidden="false" style="background-image:url(<?php echo $image; ?>)">
	                            <div class="tabnav__content-wrapper">
									<h3><?php the_title(); ?></h3>
									<div class="tabnav__description">
										<div class="tabnav__content">
											<?php the_field('intro'); ?>
										</div>
										<div class="tabnav__icon">
											<svg class="icon icon--small"><use xlink:href="#icon-arrow-white" /></svg>
										</div>
									</div>
								</div>
								<a class="coverlink" href="<?php the_permalink(); ?>"></a>
							</div>

							<?php
						endforeach;
						wp_reset_postdata();
					?>

					</div>
				</ul>
            </div>
		</div>
	</div>
</section>

<section class="d-md-none blog padding-top--<?= $space_up; ?> padding-bottom--<?= $space_down; ?>" data-aos="fade">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<<?php the_sub_field('heading');?>><?php the_sub_field('title'); ?></<?php the_sub_field('heading');?>>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<?php
					$args = array(
						'post_type' => 'blog',
						'posts_per_page' => 3,
						'orderby'=> 'date',
						'order' => 'ASC'
					);
					$myposts = get_posts($args);
					foreach ($myposts as $key => $post) :
						$image = get_the_post_thumbnail_url($post->ID, 'full');
						?>

						<a class="blog__title">
							<svg class="icon icon--small"><use xlink:href="#icon-arrow-white" /></svg>
							<h3><?php the_field('short_title'); ?></h3>
						</a>

						<?php
					endforeach;
					wp_reset_postdata();
				?>

			</div>
		</div>
	</div>
</section>