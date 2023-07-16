<?php

/**
 *Plugin Name: فونت دانا | font dana
 *Plugin URI: clarotm.ir
 *Version: 1.0.0
 *Author: امیررضا حیدری و تیم کلارو
 *Author URI: https://clarotm.ir
 *Description: With this plugin, you can use Dana Persian font on your WordPress site
 */

function add_dana(){
    $dir = plugin_dir_url(__FILE__);
     wp_enqueue_style( 'danafont',$dir.'/css/style.css',array(),'1.0.0','all');
}
add_action( 'wp_enqueue_scripts','add_dana');