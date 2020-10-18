<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Big_Boy_Removal
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		?>

		<div class="container mx-auto px-4 mb-16">
			<hr>
			<?php
				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous Post', 'big-boy-removal' ) . '</span><span class="nav-title hidden lg:inline-block">: %title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next Post', 'big-boy-removal' ) . '</span><span class="nav-title hidden lg:inline-block">: %title</span>',
					)
				);
			?>
			<hr>
		</div>

		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

		<!-- Page Bottom Section -->
    <?php get_template_part( 'template-parts/content', 'bottom' ); ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
