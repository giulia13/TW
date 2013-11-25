<?php get_header(); ?>
<div class="geral">
              <div id="category">

              <div class="titulo_pg_descricao" id="titulo_pg_category">

        <?php if (is_home()){
                bloginfo('name');
                }elseif (is_category()){
                wp_title('',true);
                } ?>

                </div>

             <ul>
          <?php if (have_posts()): while (have_posts()) : the_post();?>

                  <li>
                  <div id="tamb"><img src="<?php video_thumbnail(); ?>" width="150" height="100" /></div>

                  <span class="titulo"><a href="<?php the_Permalink()?>"><?php the_title();?></a></span>
                  <span class="meta">
                   <strong>Postado em:</strong> <?php the_time('j M Y');?> |
                   <strong>Por:</strong> <?php the_author_posts_link();?> |
                   <?php comments_popup_link('0 comentário','1 comentário','% Comentários'); ?> |
                   <?php if(function_exists('the_views')){the_views();}?>
                  </span>
                  <p><a href="#"><?php the_excerpt_rereloaded(16, '');?></a></p>

                 </li>
                  <?php endwhile; else:?>
                  <?php endif;?>
             </ul>

            </div>

            <div class="paginator"><?php wp_pagenavi(); ?></div><!--paginator-->
   <?php get_sidebar(); ?> 
<?php get_footer(); ?>
  </div>  