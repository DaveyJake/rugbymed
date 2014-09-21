<?php
/*
Template Name: Home
*/

get_header(); ?>

	<div class="row content-area">
		
		<section class="home-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>
			
			<?php endwhile; ?>

		</section>

	</div>

<?php get_footer(); ?>