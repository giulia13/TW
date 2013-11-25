<div id= "postsingle">
		
<?php get_header(); ?> 

<body <?php body_class(); ?>>

	<?php 	if(have_posts()) : while(have_posts()) : the_post();  ?>


					<div id = "data"><?php the_time('d/M/Y') ?> </div>
					<div id = "titulopost"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>, <span id = "caixa">postado por: <?php the_author_link(); ?></span></div>
					
				
				<div class = "texto"><p><?php the_content(); ?></p></div>
					<div id ="caixa"
						<p><?php the_tags(); ?></p>
						<p><?php edit_post_link('(editar post)'); ?></p>
						<p><?php comments_template();?></p>
					</div>
					<div id = "caixa">
						<p id = "comentarios"><?php comments_popup_link('deixe um comentário', 'alguém falou ', '% comentários'); ?>
						<p id = "compartilhe"><a rel="nofollow" 
						href="http://www.facebook.com/share.php?u=<?php the_permalink() ?>" 
						title="compartilhe" target="_blank">compartilhe</a></p>

					</div>
		
			
	
	
	<?php endwhile; else: ?>

	<p><?php _e('Nenhum post encontrado.'); ?></p>

	<?php endif; ?>
	<?php get_footer();?> 
</div>	
