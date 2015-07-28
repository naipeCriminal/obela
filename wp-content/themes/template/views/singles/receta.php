<?php
	get_header(); ?>
			<?php
				while ( have_posts() ) : the_post();
				?>
    <div class="container wmax">
    	<div class="row recetaindividual sinEspacio">
    		<?php 
			    $thumbID = get_post_thumbnail_id( $post->ID );
			    $imgDestacada = wp_get_attachment_url( $thumbID );
    		?>
    		<div class="col-md-6 imagenreceta" style="padding-right:0px;background:url('<?php echo(types_render_field("receta-individual", array('raw' => true) )) ; ?>');  background-size: cover;">
    		</div>
    		<div class="col-md-6" style="padding-left:0px;">
    			<div class="col-md-12 ingredientes">
    				<h2><?php the_title(); ?></h2>
    				<p><?php the_content(); ?></p>
					<div class="row">
						<div class="col-md-12">
		    				<div class="col-xs-12 col-md-4 sinEspacio">
		    					<div class="col-xs-6">
		    						<img src="<?php bloginfo('url'); ?>/wp-content/themes/template/assets/img/tiempo.png" alt="">
		    					</div>
		    					<div class="col-xs-6 inforeceta">
		    						<h4>tiempo</h4>
		    						<p><?php echo( types_render_field("tiempo")); ?></p>
		    					</div>
		    				</div>
		    				<div class="col-xs-12 col-md-4 sinEspacio">
		    					<div class="col-xs-6">
		    						<img src="<?php bloginfo('url'); ?>/wp-content/themes/template/assets/img/porciones.png" alt="">
		    					</div>
		    					<div class="col-xs-6 inforeceta">
		    						<h4>porciones</h4>
		    						<p><?php echo( types_render_field("porciones")); ?><p>
		    					</div>	    					
		    				</div>
		    				<div class="col-xs-12 col-md-4 sinEspacio">
		    					<div class="col-xs-6">
		    						<img src="<?php bloginfo('url'); ?>/wp-content/themes/template/assets/img/preparacion.png" alt="">
		    					</div>
		    					<div class="col-xs-6 inforeceta text-center">
		    						<h4>prep.</h4>
		    						<p><?php echo( types_render_field("prep")); ?></p>
		    					</div>	    					
		    				</div>				
						</div>
					</div>
    				<h2>lo que necesitas:</h2>
    				<?php 
	    				$necesitas = types_child_posts('que-necesita'); 
	    			?>
		            <ul>
		            <?php
		            	foreach ($necesitas as $child_post) {
		            ?>
		            	<li> - <?php echo $child_post->post_content; ?> </li>
		            <?php } ?>
		        	</ul>	    		    					
    			</div>
    			<div class="col-md-12 preparacion">

    				<h2>modo de preparacion</h2>
    				<?php
    					$preparacion= types_child_posts('modo-de-preparacion')
    				?>
    				<ul>
    					<?php foreach ($preparacion as $child_post) { ?>
    						<li style="color:#dfe130;"><span style="color:#fff;"><?php echo $child_post->post_content; ?></span></li>
    					<?php } ?>
    				</ul>
    				<div class="col-xs-12 col-sm-6 col-md-6"><h2 style="position:relative;top:-10px;">compartir receta</h2></div>
    				<div class="col-xs-12 col-sm-6 col-md-6">    				<ul class="compartirEn">
    					<li><img src="<?php bloginfo('url'); ?>/wp-content/themes/template/assets/img/logo-facebook.png" alt=""></li>
    					<li><img src="<?php bloginfo('url'); ?>/wp-content/themes/template/assets/img/logo-instagram.png" alt=""></li>
    					<li><img src="<?php bloginfo('url'); ?>/wp-content/themes/template/assets/img/logo-twiter.png" alt=""></li>
    				</ul></div>
    				

    			</div>
    		</div>
    		<div class="col-md-12 miramasrecetas sinEspacio">
    			<?php $category = get_the_category();
					$firstCategory = $category[0]->cat_name;$firstCategory;
					switch ($firstCategory) {
					    case "Hummus Clásico":
					        $img="obela-clasicoo";
					        break;
					    case "HUMMUS CON CHIPOTLE":
					        $img="obela-chipotle";
					        break;
					    case "HUMMUS CON PIMIENTO ROJO":
					        $img="obela-pimiento-rojo";
					        break;
					}
				?>
    			<img class="img-responsive" style="padding-right: 15px;" src="<?php bloginfo('url'); ?>/wp-content/themes/template/assets/img/<?php echo $img; ?>.jpg" alt="">
    		</div>
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
    		<div class="col-xs-6 col-md-3 masreceta">
				<div class="pantalla" style="position:absolute;"></div>
			    <img src="<?php echo $imgDestacada; ?>" alt="" class="img-responsive">		
				<div class="homehover">
					<h1 class="text-center"><?php the_title() ?></h1>
					<p class="text-center"><a href="<?php echo get_permalink(); ?>">ver más</a></p>
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
<!-- 			<div class="row recetaindividual" style="  padding: 15px; margin: 0px;">
	    		<div class="col-xs-6 col-md-3 masreceta">
					<div class="pantalla" style="position:absolute;"></div>
				    <img src="assets/img/receta-relacionada-1.jpg" alt="" class="img-responsive">		
					<div class="homehover">
						<h1 class="text-center">receta</h1>
						<p class="text-center"><a href="">ver más</a></p>
					</div>    			
	    		</div>
	    	</div> -->
    	</div>
    </div>
	<?php
		endwhile;
	?>
	<?php
	get_footer();


