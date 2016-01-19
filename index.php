<?php get_header(); ?>

	<div id="main" class="center">

		<div id="bcont">

			<?php if( is_search() ) : ?>

				<h2 class="btitle">Search results for <span class="sres"><?php echo $s; ?></span> <?php $my_query = new WP_Query("post_type=post&s=$s&showposts=-1"); echo $my_query->post_count; ?> hits</h2>
				<?php get_template_part('bloghead');?>

			<?php elseif( is_archive() ) : ?>

				<h2 class="btitle">Posts in the <?php single_cat_title( ) ?> category</h2>
				<?php get_template_part('bloghead');?>

			<?php else : ?>

				<?php get_template_part('bloghead');?>

			<?php endif; ?>


			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

					<?php get_template_part('blogdets');?>

					<div class="content_wrap">
						<div class="content_style">

							<?php if ( is_search() ) {
								the_excerpt();
							} else {
								?>

								<?/*<h2><?php the_title();?></h2>*/?>

								<div class="blog_feature">
									<?php the_post_thumbnail( 'feature_image' ); ?>
								</div>

								<div class="blog_contwrap">
									<?php the_content();?>
								</div>

								<?
								wp_link_pages('before=<div class="p_navigation"> Pages &after=</div>');

							} ?>
						</div>
					</div>

				</article>

				<div class="clear"></div>

			<?php endwhile; // End the loop. Whew. ?>

		</div>

			<nav class="navigation">

				<?php wp_link_pages(); ?>
				<div class="nav-next"><?php next_posts_link( 'Next'); ?></div>
				<div class="nav-previous"><?php previous_posts_link('Prev'); ?></div>

			</nav>

			<div class="clear"></div>

	</div>

<?php  get_footer(); ?>
