<?php get_header(); ?> 
<?php 
  global $post;
   
  //Redireccionando de acuerdo al tipo de post
  if( $post->post_type == "receta"){
    include("views/singles/receta.php");
  }else if( $post->post_type == "producto" ){
    include("views/singles/producto.php");
  }
  else{
    //Wordpress default view
    include("views/singles/default.php");
  } 
?>
<?php get_footer(); ?>