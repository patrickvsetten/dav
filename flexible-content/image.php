<?php
$options = get_sub_field('options');

$space_up = get_sub_field('space_up');
$space_down = get_sub_field('space_down');

$image = get_sub_field('image');
?>

<section class="image__section padding-top--<?= $space_up; ?> padding-bottom--<?= $space_down; ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-12 afbeelding">
				<figure class="object-fit__container">
					<img class="image" src="<?= $image['url']; ?>" alt="<?= $image['title'] ?>">
				</figure>
				<?php
				if( $options && in_array('title', $options) ):
					$title = get_sub_field('title');
					?>
					<p class="mtm"><?= $title; ?></p>
					<?php
				endif;
				?>
			</div>
		</div>
	</div>
</section>
