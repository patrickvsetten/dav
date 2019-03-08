<?php
$space_up = get_sub_field('space_up');
$space_down = get_sub_field('space_down');
?>

<section class="rente padding-top--<?= $space_up; ?> padding-bottom--<?= $space_down; ?>" data-aos="fade">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-8 d-flex">
				<dl>
					<dt>Looptijd</dt>
					<dd>Rente</dd>
					<?php
					if ( have_rows('rente_nhg') ) :
						while ( have_rows('rente_nhg') ) :
							the_row();
							?>
								<dt><?php the_sub_field('looptijd');?></dt>
								<dd><?php the_sub_field('rente');?></dd>
							<?php
						endwhile;
					endif;
					?>
				</dl>
			</div>
			<div class="col-12 col-md-4">
				<div class="textsidebar__sidebar">
					<h3><?php the_sub_field('title_sidebar');?></h3>
					<?php the_sub_field('text_sidebar');?>
					<?php

					$link = get_sub_field('link_sidebar');

					if( $link ):
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
						?>
						<a href="<?php echo esc_url($link_url); ?>" target="" data-text="<?php echo esc_html($link_title); ?>" class="button button--primary button--icon"><span><?php echo esc_html($link_title); ?></span><svg class="icon"><use xlink:href="#icon-cross"></use></svg></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
