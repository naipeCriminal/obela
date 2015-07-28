 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
  <?php if (has_post_thumbnail()) { $imagen = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); $ruta_imagen = $imagen[0]; } else{ echo 'no hay imagen';} ?>
  <?php the_title(); ?>
  <?php the_content(); ?>
<?php endwhile; else: ?> <h2>No encontrado</h2> <p>Lo sentimos, intente utilizar nuestro formulario de b&uacute;squedas.</p> <?php endif; ?>   