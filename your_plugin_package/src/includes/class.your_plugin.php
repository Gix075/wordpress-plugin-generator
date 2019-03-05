<?php

/*
    ******************************************
    Your Plugin WordPress Plugin
    Author: Author | http://author.xxx | author@author.xxx
    ******************************************
*/

class yourPlugin {



    public function __construct() {
        add_action( 'wp_enqueue_scripts', array( $this,'plugin_assets_enqueue' ) );
        add_action('admin_enqueue_scripts', array( $this,'plugin_admin_assets_enqueue'));
    }

    public function plugin_assets_enqueue() {
        if (!is_admin()) {

            wp_register_style('YourPlugin', YOURPLUGIN_DIR . 'css/your_plugin.css', array(), '1.0', 'all');
            wp_enqueue_style('YourPlugin'); // Enqueue it!

            wp_enqueue_style( 'dashicons' );

            wp_register_script('YourPlugin', YOURPLUGIN_DIR . 'js/your_plugin.js', array('jquery'), '1.0.0'); // Custom scripts
            wp_enqueue_script('YourPlugin'); // Enqueue it!

        }

    }

    public function plugin_admin_assets_enqueue() {
        if (is_admin()) {

            wp_register_style('Your Plugin', YOURPLUGIN_DIR . 'css/your_plugin_admin.css', array(), '1.0', 'all');
            wp_enqueue_style('Your Plugin'); // Enqueue it!
            
        }
    }




}