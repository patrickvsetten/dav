<?php

/* partners */
add_action('init', 'create_redvine_partners');
function create_redvine_partners() {
    $labels = array(
        'name' => _x('Partners', 'partners'),
        'singular_name' => _x('Partners', 'partners'),
        'add_new' => _x('Nieuw partner', 'partners'),
        'add_new_item' => __('Nieuw partner'),
        'edit_item' => __('Bewerk partner'),
        'new_item' => __('Nieuw partner'),
        'view_item' => __('Bekijk partner'),
        'search_items' => __('Zoek naar partner'),
        'not_found' =>  __('Geen partner gevonden'),
        'not_found_in_trash' => __('Geen partner gevonden'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'menu_icon' => 'dashicons-smiley',
        'hierarchical' => false,
        'menu_position' => 20,
        'supports' => array('title','thumbnail','revisions', 'editor', 'page-attributes')
    );
    register_post_type('partners',$args);
}
register_taxonomy( "partners-categorie",
    array("partners" ),
    array(
        "hierarchical" => true,
        "labels" => array('name'=>"Categorie",'add_new_item'=>"Nieuwe categorie"),
        "singular_label" => __( "Field" ),
        "rewrite" => array( 'slug' => 'category'), // This controls the base slug that will display before each term
    )
);

// AJAX LOAD CUSTOM POST TYPE ACTIVITIES
add_action( 'wp_ajax_zz_lazyload','zz_get_partners' );
add_action( 'wp_ajax_nopriv_zz_lazyload','zz_get_partners' );
function zz_get_partners() {

    if ( !isset( $_POST['search'] ) || !isset( $_POST['search']['partners-loader'] ) ) {
        return;
    }

    if ( !isset( $_POST['start'] ) || !isset( $_POST['limit'] ) ) {
		echo json_encode( array() );
        wp_die();
	}

	$start 	= max( 0, $_POST['start'] );
	$limit 	= $_POST['limit'];


	$tax_query = array();
    if ( $_POST['search'] && $_POST['search']['category'] ) {
		$tax_query[] = array(
			'taxonomy' => 'partners-categorie',
			'field' => 'term_id',
			'terms' => explode( ',', $_POST['search']['category'] ),
		);
	}

    $exclude = array();
    if ( $_POST['search'] && $_POST['search']['exclude'] ) {
		$exclude = explode( ',', $_POST['search']['exclude'] );
    }

    $post_type = 'partners';
    if ( $_POST['search'] && $_POST['search']['post_type'] ) {
   		$post_type = $_POST['search']['post_type'];
    }

    $args = array(
        'post_type'         => $post_type,
        'posts_per_page'    => $limit,
        //'offset'	        => $start,
        'orderby' 	        => 'rand',
        'tax_query'         => $tax_query,
        'exclude'           => $exclude
    );


    $json_posts = array();

    $posts = get_posts( $args );
    foreach( $posts as $post ) {
        setup_postdata( $post );

        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
        $terms = wp_get_post_terms( $post->ID, 'partners-categorie' ); // Get all terms of a taxonomy
        $term_slug = $terms[0]->slug;


        $term_slug = '';
        if ( count( $terms ) == 1 ) {
            $term_slug = $terms[0]->slug;
        }

        $json_post = array(
            'id'            => $post->ID,
            'term'         	=> $term_slug,
            'image'         => $image[0],
            'title'         => $post->post_title,
            'permalink'   	=> get_permalink( $post->ID ),
        );

        $json_posts[] = $json_post;
    }
	wp_reset_postdata();

	echo json_encode( $json_posts );
	wp_die();
}
