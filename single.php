<?php get_header(); ?>
<div class="row">
<div class="col-12 contenedor">
	<div class="row">
		<div class="col-md-9 col-sm-12 text-justify mt-3">
		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
				<div><h2><?php the_title(); ?></h2></div>
			<!-- post -->
			<div class="texto-entrada"><?php the_content(); ?></div>
			<div class="comentarios">
				<?php comment_form(); ?>
					
			</div>
					<div>
									<ul>
										<?php 
										 	$comentarios = get_comments(array(
										 					'post_id' => $post->ID
										 				));
										 	wp_list_comments(array(
										 					'per_page' => 10
										 	));
										 ?>
									</ul>
								</div>
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?> 
		</div>
		<div class="col-3 side-right">

			
				<h4>Noticias Recientes</h4>
				<?php query_posts( array ('cat' => 6, 'posts_per_page' => 3)); ?>

						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<!-- post -->
						<a class="element-a" href="<?php the_permalink(); ?>" style="text-decoration: none;">
							<div class="side-element rounded">
							<div class="text-center dest-img"><?php the_post_thumbnail('thumbnail'); ?></div>	
							<h4><?php the_title(); ?></h4>
								<?php the_excerpt(); ?>



							</div>
						</a>
						<?php endwhile; ?>
						<!-- post navigation -->
						<?php else: ?>
						<!-- no posts found -->
						<?php endif; ?>

			
		</div>
	</div>
</div>
</div>



		<!--Llamadas a los Scripts de JavaScript-->	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>	
<script src="<?php 	echo get_stylesheet_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php 	echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php 	echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>	
<?php wp_footer(); ?>	
<?php get_footer(); ?>				
