<?php get_header(); ?>
<?php 
	global $post;
	//Redireccionando a la vista de acuerdo a [use:PAGENAME] que se define en el contenido de $post
	$pagefile = getContentTemplate($post);
	if( $pagefile !=""){
		//Cargando controlador
		include_once("controllers/".$pagefile);
		//Cargando vista
	  	include_once("views/".$pagefile);
	}else{
	  //Wordpress default view
	  include_once("views/pages/default.php");
	}
?>
<?php get_footer(); ?>