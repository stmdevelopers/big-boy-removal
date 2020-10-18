<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Big_Boy_Removal
 */

get_header();
?>

	<main id="primary" class="site-main">

		<header class="page-header">
			<section class="text-center text-white bg-center bg-cover" style="background-image: url(<?php echo get_template_directory_uri() . "/img/default-banner-3.jpg" ?>);">
				<div class="bg-gray-900 bg-opacity-75 py-12 px-2">
					<h1 class="entry-title text-white text-4xl md:text-5xl font-semibold leading-tight my-2 md:my-4 animate__animated animate__zoomIn">
						<?php the_archive_title(); ?>
					</h1>
					<div class="block mx-auto bg-red-600 w-10 h-2 mt-5 mb-6"></div>
					<?php the_archive_description(); ?>
				</div>
			</section>
		</header><!-- .page-header -->

		<section class="max-w-screen-lg mx-auto px-8 pb-8 pt-16">
      <?php
      if ( have_posts() ) :
        /* Start the Loop */
        while ( have_posts() ) :
          the_post();
      ?>
      <div class="w-full lg:max-w-full lg:flex mb-8">
        <div class="h-64 lg:h-auto lg:w-5/12 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
        </div>
        <div class="w-full lg:w-7/12 border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r px-6 py-6 flex flex-col justify-between leading-normal">
          <div class="">
            <div class="text-gray-900 font-bold text-2xl mb-1"><?php the_title(); ?></div>
            <p class="m-0 text-gray-600 text-xs">
              Posted on <span class="text-gray-600"><?php the_time('F j, Y'); ?></span> by <span class="text-gray-600"><?php echo get_the_author(); ?></span>
            </p>
            <p class="text-gray-800 text-sm leading-relaxed"><?php echo custom_excerpt(30); ?></p>
          </div>
          <div class="text-sm text-white mt-1">
            <a href="<?php the_permalink(); ?>" class="inline-block text-sm bg-red-600 border-2 border-red-600 px-4 py-1 rounded-full shadow cursor-pointer focus:outline-none hover:bg-red-500 hover:text-white hover:border-red-500 transition duration-300">Read more</a>
          </div>
        </div>
      </div>
      <?php
        endwhile;
      ?>
    </section>

    <?php
			the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
    ?>

		<!-- Page Bottom Section -->
    <?php get_template_part( 'template-parts/content', 'bottom' ); ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
