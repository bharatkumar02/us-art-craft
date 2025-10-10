<?php
/*
Template Name: Product Detail
*/
get_header();

$product_id = isset($_GET['pid']) ? intval($_GET['pid']) : 0;
$product = wc_get_product($product_id);
?>

<main>
  <section class="bg-white lg:flex lg:items-start lg:p-10">
    <div class="container mx-auto px-4">
      <?php if ($product) : ?>
        <div class="grid md:grid-cols-2 gap-8">

          <!-- Product Image -->
          <div>
            <?php echo $product->get_image('large'); ?>
            <?php
            $gallery_ids = $product->get_gallery_image_ids();
            if ($gallery_ids) :
            ?>
              <div class="grid grid-cols-3 gap-2 mt-4">
                <?php foreach ($gallery_ids as $img_id) : ?>
                  <?php echo wp_get_attachment_image($img_id, 'thumbnail'); ?>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </div>

          <!-- Product Info -->
          <div>
            <!-- Title -->
            <h1 class="text-3xl font-bold mb-4 font-chivo font-light"><?php echo esc_html($product->get_name()); ?></h1>

            <!-- Price -->
            <div class="text-xl mb-2 text-gray-700">
              <?php echo $product->get_price_html(); ?>
            </div>

            <!-- Short Description -->
            <?php if ($product->get_short_description()) : ?>
              <div class="mb-4 text-gray-800">
                <?php echo wpautop($product->get_short_description()); ?>
              </div>
            <?php endif; ?>

            <!-- Full Description -->
            <?php if ($product->get_description()) : ?>
              <div class="mb-4 text-gray-700">
                <?php echo wpautop($product->get_description()); ?>
              </div>
            <?php endif; ?>

            <!-- Tags -->
            <?php
            $terms = get_the_terms($product->get_id(), 'product_tag');
            if ($terms && ! is_wp_error($terms)) : ?>
              <div class="mb-4">
                <strong>Tags:</strong>
                <?php foreach ($terms as $term) : ?>
                  <span class="inline-block bg-gray-200 px-2 py-1 mr-2 rounded"><?php echo esc_html($term->name); ?></span>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>

            <!-- Add to Cart Form -->
            <form class="cart" action="<?php echo esc_url($product->add_to_cart_url()); ?>" method="post">
              <?php
              woocommerce_quantity_input([
                'min_value'   => 1,
                'max_value'   => $product->get_max_purchase_quantity(),
                'input_value' => 1,
              ]);
              ?>
              <button type="submit" class="bg-[#9C5E3F] text-white px-6 py-3 font-chivo">
                <i class="ri-shopping-cart-2-fill"></i>
                Add to Cart
              </button>
            </form>

            <a href="<?php echo wc_get_cart_url(); ?>" class="text-[#9C5E3F] underline mt-4 block">
              View Cart
            </a>
          </div>

        </div>
      <?php else : ?>
        <p class="text-center text-gray-600 py-10">Product not found.</p>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>