<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_title(); ?>	
			<?php the_post_thumbnail('thumb'); ?>
			<?php the_excerpt(); ?>
	<?php endwhile; endif; ?>
	<h2>No encontrado</h2>
<?php get_footer(); ?>
