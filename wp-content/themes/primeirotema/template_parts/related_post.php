<div class="related_post_item">
	<?php if(has_post_thumbnail()): ?>
		<a href="<?php the_permalink(); ?>" class="post_thumbnail">
			<?php the_post_thumbnail('medium', array('class' => 'post_miniatura')); ?>
		</a>
	<?php endif; ?>	

	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<p>
		<?php comments_number('0 comentários', 'um comentário', '% comentários'); ?> |
		<a href="<?php the_permalink(); ?>">LEIA MAIS</a>
	</p>
</div>