<?php
/**
* Template Name: Producten overzicht
*/

get_header();
?>


<section id="products">
	<div class="container-fluid">
    	<div class="row">
            <?php
                $args = array(
                    'post_type'         => 'producten',
                    'posts_per_page'    => -1,
                    'order_by'          => 'title',
                    'order'             => 'ASC'
                );
                $myposts = get_posts($args);
                foreach ($myposts as $post) : setup_postdata($post);
                    ?>

                    <?php the_title(); ?>

                    <?php
                endforeach;
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
