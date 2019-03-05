<?php

/*
    ******************************************
    Your Plugin WordPress Plugin
    Author: Author | http://author.xxx | author@author.xxx
    ******************************************
*/

class yourPlugin__public {
		
	public function __construct() {
		add_action( 'wp_footer', array( $this,'footer_banner' ), 100 );
    }
	
	public function  footer_banner() {
		$options = get_option(YOURPLUGIN);
        ob_start();
        include YOURPLUGIN_PATH . 'views/public.php';
        $markup = ob_get_contents();
        ob_end_clean();
        echo $markup;
	}
    
}