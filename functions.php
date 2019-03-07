<?php
require_once(__DIR__ . '/includes/autoload.php');

function add_css() {
    global $wp_scripts;
    wp_enqueue_style( 'global', get_template_directory_uri() . '/assets/dist/global.min.css' );
}
add_action( 'wp_enqueue_scripts', 'add_css' );

function footer_enqueue() {
    wp_enqueue_script('zz-lazyload', get_template_directory_uri(). '/assets/libs/lazyload.js', array( 'jquery'));
    wp_localize_script('zz-lazyload', 'zzlazyload_params', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ));
    wp_enqueue_script('script', get_template_directory_uri(). '/assets/dist/scripts.min.js', array( 'jquery'));
}
add_action('wp_footer', 'footer_enqueue');

function register_my_menus() {
  register_nav_menus(
    array(
        'primary'       => __( 'Primary' ),
        'secondary'     => __( 'Secondary' ),
        'footermenu'    => __( 'Footermenu' ),
        'footermenu2'   => __( 'Footermenu2' ),
    )
  );
}
add_action('init', 'register_my_menus');

// Remove standard WP elements
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Add posttype to breadcrumbs
add_filter('wpseo_breadcrumb_links', 'my_wpseo_breadcrumb_links');
function my_wpseo_breadcrumb_links($links) {
    if( is_single() ):
        $cpt_object = get_post_type_object(get_post_type());
        if( !$cpt_object->_builtin ):
            $landing_page = get_page_by_path( $cpt_object->rewrite['slug'] );
            array_splice($links, -1, 0, [
                [
                    'id' => $landing_page->ID
                ]
            ]);
        endif;
    endif;
    return $links;
}
