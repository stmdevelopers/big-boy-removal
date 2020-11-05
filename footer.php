<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Big_Boy_Removal
 */

?>

	<!-- Footer Section -->
	<footer id="colophon" class="site-footer relative bg-yellow-100 pt-8 pb-6">
		<div class="container mx-auto px-4 pt-8">
			<div class="flex flex-wrap">
				<div class="w-full lg:w-5/12 px-4">
					<h4 class="text-gray-900 text-3xl font-semibold my-0">Let's keep in touch!</h4>

					<?php echo do_shortcode('[newsletter_form form="1"]'); ?>

					<!-- <form class="w-full max-w-sm">
						<div class="flex items-center border-b border-red-600 py-2">
							<input class="appearance-none bg-transparent w-full text-gray-700 mr-3 py-2 px-2 leading-tight focus:outline-none" style="border: none;" type="email" placeholder="Enter your email address" aria-label="email" required>
							<button class="flex-shrink-0 bg-red-600 hover:bg-red-500 border-red-600 hover:border-red-500 text-sm border-4 text-white py-2 px-3 rounded cursor-pointer transition duration-200" type="submit">
								Subscribe
							</button>
						</div>
					</form> -->

					<h5 class="text-lg mt-6 mb-2 text-gray-700">
						Find us on any of these platforms, we respond 1-2 business days.
					</h5>
					<div class="mt-4">
						<button
							class="bg-white text-red-600 hover:text-red-500 shadow-lg font-normal h-10 w-10 rounded-full border-none outline-none focus:outline-none cursor-pointer mr-2 p-1"
							type="button">
							<i class="fab fa-twitter"></i>
						</button>
						<button
							class="bg-white text-red-600 hover:text-red-500 shadow-lg font-normal h-10 w-10 rounded-full border-none outline-none focus:outline-none cursor-pointer mr-2 p-1"
							type="button"
						>
							<i class="fab fa-facebook"></i>
						</button>
						<button
							class="bg-white text-red-600 hover:text-red-500 shadow-lg font-normal h-10 w-10 rounded-full border-none outline-none focus:outline-none cursor-pointer mr-2 p-1"
							type="button">
							<i class="fab fa-instagram"></i>
						</button>
					</div>
				</div>
				<div class="w-full lg:w-7/12 px-4 mt-10 lg:mt-0">
					<div class="flex flex-wrap items-top mb-6">
						<div class="w-full md:w-3/12 px-4 ml-auto">
							<span
								class="block uppercase text-red-600 text-sm font-bold mb-4"
								>Quick Links</span
							>
							<?php wp_nav_menu(
								array(
									"theme_location" => "menu-2",
									"container" => false,
									"menu_class" => "quick-links"
								)
							); ?>
						</div>
						<div class="w-full md:w-4/12 px-4 mt-4 md:mt-0">
							<span
								class="block uppercase text-red-600 text-sm font-bold mb-4"
								>Our Services</span
							>
							<?php wp_nav_menu(
								array(
									"theme_location" => "menu-3",
									"container" => false,
									"menu_class" => "services-links"
								)
							); ?>
						</div>
						<div class="w-full md:w-5/12 px-4 mt-4 md:mt-0">
							<span
								class="block uppercase text-red-600 text-sm font-bold mb-4"
								>Contact Info</span
							>
							<ul class="contact-info">
								<li>
									<a
										class="text-gray-700 hover:text-red-700 font-semibold block pb-4 text-sm"
										href="tel:0451 386 808"
										><i class="fas fa-phone-alt mr-2"></i> 0451 386 808
									</a>
								</li>
								<li>
									<a
										class="text-gray-700 hover:text-red-700 font-semibold block pb-4 text-sm"
										href="mailto:contact@bigboyremoval.com.au"
										><i class="fas fa-envelope mr-2"></i> contact@bigboyremoval.com.au
									</a>
								</li>
								<li>
									<p
										class="text-gray-700 font-semibold block pb-4 text-sm m-0"
										href="#"
										><i class="fas fa-map-marker-alt mr-3"></i> Melbourne, Australia
									</p>
								</li>        
							</ul>
						</div>
					</div>
				</div>
			</div>
			<hr class="my-6 border-gray-400" />
			<div
				class="flex flex-wrap items-center md:justify-between justify-center"
			>
				<div class="w-full md:w-1/2 px-4 mx-auto text-center md:text-left">
					<div class="text-xs text-gray-600 font-semibold">
						Copyright © <?php echo date("Y"); ?> <a href="#" class="hover:text-gray-900">Big Boy Removal</a>. Website Designed by 
						<a
							href="http://softtechmultimedia.com/"
							class="hover:text-gray-900"
							>Softtech Multimedia</a
						>.
					</div>
				</div>
				<div class="w-full md:w-1/2 px-4 mx-auto text-center md:text-right">
					<div class="text-xs text-gray-600 font-semibold">
						<a href="#" class="hover:text-gray-900">Terms & Conditions</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="#" class="hover:text-gray-900">Privacy Policy</a> 
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
