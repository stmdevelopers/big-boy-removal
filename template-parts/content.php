<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Big_Boy_Removal
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			// the_title( '<h1 class="entry-title">', '</h1>' ); 
		?>
			<!-- Page Banner Section -->
			<?php if (has_post_thumbnail()) : ?>
				<section class="text-center text-white bg-bottom bg-cover" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
			<?php else: ?>
				<section class="text-center text-white bg-bottom bg-cover" style="background-image: url(<?php echo get_template_directory_uri() . "/img/default-banner-3.jpg" ?>);">
			<?php endif; ?>
				<div class="bg-gray-900 bg-opacity-75 py-20 px-2">
					<h1 class="entry-title text-white text-4xl md:text-5xl font-semibold leading-tight my-2 md:my-4 animate__animated animate__zoomIn"><?php the_title(); ?></h1>
					<?php if ( 'post' === get_post_type() ) : ?>
						<p class="entry-meta text-gray-100 animate__animated animate__fadeInDown animate__delay-1s">
							Posted on <span class="text-yellow-300"><?php the_time('F j, Y'); ?></span> by <span class="text-yellow-300"><?php echo get_the_author(); ?></span>
						</p><!-- .entry-meta -->
					<?php endif; ?>
				</div>
			</section>

		<?php
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
					big_boy_removal_posted_on();
					big_boy_removal_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		<?php
		endif;
		?>
	</header><!-- .entry-header -->

	<?php // big_boy_removal_post_thumbnail(); ?>

	<div class="page-content-section entry-content container mx-auto px-4 py-2">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'big-boy-removal' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'big-boy-removal' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer container mx-auto px-4 py-2">
		<?php big_boy_removal_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
