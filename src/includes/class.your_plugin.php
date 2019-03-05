<?php

/*
    ******************************************
    {{PLUGIN}} WordPress Plugin
    Author: {{PLUGIN_AUTHOR}}
    ******************************************
*/

class {{MAINCLASSNAME}} {



    public function __construct() {
        add_action( 'wp_enqueue_scripts', array( $this,'plugin_assets_enqueue' ) );
        add_action('admin_enqueue_scripts', array( $this,'plugin_admin_assets_enqueue'));
    }

    public function plugin_assets_enqueue() {
        if (!is_admin()) {

            wp_register_style('{{PLUGIN_STYLE_ID}}', {{PLUGIN_CONSTANT_BASENAME}}_DIR . 'css/{{PLUGIN_SLUG}}.css', array(), '1.0', 'all');
            wp_enqueue_style('{{PLUGIN_STYLE_ID}}'); // Enqueue it!

            wp_enqueue_style( 'dashicons' );

            wp_register_script('{{PLUGIN_SCRIPT_ID}}', {{PLUGIN_CONSTANT_BASENAME}}_DIR . 'js/{{PLUGIN_SLUG}}.js', array('jquery'), '1.0.0'); // Custom scripts
            wp_enqueue_script('{{PLUGIN_SCRIPT_ID}}'); // Enqueue it!

        }

    }

    public function plugin_admin_assets_enqueue() {
        if (is_admin()) {

            wp_register_style('{{PLUGIN}}', {{PLUGIN_CONSTANT_BASENAME}}_DIR . 'css/{{PLUGIN_SLUG}}_admin.css', array(), '1.0', 'all');
            wp_enqueue_style('{{PLUGIN}}'); // Enqueue it!
            
        }
    }




}