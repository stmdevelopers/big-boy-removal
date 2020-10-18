<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Big_Boy_Removal
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="margin: 0;">
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'big-boy-removal' ); ?></a>

	<header id="masthead" class="site-header">
		<!-- Top Header Section -->
		<section class="flex items-center justify-end flex-wrap bg-red-600 py-1 px-8">
      <a href="tel:0451 386 808" class="inline-block text-sm font-semibold px-2 py-2 no-underline leading-none rounded text-white hover:text-gray-800 sm:mr-4">
        <i class="fas fa-phone-alt"></i> 0451 386 808
      </a>
      <a href="mailto:contact@bigboyremoval.com.au" class="inline-block text-sm font-semibold px-2 py-2 no-underline leading-none rounded text-white hover:text-gray-800">
        <i class="fas fa-envelope"></i> contact@bigboyremoval.com.au
      </a>
    </section>

		<section class="site-branding flex items-center justify-between flex-wrap bg-yellow-100 px-6 shadow-sm">
			<!-- Logo Section -->
      <div class="flex items-center flex-shrink-0">
				<?php the_custom_logo(); ?>
			</div>
			
			<?php
			/*
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else:
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			
			$big_boy_removal_description = get_bloginfo( 'description', 'display' );
			if ( $big_boy_removal_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $big_boy_removal_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php 
			endif;
			*/	
			?>

			<!-- Main Navigation Section -->
			<nav id="site-navigation" class="relative flex items-center justify-between flex-wrap px-4">
				<div class="block lg:hidden">
					<button id="btn-responsive-nav" class="flex items-center px-3 py-2 lg:mr-4 border rounded text-gray-800 border-gray-800 bg-transparent cursor-pointer hover:bg-red-600 hover:text-white active:text-white hover:border-red-600 active:border-red-600 transition duration-300">
						<svg class="fill-current h-5 w-5" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
					</button>
				</div>

				<div class="hidden lg:block w-full block flex-grow lg:flex lg:items-center lg:w-auto" data-aos="slide-in" data-aos-duration="1000">
					<?php wp_nav_menu(
						array(
							"theme_location" => "menu-1",
							"container" => true,
							"menu_class" => "nav-items text-sm font-semibold lg:flex-grow lg:flex",
						)
					); ?>
					<div>
						<a href="/get-free-quote/" class="inline-block text-sm uppercase font-semibold px-6 py-3 leading-none rounded bg-red-600 text-white visited:text-white hover:bg-red-500 hover:text-white shadow transition duration-200">Get Free Quote</a>
					</div>
				</div>

				<!-- Responsive Navigation Menu -->
				<div id="responsive-nav" class="block lg:hidden w-64 fixed top-0 left-0 h-full px-6 bg-yellow-100 z-50 shadow-lg">
					<h4 class="text-2xl font-semibold my-5 px-2">Menu</h4>
					<hr>
					<?php wp_nav_menu(
						array(
							"theme_location" => "menu-1",
							"container" => true,
							"menu_class" => "nav-items text-sm font-semibold lg:flex-grow lg:flex",
						)
					); ?>
					<div class="px-2">
						<a href="/get-free-quote/" class="inline-block text-sm uppercase font-semibold px-6 py-3 mt-8 leading-none rounded bg-red-600 text-white visited:text-white hover:bg-red-500 shadow transition duration-200">Get Free Quote</a>
						<a href="#" id="btn-close-responsive-nav" class="inline-block text-sm uppercase font-semibold px-6 py-3 mt-3 leading-none rounded bg-red-600 text-white visited:text-white hover:bg-red-500 shadow transition duration-200"><i class="fas fa-angle-double-left"></i> Close Menu</a>
					</div>
				</div>
			</nav><!-- #site-navigation -->
		</section><!-- .site-branding -->
	</header><!-- #masthead -->
