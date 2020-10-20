<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

    <!-- Homepage Banner Section -->
    <?php echo do_shortcode('[metaslider id="139"]'); ?>

    <!-- Old Homepage Banner Section -->
    <!-- <section
      class="relative flex items-center justify-center w-full h-full bg-center bg-cover"
      style='background-image: url("<?php echo get_template_directory_uri() . '/img/banner.jpg' ?>");'
    >
      <span
        id="blackOverlay"
        class="absolute w-full h-full opacity-75 bg-black"
      ></span>
        <div class="relative w-12/12 text-center pt-32 pb-40">
          <h1 class="text-white font-semibold uppercase leading-none text-4xl md:text-5xl lg:text-6xl mx-auto my-0">
            <span class="text-gray-200 inline-block animate__animated animate__slideInLeft">Your Local</span> <span class="text-red-600 inline-block animate__animated animate__slideInRight">Removal Service</span>
          </h1>
          <p class="px-5 md:px-20 lg:px-32 xl:px-64 py-2 lg:py-0 text-gray-400 animate__animated animate__fadeInDown animate__delay-1s">
            We are a team of professional and skilled experts in all types of rubbish removal including furniture removal, tree removal & demolition services.
          </p>
          <a href="#" class="inline-block py-2 px-6 mt-4 font-semibold text-lg uppercase bg-transparent text-white visited:text-white border border-solid border-white hover:bg-red-600 hover:text-white rounded animate__animated animate__bounce animate__delay-2s animate__infinite">
            Call Us Today
          </a>
        </div>
    </section> -->
    <!-- End of Old Homepage Banner Section -->

    <!-- Fast, Friendly & Affordable Content Section -->
    <section class="relative py-20">
      <!--
      <div
        class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        style="height: 80px; transform: translateZ(0px);"
      >
        <svg
          class="absolute bottom-0 overflow-hidden"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="none"
          version="1.1"
          viewBox="0 0 2560 100"
          x="0"
          y="0"
        >
          <polygon
            class="text-white fill-current"
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
      </div>
      -->

      <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center">
          <div class="w-full lg:w-4/12 mx-auto px-2">
          <?php
          $image = get_field('brief_info_image'); 
          if (!empty($image)):
          ?>
            <img
              alt="..."
              class="max-w-full rounded-lg shadow-lg"
              src="<?php echo esc_url($image['url']); ?>"
              data-aos="zoom-in" 
              data-aos-duration="1000" 
              data-aos-once="true"
            />
          <?php
          endif;
          ?>
          </div>
          <div class="w-full lg:w-6/12 mx-auto px-4">
            <div class="lg:pr-12">
              <h2 class="text-gray-900 text-3xl md:text-4xl lg:text-5xl font-bold mt-8 lg:my-0">
                <?php echo get_field("brief_info_heading_text"); ?>
              </h2>
              <p class="mt-6 text-lg leading-relaxed text-gray-600">
                <?php echo get_field("brief_info_description"); ?>
              </p>
              <ul class="list-none p-0 m-0 mt-6">
                <li class="py-2">
                  <div class="flex items-center">
                    <div>
                      <span
                        class="text-xs font-semibold inline-block py-1 px-2 w-8 h-8 uppercase rounded-full text-red-600 bg-yellow-200 mr-3"
                        ><i class="fas fa-dumpster w-full h-full justify-center items-center" style="display: flex;"></i>
                      </span>
                    </div>
                    <div>
                      <h4 class="text-gray-600 text-base m-0">
                        Rubbish Removal
                      </h4>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="flex items-center">
                    <div>
                      <span
                        class="text-xs font-semibold inline-block py-1 px-2 w-8 h-8 uppercase rounded-full text-red-600 bg-yellow-200 mr-3"
                        ><i class="fas fa-hammer w-full h-full justify-center items-center" style="display: flex;"></i>
                      </span>
                    </div>
                    <div>
                      <h4 class="text-gray-600 text-base m-0">Demolition & Strip-Out</h4>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="flex items-center">
                    <div>
                      <span
                        class="text-xs font-semibold inline-block py-1 px-2 w-8 h-8 uppercase rounded-full text-red-600 bg-yellow-200 mr-3"
                        ><i class="fas fa-tree w-full h-full justify-center items-center" style="display: flex;"></i>
                      </span>
                    </div>
                    <div>
                      <h4 class="text-gray-600 text-base m-0">Tree Removal</h4>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Services Section -->
    <section class="py-20 bg-yellow-100">
      <div class="container mx-auto px-4">
        <h2 class="text-gray-900 text-5xl font-semibold text-center my-0">Our Services</h2>
        <div class="block mx-auto bg-red-600 w-10 h-2 mt-5"></div>

        <div class="mt-6 flex flex-wrap">
          <div class="pt-6 w-full md:w-6/12 lg:w-4/12 px-4 text-center" data-aos="zoom-out-down" data-aos-duration="1000" data-aos-once="true">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
            >
              <div class="p-8 flex-auto">
                <?php
                $service1_id = get_field("service_item_1");
                ?>
                <div
                  class="text-white p-5 text-center inline-flex items-center justify-center w-20 h-20 mb-5 shadow-lg rounded-full bg-red-500"
                >
                  <i class="fas fa-<?php echo get_field("service_icon", $service1_id); ?> fa-2x"></i>
                </div>
                <h5 class="text-gray-900 text-xl font-semibold my-0 leading-tight"><?php echo get_the_title($service1_id); ?></h5>
                <p class="mt-3 mb-5 text-gray-600">
                  <?php echo get_the_excerpt($service1_id); ?>
                </p>
                <a href="<?php echo get_the_permalink($service1_id); ?>" class="inline-block text-sm text-white bg-red-500 border-2 border-red-500 px-4 py-1 rounded-full shadow cursor-pointer focus:outline-none hover:bg-red-600 hover:text-white hover:border-red-600 visited:text-white transition duration-300">View Service</a>
              </div>
            </div>
          </div>
          <div class="pt-6 w-full md:w-6/12 lg:w-4/12 px-4 text-center" data-aos="zoom-out-down" data-aos-duration="1000" data-aos-once="true">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
            >
              <div class="p-8 flex-auto">
                <?php
                $service2_id = get_field("service_item_2");
                ?>
                <div
                  class="text-white p-5 text-center inline-flex items-center justify-center w-20 h-20 mb-5 shadow-lg rounded-full bg-red-500"
                >
                <i class="fas fa-<?php echo get_field("service_icon", $service2_id); ?> fa-2x"></i>
                </div>
                <h5 class="text-gray-900 text-xl font-semibold my-0 leading-tight"><?php echo get_the_title($service2_id); ?></h5>
                <p class="mt-3 mb-5 text-gray-600">
                  <?php echo get_the_excerpt($service2_id); ?>
                </p>
                <a href="<?php echo get_the_permalink($service2_id); ?>" class="inline-block text-sm text-white bg-red-500 border-2 border-red-500 px-4 py-1 rounded-full shadow cursor-pointer focus:outline-none hover:bg-red-600 hover:text-white hover:border-red-600 visited:text-white transition duration-300">View Service</a>
              </div>
            </div>
          </div>
          <div class="pt-6 w-full md:w-6/12 lg:w-4/12 px-4 text-center" data-aos="zoom-out-down" data-aos-duration="1000" data-aos-once="true">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
            >
              <div class="p-8 flex-auto">
                <?php
                $service3_id = get_field("service_item_3");
                ?>
                <div
                  class="text-white p-5 text-center inline-flex items-center justify-center w-20 h-20 mb-5 shadow-lg rounded-full bg-red-500"
                >
                  <i class="fas fa-<?php echo get_field("service_icon", $service3_id); ?> fa-2x"></i>
                </div>
                <h5 class="text-gray-900 text-xl font-semibold my-0 leading-tight"><?php echo get_the_title($service3_id); ?></h5>
                <p class="mt-3 mb-5 text-gray-600">
                  <?php echo get_the_excerpt($service3_id); ?>
                </p>
                <a href="<?php echo get_the_permalink($service3_id); ?>" class="inline-block text-sm text-white bg-red-500 border-2 border-red-500 px-4 py-1 rounded-full shadow cursor-pointer focus:outline-none hover:bg-red-600 hover:text-white hover:border-red-600 visited:text-white transition duration-300">View Service</a>
              </div>
            </div>
          </div>
          <div class="pt-6 w-full md:w-6/12 lg:w-4/12 px-4 text-center" data-aos="zoom-out-up" data-aos-duration="1000" data-aos-once="true">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
            >
              <div class="p-8 flex-auto">
                <?php
                $service4_id = get_field("service_item_4");
                ?>
                <div
                  class="text-white p-5 text-center inline-flex items-center justify-center w-20 h-20 mb-5 shadow-lg rounded-full bg-red-500"
                >
                  <i class="fas fa-<?php echo get_field("service_icon", $service4_id); ?> fa-2x"></i>
                </div>
                <h5 class="text-gray-900 text-xl font-semibold my-0 leading-tight"><?php echo get_the_title($service4_id); ?></h5>
                <p class="mt-3 mb-5 text-gray-600">
                  <?php echo get_the_excerpt($service4_id); ?>
                </p>
                <a href="<?php echo get_the_permalink($service4_id); ?>" class="inline-block text-sm text-white bg-red-500 border-2 border-red-500 px-4 py-1 rounded-full shadow cursor-pointer focus:outline-none hover:bg-red-600 hover:text-white hover:border-red-600 visited:text-white transition duration-300">View Service</a>
              </div>
            </div>
          </div>
          <div class="pt-6 w-full md:w-6/12 lg:w-4/12 px-4 text-center" data-aos="zoom-out-up" data-aos-duration="1000" data-aos-once="true">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
            >
              <div class="p-8 flex-auto">
                <?php
                $service5_id = get_field("service_item_5");
                ?>
                <div
                  class="text-white p-5 text-center inline-flex items-center justify-center w-20 h-20 mb-5 shadow-lg rounded-full bg-red-500"
                >
                  <i class="fas fa-<?php echo get_field("service_icon", $service5_id); ?> fa-2x"></i>
                </div>
                <h5 class="text-gray-900 text-xl font-semibold my-0 leading-tight"><?php echo get_the_title($service5_id); ?></h5>
                <p class="mt-3 mb-5 text-gray-600">
                  <?php echo get_the_excerpt($service5_id); ?>
                </p>
                <a href="<?php echo get_the_permalink($service5_id); ?>" class="inline-block text-sm text-white bg-red-500 border-2 border-red-500 px-4 py-1 rounded-full shadow cursor-pointer focus:outline-none hover:bg-red-600 hover:text-white hover:border-red-600 visited:text-white transition duration-300">View Service</a>
              </div>
            </div>
          </div>
          <div class="pt-6 w-full md:w-6/12 lg:w-4/12 px-4 text-center" data-aos="zoom-out-up" data-aos-duration="1000" data-aos-once="true">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
            >
              <div class="p-8 flex-auto">
                <?php
                $service6_id = get_field("service_item_6");
                ?>
                <div
                  class="text-white p-5 text-center inline-flex items-center justify-center w-20 h-20 mb-5 shadow-lg rounded-full bg-red-500"
                >
                  <i class="fas fa-<?php echo get_field("service_icon", $service6_id); ?> fa-2x"></i>
                </div>
                <h5 class="text-gray-900 text-xl font-semibold my-0 leading-tight"><?php echo get_the_title($service6_id); ?></h5>
                <p class="mt-3 mb-5 text-gray-600">
                  <?php echo get_the_excerpt($service6_id); ?>
                </p>
                <a href="<?php echo get_the_permalink($service6_id); ?>" class="inline-block text-sm text-white bg-red-500 border-2 border-red-500 px-4 py-1 rounded-full shadow cursor-pointer focus:outline-none hover:bg-red-600 hover:text-white hover:border-red-600 visited:text-white transition duration-300">View Service</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="pt-20 pb-20">
      <div class="container mx-auto md:px-4">
        <div class="flex flex-wrap justify-center text-center mb-24">
          <div class="w-full lg:w-10/12 px-4">
            <h2 class="text-gray-900 text-5xl font-semibold text-center my-0">Testimonials</h2>
            <div class="block mx-auto bg-red-600 w-10 h-2 mt-2"></div>
            
            <p class="mt-5 mb-16 text-lg leading-relaxed text-gray-600">
              Here is what our clients say...
            </p>

            <!-- Testimonials Slider -->
            <?php echo do_shortcode('[sp_testimonial id="136"]'); ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Stats Section -->
    <section class="relative block bg-gray-900">
      <div
        class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        style="height: 80px; transform: translateZ(0px);"
      >
        <svg
          class="absolute bottom-0 overflow-hidden"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="none"
          version="1.1"
          viewBox="0 0 2560 100"
          x="0"
          y="0"
        >
          <polygon
            class="text-gray-900 fill-current"
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
      </div>

      <div class="container mx-auto px-4 pt-24 pb-12 md:pb-32 lg:pb-40">
        <div class="flex flex-wrap text-center justify-center">
          <div class="w-full lg:w-6/12 px-4">
            <h2 class="text-5xl font-semibold text-center text-white my-0">Our Stats</h2>
            <div class="block mx-auto bg-red-600 w-10 h-2 mt-2"></div>

            <p class="text-base leading-relaxed mt-4 mb-4 text-gray-500">
              <!-- Display Our Stats Description -->
              <?php echo get_field("our_stats_description"); ?>
            </p>
          </div>
        </div>
        
        <div class="flex flex-wrap mt-12 justify-center">
          <div class="w-full md:w-3/12 px-4 text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">
            <div
              class="text-gray-900 p-5 w-16 h-16 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
            >
              <i class="fas fa-medal fa-2x"></i>
            </div>
            <h5 class="text-3xl mt-5 font-semibold text-white my-0">
              <!-- Display Projects Count -->
              <?php 
                $shortcode = sprintf('[countup start="0" end="%u" suffix="+" scroll="true"]', get_field("projects"));
                echo do_shortcode($shortcode); 
              ?> 
            </h5>
            <p class="text-gray-500 text-sm my-0 mb-12 md:mb-4">
              Projects
            </p>
          </div>
          <div class="w-full md:w-3/12 px-4 text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">
            <div
              class="text-gray-900 p-5 w-16 h-16 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
            >
              <i class="fas fa-user-tie fa-2x"></i>
            </div>
            <h5 class="text-3xl mt-5 font-semibold text-white my-0">
              <!-- Display Number of Employees -->
              <?php 
                $shortcode = sprintf('[countup start="0" end="%u" suffix="+" scroll="true"]', get_field("employees"));
                echo do_shortcode($shortcode); 
              ?>
            </h5>
            <p class="text-gray-500 text-sm my-0 mb-12 md:mb-4">
              Employees
            </p>
          </div>
          <div class="w-full md:w-3/12 px-4 text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">
            <div
              class="text-gray-900 p-5 w-16 h-16 shadow-lg rounded-full bg-white inline-flex items-center justify-center"
            >
              <i class="fas fa-history fa-2x"></i>
            </div>
            <h5 class="text-3xl mt-5 font-semibold text-white my-0">
              <!-- Display Years of Experience -->
              <?php 
                $shortcode = sprintf('[countup start="0" end="%u" suffix="+" scroll="true"]', get_field("years_of_experience"));
                echo do_shortcode($shortcode); 
              ?>
            </h5>
            <p class="text-gray-500 text-sm my-0 mb-12 md:mb-4">
              Years of Experience
            </p>
          </div>
        </div>
      </div>
      
      <div
        class="bottom-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        style="height: 80px; transform: translateZ(0px);"
      >
        <svg
          class="absolute bottom-0 overflow-hidden"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="none"
          version="1.1"
          viewBox="0 0 2560 100"
          x="0"
          y="0"
        >
          <polygon
            class="text-yellow-100 fill-current"
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
      </div>
    </section>

<?php get_footer(); ?>
