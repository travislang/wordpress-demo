<?php
/**
 * Plugin Name: Push Notifications
 * Plugin URI:  https://localhost:8888
 * Description: Basic WordPress Push Notifications  plugin test
 * Version:     1.0
 * Author:      Travis Lang
 * Author URI:  https://travislang.io
 */

 // exit if accessed directly

    // if(!defined('ABS_PATH')){
    //     exit;
    // }

    defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

    // load scripts
    require_once(plugin_dir_path(__FILE__). '/inc/pushnotifications-scripts.php');