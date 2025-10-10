<!-- Footer -->
<footer class="bg-[#9C5E3F] text-white">
  <section class="grid gap-7 md:grid-cols-2 py-10 p-4 md:gap-10 md:px-7 lg:gap-14 lg:px-10 xl:max-w-[80%] xl:mx-auto lg:py-14 xl:gap-20">
    <div class="space-y-3 lg:space-y-5">
      <div class="w-1/3 flex justify-center font-chivo">
        <div class="flex items-center uppercase tracking-wider gap-2.5">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="logo" class="size-12 rounded-full" />
          <h4 class="text-lg lg:text-2xl lg:tracking-wider font-extralight">usartcraft</h4>
        </div>
      </div>
      <p>
        Art is not just created—it is felt, shared, and lived. Our philosophy is to
        craft pieces that connect hearts and inspire minds
      </p>
      <div class="flex gap-5 font-chivo font-light">
        <a href="<?php echo home_url('/'); ?>" class="space-x-1">
          <i class="ri-home-2-fill text-lg"></i><span>Home</span>
        </a>
        <?php
        $about = get_page_by_path('about'); // fetch page object by slug
        if ($about) :
        ?>
          <a href="<?php echo get_permalink($about->ID); ?>" class="space-x-1">
            <i class="ri-brush-fill"></i> <span>About Us</span>
          </a>
        <?php endif; ?>
      </div>
    </div>
    <div class="space-y-4">
      <div class="space-y-3 border-[0.5px] border-dashed p-3.5 xl:p-5">
        <h3 class="font-chivo uppercase text-[15px] font-light tracking-wider">Subscribe</h3>
        <p>Be the first to know about new collections & exclusive offers.</p>
        <form action="#">
          <div class="flex border items-center p-[1px]">
            <input type="email" placeholder="Email address" class="p-2 w-full outline-none" />
            <button class="px-3 bg-white text-[#9C5E3F] h-full font-medium py-2">Subscribe</button>
          </div>
        </form>
      </div>
      <div class="flex gap-4 *:cursor-pointer font-chivo font-light">
        <a href="https://www.instagram.com/usartcraft/" target="_blank" class="space-x-1">
          <i class="ri-instagram-fill text-lg"></i><span>Instagram</span>
        </a>
        <a href="https://www.youtube.com/channel/UCSCGKANec3EXHcOfLzMnP0Q" target="_blank" class="space-x-1">
          <i class="ri-youtube-fill text-lg"></i><span>Youtube</span>
        </a>
      </div>
    </div>
  </section>
  <section class="text-center font-chivo font-extralight border-t-[0.5px] py-1.5 border-white/70 text-[15px] lg:py-2.5">
    &copy; All rights reserved usartcraft.com
  </section>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<?php wp_footer(); ?>
</body>

</html>