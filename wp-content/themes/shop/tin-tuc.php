<?php
/**
* Template Name: Tin tức
*
* @package WordPress
*/

get_header(); ?>

<header class="woocommerce-products-header tin-tuc" style="background-image: url(<?php echo get_the_post_thumbnail_url()?>);  background-size: 100% 100%;">
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
<div class="tin-tuc">
<?php $shoeshop_tin_tuc_args = array( 
    'menu' => 'newsmenu', 
    'container' => 'div', 
    'container_class' => 'main-navigation site-navigation col-6', 
    'container_id' => 'navbar', 
    'echo' => true, 
    'fallback_cb' => 'wp_page_menu', 
    'before' => '', 
    'after' => '', 
    'link_before' => '', 
    'link_after' => '', 
    'items_wrap' => '<ul id="%1$s" class="nav-menu">%3$s</ul>', 
    'item_spacing' => 'preserve', 
    'depth' => 0, 
    'walker' => '', 
    'theme_location' => '' 
    ); 
?>
<?php wp_nav_menu( $shoeshop_tin_tuc_args ); ?>
</div>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="content-area col-8">
                <div class="site-main">
                    <?php get_template_part("template_parts/loop/tin-tuc", "post") ?>
                </div>
            </div>

            <section class="widget-area col-4">
                <?php dynamic_sidebar('sidebar-right') ?>
            </section>
        </div>
    </div>
</div>

<?php get_footer() ?>