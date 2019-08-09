<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>  <!--Posso colocar as minhas classes dentro de body_class-->
	<header>

		<?php 
			if (has_custom_logo()) {
				the_custom_logo();
			}
		 ?>
		<h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>

		<div style="clear: both;"></div>
	<?php 
		if (has_nav_menu('primary')) {
			wp_nav_menu(array('theme_location' => 'primary',
			'container' => 'nav',
			/*colocar class no container do menu*/ 'container_class' => 'main_menu',
			/*para adicionar ou não menu padrão*/'fallback_cb' => false
			));
		}
	 ?>
	</header>