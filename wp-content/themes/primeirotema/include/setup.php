<?php 
	function bp_theme_styles(){
 	wp_enqueue_style('theme.css', get_template_directory_uri().'/assets/css/theme.css');

 	wp_enqueue_script('theme.js', get_template_directory_uri().'/assets/js/script.js', array('jquery'), '1.0', true); //True para colocar no fim do html false para colocar no inicio.
 	}

 	function bp_after_setup(){
 		add_theme_support('menus');

 		register_nav_menu('primary', __('Primary Menu', 'primeirotema'));
 	}
 ?>