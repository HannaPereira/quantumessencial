<?php get_header(); ?>
         <div id="conteudo-pagina">	
		    <div id="conteudo-pagina-esquerdo">
               <?php if (have_posts()): while (have_posts()) : the_post();?>
            <h1><?php the_title();?></h1>		 
               <p><?php the_content(__('Leia mais'));?></p>
			   <small><?php if (function_exists('the_tags'))the_tags();?></small>
             <?php endwhile; else:?>
			 <?php endif;?>
			 
			 
			 <div id="relacionados">
			 <?php if(function_exists('echo_ald_crp')) echo_ald_crp(); ?>
			 </div>
			 
			 <?php comments_template(); ?>
			 
			   </div>
			   
          <?php get_sidebar(); ?>
		 
		 
		    <div id="divclear"> </div>
		 </div>

</div>
<?php get_footer(); ?>