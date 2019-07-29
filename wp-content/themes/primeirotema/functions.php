<?php 
/*//Inclui outros arquivos/fucntions
require get_template_directory().'/include/bp_footer_functions.php';

//Hooks
 add_action('shutdown', 'bp_fim');
*/

require get_template_directory().'/include/setup.php';

 add_action('wp_enqueue_scripts', 'bp_theme_styles');
 add_action('after_setup_theme', 'bp_after_setup');
 ?>