<?php
/**
 * Template Name: Get Free Quote
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Big_Boy_Removal
 */

get_header();
?>

	<main id="primary" class="site-main">

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
  
		<?php
		while ( have_posts() ) :
			the_post();
    ?>

      <div class="container mx-auto px-4 md:px-8 py-2">
        <!-- Get Free Quote Page Content -->
        <section class="max-w-xl mx-auto my-10">
          <div class="w-full py-4 px-8 rounded-lg border border-gray-400 mb-10">
            <h2 class="m-0 text-gray-800 text-3xl mt-2 mb-5">Request a Free Quote</h2>
            <hr class="bg-gray-400 mb-6">
            <?php echo do_shortcode('[contact-form-7 id="185" title="Get Free Quote"]'); ?>
          </div>
        </section>

      </div>
		
    <?php
		endwhile; // End of the loop.
		?>

    <!-- Page Bottom Section -->
    <?php get_template_part( 'template-parts/content', 'bottom' ); ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
