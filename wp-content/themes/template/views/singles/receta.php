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
			<div class="full-bg" style="background-image: url(<?= $imgDestacada ?>);">
				<img src="<?= $imgDestacada ?>" alt="" class="img-responsive mobile">
			</div>
		</div>
		<div class="col-md-6 col-md-offset-6">
			<div class="receta-wrapper">
				<h1 id="receta-titulo" class="obela-bold yellow"><?php the_title(); ?></h1>
				<p><?php the_content(); ?></p>
				<div class="row text-left">
					<div class="col-xs-3 icon-container">
						<div class="row">
							<div class="col-xs-4">
								<span class="icon tiempo-icon"></span>
							</div>
							<div class="col-xs-8">
								<h3>Tiempo <br>
									<span><?php echo( types_render_field("tiempo")); ?></span>
								</h3>
							</div>
						</div>
					</div>
					<div class="col-xs-3 icon-container">
						<div class="row">
							<div class="col-xs-4">
								<span class="icon prep-icon"></span>
							</div>
							<div class="col-xs-8">
								<h3>Prep <br>
									<span><?php echo( types_render_field("prep")); ?></span>
								</h3>
							</div>
						</div>
					</div>
					<div class="col-xs-3 icon-container">
						<div class="row">
							<div class="col-xs-4">
								<span class="icon portions-icon"></span>
							</div>
							<div class="col-xs-8">
								<h3>Porciones <br>
									<span><?php echo( types_render_field("porciones")); ?></span>
								</h3>
							</div>
						</div>
					</div>
				</div>
				<h2 class="obela-bold yellow">Lo que necesitas:</h2>
				<ul id="receta-ingredientes" class="padding-reset">
					<?php
						$necesitas = types_child_posts('que-necesita');
					?>
					<?php
						foreach ($necesitas as $child_post) {
					?>
					<li>- <?php echo $child_post->post_content; ?> </li>
					<?php } ?>
				</ul>
			</div>
			<div class="row" id="preparacion-receta">
				<div class="col-md-12">
					<div class="receta-wrapper">
						<div class="flecha-descripcion"></div>
						<h2 class="obela-bold yellow">Modo de preparación</h2>
						<ul id="receta-preparacion" class="yellow">
							<?php
								$preparacion= types_child_posts('modo-de-preparacion')
							?>
							<?php foreach ($preparacion as $child_post) { ?>
								<li><div class="white"><?php echo $child_post->post_content; ?></div></li>
							<?php } ?>
						</ul>
						<h2 class="obela-bold yellow">
							Compartir receta
							<a href="https://www.facebook.com/ObelaMX" target="_blank">
								<div class="icon-network">
									<span class="icon fb-icon"></span>
								</div>
							</a>
							<a href="https://twitter.com/Obela_Mx" target="_blank">
								<div class="icon-network">
									<span class="icon tw-icon"></span>
								</div>
							</a>
							<a href="https://instagram.com/obela_mx/" target="_blank">
								<div class="icon-network">
									<span class="icon ig-icon"></span>
								</div>
							</a>
						</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- divisor -->
	<div class="row">
		<div class="col-md-12 divisor reset-padding" id="receta-divisor">
			<div class="table text-center">
				<div class="cell-center">
					<h1 class="obelaizer">¿Te gustó la receta?</h1>
					<p class="obelaizer">Mira las otras recetas</p>
					<p class="obelaizer">Que tenemos para tí</p>
				</div>
			</div>
		</div>
	</div>
	<!-- divisor -->
	<div class="row">
		<?php
		$args = array('post_type' => 'receta','posts_per_page' => '8','orderby' => 'rand',);
		$category_posts = new WP_Query($args);
		if($category_posts->have_posts()) :
		while($category_posts->have_posts()) :
		$category_posts->the_post();
		global $post;
		$thumbID = get_post_thumbnail_id( $post->ID );
		$imgDestacada = wp_get_attachment_url( $thumbID );
		?>
		<div class="col-xs-6 col-md-3 col-lg-3 padding-reset grid overeable">
			<a href="<?php echo get_permalink(); ?>">
				<img src="<?php echo $imgDestacada; ?>" alt="" class="img-responsive">
				<div class="grid-over full">
					<div class="table">
						<div class="cell-center text-center">
							<p>
								<?php the_title(); ?>
								<div class="underline-recipe"></div>
							</p>
							<div class="obela-smile">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/receta-smile.png">
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		<?php
		endwhile;
			else:
		?>
		Oops, there are no posts.
		<?php
		endif;
		?>
	</div>
</div>
<?php
	endwhile;
?>
<?php
get_footer();