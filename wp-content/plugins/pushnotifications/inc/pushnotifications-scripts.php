<?php
    // add in scripts
    function pn_add_scripts() {
        // add main css
        wp_enqueue_style('pn-main-style', plugins_url(). '/pushnotifications/css/style.css');
        //add main js
        wp_enqueue_script('pn-main-script', plugins_url(). '/pushnotifications/js/main.js');
    }

    add_action('wp_enqueue_scripts', 'pn_add_scripts');

?>