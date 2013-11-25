<html>
	<head>
		<?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2/jquery.js" type="text/javascript"></script>
		<script type="text/javascript">
    	$(document).ready(function(){  
  		$('.desaparecer').click(function(){
		$('.perfil').animate({ opacity: "hide" }, "slow");
    });
		$('.aparecer').click(function(){
		$('.perfil').animate({ opacity: "show" }, "fast");
    });
		 });
</script>
 	 		<title><?php bloginfo('name') ?></title>
			<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
			<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; <?php bloginfo('charset'); ?>" />
				<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all" type="text/css"/>
				<link href='http://fonts.googleapis.com/css?family=Sintony' rel='stylesheet' type='text/css'>
			<link rel="alternative" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>"/>
			<link rel="alternative" type="text/xml" title="RSS .92" href="<?php bloginfo('rss-url'); ?>" />
			<link rel="alternative" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
			<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
 	 	</head>
	<div class = "header"></div>
<body <?php body_class(); ?>>
