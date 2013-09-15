<?php get_header(); ?> 

<div class = "container">


	<?php 	if(have_posts()) : while(have_posts()) : the_post();  ?>

	<div>
			<div id= "post">
				<div id= "titulopost"><p ><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></p></div>
				<div class = "texto"><p><?php the_content(); ?></p></div>
					<div id ="caixa1"
						<p> Postado por: <?php the_author_link(); ?> </p>
					</div>
					<div id = "caixa2">
						<p id = "comentarios"><?php comments_popup_link('deixe um comentário', 'alguém falou ', '% comentários'); ?>
						<p id = "compartilhe"><a href="###">compartilhe</a></p>
					</div>
			</div>
			
	</div>	

	<?php endwhile; else: ?>

	<p><?php _e('Nenhum post encontrado.'); ?></p>

	<?php endif; ?>
	<?php get_footer(); ?>		

</div>