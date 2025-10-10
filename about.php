<?php
/*
Template Name: About
*/
get_header();
?>
<main>
  <section class="bg-white lg:flex lg:items-center lg:p-10">
  <!-- Main Section -->
    <main>
      <section class="bg-white lg:flex lg:items-center lg:p-10">
        <div class="relative lg:w-[50%]">
          <!-- Image Shape -->
          <div
            class=" h-80 relative z-20 md:h-90  lg:h-full lg:shadow-lg lg:shadow-gray-400"
          >
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/banner.webp"
              alt="hero_banner"
              class="w-full h-full object-cover"
            />
          </div>

          <!-- Before Shape Background -->
          <!-- <div
            class="absolute bottom-0 left-0 w-full h-80 bg-[#9C5E3F] [clip-path:polygon(0_0,_100%_0%,_100%_80%,_15%_100%,_0_90%)] z-10 translate-y-2 md:h-90 lg:[clip-path:polygon(0%_0%,_85%_0,_100%_14%,_93%_100%,_0%_100%)] lg:h-full lg:translate-y-0 lg:translate-x-2"
          ></div> -->
        </div>
        <div class="px-3.5 py-5 pb-10 space-y-4 lg:w-[50%] lg:px-16 lg:space-y-7">
          <h1
            class="font-chivo text-2xl font-light text-[#9C5E3F] lg:text-3xl pt-5 lg:pt-0"
          >
            About Us
          </h1>
          <p class="lg:text-lg">
            At UsArtCraft, we believe that art is more than just creativity—it’s a way of
            connecting people, telling stories, and turning imagination into reality. Our
            passion lies in bringing unique, handcrafted, and thoughtfully designed
            artwork that inspires, uplifts, and adds beauty to everyday life.
          </p>
          <p class="lg:text-lg">
            Founded with a vision to make art accessible to everyone, we specialize in
            <span class="font-semibold">handmade crafts</span> /
            <span class="font-semibold">resin art</span> /
            <span class="font-semibold">paintings</span> /
            <span>custom digital designs</span> /
            <span>exhibitions</span>
            in any size. Each piece is carefully created with attention to detail,
            blending tradition with innovation to ensure that every creation is as
            original as the story behind it.
          </p>
          <p class="lg:text-lg">
            Whether you are looking for a personal piece for your home, a meaningful gift,
            or custom artwork that reflects your style, we are here to bring your vision
            to life.
          </p>
          <p
            class="relative text-[#9C5E3F] font-semibold before:absolute before:h-full before:w-1 before:bg-[#9C5E3F] before:top-0 before:left-0 pl-3 lg:text-lg"
          >
            At the heart of our business is a simple philosophy: “Where art meets
            reality.”
          </p>
        </div>
      </section>
    </main>
    </section>
</main>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.9.0/lightgallery.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.9.0/plugins/zoom/lg-zoom.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.9.0/plugins/thumbnail/lg-thumbnail.umd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
<?php get_footer(); ?>
