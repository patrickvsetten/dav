<?php
$space_up = get_sub_field('space_up');
$space_down = get_sub_field('space_down');
?>

<section class="intro padding-top--<?= $space_up; ?> padding-bottom--<?= $space_down; ?>" data-aos="fade">
	<div class="container">
		<div class="row">
			<div class="col-12 offset-xl-2 col-xl-8">
                <<?php the_sub_field('heading');?>><?php the_sub_field('intro_title'); ?></<?php the_sub_field('heading');?>>
				<?php the_sub_field('intro_text'); ?>
				<?php if( get_sub_field('add_quote') == 'ja' ): ?>
					<div class="intro__quote">
						<div class="intro__quote-icon"></div>
						<span><?php the_sub_field('quote'); ?></span>
					</div>
				<?php endif; ?>
            </div>
		</div>
	</div>
</section>
