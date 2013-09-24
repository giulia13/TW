<?php get_header(); ?> 
<div class="caixabusca"><?php get_search_form(); ?></div>

<div class = "container">


	<?php 	if(have_posts()) : while(have_posts()) : the_post();  ?>


	<div>
			<div id= "post">
					<div id = "titulopost"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>
					<div id = "data"><p><?php the_time('F jS, Y') ?></p></div>
				
				<div class = "texto"><p><?php the_content(); ?></p></div>
					<div id ="caixa1"
						<p> Postado por: <?php the_author_link(); ?> </p>
						<p><?php the_tags(); ?></p>
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
<?php get_sidebar(); ?>	
	<?php get_footer(); ?>		