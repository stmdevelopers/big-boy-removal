<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Big_Boy_Removal
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<!-- Page Banner Section -->
		<?php if (has_post_thumbnail()) : ?>
			<section class="text-center text-white bg-center bg-cover" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
		<?php else: ?>
			<section class="text-center text-white bg-center bg-cover" style="background-image: url(<?php echo get_template_directory_uri() . "/img/default-banner-3.jpg" ?>);">
		<?php endif; ?>
				<div class="bg-gray-900 bg-opacity-75 py-20 px-2">
					<h1 class="entry-title text-white text-4xl md:text-5xl font-semibold leading-tight my-2 md:my-4 animate__animated animate__zoomIn"><?php the_title(); ?></h1>
					<div class="block mx-auto bg-red-600 w-10 h-2 mt-5"></div>
				</div>
			</section>
	</header><!-- .entry-header -->

	<?php // big_boy_removal_post_thumbnail(); ?>

	<div class="entry-content container mx-auto px-4 md:px-8 py-2">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'big-boy-removal' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'big-boy-removal' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
