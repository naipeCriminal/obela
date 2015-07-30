<div class="container wmax">
	<div class="row recetas">
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
		<div class="col-xs-6 col-md-3 col-lg-3 padding-reset receta-grid">
			<a href="<?php echo get_permalink(); ?>">
				<img src="<?php echo $imgDestacada; ?>" alt="" class="img-responsive">
				<div class="receta-grid-over full">
					<div class="table">
						<div class="cell-center text-center">
							<p>
								<?php the_title(); ?>
								<div class="underline-recipe"></div>
							</p>
							<div class="obela-smile">
								<img src="<?php bloginfo('url'); ?>/wp-content/themes/template/assets/img/receta-smile.png">
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
		<div class="col-md-12 divisor" id="recetas-divisor">
			<div class="table">
				<div class="cell-center text-center">
					<p class="obelaizer">¿Con qué se</p>
					<p class="obelaizer">te antojaría probar</p>
					<p class="obelaizer">hummus Obela®?</p>
				</div>
			</div>
		</div>
		<!-- otros posts -->
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
		<div class="col-xs-6 col-md-3 col-lg-3 padding-reset receta-grid">
			<a href="<?php echo get_permalink(); ?>">
				<img src="<?php echo $imgDestacada; ?>" alt="" class="img-responsive">
				<div class="receta-grid-over full">
					<div class="table">
						<div class="cell-center text-center">
							<p>
								<?php the_title(); ?>
								<div class="underline-recipe"></div>
							</p>
							<div class="obela-smile">
								<img src="<?php bloginfo('url'); ?>/wp-content/themes/template/assets/img/receta-smile.png">
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
		<div class="col-md-12 divisor" id="recetas-divisor-bottom">
			<div class="row">
				<div class="col-md-offset-1 col-md-5 text-center copies col-xs-7">
					<p class="obelaizer">¡Yo ya probé!</p>
					<p class="obelaizer">¿Y tú?</p>
					<h1 class="obelaizer">¡Ya pruébalo!</h1>
				</div>
			</div>
		</div>
	</div>
</div>