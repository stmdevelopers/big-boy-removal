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
						Our Services
					</h1>
					<div class="block mx-auto bg-red-600 w-10 h-2 mt-5 mb-6"></div>
				</div>
			</section>
		</header><!-- .page-header -->

		<section class="max-w-screen-xl mx-auto px-4 py-8 mt-8 services-page-content">
      <div class="flex flex-wrap">
        <?php
        // Define our WP Query for retrieving Services Post Type
        $the_query = new WP_Query( array( 'post_type' => 'services', 'orderby' => 'menu_order', 'order' => 'ASC' ) );

        // Start our WP Query
        if ($the_query -> have_posts()) : while ($the_query -> have_posts()) : $the_query -> the_post();
        ?>
        <div class="w-full md:w-6/12 lg:w-4/12 px-4" data-aos="zoom-out-down" data-aos-duration="1000" data-aos-once="true">
          <div class="service-item relative flex flex-col min-w-0 break-words w-full mb-8 shadow-lg rounded-lg overflow-hidden">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="bg-service-item absolute top-0 left-0 w-full h-full rounded-lg">
            <div class="px-8 py-8 flex-auto text-center bg-black bg-opacity-60 rounded-lg z-10">
              <div class="icon-service-item text-white p-5 text-center inline-flex items-center justify-center w-20 h-20 mb-5 shadow-lg rounded-full bg-red-500">
                <i class="fas fa-truck-pickup fa-2x"></i>
              </div>
              <h5 class="text-white text-2xl font-semibold my-0 leading-tight"><?php the_title(); ?></h5>
              <p class="mt-2 mb-5 text-white">
                <?php echo custom_excerpt(12);  ?>
              </p>
              <a href="<?php the_permalink(); ?>" class="inline-block text-sm text-white bg-red-600 border-2 border-red-600 px-4 py-1 rounded-full shadow cursor-pointer focus:outline-none hover:bg-red-500 hover:text-white hover:border-red-500 visited:text-white transition duration-300">View Service</a>
            </div>
          </div>
        </div>
        <?php
          endwhile;
          wp_reset_postdata();
        ?>
      </div>
    </section>

    <?php
			the_posts_navigation();
		else:
			get_template_part( 'template-parts/content', 'none' );
		endif;
    ?>

  </main><!-- #main -->
  
  <!-- Page Bottom Section -->
  <?php get_template_part( 'template-parts/content', 'bottom' ); ?>

<?php
get_sidebar();
get_footer();
