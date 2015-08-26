<?php get_header(); ?>
         <div id="conteudo-pagina">	
		    <div id="conteudo-pagina-esquerdo">
			<?php if (have_posts()): while (have_posts()) : the_post();?>
               <div id="categorias">
			   			      <small>2 Abr de 2009 | 125 visitas | <a href="#">50 Comentários</a></small>
			         <h1><a href="<?php the_Permalink()?>" title="<?php the_title();?>" alt="<?php the_title();?>"><?php the_title();?></a></h1>
			            <p><?php the_excerpt();?></p>
			   </div>
			      <?php endwhile; else:?>
				  <!--OBS: Caso a busca não seja bem sucedida, retornará a mensagem abaixo.-->
						<h1>Ooooooooooooos!</h1>
					  <p>Não encontramos o que você procura. Faça a busca novamente.</p>		   
				   <?php endif;?>

			   </div>
                   <?php get_sidebar(); ?>
		 
		 
		    <div id="divclear"> </div>
		 </div>

</div>
<?php get_footer(); ?>

