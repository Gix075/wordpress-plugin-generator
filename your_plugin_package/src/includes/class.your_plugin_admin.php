<?php

/*
    ******************************************
    Your Plugin WordPress Plugin
    Author: Author | http://author.xxx | author@author.xxx
    ******************************************
*/

class yourPlugin__admin {
		
	public function __construct() {
        add_action( 'admin_menu', array( $this, 'admin_menu' ) );
        add_action( 'admin_init', array( $this,'admin_register_settings' ) );
    }
	
	public function admin_menu() {
		add_options_page(
			'YOURPLUGIN',
			'YOURPLUGIN',
			'manage_options',
			YOURPLUGIN,
			array(
				$this,
				'options_page'
			)
		);
	}
	
	public function  options_page() {
        include YOURPLUGIN_PATH . 'views/admin.php';
	}
    
    public function admin_register_settings() {
        register_setting(YOURPLUGIN, YOURPLUGIN, array($this, 'validate'));
    }
    
    public function validate($data) {
        
        // All inputs        
        $valid = array();
        return $valid;
        
    }
    
    /* Create the NEW PAGES required by plugin */
    /* **************************************************** */
    public static function plugin_activated() {
        // Information needed for creating the plugin's pages
		
    }
}
