<?php

/*
    ******************************************
    {{PLUGIN}} WordPress Plugin
    Author: {{PLUGIN_AUTHOR}}
    ******************************************
*/

class {{MAINCLASSNAME}}__public {
		
	public function __construct() {
		add_action( 'wp_footer', array( $this,'footer_banner' ), 100 );
    }
	
	public function  footer_banner() {
		$options = get_option({{PLUGIN_CONSTANT_BASENAME}});
        ob_start();
        include {{PLUGIN_CONSTANT_BASENAME}}_PATH . 'views/public.php';
        $markup = ob_get_contents();
        ob_end_clean();
        echo $markup;
	}
    
}