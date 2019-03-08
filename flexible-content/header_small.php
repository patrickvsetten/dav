<?php
$options = get_sub_field('options');

$space_down = get_sub_field('space_down');

$image = get_sub_field('image');
?>

<header class="header header--small padding-bottom--<?= $space_down; ?>" style="background-image:url('<?php echo $image; ?>')" data-enllax-ratio=".2" data-enllax-type="background" data-aos="fade" data-aos-delay="600">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header__wrapper">
                    <div class="header__wrapper--breadcrumbs">
                        <?php
                            if ( function_exists('yoast_breadcrumb') ) {
                              yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
