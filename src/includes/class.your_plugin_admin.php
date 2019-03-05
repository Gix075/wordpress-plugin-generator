<?php

/*
    ******************************************
    {{PLUGIN}} WordPress Plugin
    Author: {{PLUGIN_AUTHOR}}
    ******************************************
*/

class {{MAINCLASSNAME}}__admin {
		
	public function __construct() {
        add_action( 'admin_menu', array( $this, 'admin_menu' ) );
        add_action( 'admin_init', array( $this,'admin_register_settings' ) );
    }
	
	public function admin_menu() {
		add_options_page(
			'{{PLUGIN_CONSTANT_BASENAME}}',
			'{{PLUGIN_CONSTANT_BASENAME}}',
			'manage_options',
			{{PLUGIN_CONSTANT_BASENAME}},
			array(
				$this,
				'options_page'
			)
		);
	}
	
	public function  options_page() {
        include {{PLUGIN_CONSTANT_BASENAME}}_PATH . 'views/admin.php';
	}
    
    public function admin_register_settings() {
        register_setting({{PLUGIN_CONSTANT_BASENAME}}, {{PLUGIN_CONSTANT_BASENAME}}, array($this, 'validate'));
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
