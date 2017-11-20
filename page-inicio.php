<!--Llamada al encabezado-->
<?php get_header(); ?>

<!--Llamada del loop que carga el slider de inicio-->

	<div class="row">
		<?php query_posts('p=25') ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- post -->
		<div style="width: 100%;"><?php the_content(); ?></div>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
	</div>
	<div class="row">

<!--Llamada del loop que carga la info  de inicio-->

		<div class="col-sm-12 col-12 contenedor">
			<h2 class="text-center mt-2">Información de interés</h2>
			<div class="row">
				<?php query_posts('cat=4') ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<!-- post -->
				
				<div class="col-md-3 col-sm-12 imagen-destacada">
					
					<figure class="">
						<?php the_post_thumbnail('thumbnail'); ?>
					</figure>
				</div>
				<div class="col-sm-12 col-md-9">
					<h4><a class="text-primary" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
							
					<div class="text-justify"><p><?php the_excerpt(); ?></div></p></div>
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
