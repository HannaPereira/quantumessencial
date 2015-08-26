<?php get_header(); ?>
         <div id="conteudo-pagina">	
		    <div id="conteudo-pagina-esquerdo">
               <?php if (have_posts()): while (have_posts()) : the_post();?>
            <h1><?php the_title();?></h1>		 
               <p><?php the_content(__('Leia mais'));?></p>
             <?php endwhile; else:?>
			 <?php endif;?>
			   </div>
          <?php get_sidebar(); ?>
		 
		 
		    <div id="divclear"> </div>
		 </div>

</div>
<?php get_footer(); ?>