<?php get_header() ?>

<header class="woocommerce-products-header">
<?php
$category = get_category( get_query_var( 'cat' ) ); 
 
$cat_name = get_cat_name( $category->cat_ID ); 
      ?>
	<h1 class="woocommerce-products-header__title page-title"><?php echo $cat_name;  ?></h1>

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

<div class="content">
    <div class="container">
        <div class="row">
            <div class="content-area col-8">
                <div class="site-main">
                    <?php get_template_part("template_parts/loop/category-tin-tuc", "post") ?>
                </div>
            </div>

            <section class="widget-area col-4">
                <?php dynamic_sidebar('sidebar-right') ?>
            </section>
        </div>
    </div>
</div>
<?php get_footer() ?>