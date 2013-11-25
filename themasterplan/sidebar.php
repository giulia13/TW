<?php wp_enqueue_script("jquery"); ?>
		<?php wp_head();?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2/jquery.js" type="text/javascript"></script>
<div class = "perfil">
		<div class= "avatar">
			<?php echo get_avatar (get_the_author_id(), 100);?>
		</div>	
		<div class = "info">
		<div id = "home"><a href="<?php bloginfo('home'); ?>"><?php bloginfo('name') ?></a></div>
		<p><?php bloginfo('description'); ?></p>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?><?php endif; ?>
		</div>
</div>