<?php get_header(); ?> 

<div class = "container">
	<div class="home"><a href="<?php bloginfo('home'); ?>">home</a></div>



	<?php 	if(have_posts()) : while(have_posts()) : the_post();  ?>


	<div>
			<div id= "post">
					<div id = "titulopost"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>
					<div id = "data"><?php the_time('d/M/Y') ?></div>
				
				<div class = "texto"><p><?php the_content(); ?></p></div>
					<div id ="caixa1"
						<p>Postado por: <?php the_author_link(); ?> </p>
						<p><?php the_tags(); ?></p>
						<p><?php edit_post_link('(editar post)'); ?></p>
					</div>
					<div id = "caixa2">
						<p id = "comentarios"><?php comments_popup_link('deixe um comentário', 'alguém falou ', '% comentários'); ?>
						<p id = "compartilhe"><a rel="nofollow" 
						href="http://www.facebook.com/share.php?u=<?php the_permalink() ?>" 
						title="compartilhe" target="_blank">compartilhe</a></p>

					</div>
			</div>
			
	</div>	
	
	<?php endwhile; else: ?>

	<p><?php _e('Nenhum post encontrado.'); ?></p>

	<?php endif; ?>
		
</div>