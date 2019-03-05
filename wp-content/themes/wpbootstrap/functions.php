<?php
    function myprefix_load_css_and_js() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
    // loads style.css but shouldnt be needed?
    // add_action( 'wp_enqueue_scripts', 'myprefix_load_css_and_js' );
    # theme support
    function wpb_theme_setup(){
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'wpb_theme_setup');
    // control except length
    function set_excerpt_length() {
        return 45;
    }
    add_filter('excerpt_length', 'set_excerpt_length');
?>