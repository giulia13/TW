<?php get_header(); ?>
    <div id="container">
        <div id="artigos">
         
            <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
            <?php /* If this is a category archive */ if (is_category()) { ?>
                Arquivo da Categoria "<?php echo single_cat_title(); ?>"
            <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                Arquivo de <?php the_time('j \d\e F \d\e Y'); ?>
            <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                Arquivo de <?php the_time('F \d\e Y'); ?>
            <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                Arquivo de <?php the_time('Y'); ?>
            <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                Arquivo do Autor
            <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                Arquivo do Blog
            <?php } ?>
             
          


         <?php   if(have_posts()) : while(have_posts()) : the_post();  ?>


            <div>
                    <div id= "post">
                            <div id = "titulopost"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>
                            <div id = "data"><?php the_time('d/M/Y') ?>
                    </div>
                
                    <div class = "texto">
                        <p><?php the_content(); ?></p>
                    </div>
                            
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
            
      
    
            <?php endwhile; else: ?>

    </div>
            <p><?php _e('Nenhum post encontrado.'); ?></p>
            <?php endif; ?>
        
</div>
    <?php get_sidebar(); ?> 
    <?php get_footer(); ?>      