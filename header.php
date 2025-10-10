<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="./style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/lightgallery@2.9.0/css/lightgallery-bundle.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Gentium+Plus:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Chivo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
  <title><?php wp_title('|', true, 'right'); ?></title>
  <?php wp_head(); ?>
  <style>
    .font-gentium {
      font-family: 'Gentium Plus', serif;
      font-optical-sizing: auto;
    }

    .font-chivo {
      font-family: 'Chivo', sans-serif;
      font-optical-sizing: auto;
    }
  </style>
</head>

<body <?php body_class('font-gentium relative'); ?>>
  <!-- Header -->
  <header class="bg-[#9C5E3F] font-chivo !font-light">
    <!-- Top Bar -->
    <h5 class="text-[12px] bg-white text-[#9C5E3F] py-1.5 text-center uppercase tracking-wide border-b-[0.5px] border-white border-dashed lg:font-semibold">
      Shop our newest collection
    </h5>
    <div class="flex items-center px-2.5 text-white py-2.5 md:px-5 lg:px-10 lg:py-3.5 lg:gap-10">
      <!-- Desktop Nav -->

      <!-- Mobile Menu Icon -->
      <div class="w-1/3 flex items-center lg:hidden">
        <button id="menu-btn" class="text-2xl cursor-pointer" aria-label="Open Menu">
          <i class="ri-menu-2-line"></i>
        </button>
      </div>

      <!-- Logo -->
      <div class="w-1/3 flex justify-center lg:w-fit ">
        <div class="flex items-center uppercase tracking-wider gap-1 lg:gap-2.5">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="logo" class="size-8 lg:size-12 rounded-full" />
          <h4 class="text-[15px] lg:text-3xl lg:tracking-wider font-extralight">usartcraft</h4>
        </div>
      </div>
      <nav class="hidden lg:flex gap-4 py-2 uppercase lg:w-full lg:justify-end items-center text-[15px] lg:gap-10 whitespace-nowrap ">
        <a href="<?php echo home_url('/'); ?>" class="space-x-1 relative before:absolute before:left-0 before:h-[1px] before:w-0 before:bg-white before:-bottom-1 hover:before:w-full before:transiton-all before:duration-300 before:ease-in-out">
          <span>Home</span>
        </a>
        <?php
        $about = get_page_by_path('about'); // fetch page object by slug
        if ($about) :
        ?>
          <a href="<?php echo get_permalink($about->ID); ?>" class="space-x-1 relative before:absolute before:left-0 before:h-[1px] before:w-0 before:bg-white before:-bottom-1 hover:before:w-full before:transiton-all before:duration-300 before:ease-in-out">
             <span>About Us</span>
          </a>
        <?php endif; ?>


        <?php
        $cart = get_page_by_path('cart'); // fetch page object by slug
        if ($cart) :
        ?>
          <a href="<?php echo get_permalink($cart->ID); ?>" class="space-x-1 relative before:absolute before:left-0 before:h-[1px] before:w-0 before:bg-white before:-bottom-1 hover:before:w-full before:transiton-all before:duration-300 before:ease-in-out">
             <span>Cart</span>
          </a>
        <?php endif; ?>
        <?php
        $checkout = get_page_by_path('checkout'); // fetch page object by slug
        if ($checkout) :
        ?>
          <a href="<?php echo get_permalink($checkout->ID); ?>" class="space-x-1 relative before:absolute before:left-0 before:h-[1px] before:w-0 before:bg-white before:-bottom-1 hover:before:w-full before:transiton-all before:duration-300 before:ease-in-out">
             <span>Checkout</span>
          </a>
        <?php endif; ?>

        <?php
        $myAccount = get_page_by_path('my-account'); // fetch page object by slug
        if ($myAccount) :
        ?>
          <a href="<?php echo get_permalink($myAccount->ID); ?>" class="space-x-1 relative before:absolute before:left-0 before:h-[1px] before:w-0 before:bg-white before:-bottom-1 hover:before:w-full before:transiton-all before:duration-300 before:ease-in-out">
             <span>My Account</span>
          </a>
        <?php endif; ?>
        <?php
        // wp_nav_menu(['theme_location' => 'primary']);
        ?>

      </nav>

      <!-- Social Icons -->
      <div class="w-1/3 flex items-center justify-end gap-2 text-white/90 text-xl lg:text-2xl lg:gap-4 lg:w-fit">
        <a href="https://www.instagram.com/usartcraft/" target="_blank"><i class="ri-instagram-fill"></i></a>
        <a href="https://www.youtube.com/channel/UCSCGKANec3EXHcOfLzMnP0Q" target="_blank"><i class="ri-youtube-fill"></i></a>
      </div>
    </div>
    <!-- Mobile Nav -->
    <nav id="mobile-nav" class="fixed inset-0 bg-[#9C5E3F] text-white z-50 flex flex-col items-center justify-center gap-6 text-lg uppercase hidden lg:hidden">
      <div class="flex items-center uppercase tracking-wider gap-2 absolute top-6">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="logo" class="size-10 rounded-full" />
        <h4 class="text-[15px] font-extralight">usartcraft</h4>
      </div>
      <button id="close-nav" class="absolute top-5 right-5 text-3xl cursor-pointer" aria-label="Close Menu">
        <i class="ri-close-line"></i>
      </button>
      <a href="<?php echo home_url('/'); ?>" class="space-x-1.5 font-extralight py-1 px-4">
        <i class="ri-home-2-fill"></i> <span>Home</span>
      </a>
      <?php
      $about = get_page_by_path('about'); // fetch page object by slug
      if ($about) :
      ?>
        <a href="<?php echo get_permalink($about->ID); ?>" class="space-x-1.5 font-extralight py-1 px-4">
          <i class="ri-brush-fill"></i> <span>About Us</span>
        </a>
      <?php endif; ?>
      <?php
      $cart = get_page_by_path('cart'); // fetch page object by slug
      if ($cart) :
      ?>
        <a href="<?php echo get_permalink($cart->ID); ?>" class="space-x-1.5 font-extralight py-1 px-4">
          <i class="ri-brush-fill"></i> <span>Cart</span>
        </a>
      <?php endif; ?>
      <?php
      $checkout = get_page_by_path('checkout'); // fetch page object by slug
      if ($checkout) :
      ?>
        <a href="<?php echo get_permalink($checkout->ID); ?>" class="space-x-1.5 font-extralight py-1 px-4">
          <i class="ri-brush-fill"></i> <span>Checkout</span>
        </a>
      <?php endif; ?>
      <?php
      $myAccount = get_page_by_path('myAccount'); // fetch page object by slug
      if ($myAccount) :
      ?>
        <a href="<?php echo get_permalink($myAccount->ID); ?>" class="space-x-1.5 font-extralight py-1 px-4">
          <i class="ri-brush-fill"></i> <span>My Account</span>
        </a>
      <?php endif; ?>
    </nav>
  </header>