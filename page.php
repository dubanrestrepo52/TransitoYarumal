<?php get_header(); ?>

	<div class="row">

		
		<div class="col-12 contenedor">
			<div class="row">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<!-- post -->
				
	
				<div class="col-12">
					<?php the_title(); ?>
							
					<?php the_content(); ?>
						
				</div>
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?> 
			</div>
		</div>
	</div>

	

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>	
<script src="<?php 	echo get_stylesheet_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php 	echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php 	echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>	
<?php wp_footer(); ?>	
<?php get_footer(); ?>
