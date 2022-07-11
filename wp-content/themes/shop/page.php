<?php get_header() ?>

<header class="woocommerce-products-header">
	<h1 class="woocommerce-products-header__title page-title"><?php the_title(); ?></h1>

	<?php do_action( 'woocommerce_before_main_content' ); ?>
	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>

<div class="site-content">
    <div class="container">
      <?php 

        if ( have_posts() ) {

            while ( have_posts() ) {
                the_post();
                // Bắt đầu viết các trường dữ liệu
            ?>
            <div class="entry-content"><?php the_content(); ?></div>

            <?php    

            }
        }            
        ?>

    </div>
</div>

<?php get_footer() ?>