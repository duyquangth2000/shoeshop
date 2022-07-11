<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">		
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>	
		<div class="accordion_container">
			<div class="accordion_head number1">
				Chính sách giao hàng & đổi trả
				<span class="plusminus number1">+</span>
			</div>
			<div class="accordion_body">
				<div class="addProductInfo">
					<div class="freeShipping">
						<i class="fa fa-truck fa-2x box-icon" aria-hidden="true"></i>
						Giao hàng hoàn toàn miễn phí 100%
					</div>
					<div class="codPayment">
						<i class="fa fa-shield fa-2x box-icon" aria-hidden="true"></i>
						An toàn với nhận hàng và trả tiền tại nhà
					</div>
					<div class="returnGoods">
						<i class="fa fa-exchange fa-2x box-icon" aria-hidden="true"></i>
						Bảo hành đổi trả trong vòng 60 ngày
					</div>
				</div>
			</div>
			<div class="accordion_head number2">
				Hướng dẫn bảo quản
				<span class="plusminus number2">+</span>
			</div>
			<div class="accordion_body">
				<ul>
					<li><strong>Khử mùi bên trong giày</strong></li>
				</ul>
				<p>Bạn hãy đặt túi đựng viên chống ẩm vào bên trong giày để hút ẩm và rắc phấn rôm (có thể thay bằng cách đặt vào bên trong giày gói trà túi lọc chưa qua sử dụng) để khử mùi, giúp giày luôn khô thoáng.</p>
				<p>Để hạn chế mùi hôi và sự ẩm ướt cho giày, hãy chọn vớ chân loại tốt, có khả năng thấm hút cao. Ngoài ra, dùng các loại lót giày khử mùi cũng là một phương pháp tốt.</p>
				<ul>
					<li><strong>Bảo quản giày khi không sử dụng</strong></li>
				</ul>
				<p>Khi sử dụng giày, bạn đừng vội vứt hộp đi mà hãy cất lại để dành. Khi không sử dụng, hãy nhét một ít giấy vụn vào bên trong giày để giữ cho dáng giày luôn chuẩn, đẹp. Sau đó đặt giày vào hộp bảo quản cùng túi hút ẩm.</p>
			</div>
			<div class="tongDai">
				<h4>
					TỔNG ĐÀI BÁN HÀNG 
					<a href="tel:0337344408">
						<i class="fa fa-phone-square"></i>
						0337344408
					</a>
				</h4>
				<small>Miễn phí từ (8:30 - 21:30) mỗi ngày</small>
			</div>
		</div>	
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
