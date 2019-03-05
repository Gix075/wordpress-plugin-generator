<?php
/**
 * Plugin Name:       {{PLUGIN}}
 * Description:       {{PLUGIN_DESCRIPTION}}
 * Version:           {{PLUGIN_VERSION}}
 * Author:            {{PLUGIN_AUTHOR}}
 * License:           {{PLUGIN_LICENSE}}
 * Text Domain:       {{TEXTDOMAIN}}
 */

require_once plugin_dir_path( __FILE__ ) . 'defines.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class.{{PLUGIN_SLUG}}.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class.{{PLUGIN_SLUG}}_admin.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class.{{PLUGIN_SLUG}}_public.php';

//register_activation_hook( __FILE__, array( 'FCgdpr_Plugin__admin', 'plugin_activated' ) );

new {{MAINCLASSNAME}};
new {{MAINCLASSNAME}}__admin;
new {{MAINCLASSNAME}}__public; 