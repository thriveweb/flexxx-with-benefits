<?php get_header(); ?>
<?php include('inc-edit.php');?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="banner">
		<div class="container skinny">
			<h1><?php the_title(); ?></h1>
			<?php the_content();?>
		</div>
	</div>

<?php endwhile; // End the loop. Whew. ?>

<?php get_footer(); ?>
