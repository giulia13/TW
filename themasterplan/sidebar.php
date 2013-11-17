<?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2/jquery.js" type="text/javascript"></script>
		<div class = "aparecer"></div>
<div class = "perfil">
	<div class = "desaparecer"></div>
		

		<div id="blogtitulo"><a href="<?php bloginfo('home'); ?>"><?php bloginfo('name') ?></a></div>
		</br>
		<div class = "avatar"><?php echo get_avatar (get_the_author_id() , 150 ); ?></div>
		<div id = "descricao"><p><?php bloginfo('description'); ?></p></div>
		
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?><?php endif; ?>
		 
		
		
</div>