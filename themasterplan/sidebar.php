<div class = "perfil">
		
		<div id = "foto"></div>
		<p id="blogtitulo"><?php bloginfo('name') ?></p>
		<div id = "descricao"><p><?php bloginfo('description'); ?></p></div>
		
			
		<?php wp_list_pages('title_li='); ?>
		<div class="link1"><h2 ><?php _e('Categories'); ?></h2></div>
		<div class="link1"><h2 ><?php _e('Archives'); ?></h2></div>
		
		
</div>