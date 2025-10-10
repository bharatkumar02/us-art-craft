<?php get_header(); ?>

<section class="container mx-auto px-4 py-16">
  <?php the_post(); ?>
  <article <?php post_class("prose max-w-none"); ?>>
    <h1 class="text-3xl font-bold mb-6"><?php the_title(); ?></h1>
    <div class="page-content">
      <?php the_content(); ?>
    </div>
  </article>
</section>

<?php get_footer(); ?>
