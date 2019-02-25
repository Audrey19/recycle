<?php

/*******************************
Start by adding theme support
*******************************/

/* post formats */
//add_theme_support( 'post-formats', array( 'aside', 'quote' ) );

/* post thumbnails */
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

/* HTML5 */
add_theme_support( 'html5' );

/* automatic feed links */
add_theme_support( 'automatic-feed-links' );

/*******************************
Navigation menus
*******************************/
register_nav_menus( array(
  'primary' => __( 'Navigation principale', 'wpmu-theme' ),
  'secondary' => __( 'Navigation secondaire', 'wpmu-theme' ),
) );

/*******************************
Autres
*******************************/

// Use what works best for your website
add_action('init', 'my_head_cleanup');
function my_head_cleanup() {
  remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
  remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
  remove_action( 'wp_head', 'index_rel_link' ); // index link
  remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
  remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); // Display relational links for the posts adjacent to the current post.
  remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version
  remove_action( 'wp_head', 'thread_comments' );
  remove_action( 'wp_head', 'comment-reply' );
  remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'feed_links', 2);
  remove_action( 'wp_head', 'feed_links_extra', 3);
  remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
  remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
  remove_action( 'template_redirect', 'rest_output_link_header', 11, 0);
  remove_action( 'wp_head', 'wp_oembed_add_host_js' );
  remove_action( 'rest_api_init', 'wp_oembed_register_route');
  remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10);
}

// Removes comment from admin menu
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}

// Removes comments from post and pages
add_action('init', 'remove_comment_support', 100);

function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}

// Removes from admin bar
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );

function deregister_styles() {
        // wp_deregister_style('contact-form-7' );
        // wp_deregister_style('contact-form-7');
        // wp_deregister_style('woocommerce-layout');
        // wp_deregister_style('woocommerce-general');
        // wp_deregister_style('woocommerce-smallscreen');
}
add_action( 'wp_print_styles', 'deregister_styles', 100 );

//Retirer style par defaut des galeries
add_filter( 'use_default_gallery_style', '__return_false' );

//add_image_size( 'galerie', 500, 300, true ); // (cropped)


/*******************************
Desactivé Guttenberg
*******************************/
// disable for posts
//add_filter('use_block_editor_for_post', '__return_false', 10);

// disable for post types
//add_filter('use_block_editor_for_post_type', '__return_false', 10);

?>