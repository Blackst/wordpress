<?php 

	//include
	require get_template_directory().'/include/setup.php';

	//Hooks
	add_action("wp_enqueue_scripts", "tm_theme_styles");
	add_action("after_setup_theme", "tm_after_setup");
	add_action("widgets_init", "tm_widgets");
 ?>