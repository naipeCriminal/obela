<div class="container wmax">
	<div class="row recetas ">
		<div class="row recetaindividual" style="  padding: 15px; margin: 0px;padding-left: 0px;">
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
			<div class="col-xs-6 col-md-3 col-lg-3 masreceta">
				<div class="pantalla" style="position:absolute;"></div>
				<img src="<?php echo $imgDestacada; ?>" alt="" class="img-responsive" width="">
				<div class="homehover col-xs-12 sinEspacio" style="width:100%">
					<img class="imgreceta img-responsive" src="<?php bloginfo('url'); ?>../wp-content/themes/template/assets/img/recetas-barra.png" style="padding-left: 5px;" alt="">
					<h3 class=""><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div  style="padding-left:5px;" class="col-xs-4 sinEspacio">
						<img src="<?php bloginfo('url'); ?>../wp-content/themes/template/assets/img/receta-tiempo.png">
						<ul>
							<li>tiempo</li>
							<li><span style="font-weight:bolder;"><?php echo( types_render_field("tiempo")); ?></span></li>
						</ul>
					</div>
					<div  style="padding-left:5px;" class="col-xs-4 sinEspacio">
						<img src="<?php bloginfo('url'); ?>../wp-content/themes/template/assets/img/receta-porciones.png">
						<ul>
							<li>porciones</li>
							<li><span style="font-weight:bolder;"><?php echo( types_render_field("prep")); ?></span></li>
						</ul>
					</div>
					<img class="imgreceta img-responsive" src="<?php bloginfo('url'); ?>../wp-content/themes/template/assets/img/recetas-barra.png"  style="padding-left: 5px;" alt="">
				</div>
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
		<div class="col-md-12 sinEspacio">
			<img src="assets/img/pleca-hummus.jpg" class="img-responsive" alt="">
		</div>
	</div>
</div>