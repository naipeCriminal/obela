<?php
get_header(); ?>
<?php
	while ( have_posts() ) : the_post();
?>
<div class="container wmax" id="receta">
	<div class="row relative">
		<?php
			$thumbID = get_post_thumbnail_id( $post->ID );
			$imgDestacada = wp_get_attachment_url( $thumbID );
		?>
		<div class="col-md-6 padding-reset full-height absolute">
			<div class="full-bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/maqueta/foto-producto.jpg);">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/maqueta/foto-producto.jpg" alt="" class="img-responsive mobile">
			</div>
		</div>
		<div class="col-md-6 col-md-offset-6">
			<div class="receta-wrapper">
				<h1 id="receta-titulo" class="obela-bold yellow"><?php the_title(); ?></h1>
				<p><?php the_content(); ?></p>
				<h2 class="obela-bold yellow">Información nutrimental</h2>
				
				<p>PORCIÓN:<?php echo( types_render_field("porcion")); ?>, PORCIONES POR ENVASE:<?php echo( types_render_field("porciones-por-envase")); ?> CANTIDAD POR PORCIÓN:<?php echo( types_render_field("cantidad-por-porcion")); ?></p> <hr>
				<ul>
					<li>GRASAS TOTALES: <?php echo( types_render_field("grasas-totales")); ?></li>
					<li>SODIO: <?php echo( types_render_field("sodio")); ?></li>
					<li>FIBRA DIETÉTICA: <?php echo( types_render_field("fibra-dietetica")); ?></li>
					<li>CARBOHIDRATOS DISPONIBLES: <?php echo( types_render_field("carbohidratos")); ?></li>
					<li>PROTEÍNAS: <?php echo( types_render_field("proteinas")); ?></li>
				</ul>
			</div>
			<div class="row" id="preparacion-receta">
				<div class="col-md-12">
					<div class="receta-wrapper">
						<h2 class="obela-bold yellow">Ingredientes:</h2>
						<div id="producto-ingredientes">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus iusto numquam fugiat animi quas odit temporibus, repudiandae, aliquid, fugit doloremque praesentium perferendis harum ratione excepturi. Impedit sapiente nam, optio odio.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 divisor reset-padding" id="producto-divisor">
			<div class="row full-height">
				<div class="col-md-6 col-md-offset-2 full-height">
					<div class="table text-center">
						<div class="cell-center">
							<h1 class="obelaizer">¡Yo ya..!</h1>
							<p class="obelaizer">¿Y tú?</p>
							<p class="obelaizer green">¡Ya pruébalo!</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	endwhile;
?>
<?php require( get_template_directory() ."/views/pages/productos.php"); ?>
<?php
get_footer();