<?php
/**
 * @package AayushPlugin
 * Plugin Name: Aayush Practice Plugin
 * Plugin URI: http://aayushali.com.np/plugin
 * Description: This is my first attempt on writing a custom plugin.
 * Version: 1.0.0
 * Author: Aayush Ali
 * Author URI: https://aayushali.com.np
 * License: GPLv2 or later
 * Text Domain: aayush-plugin
 */
//These three works as same
/*if (!defined( 'ABSPATH' )){
    die;
}

*/
defined('ABSPATH') or die('Hey, you can/t access this file, you silly human!');

/*if (! function_exists('add_action')){
    echo 'Hey, you can\t access this file, you silly human!';
    exit;
}*/

class AayushPlugin
{
    function __construct()
    {
        add_action('init', array($this, 'custom_post_type'));
    }

    function activate()
    {
        // generate a CPT
        // flush the rewrite rules
    }

    function deactivate()
    {
        // flush the rewrite rules
    }

    function uninstall()
    {
        // delete the CPT
    }

    function custom_post_type() {
        register_post_type('book',['public'=> 'true', 'label' => 'Books']);
    }
}

if (class_exists('AayushPlugin')) {
    $aayushPlugin = new AayushPlugin();
}

//activation

register_activation_hook( __FILE__, array( $aayushPlugin, 'activate' ));

//deactivation

register_deactivation_hook( __FILE__ , array( $aayushPlugin, 'deactivate' ));

// uninstall
