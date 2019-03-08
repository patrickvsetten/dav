<?php
$space_up = get_sub_field('space_up');
$space_down = get_sub_field('space_down');
?>

<section class="downloads padding-top--<?= $space_up; ?> padding-bottom--<?= $space_down; ?>">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-10">
                <div class="intro__wrapper">
                    <<?php the_sub_field('heading');?>><?php the_sub_field('intro_title'); ?></<?php the_sub_field('heading');?>>
                    <p><?php the_sub_field('intro_text'); ?></p>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">

            <?php if( have_rows('downloads') ): ?>
                <?php while( have_rows('downloads') ): the_row();?>

                    <div class="col-sm-12 col-md-12 col-lg-10 download">
                        <div class="download__wrapper">
                            <?php $file = get_sub_field('download');

                            if( $file ): ?>
                                <a target="_blank" href="<?php echo $file['url']; ?>" class="coverlink"></a>
                                <div class="download__wrapper-title">
                                    <p><?php the_sub_field('title'); ?></p>
                                </div>

                            <?php endif; ?>

                            <svg class="icon"><use xlink:href="#icon-download" /></svg>

                        </div>
                    </div>

                <?php endwhile;?>
            <?php endif;?>

        </div>
    </div>
</section>
