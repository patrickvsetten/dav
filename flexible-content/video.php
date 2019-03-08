<?php
$options = get_sub_field('options');

$space_up = get_sub_field('space_up');
$space_down = get_sub_field('space_down');
?>

<section class="video padding-top--<?= $space_up; ?> padding-bottom--<?= $space_down; ?>" data-aos="fade">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-12">
				<?php
				if( get_sub_field('youtube_upload') == 'youtube' ):
					?>
					<div class="youtube icon-play" id="<?php the_sub_field('youtube_id_video'); ?>">
						<div class="video__placeholder" style="background-image:url('<?php the_sub_field('placeholder_video');?>')">
							<div class="video__text">
								<div class="play"></div>
							</div>
							<?php
							if( $options && in_array('overlay', $options) ):
								?>
								<div class="overlay" style="background-color:<?php the_sub_field('color');?>;opacity:<?php the_sub_field('opacity');?>"></div>
								<?php
							endif;
							?>
						</div>
					</div>
					<?php
				else:
					$video = get_sub_field('video_upload');
					?>
					<div class="video-upload_wrapper">
						<video class="video-tag" controls data-aspectRatio="100" controlsList="nodownload">
							<source src="<?= $video['url']; ?>" type="video/mp4"></source>
							<source src="<?= $video['url']; ?>" type="video/ogg"></source>
							<?php _e('Your browser does not support HTML5 video.', 'zz-theme'); ?>
						</video>
					</div>
					<?php
				endif;
				?>
			</div>
		</div>
	</div>
</section>
