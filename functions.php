<?php  

/* 
	Google Fonts

	You can use this to add in your own custom google fonts. The same basic idea can also be used to add in fonts from other services.
*/
function google_fonts() {
	
	// register Google font
	wp_register_style('google-font', 'http://fonts.googleapis.com/css?family=Lato:300,400,600,700,900|Lora:400,700|Comfortaa:400,700');
	// enqueue Google font
	wp_enqueue_style( 'google-font' );

}

// enqueue base scripts and styles
add_action('wp_enqueue_scripts', 'google_fonts');



?>