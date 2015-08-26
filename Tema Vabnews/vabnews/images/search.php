<?php get_header(); ?>
         <div id="conteudo-pagina">	
		    <div id="conteudo-pagina-esquerdo">
               <div id="categorias">
			   <?php if (have_posts()): while (have_posts()) : the_post();?>
			      <small>2 Abr de 2009 | 125 visitas | <a href="#">50 Comentários</a></small>
			         <h1><?php the_title();?></h1>
			            <p><?php the_content(__('Leia mais'));?></p>
		                   <?php endwhile; else:?>
			                 <?php endif;?>
			   </div>

			   </div>
                   <?php get_sidebar(); ?>
		 
		 
		    <div id="divclear"> </div>
		 </div>

</div>
<?php get_footer(); ?>