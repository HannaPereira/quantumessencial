<?php get_header(); ?>
         <div id="conteudo-pagina">	
		    <div id="conteudo-pagina-esquerdo">
			<?php if (have_posts()): while (have_posts()) : the_post();?>
               <div id="categorias">
			   				    <img src="<?php echo get_option('home');?>/<?php $key="feature";echo get_post_meta($post->ID,$key,true);?>" title="<?php the_title();?>" alt="<?php the_title();?>" width="115px" height="71px">
			   <small><?php the_time('j M Y');?>| <?php if(function_exists('the_views')){the_views();}?> | <?php comments_popup_link('0 comentário','1 comentário','Comentários');?></small>
			   <h1><a href="<?php the_Permalink()?>" title="<?php the_title();?>" alt="<?php the_title();?>"><?php the_title();?></a></h1>
			   <p><?php the_excerpt_rereloaded(30);?></p>
			   </div>
			   <?php endwhile; else:?>
			 <?php endif;?>
			 <?php if(function_exists('wp_pagenavi')) {wp_pagenavi();}?>

			   </div>
          <?php get_sidebar(); ?>
		 
		 
		    <div id="divclear"> </div>
		 </div>

</div>
<?php get_footer(); ?>