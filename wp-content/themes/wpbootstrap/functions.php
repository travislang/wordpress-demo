<?php
    # reg nav walker
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    # theme support
    function wpb_theme_setup(){
        # nav menu support
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'wpbootstrap')
        ));
    }

    add_action('after_setup_theme', 'wpb_theme_setup');

    // control except length
    function set_excerpt_length() {
        return 45;
    }

    add_filter('excerpt_length', 'set_excerpt_length');

?>