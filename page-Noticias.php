<?php get_header(); ?>

	<div class="row">

		
		<div class="col-12 contenedor ">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<h2>Ultimas Noticias</h2>
				</div>
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<!-- post -->
				
	
				
					<div class="col-md-3 col-sm-12 border mt-3 pr-2 mr-3 ml-3 mb-3 pt-2 pb-2">
					
						<div><?php the_post_thumbnail('thumbnail'); ?></div>
					
						<div class="text-justify">
							<h4><a class="text-primary" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4></h4>
							<p class="card-text"><?php the_excerpt(); ?></p>
						</div>
						
					</div>
			
					
					
						
				
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>

				

			</div>
			<?php 	echo paginate_links(); ?>
			</div>
		</div>
	

	

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>	
<script src="<?php 	echo get_stylesheet_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php 	echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php 	echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>	
<?php wp_footer(); ?>	
<?php get_footer(); ?>
