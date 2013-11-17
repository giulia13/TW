<div class = "geral">
<?php get_header();?> 
	<?php 	if(have_posts()) : while(have_posts()) : the_post();  ?>
		<div id= "post">
					<div id = "titulopost"><?php the_time('d/M/Y') ?></div>
					<p class = "data"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>, , postado por: <?php the_author_link(); ?> </p>
				<div class = "texto"><p><?php the_content(); ?></p></div>
				<div id ="caixa">
						<p><?php the_tags(); ?>&nbsp;&nbsp;<?php edit_post_link('(Editar post)'); ?></p>
						<p id = "comentarios"><?php comments_popup_link('deixe um comentário', 'alguém falou ', '% comentários'); ?>
						<p id = "compartilhe"><a rel="nofollow" 
						href="http://www.facebook.com/share.php?u=<?php the_permalink() ?>" 
						title="compartilhe" target="_blank">compartilhe</a></p>
				</div>
		</div>
	<?php endwhile; else: ?>
	<p><?php _e('Nenhum post encontrado.'); ?></p>
<?php endif; ?>
<?php get_sidebar();?>	
</div>

