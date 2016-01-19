<?php

/*
Template Name: Home page
*/

get_header(); ?>
<?php include('inc-edit.php');?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="banner">
		<div class="container skinny">
			<?php the_content();?>
		</div>
	</div>

<?php endwhile; // End the loop. Whew. ?>

<?php get_footer(); ?>
