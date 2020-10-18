<?php
/**
 * Template Name: Contact Us
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Big_Boy_Removal
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
    ?>

      <div class="container mx-auto px-4 md:px-8 py-2">
        <!-- Contact Us Page Content -->
        <header class="pt-16 pb-16 px-2">
          <h1 class="entry-title m-0 text-gray-800 text-center text-4xl md:text-5xl font-semibold leading-tight animate__animated animate__zoomIn"><?php the_title(); ?></h1>
          <div class="block mx-auto bg-red-600 w-10 h-2 mt-5"></div>
        </header>

        <section class="max-w-screen-lg mx-auto md:flex md:justify-center">
          <div class="w-full md:w-1/2 lg:w-1/3 bg-red-600 p-5 rounded-lg md:mx-3 mb-6">
            <div class="inline-block mx-auto w-16 h-16 rounded-full text-2xl text-red-600 bg-yellow-100 flex justify-center items-center shadow-lg">
              <i class="fas fa-phone-alt"></i>
            </div>
            <h4 class="m-0 pt-4 pb-1 text-center text-xl">Phone</h4>
            <a href="tel:0451 386 808" class="cursor-pointer block m-0 text-center font-semibold text-yellow-100 hover:text-yellow-200">0451 386 808</a>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/3 bg-red-600 p-5 rounded-lg md:mx-3 mb-6">
            <div class="inline-block mx-auto w-16 h-16 rounded-full text-2xl text-red-600 bg-yellow-100 flex justify-center items-center shadow-lg">
              <i class="fas fa-envelope"></i>
            </div>
            <h4 class="m-0 pt-4 pb-1 text-center text-xl">Email</h4>
            <a href="mailto:info@bigboyremoval.com.au" class="cursor-pointer block m-0 text-center font-semibold text-yellow-100 hover:text-yellow-200">info@bigboyremoval.com.au</a>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/3 bg-red-600 p-5 rounded-lg md:mx-3 mb-6">
            <div class="inline-block mx-auto w-16 h-16 rounded-full text-2xl text-red-600 bg-yellow-100 flex justify-center items-center shadow-lg">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <h4 class="m-0 pt-4 pb-1 text-center text-xl">Address</h4>
            <a href="#" class="cursor-pointer block m-0 text-center font-semibold text-yellow-100 hover:text-yellow-200">62-64 Station Street VIC 3078, Australia</a>
          </div>
        </section>

        <section class="max-w-xl mx-auto my-10">
          <div class="w-full py-4 px-8 rounded-lg border border-gray-400 mb-10">
            <h2 class="m-0 text-gray-800 text-4xl text-center mt-2 mb-5">Send Us Your Enquiry</h2>
            <hr class="bg-gray-400 mb-6">
            <?php echo do_shortcode('[contact-form-7 id="112" title="Contact Us Form"]'); ?>
          </div>
        </section>

        <section class="max-w-screen-lg mx-auto my-12">
          <div class="w-full">
            <h2 class="m-0 text-gray-800 text-center text-4xl md:text-5xl">Our Location</h2>
            <div class="block mx-auto bg-red-600 w-10 h-2 mt-5 mb-10"></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.4243246821225!2d145.01550101492361!3d-37.78009443988975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad6438f362f0551%3A0x86d26384ab8415e1!2s62%20Station%20St%2C%20Fairfield%20VIC%203078!5e0!3m2!1sen!2sau!4v1602563415570!5m2!1sen!2sau" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
