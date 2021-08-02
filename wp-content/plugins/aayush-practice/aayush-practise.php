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
        add_action('init', array( $this, 'custom_post_type'));
    }

    function register(){
        add_action('admin_enqueue_scripts' , array ($this , 'enqueue'));
    }

    function activate()
    {

        // generate a CPT
        $this->custom_post_type();
        // flush the rewrite rules
        flush_rewrite_rules();

    }

    function deactivate()
    {
        // flush the rewrite rules
        flush_rewrite_rules();
    }

   /* function uninstall()
    {
        // delete the CPT
    }*/

    function custom_post_type() {
        register_post_type('book',['public'=> true, 'label' => 'Books']);
    }
    function enqueue() {
        //enqueue all our scripts
        wp_enqueue_style( 'my-plugin-style', plugins_url( '/assets/aka.css' , __FILE__) );
        wp_enqueue_script( 'my-plugin-script', plugins_url('/assets/scripts.js', __FILE__));
    }
}

if (class_exists('AayushPlugin')) {
    $aayushPlugin = new AayushPlugin();
    $aayushPlugin -> register();
}

//activation

register_activation_hook( __FILE__, array( $aayushPlugin, 'activate' ));

//deactivation

register_deactivation_hook( __FILE__ , array( $aayushPlugin, 'deactivate' ));

// uninstall
//register_uninstall_hook(__FILE__, array($aayushPlugin, 'uninstall'));