<?php
/**
 * Plugin Name:       Your Plugin
 * Description:       This is your plugin description
 * Version:           0.0.0
 * Author:            Author | http://author.xxx | author@author.xxx
 * License:           GPL-2.0+
 * Text Domain:       yourplugin
 */

require_once plugin_dir_path( __FILE__ ) . 'defines.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class.your_plugin.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class.your_plugin_admin.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class.your_plugin_public.php';

//register_activation_hook( __FILE__, array( 'FCgdpr_Plugin__admin', 'plugin_activated' ) );

new yourPlugin;
new yourPlugin__admin;
new yourPlugin__public; 