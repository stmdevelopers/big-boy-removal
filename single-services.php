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

    <header class="entry-header">
      <!-- Service Page Banner Section -->
      <?php if (has_post_thumbnail()) : ?>
        <section class="text-center text-white bg-center bg-cover" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
      <?php else: ?>
        <section class="text-center text-white bg-center bg-cover" style="background-image: url(<?php echo get_template_directory_uri() . "/img/default-banner-3.jpg" ?>);">
      <?php endif; ?>
          <div class="bg-gray-900 bg-opacity-75 py-20 px-2">
            <h1 class="entry-title text-white text-4xl md:text-5xl font-semibold leading-tight mx-2 my-2 md:my-4 animate__animated animate__zoomIn"><?php the_title(); ?></h1>
            <div class="block mx-auto bg-red-600 w-10 h-2 mt-5"></div>
          </div>
        </section>
    </header><!-- .entry-header -->

    <?php // big_boy_removal_post_thumbnail(); ?>

    <div class="page-content-section entry-content container mx-auto px-4 md:px-8 pt-2 pb-6">
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

		<!-- Page Bottom Section -->
    <?php get_template_part( 'template-parts/content', 'bottom' ); ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
