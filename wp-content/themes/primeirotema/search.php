<?php get_header(); ?>
	
	<section>
		
		<div class="container">

			<h2>Você pesquisou por: <?php echo get_search_query(); ?></h2>
			<?php if(have_posts()): ?>
				<?php while(have_posts()): ?>
					<?php the_post(); ?>

					<?php get_template_part('template_parts/post'); ?>

				<?php endwhile; ?>
			<?php endif; ?>

			<div class="paginacao">
				<div class="pagina_anterior"><?php previous_posts_link('Página anterior'); ?></div>

				<div class="proxima_pagina"><?php next_posts_link('Próxima página'); ?></div>
			</div>
		</div>

		<?php get_sidebar(); ?>
		<div style="clear: both"></div>
	</section>
<?php get_footer(); ?>