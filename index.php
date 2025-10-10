<?php get_header(); ?>
<main>
  <!-- Main -->
  <main>
    <!-- Hero Banner -->
    <section class="bg-[#F7EEE5] lg:flex lg:flex-row-reverse lg:items-center">
      <!-- Image -->
      <div class="relative lg:w-[50%]">
        <!-- Image Shape -->
        <div
          class="h-80 relative z-20 md:h-90 lg:h-full">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/banner.webp"
            alt="hero_banner"
            class="w-full h-full object-cover" />
        </div>

        <!-- Before Shape Background -->
        <!-- <div
            class="absolute bottom-0 left-0 w-full h-80 bg-[#9C5E3F] [clip-path:polygon(0_0,_100%_0%,_100%_79%,_80%_90%,_0_85%)] z-10 translate-y-2 md:h-90 lg:[clip-path:polygon(10.8%_0,_100%_0%,_100%_100%,_13%_100%,_0_70%)] lg:h-full lg:translate-y-0 lg:-translate-x-2"
          ></div> -->
      </div>

      <!-- Text -->
      <div
        class="px-3.5 py-5 pb-10 space-y-3.5 text-center lg:w-[50%] lg:text-start lg:px-16 lg:space-y-10">
        <h2
          class="uppercase lg:capitalize tracking-wide text-xl font-chivo font-light text-[#9C5E3F] lg:text-4xl lg:leading-[2.5rem] xl:text-6xl lg:font-extralight xl:leading-[4rem]">
          Here art meets reality
        </h2>
        <p class="lg:text-2xl text-gray-800">
          We turn imagination into reality with art that speaks, inspires, and lasts
          forever
        </p>
        <button
          class="bg-[#9C5E3F] text-white px-6 uppercase font-light tracking-wide py-2 mt-2.5 font-chivo lg:text-lg cursor-pointer xl:py-3 xl:px-8 hover:-translate-y-1.5 hover:shadow-lg transiton-all duration-300">
          Subscribe
        </button>
      </div>
    </section>

    <!-- Best Seller (Carousel) -->
    <section class="py-5 space-y-4">
      <h2
        class="text-[#9C5E3F] text-xl font-chivo text-center py-3 px-3.5 md:text-2xl  lg:py-7 xl:text-3xl">
        Best Seller
      </h2>

      <?php if (function_exists('wc_get_products')) : ?>
        <?php $products = wc_get_products(['status' => 'publish']); ?>


        <!-- woocommerce_product_loop_start() -->
        <!-- Slider Container -->
        <div class="relative flex gap-2.5 text-center md:mx-10">
          <div class="swiper w-full relative">

            <!-- Slides -->
            <div class="swiper-wrapper">
              <?php foreach ($products as $product) :
                $id        = $product->get_id();
                $title     = $product->get_name();
                $image     = $product->get_image();
                $price     = $product->get_price_html();
                $add_url   = $product->add_to_cart_url();

                $product_detail = get_page_by_path('product-detail');
                $detail_url = $product_detail
                  ? add_query_arg('pid', $id, get_permalink($product_detail->ID))
                  : '#';
              ?>
                <div class="swiper-slide space-y-3 lg:space-y-5">
                  <div class="w-full relative ">
                    <a href="<?php echo esc_url($detail_url); ?>" class="*:w-full *:h-full">
                      <?php echo $image; ?>
                    </a>
                  </div>

                  <div class="flex items-center justify-between px-3.5 font-chivo">
                    <!-- Add to Cart button overlay -->
                    <a href="<?php echo esc_url($add_url); ?>"
                      class="bg-[#9C5E3F] text-white px-4 py-2 font-chivo text-sm hover:bg-[#9C5E3F]/90 flex items-center gap-1.5 transition font-light">
                      <i class="ri-shopping-cart-2-fill"></i>
                      Add to Cart
                    </a>
                    <h4 class="tracking-wider text-lg flex  flex-col"><?php echo wp_kses_post($price); ?></h4>
                  </div>

                  <div class="px-3.5">
                    <h3 class="uppercase text-[#9C5E3F] font-chivo text-start"><?php echo esc_html($title); ?></h3>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>

            <!-- Navigation Buttons -->
            <button
              class="custom-prev absolute top-1/2 left-2 -translate-y-1/2 z-50 w-10 h-10 cursor-pointer bg-white/70 text-[#9C5E3F] border-[0.5px] border-[#9C5E3F] flex items-center justify-center rounded-full"
              aria-label="Previous">
              <i class="ri-arrow-left-s-line text-2xl"></i>
            </button>

            <button
              class="custom-next absolute top-1/2 right-2 -translate-y-1/2 z-50 w-10 h-10 cursor-pointer bg-white/70 text-[#9C5E3F] border-[0.5px] border-[#9C5E3F] flex items-center justify-center rounded-full"
              aria-label="Next">
              <i class="ri-arrow-right-s-line text-2xl"></i>
            </button>

          </div>
        </div>
      <?php endif; ?>


      <!-- woocommerce product loop end() -->

      <!-- Slider Container -->


      <div class="py-5 lg:py-10 w-fit mx-auto">
        <button
          class="text-white cursor-pointer font-chivo px-4 py-2 bg-[#9C5E3F] text-sm lg:text-base lg:px-6 lg:font-light hover:-translate-y-1.5 hover:shadow-lg transiton-all duration-300">
          Please contact to buy usartcrafts@gmail.com
        </button>
      </div>
    </section>

    <!-- Our Philosophy -->
    <section class="bg-white py-5 lg:py-10">
      <div
        class="grid gap-4 p-3.5 md:grid-cols-2 md:items-center md:max-w-[90%] md:mx-auto lg:gap-20 ">
        <div class="relative shadow-md *:shadow-lg">
          <div class="grid grid-cols-3 gap-1">

            <div class="w-full col-start-2 col-end-4 hover:scale-105 transition-all duration-300">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/banner.webp"
                alt="our-philosophy"
                class="size-full object-cover" />
            </div>
            <div class="w-full hover:scale-105 transition-all duration-300">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/bs-1.jpg"
                alt="our-philosophy"
                class="size-full object-cover" />
            </div>
            <div class="w-full hover:scale-105 transition-all duration-300">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/bs-2.jpg"
                alt="our-philosophy"
                class="size-full object-cover" />
            </div>
            <div class="w-full col-start-1 col-end-2 row-start-1 row-end-3 hover:scale-105 transition-all duration-300">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/our-philosphy.jpg"
                alt="our-philosophy"
                class="size-full object-cover" />
            </div>
          </div>
          <!-- <div
            class="absolute -top-3 -right-3 h-[3px] w-1/3 bg-[#9C5E3F] lg:-right-5 lg:-top-5 hidden md:block"></div>
          <div
            class="absolute -top-3 -right-3 h-1/3 w-[3px] bg-[#9C5E3F] lg:-right-5 lg:-top-5 hidden md:block"></div>
          <div
            class="absolute -bottom-3 -left-3 h-[3px] w-1/3 bg-[#9C5E3F] lg:-left-5 lg:-bottom-5 hidden md:block"></div>
          <div
            class="absolute -bottom-3 -left-3 h-1/3 w-[3px] bg-[#9C5E3F] lg:-left-5 lg:-bottom-5 hidden md:block"></div> -->
        </div>
        <div class="space-y-3.5 text-center py-5 md:px-3">
          <h2
            class="text-[#9C5E3F] text-xl font-chivo py-3 px-3.5 md:text-2xl md:text-center xl:text-3xl">
            Our Philosophy
          </h2>
          <p class="lg:text-lg text-gray-800 xl:text-xl">
            Art is not just created—it is felt, shared, and lived. Our philosophy is to
            craft pieces that connect hearts and inspire minds
          </p>
        </div>
      </div>
    </section>

    <!-- Follow Us -->
    <section class="pt-3 space-y-2 text-center font-chivo ">
      <div class="py-3 px-3.5 md:text-2xl lg:py-7 space-y-1.5">
        <h2 class="text-[#9C5E3F] text-xl xl:text-3xl">Follow Us</h2>
        <i
          class="font-gentium text-lg font-medium text-gray-700 lg:text-xl tracking-wider">@usartcraft</i>
      </div>

      <!-- lightGallery Container -->
      <ul id="lightgallery" class="grid grid-cols-3 lg:grid-cols-6">
        <li class="hover:-translate-y-5 hover:shadow-md hover:shadow-gray-400 transition-all duration-300" data-src="<?php echo get_template_directory_uri(); ?>/images/f-1.jpg">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/f-1.jpg"
            alt="Instagram 1"
            class="w-full h-full cursor-pointer" />
        </li>
        <li class="hover:-translate-y-5 hover:shadow-md hover:shadow-gray-400 transition-all duration-300"  data-src="<?php echo get_template_directory_uri(); ?>/images/f-2.jpg">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/f-2.jpg"
            alt="Instagram 2"
            class="w-full h-full cursor-pointer" />
        </li>
        <li class="hover:-translate-y-5 hover:shadow-md hover:shadow-gray-400 transition-all duration-300"  data-src="<?php echo get_template_directory_uri(); ?>/images/f-3.jpg">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/f-3.jpg"
            alt="Instagram 3"
            class="w-full h-full cursor-pointer" />
        </li>
        <li class="hover:-translate-y-5 hover:shadow-md hover:shadow-gray-400 transition-all duration-300"  data-src="<?php echo get_template_directory_uri(); ?>/images/f-4.jpg">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/f-4.jpg"
            alt="Instagram 4"
            class="w-full h-full cursor-pointer" />
        </li>
        <li class="hover:-translate-y-5 hover:shadow-md hover:shadow-gray-400 transition-all duration-300"  data-src="<?php echo get_template_directory_uri(); ?>/images/f-5.jpg">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/f-5.jpg"
            alt="Instagram 4"
            class="w-full h-full cursor-pointer" />
        </li>
        <li class="hover:-translate-y-5 hover:shadow-md hover:shadow-gray-400 transition-all duration-300"  data-src="<?php echo get_template_directory_uri(); ?>/images/f-6.jpg">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/f-6.jpg"
            alt="Instagram 4"
            class="w-full h-full cursor-pointer" />
        </li>
      </ul>
    </section>
  </main>
</main>
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.9.0/lightgallery.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.9.0/plugins/zoom/lg-zoom.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.9.0/plugins/thumbnail/lg-thumbnail.umd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
<?php get_footer(); ?>