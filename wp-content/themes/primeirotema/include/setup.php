<?php 
	function bp_theme_styles(){
 	wp_enqueue_style('theme.css', get_template_directory_uri().'/assets/css/theme.css');

 	wp_enqueue_script('theme.js', get_template_directory_uri().'/assets/js/script.js', array('jquery'), '1.0', true); //True para colocar no fim do html false para colocar no inicio.
 	}

 	function bp_after_setup(){
 		add_theme_support('menus');

 		add_theme_support('post-thumbnails');

 		register_nav_menu('primary', __('Primary Menu', 'primeirotema'));
 	}

 	function bp_widgets(){
 		register_sidebar(array(
 			'name' => __('Meu Primeiro Sidebar', 'primeirotema'),
 			'id' => 'bp_sidebar', 
 			'description' => __('Sidebar para o tema', 'primeirotema'),
 			'before_title' => '<h4 class="widget_title">',
 			'after_title' => '</h4>',
 			'before_widget' => '<div id="%1$s" class="widget %2$s">',
 			'after_widget' => '</div>'
 		));
 	}
 ?>