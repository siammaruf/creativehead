<?php
/**
 * Template Name: Home Page
 *
 * @package 3Hosrse WordPress theme
 */
?>

<?php get_header(); ?>
	<?php while( have_posts() ) : the_post(); ?>
		<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<!-- Article content -->
			<div class="entry-content">
				<?php the_content(); ?>
			</div> <!-- end entry-content -->
		</main>
	<?php endwhile; ?>
<?php get_footer(); ?>
