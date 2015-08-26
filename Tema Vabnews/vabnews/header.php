<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="<?=bloginfo('template_url')?>/style.css" type="text/css" rel="stylesheet">
<?php wp_head();?>
<title>VAB News - Sua nova fonte de notícias na web</title>
</head>
<body>
<div id="conteudo">
   <div id="topo">
      <div id="logo">
	     <h1><a href="<?php echo get_option('home');?>" title="Página inicial" alt="Página inicial"><img src="<?=bloginfo('template_url')?>/images/logo.gif" border="0"></a></h1>
	  </div>
	     <div id="busca">
		 <?php livesearchpopup_searchbox() ?>
		 </div>
   
   </div>
      <div id="menu">
       <ul>
	      <li><a href="<?php echo get_option('home');?>" title="Página inicial" alt="Página inicial">Home</a></li>
	      <li><a href="<?php echo get_option('home');?>/?page_id=3">Sobre nós</a></li>
	      <li><a href="<?php echo get_option('home');?>/?cat=4">Esportes</a></li>
	      <li><a href="<?php echo get_option('home');?>/?cat=5">Moda</a></li>
	      <li><a href="<?php echo get_option('home');?>/?cat=3">Tecnologia</a></li>
	      <li><a href="#">Redação</a></li>
	      <li><a href="<?php echo get_option('home');?>/?page_id=75">Fale conosco</a></li>
	   </ul>
	  </div> 