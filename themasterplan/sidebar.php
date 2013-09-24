<div class = "perfil">
		
		<div id = "foto"><?php echo get_avatar (get_the_author_id() , 160 ); ?></div>
		<p id="blogtitulo"><?php bloginfo('name') ?></p>
		<div id = "descricao"><p><?php bloginfo('description'); ?></p></div>
		
		
		<div class="link1"><a href="<?php _e('categories'); ?>">categorias</a></div>
		<div class="link1"><a href="<?php _e('archives'); ?>">arquivos</a></div>
		
		
</div>